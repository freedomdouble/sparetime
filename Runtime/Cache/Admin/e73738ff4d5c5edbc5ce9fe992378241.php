<?php if (!defined('THINK_PATH')) exit();?><!--表单开始-->
<form id="add-user-form" action="javascript:void(0)">

  <!--标题开始-->
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>添加用户</h4>
  </div>
  <!--标题结束-->
  
  <div class="modal-body">
    
      <!--登录名称开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">帐号</div>
        <input type="text" class="form-control input-sm" name="loginname" placeholder="帐号" required="required"/>
      </div>
      <!--登录名称结束-->
      
      <!--登录密码开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">密码</div>
        <input type="text" class="form-control input-sm" name="password" placeholder="密码" required="required"/>
      </div>
      <!--登录密码结束-->
      
      <!--姓名开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">姓名</div>
        <input type="text" class="form-control input-sm" name="username" placeholder="姓名" required="required"/>
      </div>
      <!--姓名结束-->
      
      <!--昵称开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">昵称</div>
        <input type="text" class="form-control input-sm" name="nickname" placeholder="昵称" required="required"/>
      </div>
      <!--昵称结束-->
      
      <!--邮箱开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">邮箱</div>
        <input type="email" class="form-control input-sm" name="email" placeholder="邮箱" required="required"/>
      </div>
      <!--邮箱结束-->
      
      <div class="row">
        <div class="col-md-4">
          <!--性别开始-->
          <div class="form-group input-group">
            <div class="input-group-addon">性别</div>
            <div class="btn-group" data-toggle="buttons">
              <label class="btn btn-primary btn-sm active">
                <input type="radio" name="gender" autocomplete="off" value="1" checked="checked"/>男
              </label>
              <label class="btn btn-primary btn-sm">
                <input type="radio" name="gender" autocomplete="off" value="0"/>女
              </label>
            </div>
          </div>
          <!--性别结束-->
        </div>
        <div class="col-md-4">
          <!--状态开始-->
          <div class="form-group input-group">
            <div class="input-group-addon">状态</div>
            <div class="btn-group" data-toggle="buttons">
              <label class="btn btn-primary btn-sm active">
                <input type="radio" name="status" autocomplete="off" value="1" checked="checked"/>启用
              </label>
              <label class="btn btn-primary btn-sm">
                <input type="radio" name="status" autocomplete="off" value="0"/>停用
              </label>
            </div>
          </div>
          <!--状态结束-->
        </div>
        <div class="col-md-4">
          <!--超级管理员开始-->
          <div class="form-group input-group">
            <div class="input-group-addon">超级管理员</div>
            <div class="btn-group" data-toggle="buttons">
              <label class="btn btn-primary btn-sm">
                <input type="radio" name="superflag" autocomplete="off" value="1"/>是
              </label>
              <label class="btn btn-primary btn-sm active">
                <input type="radio" name="superflag" autocomplete="off" value="0" checked="checked"/>否
              </label>
            </div>
          </div>
          <!--超级管理员结束-->
        </div>
      </div>
      
      <!--生日开始-->
      <div class="form-group input-group">
          <div class="input-group date form_date">
            <div class="input-group-addon">生日</div>
            <input type="text" class="form-control input-sm" name="birthday" placeholder="生日" readonly="readonly" size="80"/>
            <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
		        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
          </div>
      </div>
      <!--生日结束-->
      
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">关闭</button>
    <button type="submit" class="btn btn-primary btn-sm">保存</button>
  </div>
</form>
<!--表单结束-->

<script type="text/javascript">

$("#add-user-form").submit(function() {
    var params = $("#add-user-form").serializeArray();
    $.ajax({
        type: "POST",
        url: "<?php echo U('/user/add');?>",
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