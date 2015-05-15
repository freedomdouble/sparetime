<?php if (!defined('THINK_PATH')) exit();?><!--表单开始-->
<form id="modify-role-form" action="javascript:void(0)">

  <input type="hidden" name="id" value="<?php echo ($role["id"]); ?>"/>

  <!--标题开始-->
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title"><p class="glyphicon glyphicon-edit" aria-hidden="true"></p>修改角色</h4>
  </div>
  <!--标题结束-->
  
  <div class="modal-body">
  
      <!--名称开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">名称</div>
        <input type="text" class="form-control input-sm" name="rolename" value="<?php echo ($role["rolename"]); ?>" placeholder="角色名称" required="required"/>
      </div>
      <!--名称结束-->
      
      <!--编码开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">编码</div>
        <input type="text" class="form-control input-sm" name="rolecode" value="<?php echo ($role["rolecode"]); ?>" placeholder="角色编码" required="required"/>
      </div>
      <!--编码结束-->
      
      <!--描述开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">描述</div>
        <input type="text" class="form-control input-sm" name="roledesc" value="<?php echo ($role["roledesc"]); ?>" placeholder="角色描述"/>
      </div>
      <!--描述结束-->
      
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">关闭</button>
    <button type="submit" class="btn btn-primary btn-sm">修改</button>
  </div>
</form>
<!--表单结束-->

<script type="text/javascript">

$("#modify-role-form").submit(function() {
    var params = $("#modify-role-form").serializeArray();
    $.ajax({
        type: "POST",
        url: "<?php echo U('/role/modify');?>",
        data: params,
        dataType: "json",
        success: function(data){
            $('#role-modal').modal('hide')
            alert(data.content);
            $('#roleGrid').datagrid('reload');
        }
    });
});

</script>