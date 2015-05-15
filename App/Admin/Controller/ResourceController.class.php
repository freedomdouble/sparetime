<?php
namespace Admin\Controller;

class ResourceController extends CommonController {
  
    /**
     * 
     * 资源首页
     */
    public function index()
    { 
      $this->display();
    }
    
    /**
     * 
     *  表格数据加载
     */
    public function dataGrid()
    {
        // 表格数据加载条件
        $condition = grid_search_filter(I("post."));
        
        $Resource = M('Resource');
      
        // 要查询的页码
        $page = (I('post.page','')) ? I('post.page') : 1;
        // 要查询的行数
        $rows = (I('post.rows','')) ? I('post.rows') : 20;
      
        // 要查询的实际行数
        $total = $Resource->where($condition)->count();
        // 要查询的数据
        $list = $Resource->where($condition)->limit($rows * ($page-1).','.$rows)->select();
      
        // 表格数据
        $data = array();
        $data['total'] = $total;
        $data['rows'] = $list ? $list : '';
      
        print_r(json_encode($data));
    }
    
    /**
     * 
     * 到达添加页面
     */
    public function toAdd()
    {
        $parentid = I("get.id");
        
        $this->assign("parentid", $parentid);
        
        $this->display('add');
    }
    
    /**
     * 
     * 保存资源
     */
    public function add() 
    {
        // 输入的数据
        $inputData = I('post.');
        
        $ResourceModel = D('Resource');
        $Resource      = M('Resource');
        
        // 最大资源
        $maxResource = $ResourceModel->findMaxResource();
        
        if( $maxResource ) {  // 存在最大资源
            
            if( $maxResource['resourcecode'] >= (1 << 60) ) {  // 资源编码达到最大值
                
                $inputData['resourcegroup'] = $maxResource['resourcegroup'] + 1;
                $inputData['resourcecode']  = 1;
            } else {
                
                $inputData['resourcegroup'] = $maxResource['resourcegroup'];
                $inputData['resourcecode']  = $maxResource['resourcecode'] << 1;
            }
        } else {  // 不存在最大资源
            
            $inputData['resourcegroup'] = 0;
            $inputData['resourcecode']  = 1;
        }
        
        $inputData['createuser']  = session('user.loginname');
        $inputData['createtime']  = date('Y-m-d H:i:s', time());
         
        // 添加
        $Resource->add($inputData);
        
        $this->ajaxReturn( array('status' => 1, 'content' => '保存成功~') );
    }
    
    /**
     * 
     * 删除资源
     */
    public function delete()
    {
        $id = I('post.id');
        
        $Resource     = M('Resource');
        $RoleResource = M('RoleResource');
        
        // 删除资源引用
        $condition['resourceid'] = $id;
        $RoleResource->where($condition)->delete();
        
        // 删除子资源
        $map['parentid'] = $id;
        $Resource->where($map)->delete();
        
        // 删除资源
        $Resource->delete($id);
        
        $this->ajaxReturn( array('status' => 1, 'content' => '删除成功~') );
    }
    
    /**
     * 
     * 到达修改页面
     */
    public function toModify()
    {
        $id = I('get.id');
        
        $Resource = M('Resource');
        
        $resourceInfo = $Resource->find($id);
        
        $this->assign("resource", $resourceInfo);
        
        $this->display('modify');
    }
    
    /**
     * 
     * 修改
     */
    public function modify()
    {
        // 输入的数据
        $inputData = I('post.');
        
        $Resource = M('Resource');
        
        $Resource->save($inputData);
        
        $this->ajaxReturn( array('status' => 1, 'content' => '修改成功~') );
    }
    
    /**
     * 
     */
    public function _empty($method)
    {
      
      echo '您访问的方法：' . $method . ' 不存在！';
    }
}