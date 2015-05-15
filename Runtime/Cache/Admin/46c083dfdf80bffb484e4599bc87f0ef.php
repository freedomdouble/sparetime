<?php if (!defined('THINK_PATH')) exit();?><!--表单开始-->
<form id="add-dicttype-form" action="javascript:void(0)">

  <!--标题开始-->
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>添加字典类型</h4>
  </div>
  <!--标题结束-->
  
  <div class="modal-body">
  
      <!--名称开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">名称</div>
        <input type="text" class="form-control input-sm" name="dicttypename" placeholder="类型名称" required="required"/>
      </div>
      <!--名称结束-->
      
      <!--类型编码开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">编码</div>
        <input type="text" class="form-control input-sm" name="dicttypecode" placeholder="类型编码" required="required"/>
      </div>
      <!--类型编码结束-->
      
      <!--父级开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">父级</div>
        <input type="text" class="form-control input-sm" name="parentcode" value="<?php echo ($dicttype["dicttypecode"]); ?>" id="parentcode" placeholder="父级编码"/>
        <div class="input-group-btn">
            <button type="button" class="btn btn-default dropdown-toggle input-sm" data-toggle="dropdown">
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu dropdown-menu-right" role="menu"></ul>
        </div>
      </div>
      <!--父级结束-->
      
      <!--描述开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">描述</div>
        <input type="text" class="form-control input-sm" name="dicttypedesc" placeholder="类型描述"/>
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

$("#add-dicttype-form").submit(function() {
    var params = $("#add-dicttype-form").serializeArray();
    $.ajax({
        type: "POST",
        url: "<?php echo U('/dicttype/add');?>",
        data: params,
        dataType: "json",
        success: function(data){
            $('#dicttype-modal').modal('hide')
            alert(data.content);
            $('#dicttypeGrid').datagrid('reload');
        }
    });
});

// 父级编码下拉选项
var parentcodeBsSuggest = $("input#parentcode").bsSuggest({
    url: "/index.php/dicttype/dropdownJson",
    getDataMethod: "url",
    idField: "id",
    keyField: "dicttypecode",
    listAlign: "right",
}).on('onSetSelectValue', function (e, keyword) {
});

</script>