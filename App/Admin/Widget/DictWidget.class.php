<?php
namespace Admin\Widget;
use Think\Controller;

class DictWidget extends Controller {
    
    /**
     * 
     *  字典单选
     */
    public function generateRadio($title, $name, $typeid, $index)
    { 
        $leftStr  = "<div class='form-group input-group'><div class='input-group-addon'>" .$title. "</div><div class='btn-group' data-toggle='buttons'>";
        
        $centerStr= "";
        
        $Dict = M("Dict");
        
        $condition['dicttypeid'] = $typeid;
        $condition['status'] = 1;
        
        $dicts = $Dict->where($condition)->order('orderby')->select();
        
        $centerStr = $centerStr . "<label class='btn btn-primary btn-sm active'><input type='radio' name=" .$name. " autocomplete='off' value=" .$dicts[$index]['dictcode']. " checked='true'/>" .$dicts[$index]['dictcontent']. "</label>";
        unset($dicts[$index]);
        
        foreach($dicts as $k => $v)
        {
            $centerStr = $centerStr . "<label class='btn btn-primary btn-sm'><input type='radio' name=" .$name. " autocomplete='off' value=" .$v['dictcode']. ">" .$v['dictcontent']. "</label>";
        }
        
        $rightStr = "</div></div>";
        
        $allStr = $leftStr . $centerStr . $rightStr;
        
        echo $allStr;
    }
    
}
