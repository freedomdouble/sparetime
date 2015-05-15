<?php if (!defined('THINK_PATH')) exit();?><!--表单开始-->
<form id="add-resource-form" action="javascript:void(0)">

  <!--标题开始-->
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>添加资源</h4>
  </div>
  <!--标题结束-->
  
  <div class="modal-body">
  
  <div class="row">
  
    <div class="col-md-6">
      <!--名称开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">名称</div>
        <input type="text" class="form-control input-sm" name="resourcename" placeholder="资源名称" required="required"/>
      </div>
      <!--名称结束-->
     </div>
     
     <div class="col-md-6"> 
      <!--地址开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">地址</div>
        <input type="text" class="form-control input-sm" name="resourceurl" placeholder="资源地址"/>
      </div>
      <!--地址结束-->
     </div> 
      
  </div>
  
  <!--模块开始-->
  <div class="form-group input-group">
    <div class="input-group-addon">模块名</div>
    <input type="text" class="form-control input-sm" name="model" placeholder="模块名"/>
  </div>
  <!--模块结束-->
  
  <!--控制器开始-->
  <div class="form-group input-group">
    <div class="input-group-addon">控制器</div>
    <input type="text" class="form-control input-sm" name="controller" placeholder="控制器"/>
  </div>
  <!--控制器结束-->
  
  <!--方法开始-->
  <div class="form-group input-group">
    <div class="input-group-addon">方法名</div>
    <input type="text" class="form-control input-sm" name="method" placeholder="方法名"/>
  </div>
  <!--方法结束-->
  
  <div class="row">  
  
    <div class="col-md-6">
      <!--别名开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">别名</div>
        <input type="text" class="form-control input-sm" name="resourcealias" placeholder="资源别名"/>
      </div>
      <!--别名结束-->
    </div>
    
    <div class="col-md-6">
      <!--排序开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">排序</div>
        <input type="number" class="form-control input-sm" name="orderby" placeholder="资源排序"/>
      </div>
      <!--排序结束-->
    </div>
      
  </div>
      
  <div class="row">
  
    <div class="col-md-6">
      <!--等级开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">等级</div>
        <input type="number" class="form-control input-sm" name="level" placeholder="资源等级"/>
      </div>
      <!--等级结束-->
    </div>
     
    <div class="col-md-6"> 
      <!--类型开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">类型</div>
        <input type="number" class="form-control input-sm" name="resourcetype" placeholder="资源类型"/>
      </div>
      <!--类型结束-->
    </div>
    
  </div>
  
  <div class="row"> 
   
    <div class="col-md-6">  
      <!--图标开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">图标</div>
        <input type="text" class="form-control input-sm" name="resourceicon" placeholder="资源图标"/>
      </div>
      <!--图标结束-->
    </div>
    
    <div class="col-md-6"> 
      <!--目标开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">目标</div>
        <input type="text" class="form-control input-sm" name="resourcetarget" placeholder="资源目标"/>
      </div>
      <!--目标结束-->
    </div>
    
  </div> 
   
   <div class="row">
   
    <div class="col-md-6"> 
      <!--父级开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">父级</div>
        <input type="text" class="form-control input-sm" name="parentid" placeholder="资源父级" readonly="true" value="<?php echo ($parentid); ?>"/>
      </div>
      <!--父级结束-->
    </div>
    
    <div class="col-md-6"> 
      <!--事件开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">事件</div>
        <input type="text" class="form-control input-sm" name="event" placeholder="资源事件"/>
      </div>
      <!--事件结束-->
    </div>
      
   </div>
   
  <div class="row"> 
  
   <div class="col-md-6"> 
      <!--状态开始-->
      <?php echo W('Dict/generateRadio',array('状态','status','132456'));?>
      <!--状态结束-->
   </div>
   
   <div class="col-md-6"> 
      <!--公共开始-->
      <?php echo W('Dict/generateRadio',array('公共','common','124356',1));?>
      <!--公共结束-->
    </div>
    
  </div>
  
      <!--描述开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">描述</div>
        <input type="text" class="form-control input-sm" name="resourcedesc" placeholder="资源描述"/>
      </div>
      <!--描述结束-->
  </div>
  
  <div class="modal-footer">
    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">关闭</button>
    <button type="submit" class="btn btn-primary btn-sm">保存</button>
  </div>
  
</form>
<!--添加资源表单结束-->

<script type="text/javascript">

$("#add-resource-form").submit(function() {
    var params = $("#add-resource-form").serializeArray();
    $.ajax({
        type: "POST",
        url: "<?php echo U('/resource/add');?>",
        data: params,
        dataType: "json",
        success: function(data){
            $('#resource-modal').modal('hide');
            alert(data.content);
            $('#resourceGrid').datagrid('reload');
        }
    });
});

</script>