<?php

namespace Admin\Behavior;

class LoginBehavior
{
    public function run(&$params)
    {
        $module     = strtolower(__MODULE__);
        $controller = strtolower(CONTROLLER_NAME);
        $method     = ACTION_NAME;
        $uri        = $module . '/' . $controller . '/' . $method;
        
        if($controller != 'login')
        {
            if( !session('?user.loginname') )
            {
                echo "<script type='text/javascript'>alert('请先登录~');window.location.href='/admin.php/login/index.html';</script>";
                exit();
            }
            else
            {
                $loginname  = session('user.loginname');
                
                if($loginname == "")
                {
                    echo "<script type='text/javascript'>alert('请先登录~');window.location.href='/admin.php/login/index.html';</script>";
                    exit();
                }
            }
        }
    }
}