<?php if (!defined('THINK_PATH')) exit();?><!--表单开始-->
<form id="add-county-form" action="javascript:void(0)">

  <!--标题开始-->
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title"><p class="glyphicon glyphicon-plus" aria-hidden="true"></p>添加区县</h4>
  </div>
  <!--标题结束-->
  <div class="modal-body">
  
      <!--名称开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">区县名称</div>
        <input type="text" class="form-control input-sm" name="countyname" placeholder="区县名称" required="required"/>
      </div>
      <!--名称结束-->
      
      <!--编码开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">区县编码</div>
        <input type="text" class="form-control input-sm" name="countycode" placeholder="区县编码" required="required"/>
      </div>
      <!--编码结束-->
      
      <!--省开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">省份编码</div>
        <input type="text" class="form-control input-sm" name="provincecode" id="provincecode" placeholder="省份编码" required="required"/>
        <div class="input-group-btn">
            <button type="button" class="btn btn-default dropdown-toggle input-sm" data-toggle="dropdown">
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu dropdown-menu-right" role="menu"></ul>
        </div>
      </div>
      <!--省结束-->
      
      <!--市开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">城市编码</div>
        <input type="text" class="form-control input-sm" name="citycode" id="citycode" placeholder="城市编码" required="required"/>
        <div class="input-group-btn">
            <button type="button" class="btn btn-default dropdown-toggle input-sm" data-toggle="dropdown">
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu dropdown-menu-right" role="menu"></ul>
        </div>
      </div>
      <input type="hidden" name="cityid" id="cityid"/>
      <!--市结束-->
      
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">关闭</button>
    <button type="submit" class="btn btn-primary btn-sm">保存</button>
  </div>
</form>
<!--表单结束-->

<script type="text/javascript">

$("#add-county-form").submit(function() {
    var params = $("#add-county-form").serializeArray();
    $.ajax({
        type: "POST",
        url: "<?php echo U('/county/add');?>",
        data: params,
        dataType: "json",
        success: function(data){
            $('#county-modal').modal('hide')
            alert(data.content);
            $('#countyGrid').datagrid('reload');
        }
    });
});

// 省下拉选项
var provinceBsSuggest = $("input#provincecode").bsSuggest({
    url: "/index.php/province/dropdownJson?keyword=",
    getDataMethod: "url",
    idField: "id",
    keyField: "provincecode",
    listAlign: "right",
}).on('onSetSelectValue', function (e, keyword) {
        $("#citycode").val(keyword.key);
});

// 市下拉选项
var cityBsSuggest = $("input#citycode").bsSuggest({
    url: "/index.php/city/dropdownJson?keyword=",
    getDataMethod: "url",
    idField: "id",
    keyField: "citycode",
    listAlign: "right",
}).on('onSetSelectValue', function (e, keyword) {
        $("#cityid").val(keyword.id);
});

</script>