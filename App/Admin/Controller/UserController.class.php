<?php
namespace Admin\Controller;

class UserController extends CommonController {
    
    /**
     * 
     * 用户首页
     */
    public function index()
    {
        $this->display();
    }
    
    
    /**
     * 
     * 表格数据
     */
    public function dataGrid()
    {
        $condition = grid_search_filter(I("post."));
        
        $User  = M('User');
        
        // 要查询的页码
        $page = (I('post.page','')) ? I('post.page') : 1;
        // 要查询的行数
        $rows = (I('post.rows','')) ? I('post.rows') : 20;
        
        $total = $User->where($condition)->count();
        $users = $User->where($condition)->limit($rows * ($page-1).','.$rows)->select();
        
        // 表格数据
        $data = array();
        $data['total'] = $total;
        $data['rows'] = $users ? $users : '';
          
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
     * 添加用户
     */
    public function add()
    {
        $User = M('User');
        
        $inputData = I('post.');
        
        $condition['loginname'] = $inputData['loginname'];
        
        $userInfo = $User->where($condition)->select();
        
        if( !empty($userInfo) )
        {
            $this->ajaxReturn( array('state' => -1, 'content' => '帐号已经存在,添加失败~' ) );
            exit();
        }
        
        if( $inputData['birthday'] == '' )
        {
            unset($inputData['birthday']);
        }
        
        $inputData['createtime'] = date("Y-m-d H:i:s");
        
        $User->add($inputData);
        
        $this->ajaxReturn( array('state' => 1, 'content' => '添加用户成功~' ) );
    }
    
    /**
     * 
     * 到达修改页面
     */
    public function toModify()
    {
       $id = I('get.id');
       
       $User = M('User');
       
       $user =  $User->find($id);
       
       $this->assign('user', $user);
       
       $this->display("modify");
    }
    
    /**
     * 
     * 修改
     */
    public function modify()
    {
        $inputData = I("post.");
        
        $User = M('User');
         
        $userInfo = $User->find($inputData['id']);
        
        if( $userInfo['loginname'] != $inputData['loginname'] )
        {
            $condition['loginname'] = $inputData['loginname'];
            
            $temp = $User->where($condition)->find();
            
            if( !empty($temp) )
            {
                $this->ajaxReturn( array('state' => -1, 'content' => '帐号已经存在,修改失败~' ) );
                exit();
            }  
        }
        
        if( $inputData['birthday'] == '' )
        {
            unset($inputData['birthday']);
        }
        
        $User->save($inputData);
        
        $this->ajaxReturn( array('state' => 1, 'content' => '修改用户成功~') );
    }
    
    /**
     * 
     * 删除
     */
    public function delete()
    {
        $ids = I('post.ids');
        
        $User     = M('User');
        $UserRole = M('UserRole');
        
        $idArr = array();
        
        $idArr = preg_split('/[,]/', $ids);
        
        foreach($idArr as $value)
        {
            $condition['userid'] = $value;
            $UserRole->where($condition)->delete();
        }
        
        // 删除
        $User->delete($ids);
        
        $this->ajaxReturn( array('state' => 1, 'content' => '删除成功~') );
    }
    
    
    /**
     * 
     * 到达分配角色页面
     */
    public function toDistRole()
    {
        $id = I('get.id');
        
        $UserRole = M('UserRole');
        $Role     = M('Role');
        $User     = M('User');
        
        // 当前用户
        $user = $User->find($id);
        
        $condition['userid'] = $id;
        
        $userrole = $UserRole->where($condition)->select();
        
        // 拥有的角色 ID
        $roleidStr = "0,";
        
        foreach($userrole as $v)
        {
            $roleidStr .= ($v['roleid'] . ',');
        }

        $roleidStr = substr($roleidStr, 0, strlen($roleidStr)-1);
        
        $ownmap['id'] = array('in',$roleidStr);
        
        // 拥有的角色
        $ownrole = $Role->where($ownmap)->select();
        
        $noownmap['id'] = array('not in',$roleidStr);
        // 未拥有的角色
        $noownrole = $Role->where($noownmap)->select();
        
        $this->assign('user', $user);
        $this->assign('ownroles', $ownrole);
        $this->assign('noownroles', $noownrole);
        $this->display('dist-role');
    }
    
    /**
     * 
     * 分配角色
     */
    public function distRole()
    {
        $inputData = I('post.');
        
        $UserRole = M('UserRole');
        
        $dataList = array();
        
        foreach($inputData['roleids'] as $value)
        {
            $dataList[] = array('userid' => $inputData['userid'], 'roleid' => $value);
        }
        
        $condition['userid'] = $inputData['userid'];
        // 删除旧的
        $UserRole->where($condition)->delete();
        
        // 添加新的
        $UserRole->addAll($dataList);
        
        $this->ajaxReturn(array('state' => 1, 'content' => '分配角色成功~'));
    }
    
    /**
     * 
     */
    public function _empty($method)
    {
      
      echo '您访问的方法：' . $method . ' 不存在！';
    }
    
}