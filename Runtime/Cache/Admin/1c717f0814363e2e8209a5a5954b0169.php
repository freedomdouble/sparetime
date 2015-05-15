<?php if (!defined('THINK_PATH')) exit();?><style type="text/css">

.panel{
    margin-bottom: 0;
}

</style>

<!--面板开始-->
<div class="panel panel-default">
    <!--搜索开始-->
    <div class="panel-heading">
        <form class="form-inline" id="typesearch-form">
            <div class="form-group input-group">
              <input type="text" class="form-control input-sm" placeholder="类型名称" name="dicttypename|EQ" />
            </div>
            <div class="form-group input-group">
              <input type="text" class="form-control input-sm" placeholder="类型编码" name="dicttypecode|EQ" />
            </div>
            <div class="form-group input-group">
              <input type="text" class="form-control input-sm" placeholder="父级编码" name="parentcode|EQ" />
            </div>
            <a id="typesearchbtn" class="btn btn-primary btn-sm">类型搜索</a>
            <button type="reset" class="btn btn-primary btn-sm">清除</button>
        </form>
    </div>
    <!--搜索结束-->
    
    <!--搜索开始-->
    <div class="panel-heading">
        <form class="form-inline" id="dictsearch-form">
            <div class="form-group input-group">
              <input type="text" class="form-control input-sm" placeholder="字典名称" name="dictname|EQ" />
            </div>
            <div class="form-group input-group">
              <input type="text" class="form-control input-sm" placeholder="字典编码" name="dictcode|EQ" />
            </div>
            <div class="form-group input-group">
              <input type="text" class="form-control input-sm" placeholder="类型编码" name="dicttypecode|EQ" />
            </div>
            <a id="dictsearchbtn" class="btn btn-primary btn-sm">字典搜索</a>
            <button type="reset" class="btn btn-primary btn-sm">清除</button>
        </form>
    </div>
    <!--搜索结束-->

    <!--操作按钮开始-->
    <?php echo W('Resource/adminOperaMenu',array(23));?> 
    <!--操作按钮结束-->

    <div class="row">
        <div class="col-md-6">
        <!--dicttypeGrid 开始-->
        <table id="dicttypeGrid"></table>
        <!--dicttypeGrid 结束-->
        </div>
    
        <div class="col-md-6">
        <!--dictGrid 开始-->
        <table id="dictGrid"></table>
        <!--dictGrid 结束-->
        </div>
    </div>
    
</div>
<!--面板结束-->

<!--模态框开始-->
<div class="modal fade" id="dict-modal" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog"><div class="modal-content" id="dict-content"></div></div>
</div>
<!--模态框结束-->



<script type="text/javascript">
  
$('#dicttypeGrid').datagrid({
  url: "<?php echo U('/dicttype/dataGrid');?>",
  height: 390,
  singleSelect: false,
  striped: true,
  pagination: true,
  rownumbers: true,
  pageNumber: 1,
  pageSize: 20,
  checkOnSelect: true,
  pageList: [10,20,30,40,50],
  loadMsg: '正在加载数据...',
  frozenColumns:[[
      {field:'id',checkbox: true},
      {field:'dicttypename',title:'字典类型名称',width:120},
  ]],
  columns:[[
      {field:'dicttypecode',title:'字典类型编码',width:120},
      {field:'parentcode',title:'父级类型编码',width:120},
      {field:'createtime',title:'创建时间',width:120},
      {field:'dicttypedesc',title:'字典类型描述',width:120},
  ]]
});

/**
 * 
 * 类型搜索
 */
$("#typesearchbtn").click(function () {
    var params = $("#typesearch-form").serializeArray();
    $('#dicttypeGrid').datagrid('load', params);
});


$('#dictGrid').datagrid({
  url: "<?php echo U('/dict/dataGrid');?>",
  height: 390,
  singleSelect: false,
  striped: true,
  pagination: true,
  rownumbers: true,
  pageNumber: 1,
  pageSize: 20,
  checkOnSelect: true,
  pageList: [10,20,30,40,50],
  loadMsg: '正在加载数据...',
  frozenColumns:[[
      {field:'id',checkbox: true},
      {field:'dictname',title:'字典名称',width:120},
      {field:'dictcode',title:'字典编码',width:120},
  ]],
  columns:[[
      {field:'dicttypecode',title:'字典类型编码',width:120},
      {field:'status',title:'状态',width:120},
      {field:'orderby',title:'排序',width:120},
      {field:'createtime',title:'创建时间',width:120},
  ]]
});

/**
 * 
 * 字典搜索
 */
$("#dictsearchbtn").click(function () {
    var params = $("#dictsearch-form").serializeArray();
    $('#dictGrid').datagrid('load', params);
});

/**
 * 
 * 添加
 */
function addopera(obj)
{
    // 选中的行数据
    var rows = $('#dicttypeGrid').datagrid('getChecked');
    
    var url = obj.rel;
    
    if(rows.length > 1)
    {
        alert("最多只能选择一行~");
    }
    else if(rows.length == 1)
    {
        var id = rows[0].id;
        url = url + "?id=" + id;
        $("#adddict").attr("data-toggle", "modal");
        $("#adddict").attr("data-target", "#dict-modal");
        $("#dict-content").load(url);
    }
    else
    {
        alert("请选择字典类型~")
    }
}

/**
 * 
 * 修改
 */
function modifyopera(obj)
{
    // 选中的行数据
    var rows = $('#dictGrid').datagrid('getChecked');
    
    if(rows.length > 1)
    {
        alert("只能选择一行~");
    }
    else if(rows.length < 1)
    {
        alert("请选择一行~");
    }
    else
    {
        var id = rows[0].id;
        var url = obj.rel;
        url = url + "?id=" + id;
        $("#modifydict").attr("data-toggle", "modal");
        $("#modifydict").attr("data-target", "#dict-modal");
        $("#dict-content").load(url);
    }
}

/**
 * 
 * 删除
 */
function deleteopera(obj)
{
    // 选中的行数据
    var rows = $('#dictGrid').datagrid('getChecked');
    
    if(rows.length < 1)
    {
        alert("请至少选择一行~");
    }
    else
    {
        var delconfirm = confirm("您确定要删除吗？");

        if( delconfirm == true )
        {
            var ids='';
            for(var i=0; i<rows.length; i++)
            {
                ids += (rows[i].id + ',');
            }
            ids = ids.substr(0, ids.length-1);
            $.ajax({
                type: "POST",
                url: "<?php echo U('/dict/delete');?>",
                data: {ids: ids},
                dataType: "json",
                success: function(data){ 
                    alert(data.content);
                    $('#dictGrid').datagrid('reload');
                }
            });
        }
    }
}

/**
 * 
 * 清除数据
 */
$('#dict-modal').on('hidden.bs.modal', function (e) {
    $("#adddict").removeAttr("data-toggle");
    $("#adddict").removeAttr("data-target");
    $("#modifydict").removeAttr("data-toggle");
    $("#modifydict").removeAttr("data-target");
    $(':input','#add-dict-form').not(':button, :submit, :reset, :hidden').val('').removeAttr('checked').removeAttr('selected');
});


</script>