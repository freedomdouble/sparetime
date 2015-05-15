<?php

namespace Admin\Controller;

class LoginController extends CommonController {
    
    /**
     * 
     */
    public function index()
    {
        $this->display();
    }
    
    /**
     * 
     */
    public function login()
    {
        $User = M("User");
        
        $inputData = I("post.");
        
        // 判断验证码是否正确
        if(! $this->check_verify($inputData['verifycode']))
        {
            $this->ajaxReturn( array('state' => -1, 'content' => "您输入的验证码错误~") );
            exit();
        }
        
        $condition['loginname'] = $inputData['loginname'];
        $condition['status']    = '1';
        
        $temp = $User->where($condition)->find();
        
        // 判断是否存在用户名
        if( empty($temp) )
        {
            $this->ajaxReturn( array('state' => -1, 'content' => "您输入的用户名不存在~") );
            exit();
        }
        
        $map['loginname'] = $inputData['loginname'];
        $map['password']  = $inputData['password'];
        $map['status']    = '1';
        $info             = $User->where($map)->find();
        
        if( empty($info) )
        {
            $this->ajaxReturn( array('state' => -1, 'content' => "您输入的密码不正确~") );
            exit();
        }
        else
        {
            session('user.id', $info['id']);
            session('user.loginname', $info['loginname']);
            session('user.superflag', $info['superflag']);
            $this->ajaxReturn( array('state' => 1, 'content' => "登录成功~") );
        }
    }
    
    /**
     * 
     */
    public function logout()
    {
        session(null);
        
        $this->success('正在退出', 'index', 3);
    }
    
    /**
     * 
     */
    public function loginVerify()
    {
        $config =    array(
            'fontSize'    =>    25,    // 验证码字体大小
            'length'      =>    4,     // 验证码位数
            'useNoise'    =>    false,  // 关闭验证码杂点
            'imageW'      =>    300,
            'imageH'      =>    50,
        );
        
        $Verify = new \Think\Verify($config);
        
        $Verify->entry();
    }
    
    /**
     * 
     */
    private function check_verify($code, $id = '')
    {
        $Verify = new \Think\Verify();
        return $Verify->check($code, $id);
    }
    
}