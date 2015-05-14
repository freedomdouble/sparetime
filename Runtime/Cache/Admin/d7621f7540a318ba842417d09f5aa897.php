<?php if (!defined('THINK_PATH')) exit();?><!--分配角色表单开始-->
<form id="dist-role-form">
    
  <input type="hidden" name="userid" value="<?php echo ($user["id"]); ?>"/>

  <!--标题开始-->
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title"><span class="glyphicon glyphicon-share" aria-hidden="true"></span>分配角色</h4>
  </div>
  <!--标题结束-->
  
  <div class="modal-body">
  
      <!--名称开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">登录名称</div>
        <input type="text" class="form-control input-sm" name="loginname" value="<?php echo ($user["loginname"]); ?>" readonly="true"/>
      </div>
      <!--名称结束-->
    
      <!--拥有的角色开始-->
      <select multiple="multiple" id="left" style="min-height: 420px; width: 45%; float: left;" name="roleids[]">
        <?php if(is_array($ownroles)): $i = 0; $__LIST__ = $ownroles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ownrole): $mod = ($i % 2 );++$i;?><option value="<?php echo ($ownrole["id"]); ?>"><?php echo ($ownrole["rolename"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
      </select>
      <!--拥有的角色结束-->
      
      <div style="float: left; width: 10%; text-align: center; padding-top: 80px;">
        <input type="button" id="one1" value="&gt;"/><br />
        <input type="button" id="one2" value="&lt;"/><br />
        <input type="button" id="all1" value="&gt;&gt;"/><br />
        <input type="button" id="all2" value="&lt;&lt;"/><br />
      </div>
      
      <!--不拥有的角色开始-->
      <select multiple="true" id="right" style="min-height: 420px; width: 45%;">
        <?php if(is_array($noownroles)): $i = 0; $__LIST__ = $noownroles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$noownrole): $mod = ($i % 2 );++$i;?><option value="<?php echo ($noownrole["id"]); ?>"><?php echo ($noownrole["rolename"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
      </select>
      <!--不拥有的角色结束-->
      
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">关闭</button>
    <a type="button" class="btn btn-primary btn-sm" id="dist-role-btn">保存</a>
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


$("#dist-role-btn").click(function(){
    
    $('#left > option').attr("selected","selected");
    
    var params = $("#dist-role-form").serializeArray();
    
    $.ajax({
        type: "POST",
        url: "<?php echo U('/user/distRole');?>",
        data: params,
        dataType: "json",
        success: function(data){
            $("#user-modal").modal('hide');
            alert(data.content);
            $("userGrid").datagrid("reload");
        }
    });
});

</script>