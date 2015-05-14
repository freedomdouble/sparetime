<?php if (!defined('THINK_PATH')) exit();?><!--表单开始-->
<form id="add-role-form" action="javascript:void(0)">

  <!--标题开始-->
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>添加角色</h4>
  </div>
  <!--标题结束-->
  
  <div class="modal-body">
      <!--名称开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">名称</div>
        <input type="text" class="form-control input-sm" name="rolename" placeholder="角色名称" required="required"/>
      </div>
      <!--名称结束-->
      
      <!--编码开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">编码</div>
        <input type="text" class="form-control input-sm" name="rolecode" placeholder="角色编码" required="required"/>
      </div>
      <!--编码结束-->
      
      <!--描述开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">描述</div>
        <input type="text" class="form-control input-sm" name="roledesc" placeholder="角色描述"/>
      </div>
      <!--描述结束-->
  </div>
  
  <div class="modal-footer">
    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">关闭</button>
    <button type="submit" class="btn btn-primary btn-sm">保存</button>
  </div>
  
</form>
<!--表单结束-->

<script type="text/javascript">

$("#add-role-form").submit(function() {
    var params = $("#add-role-form").serializeArray();
    $.ajax({
        type: "POST",
        url: "<?php echo U('/role/add');?>",
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