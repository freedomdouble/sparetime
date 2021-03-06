<?php if (!defined('THINK_PATH')) exit();?><!--表单开始-->
<form id="modify-user-form" action="javascript:void(0)">

    <input type="hidden" name="id" value="<?php echo ($user["id"]); ?>"/>

  <!--标题开始-->
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>修改用户</h4>
  </div>
  <!--标题结束-->
  
  <div class="modal-body">
    
      <!--登录名称开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">帐号</div>
        <input type="text" class="form-control input-sm" name="loginname" value="<?php echo ($user["loginname"]); ?>" placeholder="帐号" required="required"/>
      </div>
      <!--登录名称结束-->
      
      <!--登录密码开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">密码</div>
        <input type="text" class="form-control input-sm" name="password" value="<?php echo ($user["password"]); ?>" placeholder="密码" required="required"/>
      </div>
      <!--登录密码结束-->
      
      <!--姓名开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">姓名</div>
        <input type="text" class="form-control input-sm" name="username" value="<?php echo ($user["username"]); ?>" placeholder="姓名" required="required"/>
      </div>
      <!--姓名结束-->
      
      <!--昵称开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">昵称</div>
        <input type="text" class="form-control input-sm" name="nickname" value="<?php echo ($user["nickname"]); ?>" placeholder="昵称" required="required"/>
      </div>
      <!--昵称结束-->
      
      <!--邮箱开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">邮箱</div>
        <input type="email" class="form-control input-sm" name="email" value="<?php echo ($user["email"]); ?>" placeholder="邮箱" required="required"/>
      </div>
      <!--邮箱结束-->
      
      <div class="row">
      
        <div class="col-md-4">
          <!--性别开始-->
          <?php if($user["gender"] == 1): echo W('Dict/generateRadio',array('性别','gender','123456'));?>
          <?php else: ?>
            <?php echo W('Dict/generateRadio',array('性别','gender','123456',1)); endif; ?>
          <!--性别结束-->
        </div>
        
        <div class="col-md-4">
          <!--状态开始-->
          <?php if($user["status"] == 1): echo W('Dict/generateRadio',array('状态','status','132456'));?>
          <?php else: ?>
            <?php echo W('Dict/generateRadio',array('状态','status','132456',1)); endif; ?>
          <!--状态结束-->
        </div>
        
        <div class="col-md-4">
          <!--超级管理员开始-->
          <?php if($user["superflag"] == 1): echo W('Dict/generateRadio',array('超级管理员','superflag','123546'));?>
          <?php else: ?>
            <?php echo W('Dict/generateRadio',array('超级管理员','superflag','123546',1)); endif; ?>
          <!--超级管理员结束-->
        </div>
        
      </div>
      
      <!--生日开始-->
      <div class="form-group input-group">
          <div class="input-group date form_date">
            <div class="input-group-addon">生日</div>
            <input type="text" class="form-control input-sm" name="birthday" value="<?php echo ($user["birthday"]); ?>" placeholder="生日" readonly="readonly" size="80"/>
            <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
		        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
          </div>
      </div>
      <!--生日结束-->
      
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">关闭</button>
    <button type="submit" class="btn btn-primary btn-sm">修改</button>
  </div>
</form>
<!--表单结束-->

<script type="text/javascript">

$("#modify-user-form").submit(function() {
    var params = $("#modify-user-form").serializeArray();
    $.ajax({
        type: "POST",
        url: "<?php echo U('/user/modify');?>",
        data: params,
        dataType: "json",
        success: function(data){
            $('#user-modal').modal('hide');
            alert(data.content);
            $('#userGrid').datagrid('reload');
        }
    });
});

$('.form_date').datetimepicker({
    language:  'zh-CN',
		format: 'yyyy-mm-dd',
    weekStart: 1,
    todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
});

</script>