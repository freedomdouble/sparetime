<?php
namespace Admin\Controller;

class IndexController extends CommonController {
  
    /**
     *  主页
     */
    public function index(){
      
      $Resource = M('Resource');
        
      $condition                 = array();
      $condition['parentid']     = 0;
      $condition['status']       = 1;
      $condition['level']        = 1;
      $condition['resourcetype'] = 1;
      
      // 一级资源
      $firstResource = $Resource->where($condition)->order("orderby")->select(); 
      
      foreach($firstResource as $key => $value)
      {
          $map                 = array();
          $map['parentid']     = $value['id'];
          $map['status']       = 1;
          $map['level']        = 2;
          $map['resourcetype'] = 1;
          
          // 二级资源
          $secondResource      = $Resource->where($map)->order("orderby")->select();
          
          $firstResource[$key]['secondresource'] = $secondResource;
      }
      
      $this->assign("resource", $firstResource);
      
      $this->display();
    }
    
    /**
     * 
     */
    public function _empty($method)
    {
      echo '您访问的方法：' . $method . ' 不存在！';
    }
}