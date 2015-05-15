<?php
namespace Admin\Widget;
use Think\Controller;

class DictWidget extends Controller {
    
    /**
     * 
     *  字典单选
     */
    public function generateRadio($title, $sttrName, $typeCode, $index=0)
    { 
        $leftStr  = "<div class='form-group input-group'><div class='input-group-addon'>" .$title. "</div><div class='btn-group' data-toggle='buttons'>";
        
        $centerStr= "";
        
        $Dict = M("Dict");
        
        $condition['dicttypecode'] = $typeCode;
        $condition['status']       = 1;
        
        $dicts = $Dict->where($condition)->order('orderby')->select();
        
        $temp = '';
        
        foreach($dicts as $k => $v)
        {
            if( $k == $index)
            {
                $temp = "<label class='btn btn-primary btn-sm active'><input type='radio' name=" .$sttrName. " autocomplete='off' value=" .$v['dictcode']. " checked='true'/>" .$v['dictname']. "</label>";
            }
            else
            {
                $temp = "<label class='btn btn-primary btn-sm'><input type='radio' name=" .$sttrName. " autocomplete='off' value=" .$v['dictcode']. ">" .$v['dictname']. "</label>";
            }
            
            $centerStr .= $temp;
        }
        
        $rightStr = "</div></div>";
        
        $allStr = $leftStr . $centerStr . $rightStr;
        
        echo $allStr;
    }
    
}
