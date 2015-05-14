<?php


return array(

    'app_init'        => array(    // 应用初始化标签

//        '_overlay'    =>    false,
    ),

    'module_check'    => array(    // 模块检测标签位（3.2.1版本新增）

//        '_overlay'    =>    false,
    ),

    'path_info'       => array(    // PATH_INFO检测标签位

//        '_overlay'    =>    false,
    ),

    'app_begin'       => array(    // 应用开始标签位

//        '_overlay'    =>    false,
    ),

    'action_name'     => array(    // 操作方法名标签位

//        '_overlay'    =>    false,
    ),

    'action_begin'    => array(    // 控制器开始标签位
          'Admin\Behavior\LoginBehavior',    // 登录拦截
          'Admin\Behavior\AuthBehavior',     // 权限拦截
//        '_overlay'    =>    false,
    ),

    'view_begin'      => array(    // 视图输出开始标签位
//        '_overlay'    =>    false,
    ),

    'view_template'   => array(    // 视图模板解析标签位
//        '_overlay'    =>    false,
    ),

    'view_parse'      => array(    // 视图解析标签位
//        '_overlay'    =>    false,
    ),

    'template_filter' => array(    // 模板解析过滤标签位
//        '_overlay'    =>    false,
    ),

    'view_filter'     => array(    // 视图输出过滤标签位
//        '_overlay'    =>    false,
    ),

    'view_end'        => array(    // 视图输出结束标签位
//        '_overlay'    =>    false,
    ),

    'action_end'      => array(    // 控制器结束标签位
//        '_overlay'    =>    false,
    ),

    'app_end'         => array(    // 应用结束标签位

//        '_overlay'    =>    false,
    ),

);