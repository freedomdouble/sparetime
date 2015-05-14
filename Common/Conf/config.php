<?php

return array(
  // 允许访问的模块
  'MODULE_ALLOW_LIST'          => array('Admin'),
  // 默认访问的模块
  'DEFAULT_MODULE'             => 'Admin',
  
  // 扩展配置文件
  'LOAD_EXT_CONFIG' => 'db',
  
  // 模版插件
  'TMPL_PARSE_STRING'     => array(
        // 公共目录    
        '__PUBLIC__'     => __ROOT__ . '/Public',
        // bootstrap 插件
        '__BOOTSTRAP__'  => __ROOT__ . '/Public/bootstrap-3.3.4', 
        // jquery 插件
        '__JQUERY__'     => __ROOT__ . '/Public/jquery',
        // easyui 插件
        '__EASYUI__'     => __ROOT__ . '/Public/easyui-1.4.2',
        // js
        '__JS__'         => __ROOT__ . '/Public/js',
        // css
        '__CSS__'         => __ROOT__ . '/Public/css',
        // img
        '__IMG__'         => __ROOT__ . '/Public/img',
  ),
  
  
);