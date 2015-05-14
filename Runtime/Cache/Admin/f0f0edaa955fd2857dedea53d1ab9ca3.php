<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title></title>
    <script type="text/javascript" src="/Public/jquery/jquery-1.11.2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/Public/bootstrap-3.3.4/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/bootstrap-3.3.4/css/signin.css"/> 
</head>

<body>

    <div class="container">

      <form class="form-signin" id="signin-form" action="javascript:void(0)">
        <h2 class="form-signin-heading">用户登录</h2>
        
        <label for="inputEmail" class="sr-only">用户名</label>
        <input type="text" name="loginname" class="form-control" placeholder="用户名" required="required" autofocus="autofocus" />
        
        <label for="inputPassword" class="sr-only">密&nbsp;&nbsp;&nbsp;码</label>
        <input type="password" name="password" class="form-control" placeholder="密&nbsp;&nbsp;&nbsp;码" required="required" />
        

        <label for="inputVerify" class="sr-only">验证码</label>
        <input type="text" name="verifycode" class="form-control" placeholder="验证码" required="required" />

        <img alt="验证码" src="<?php echo U('/login/loginVerify');?>" title="点击刷新" id="logincode"/>
        
        <button class="btn btn-lg btn-primary btn-block" id="submit-btn" type="submit">登录</button>
      </form>

    </div> 

</body>



<script type="text/javascript">

/**
 *
 * 刷新验证吗
 */
$("#logincode").click(function(){
    var verify = "<?php echo U('/login/loginVerify','','');?>";
    var time = new Date().getTime();
    $("#logincode").attr({"src" : verify+"/"+time});
});

/**
 *
 * 登录
 */
$("#signin-form").submit(function(){
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "<?php echo U('/login/login');?>",
        data: $("#signin-form").serializeArray(),
        success: function(data) {
            if(data.state == -1)
            {
                alert(data.content);
                var verify = "<?php echo U('/login/loginVerify','','');?>";
                var time = new Date().getTime();
                $("#logincode").attr({"src" : verify+"/"+time});
            }
            else
            {
                alert(data.content);
                window.location.href = "<?php echo U('/index/index');?>";
            }
        },
    });
});
</script>

</html>