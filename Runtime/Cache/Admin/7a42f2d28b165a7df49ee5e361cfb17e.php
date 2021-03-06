<?php if (!defined('THINK_PATH')) exit();?><!--角色授权表单开始-->
<form id="auth-role-form">
    
  <input type="hidden" name="roleid" value="<?php echo ($role["id"]); ?>"/>

  <!--标题开始-->
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title"><span class="glyphicon glyphicon-share" aria-hidden="true"></span>角色授权</h4>
  </div>
  <!--标题结束-->
  
  <div class="modal-body">
  
    <div class="row">
    
      <div class="col-md-6">
      <!--名称开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">名称</div>
        <input type="text" class="form-control input-sm" name="rolename" value="<?php echo ($role["rolename"]); ?>" readonly="readonly"/>
      </div>
      <!--名称结束-->
      </div>
      
      <div class="col-md-6">
      <!--编码开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">编码</div>
        <input type="text" class="form-control input-sm" name="rolecode" value="<?php echo ($role["rolecode"]); ?>" readonly="readonly"/>
      </div>
      <!--编码结束-->
      </div>
      
    </div>
      
      <!--描述开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">描述</div>
        <input type="text" class="form-control input-sm" name="roledesc" value="<?php echo ($role["roledesc"]); ?>" readonly="readonly"/>
      </div>
      <!--描述结束-->
      
      <!--拥有的资源开始-->
      <select multiple="multiple" id="left" style="min-height: 420px; width: 45%; float: left;" name="resourceids[]">
        <?php if(is_array($role["resources"])): $i = 0; $__LIST__ = $role["resources"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$s): $mod = ($i % 2 );++$i;?><option value="<?php echo ($s["id"]); ?>"><?php echo ($s["resourcename"]); ?>>>>>>><?php echo ($s["resourceurl"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
      </select>
      <!--拥有的资源结束-->
      
      <div style="float: left; width: 10%; text-align: center; padding-top: 80px;">
        <input type="button" id="one1" value="&gt;"/><br />
        <input type="button" id="one2" value="&lt;"/><br />
        <input type="button" id="all1" value="&gt;&gt;"/><br />
        <input type="button" id="all2" value="&lt;&lt;"/><br />
      </div>
      
      <!--不拥有的资源开始-->
      <select multiple="true" id="right" style="min-height: 420px; width: 45%;">
        <?php if(is_array($resourcearr)): $i = 0; $__LIST__ = $resourcearr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$resource): $mod = ($i % 2 );++$i;?><option value="<?php echo ($resource["id"]); ?>"><?php echo ($resource["resourcename"]); ?>>>>>>><?php echo ($resource["resourceurl"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
      </select>
      <!--不拥有的资源结束-->
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">关闭</button>
    <a type="button" class="btn btn-primary btn-sm" id="auth-role-btn">保存</a>
  </div>
</form>
<!--角色授权表单结束-->

<script type="text/javascript">

$(function() {
	$('#one1').click(function() {
		var size = $('#left>option:selected').size();
		if (size != 0) {
			$('#left > option:selected').appendTo($('#right'));
		} else {
			$('#left>option:first-child').appendTo($('#right'));
		}
	});
	$('#all1').click(function() {
		$('#left > option').appendTo($('#right'));
	});
	$('#one2').click(function() {
		var size = $('#right>option:selected').size();
		if (size != 0) {
			$('#right > option:selected').appendTo($('#left'));
		} else {
			$('#right>option:first-child').appendTo($('#left'));
		}
        $('#left > option').attr("selected","selected");
	});
	$('#all2').click(function() {
		$('#right > option').appendTo($('#left'));
        $('#left > option').attr("selected","selected");
	});
});


$("#auth-role-btn").click(function(){
    
    $('#left > option').attr("selected","selected");
    
    var params = $("#auth-role-form").serializeArray();
    
    $.ajax({
        type: "POST",
        url: "<?php echo U('/role/addAuthRole');?>",
        data: params,
        dataType: "json",
        success: function(data){
            $("#role-modal").modal('hide');
            alert(data.content);
            $("roleGrid").datagrid("reload");
        }
    });
});

</script>