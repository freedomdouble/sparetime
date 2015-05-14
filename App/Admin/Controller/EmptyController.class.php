<?php


namespace Admin\Controller;

class EmptyController extends CommonController
{
    public function index()
    {
        $controllerName = CONTROLLER_NAME;
        echo '您访问的控制器：' . $controllerName . ' 不存在！';
    }
}