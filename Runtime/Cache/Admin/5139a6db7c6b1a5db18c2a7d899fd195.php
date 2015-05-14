<?php if (!defined('THINK_PATH')) exit();?><!--表单开始-->
<form id="add-province-form" action="javascript:void(0)">

  <!--标题开始-->
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title"><p class="glyphicon glyphicon-plus" aria-hidden="true"></p>添加省级</h4>
  </div>
  <!--标题结束-->
  <div class="modal-body">
  
      <!--名称开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">省名称</div>
        <input type="text" class="form-control input-sm" name="provincename" placeholder="省名称" required="required"/>
      </div>
      <!--名称结束-->
      
      <!--编码开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">省编码</div>
        <input type="text" class="form-control input-sm" name="provincecode" placeholder="省编码" required="required"/>
      </div>
      <!--编码结束-->
      
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">关闭</button>
    <button type="submit" class="btn btn-primary btn-sm">保存</button>
  </div>
</form>
<!--表单结束-->

<script type="text/javascript">

$("#add-province-form").submit(function() {
    var params = $("#add-province-form").serializeArray();
    $.ajax({
        type: "POST",
        url: "<?php echo U('/province/add');?>",
        data: params,
        dataType: "json",
        success: function(data){
            $('#province-modal').modal('hide')
            alert(data.content);
            $('#provinceGrid').datagrid('reload');
        }
    });
});

</script>