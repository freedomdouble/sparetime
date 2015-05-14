<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>应用模版-后台管理系统</title>
	<script type="text/javascript" src="/Public/jquery/jquery-1.11.2.min.js"></script>
  <script type="text/javascript" src="/Public/easyui-1.4.2/jquery.easyui.min.js"></script>
  <script type="text/javascript" src="/Public/easyui-1.4.2/locale/easyui-lang-zh_CN.js"></script>
  <link rel="stylesheet" type="text/css" href="/Public/easyui-1.4.2/themes/default/easyui.css"/> 
  <link rel="stylesheet" type="text/css" href="/Public/bootstrap-3.3.4/css/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="/Public/bootstrap-3.3.4/css/dashboard.css"/> 
  <link rel="stylesheet" type="text/css" href="/Public/bootstrap-3.3.4/css/bootstrap-datetimepicker.min.css"/> 
</head>

<body>
    <!--顶部导航栏开始-->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
      
        <div class="navbar-header">
          <button data-target="#nav-left" data-toggle="collapse" class="navbar-toggle" type="button">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo U('index/index');?>">LOGO</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo U('login/logout');?>">退出</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!--顶部导航栏结束-->
    <div class="container-fluid">
      <div class="row">
        
        <!--左侧菜单栏开始-->
        <div class="col-md-2 sidebar collapse" role="navigation" id="nav-left">
          <ul class="nav nav-sidebar">
            <div class="panel-group" id="accordion">
              <?php if(is_array($resource)): $i = 0; $__LIST__ = $resource;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="panel panel-default sidemenu">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <span class="<?php echo ($vo["resourceicon"]); ?>" aria-hidden="true">
                      <a data-toggle="collapse" data-parent="#accordion" href="#<?php echo ($vo["resourcetarget"]); ?>"><?php echo ($vo["resourcename"]); ?></a>
                    </h4>
                  </div>
                  <div id="<?php echo ($vo["resourcetarget"]); ?>" class="panel-collapse collapse">
                      <ul class="list-group">
                        <?php if(is_array($vo['secondresource'])): $i = 0; $__LIST__ = $vo['secondresource'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$secondresource): $mod = ($i % 2 );++$i;?><li class="list-group-item">
                              <span class="<?php echo ($secondresource["resourceicon"]); ?>" aria-hidden="true">
                              <a rel="<?php echo ($secondresource["resourceurl"]); ?>" href="javascript:void(0)" onclick="loadHtml(this)"><?php echo ($secondresource["resourcename"]); ?></a>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                      </ul>
                  </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
          </ul>
        </div>
        <!--左侧菜单栏结束-->
        
        <!--内容主体开始-->
        <div class="col-md-10 col-md-offset-2 main"></div>
        <!--内容主体结束-->
      </div>
    </div>

</body>

<script type="text/javascript">

function loadHtml(obj)
{
  $(".main").load(obj.rel);
}

</script>

<script type="text/javascript" src="/Public/bootstrap-3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/Public/bootstrap-3.3.4/js/bootstrap-suggest.min.js"></script>
<script type="text/javascript" src="/Public/bootstrap-3.3.4/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="/Public/bootstrap-3.3.4/js/bootstrap-datetimepicker.zh-CN.js"></script>
</html>