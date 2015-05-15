<?php
namespace Admin\Controller;

class RoleController extends CommonController {
    
    /**
     *  角色首页
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
        // 表格加载条件
        $condition = grid_search_filter(I("post."));
        
        $Role = M('Role');
        
        // 要查询的页码
        $page = (I('post.page','')) ? I('post.page') : 1;
        // 要查询的行数
        $rows = (I('post.rows','')) ? I('post.rows') : 20;
        
        $total = $Role->where($condition)->count();
        $list  = $Role->where($condition)->limit($rows * ($page-1).','.$rows)->select();
         
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
        $this->display('add');
    }
    
    /**
     * 
     * 添加
     */
    public function add()
    {
        $Role = M('Role');
        
        $inputData = I('post.');
        
        $condition['rolecode'] = $inputData['rolecode'];
        
        $roleInfo = $Role->where($condition)->find();
        
        if( !empty($roleInfo) )
        {
            $this->ajaxReturn( array('state' => -1, 'content' => '角色编码已经存在,添加失败~') );
            exit();
        }
        
        $inputData['createtime'] = date('Y-m-d H:i:s', time());
        
        $Role->add($inputData);
        
        $this->ajaxReturn( array('state' => 1, 'content' => '添加角色成功~') );
    }
    
    /**
     * 
     * 删除角色
     */
    public function delete()
    {
        $Role         = M('Role');
        $RoleResource = M('RoleResource');
        $UserRole     = M('UserRole');
        
        $ids = I('post.ids');
        
        $idArr = preg_split('/[,]/', $ids);
        
        foreach($idArr as $value)
        {
            $condition['roleid'] = $value;

            $RoleResource->where($condition)->delete();

            $UserRole->where($condition)->delete();
        }
        
        $Role->delete($ids);
        
        $this->ajaxReturn( array('state' => 1, 'content' => '删除角色成功~') );
    }
    
    /**
     * 
     * 授权
     */
    public function authRole()
    {
        $roleid = I('get.id');
        
        $Role         = M('Role');
        $RoleResource = M('RoleResource');
        $Resource     = M("Resource");
        
        // 当前选中的角色
        $role = $Role->find($roleid);
        
        // 当前角色拥有的资源 ID
        $resourceids = $RoleResource->field('resourceid')->where('roleid=' . $roleid)->select();
        
        $resources = array();
        
        $idsStr = "0,";
        
        foreach($resourceids as $k => $v)
        {
            $resource    = $Resource->find($v['resourceid']);  
            $resources[] = $resource;
            $idsStr     .=  ($v['resourceid'] . ',');
        }
        
        $role['resources'] = $resources;
        
        // 去掉最后的 ','
        $idsStr = substr($idsStr, 0, strlen($idsStr)-1);
        
        $map['id'] = array('not in', $idsStr);
        
        // 当前角色没拥有资源
        $resourceArr = $Resource->where($map)->select();
        
        $this->assign('role', $role);
        $this->assign('resourcearr', $resourceArr);
        
        $this->display('auth-role');
    }
    
    /**
     * 
     * 添加授权
     */
    public function addAuthRole()
    {
       // 输入的数据
       $inputData = I("post."); 
       
       $RoleResource = M('RoleResource');
       
       $condition['roleid'] = $inputData['roleid'];

       $RoleResource->where($condition)->delete();
       
       $dataList = array();
       
       foreach( $inputData['resourceids'] as $v )
       {
          $dataList[] = array('roleid' => $inputData['roleid'], 'resourceid' => $v);
       }
       
       $RoleResource->addAll($dataList);
       
       $this->ajaxReturn( array( 'state' => 1, 'content' => '授权成功~') );
    }
    
    /**
     * 
     * 到达修改页面
     */
    public function toModify()
    {
        $id = I('get.id');
        
        $Role = M("Role");
        
        $role = $Role->find($id);
        
        $this->assign('role', $role);
        
        $this->display('modify');
    }
    
    /**
     * 
     * 修改
     */
    public function modify()
    {
        $inputData = I('post.');
        
        $Role = M('Role');
        
        $roleInfo = $Role->find($inputData['id']);
        
        if($roleInfo['rolecode'] != $inputData['rolecode'])
        {
            $condition['rolecode'] = $inputData['rolecode'];
            
            $temp = $Role->where($condition)->find();
            
            if( !empty($temp) )
            {
                $this->ajaxReturn( array('state' => -1, 'content' => '编码已经存在,修改失败~') );
                exit();
            }
        }
        
        $Role->save($inputData);
        
        $this->ajaxReturn( array('state' => 1, 'content' => '修改角色成功~') );
    }
    
    
    /**
     * 
     */
    public function _empty($method)
    {
      
      echo '您访问的方法：' . $method . ' 不存在！';
    }
}