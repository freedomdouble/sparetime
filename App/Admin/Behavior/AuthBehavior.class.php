<?php


namespace Admin\Behavior;

class AuthBehavior
{
    public function run(&$params)
    {
        $module     = strtolower(__MODULE__);
        $controller = strtolower(CONTROLLER_NAME);
        $method     = ACTION_NAME;
        $url        = $module . '/' . $controller . '/' . $method;
        
        if( session("?user") )
        {
            $user = session("user");
            
            if( ! $this->hasPermission($user, $url) )
            {
                echo "<script type='text/javascript'>alert('您没有访问的权限,请与管理员联系~');</script>";
                exit();
            }
        }
    }
    
    private function hasPermission($user, $url)
    {
        $ResourceModel = D('Resource');
        $UserRole      = M('UserRole');
        $RoleResource  = M('RoleResource');
        $Resource      = M('Resource');
        
        $targetSource = $ResourceModel->getByReourceurl($url);
        
        // 超级管理员
        if($user['superflag'] == '1')
        {
            return true;
        }
        
        if( empty($targetSource) )
        {
            return true;
        }
        else
        {
            // 公共资源
            if($targetSource['common'] == 1)
            {
                return true;
            }
            else
            {
                $condition['userid'] = $user['id'];
                
                // 用户和角色的关系集合
                $userRoles = $UserRole->where($condition)->select();
                
                $totalSum = 0;
                
                foreach($userRoles as $userRole)
                {
                    $map['roleid'] = $userRole['roleid'];
                    
                    // 角色和资源的关系集合
                    $roleSources = $RoleResource->where($map)->select();
                    
                    foreach($roleSources as $roleSource)
                    {
                        $resource = $Resource->find($roleSource['resourceid']);
                        
                        if($targetSource['resourcegroup'] == $resource['resourcegroup'])
                        {
                            $totalSum = $totalSum | $resource['resourcecode'];
                        }
                    }
                }
                
                if( ($totalSum & $targetSource['resourcecode']) == 0)
                {
                    return false;
                }
                else
                {
                    return true;    
                }
            }
        }
    }
}