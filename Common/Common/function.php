<?php

/**
 * 截取中文字符串
 * @param $str
 * @param int $start
 * @param $length
 * @param string $charset
 * @param bool $suffix
 * @return string
 */
function msubstr($str, $start=0, $length, $charset="utf-8", $suffix=true)
{

    if(function_exists("mb_substr"))
    {
        $slice= mb_substr($str, $start, $length, $charset);
    }
    elseif(function_exists('iconv_substr'))
    {
        $slice= iconv_substr($str,$start,$length,$charset);
    }
    else
    {
        $re['utf-8'] = "/[x01-x7f]|[xc2-xdf][x80-xbf]|[xe0-xef][x80-xbf]{2}|[xf0-xff][x80-xbf]{3}/";
        $re['gb2312'] = "/[x01-x7f]|[xb0-xf7][xa0-xfe]/";
        $re['gbk'] = "/[x01-x7f]|[x81-xfe][x40-xfe]/";
        $re['big5'] = "/[x01-x7f]|[x81-xfe]([x40-x7e]|xa1-xfe])/";
        preg_match_all($re[$charset], $str, $match);
        $slice = join("",array_slice($match[0], $start, $length));
    }

    $fix='';

    if(strlen($slice) < strlen($str))
    {
        $fix='...';
    }

    return $suffix ? $slice.$fix : $slice;
}

/**
 * format xml to array
 * @param $xml
 * @return mixed
 */
function xml2arr($xml)
{
    $str  = simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA);
    $json = json_encode($str);
    $arr  = json_decode($json, true);
    return $arr;
}

/**
 * 比较两个时间的大小(Y-m-d H:i:s)
 * @param $leftparam
 * @param $rightparam
 * @return int (0 1 -1)
 */
function compareDatetime($leftparam, $rightparam)
{
    $leftparam = strtotime($leftparam);
    $rightparam = strtotime($rightparam);

    if( $leftparam == $rightparam )
    {
        return 0;
    }
    if($leftparam > $rightparam)
    {
        return 1;
    }
    if($leftparam < $rightparam)
    {
        return -1;
    }
}

/**
 * CURL POSE 请求
 * @param string $url 请求地址
 * @param array $data 请求参数
 * @param int $timeout 超时时间 单位：秒
 * @param array $header
 * @param boolean $cookie
 * @return string
 */
function curl_post($url, $data=array(), $timeout=30, $header=array())
{
    if (is_array($data)) 
    {
        $data = http_build_query($data);
    }

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 'application/x-www-form-urlencoded');
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // 跳过 SSL 证书检查
    curl_setopt($ch, CURLOPT_HEADER, false); // 调试
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);

    if (count($header) > 0) 
    {
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    }

    $output = curl_exec($ch);

    if (curl_errno($ch)) 
    {
        $errors = array(
            'url'   => $url,
            'data'  => $data,
            'error' => curl_error($ch)
        );
        curl_close($ch);
        return $errors;
    }

    curl_close($ch);

    return $output;
}

/**
 * 
 *  CURL GET 请求
 */
function curl_get($url, $data=array(), $timeout=30, $header=array())
{
    if (is_array($data)) 
    {
        $data = http_build_query($data);
    }
    
    $url = $url . "?" . $data;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // 跳过 SSL 证书检查
    curl_setopt($ch, CURLOPT_HEADER, false); // 调试
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);

    if (count($header) > 0) 
    {
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    }

    $output = curl_exec($ch);
    
    if (curl_errno($ch)) 
    {
        $errors = array(
            'url'   => $url,
            'data'  => $data,
            'error' => curl_error($ch)
        );
        curl_close($ch);
        return $errors;
    }

    curl_close($ch);

    return $output;
}

/**
 * 
 *  转 UTF-8 编码
 */
function utf8Encode($str, $encode='gbk')
{
  $data = $str;
  if(! mb_check_encoding($data, 'utf-8')) 
  {  
    $data = mb_convert_encoding($data,'UTF-8',$encode);
  }
  return $data;
}

/**
 * 
 * 搜索条件过滤
 */
function grid_search_filter($searchArr = array())
{
    unset($searchArr['page']);
    unset($searchArr['rows']);
    
    $search = array();

    foreach($searchArr as $value)
    {
        // 判断条件是否为空
        if( $value['value'] != "" )
        {
            $nameArr = preg_split('/[|]/', $value['name']);
            // 字段名称
            $fieldName = $nameArr[0];
            // 查询条件
            $condition = $nameArr[1];
            
            if($condition == "LIKE")
            {
                $search[$fieldName] = array($condition, '%' . $value['value'] . '%');
            }
            else
            {
                $search[$fieldName] = array($condition, $value['value']);
            }
        }
    }
    
    return $search;
}




