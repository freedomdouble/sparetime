<?php if (!defined('THINK_PATH')) exit();?><!--表单开始-->
<form id="modify-resource-form" action="javascript:void(0)">

    <input type="hidden" name="id" value="<?php echo ($resource["id"]); ?>"/>
    
    <!--标题开始-->
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title"><p class="glyphicon glyphicon-edit" aria-hidden="true"></p>修改资源</h4>
    </div>
    <!--标题结束-->
    
    <div class="modal-body">
    
      <div class="row">
  
        <div class="col-md-6">
          <!--名称开始-->
          <div class="form-group input-group">
            <div class="input-group-addon">名称</div>
            <input type="text" class="form-control input-sm" name="resourcename" value="<?php echo ($resource["resourcename"]); ?>" placeholder="资源名称" required="required"/>
          </div>
          <!--名称结束-->
         </div>
         
         <div class="col-md-6"> 
          <!--地址开始-->
          <div class="form-group input-group">
            <div class="input-group-addon">地址</div>
            <input type="text" class="form-control input-sm" name="resourceurl" value="<?php echo ($resource["resourceurl"]); ?>" placeholder="资源地址"/>
          </div>
          <!--地址结束-->
         </div> 
          
      </div>
      
      <!--模块开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">模块名</div>
        <input type="text" class="form-control input-sm" name="model" value="<?php echo ($resource["model"]); ?>" placeholder="模块名"/>
      </div>
      <!--模块结束-->
      
      <!--控制器开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">控制器</div>
        <input type="text" class="form-control input-sm" name="controller" value="<?php echo ($resource["controller"]); ?>" placeholder="控制器"/>
      </div>
      <!--控制器结束-->
      
      <!--方法开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">方法名</div>
        <input type="text" class="form-control input-sm" name="method" value="<?php echo ($resource["method"]); ?>" placeholder="方法名"/>
      </div>
      <!--方法结束-->
      
      <div class="row">  
  
      <div class="col-md-6">
        <!--别名开始-->
        <div class="form-group input-group">
          <div class="input-group-addon">别名</div>
          <input type="text" class="form-control input-sm" name="resourcealias" value="<?php echo ($resource["resourcealias"]); ?>"  placeholder="资源别名"/>
        </div>
        <!--别名结束-->
      </div>
      
      <div class="col-md-6">
        <!--排序开始-->
        <div class="form-group input-group">
          <div class="input-group-addon">排序</div>
          <input type="number" class="form-control input-sm" name="orderby" value="<?php echo ($resource["orderby"]); ?>" placeholder="资源排序"/>
        </div>
        <!--排序结束-->
      </div>
        
    </div>
      
    <div class="row">
    
      <div class="col-md-6">
        <!--等级开始-->
        <div class="form-group input-group">
          <div class="input-group-addon">等级</div>
          <input type="number" class="form-control input-sm" name="level" value="<?php echo ($resource["level"]); ?>" placeholder="资源等级"/>
        </div>
        <!--等级结束-->
      </div>
       
      <div class="col-md-6"> 
        <!--类型开始-->
        <div class="form-group input-group">
          <div class="input-group-addon">类型</div>
          <input type="number" class="form-control input-sm" name="resourcetype" value="<?php echo ($resource["resourcetype"]); ?>" placeholder="资源类型"/>
        </div>
        <!--类型结束-->
      </div>
      
    </div>
  
    <div class="row"> 
     
      <div class="col-md-6">  
        <!--图标开始-->
        <div class="form-group input-group">
          <div class="input-group-addon">图标</div>
          <input type="text" class="form-control input-sm" name="resourceicon" value="<?php echo ($resource["resourceicon"]); ?>" placeholder="资源图标"/>
        </div>
        <!--图标结束-->
      </div>
      
      <div class="col-md-6"> 
        <!--目标开始-->
        <div class="form-group input-group">
          <div class="input-group-addon">目标</div>
          <input type="text" class="form-control input-sm" name="resourcetarget" value="<?php echo ($resource["resourcetarget"]); ?>" placeholder="资源目标"/>
        </div>
        <!--目标结束-->
      </div>
      
    </div> 
   
     <div class="row">
     
      <div class="col-md-6"> 
        <!--父级开始-->
        <div class="form-group input-group">
          <div class="input-group-addon">父级</div>
          <input type="text" class="form-control input-sm" name="parentid" value="<?php echo ($resource["parentid"]); ?>" placeholder="资源父级" readonly="true"/>
        </div>
        <!--父级结束-->
      </div>
      
      <div class="col-md-6"> 
        <!--事件开始-->
        <div class="form-group input-group">
          <div class="input-group-addon">事件</div>
          <input type="text" class="form-control input-sm" name="event" value="<?php echo ($resource["event"]); ?>" placeholder="资源事件"/>
        </div>
        <!--事件结束-->
      </div>
        
     </div>
   
      <div class="row"> 
      
       <div class="col-md-6"> 
          <!--状态开始-->
          <?php if($resource["status"] == 1): echo W('Dict/generateRadio',array('状态','status','132456'));?>
          <?php else: ?>
            <?php echo W('Dict/generateRadio',array('状态','status','132456',1)); endif; ?>
          <!--状态结束-->
       </div>
   
       <div class="col-md-6"> 
          <!--公共开始-->
          <?php if($resource["common"] == 1): echo W('Dict/generateRadio',array('公共','common','124356'));?>
          <?php else: ?>
            <?php echo W('Dict/generateRadio',array('公共','common','124356',1)); endif; ?>
          <!--公共结束-->
        </div>
        
      </div>
      
      <!--描述开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">描述</div>
        <input type="text" class="form-control input-sm" name="resourcedesc" value="<?php echo ($resource["resourcedesc"]); ?>" placeholder="资源描述"/>
      </div>
      <!--描述结束-->
    
    </div>
    
    <div class="modal-footer">
        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">关闭</button>
        <button type="submit" class="btn btn-primary btn-sm">修改</button>
    </div>
</form>
<!--修改资源表单结束-->


<script type="text/javascript">

$("#modify-resource-form").submit(function() {
    var params = $("#modify-resource-form").serializeArray();
    $.ajax({
        type: "POST",
        url: "<?php echo U('/resource/modify');?>",
        data: params,
        dataType: "json",
        success: function(data){
            $('#resource-modal').modal('hide')
            alert(data.content);
            $('#resourceGrid').datagrid('reload');
        }
    });
});

</script>