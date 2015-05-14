<?php if (!defined('THINK_PATH')) exit();?><!--表单开始-->
<form id="modify-county-form" action="javascript:void(0)">

  <input type="hidden" name="id" value="<?php echo ($county["id"]); ?>"/>

  <!--标题开始-->
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title"><p class="glyphicon glyphicon-edit" aria-hidden="true"></p>修改区县</h4>
  </div>
  <!--标题结束-->
  <div class="modal-body">
  
      <!--名称开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">区县名称</div>
        <input type="text" class="form-control input-sm" name="countyname" value="<?php echo ($county["countyname"]); ?>" placeholder="区县名称" required="required"/>
      </div>
      <!--名称结束-->
      
      <!--编码开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">区县编码</div>
        <input type="text" class="form-control input-sm" name="countycode" value="<?php echo ($county["countycode"]); ?>" placeholder="区县编码" required="required"/>
      </div>
      <!--编码结束-->
      
      <!--省开始-->
      <div class="form-group input-group">
        <div class="input-group-addon">省份编码</div>
        <input type="text" class="form-control input-sm" name="provincecode" id="provincecode" value="<?php echo ($county["provincecode"]); ?>" placeholder="省份编码" required="required"/>
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
        <input type="text" class="form-control input-sm" name="citycode" id="citycode" value="<?php echo ($county["citycode"]); ?>" placeholder="城市编码" required="required"/>
        <div class="input-group-btn">
            <button type="button" class="btn btn-default dropdown-toggle input-sm" data-toggle="dropdown">
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu dropdown-menu-right" role="menu"></ul>
        </div>
      </div>
      <input type="hidden" name="cityid" id="cityid" value="<?php echo ($county["cityid"]); ?>"/>
      <!--市结束-->
      
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">关闭</button>
    <button type="submit" class="btn btn-primary btn-sm">修改</button>
  </div>
</form>
<!--表单结束-->

<script type="text/javascript">

$("#modify-county-form").submit(function() {
    var params = $("#modify-county-form").serializeArray();
    $.ajax({
        type: "POST",
        url: "<?php echo U('/county/modify');?>",
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
    url: "/index.php/province/dropdownJson?keywork=",
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