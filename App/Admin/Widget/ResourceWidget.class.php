<?php
namespace Admin\Widget;
use Think\Controller;

class ResourceWidget extends Controller {
    
    /**
     * 
     * 后台操作按钮
     */
    public function adminOperaMenu($parentid)
    { 
        $Resource = M('Resource');
        
        $condition                 = array();
        $condition['parentid']     = $parentid;
        $condition['status']       = 1;
        $condition['level']        = 3;
        $condition['resourcetype'] = 1;
        
        $operaMenu = $Resource->where($condition)->order('orderby')->select();
        
        $operaHtmlLeft   = "<div class='panel-heading'>";
        $operaHtmlRight  = "</div>";
        $operaHtmlCenter = "";
        
        foreach($operaMenu as $k => $v)
        {
            $url = U($v['controller'] . '/' . $v['method']);
            $operaHtmlCenter .= "<a id={$v['resourcetarget']} type='button' class='btn btn-info btn-sm' rel={$url} onclick={$v['event']}>{$v['resourcename']}</a>&nbsp;";
        }
        
        echo $operaHtmlLeft . $operaHtmlCenter . $operaHtmlRight;
    }
}