<?php if (!defined('THINK_PATH')) exit();?><style type="text/css">

.panel{
    margin-bottom: 0;
}

</style>

<!--面板开始-->
<div class="panel panel-default">
    <!--搜索开始-->
    <div class="panel-heading">
        <form class="form-inline" id="search-form">
            <div class="form-group input-group">
              <input type="text" class="form-control input-sm" placeholder="类型名称" name="dicttypename|EQ" />
            </div>
            <div class="form-group input-group">
              <input type="text" class="form-control input-sm" placeholder="类型编码" name="dicttypecode|EQ" />
            </div>
            <div class="form-group input-group">
              <input type="text" class="form-control input-sm" placeholder="父级编码" name="parentcode|EQ" />
            </div>
            <a id="searchbtn" class="btn btn-primary btn-sm">搜索</a>
            <button type="reset" class="btn btn-primary btn-sm">清除</button>
        </form>
    </div>
    <!--搜索结束-->
    
    <!--操作按钮开始-->
    <?php echo W('Resource/adminOperaMenu',array(19));?> 
    <!--操作按钮结束-->
    
    <!--dicttypeGrid 开始-->
    <table id="dicttypeGrid"></table>
    <!--dicttypeGrid 结束-->
    
</div>
<!--面板结束-->

<!--模态框开始-->
<div class="modal fade" id="dicttype-modal" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog"><div class="modal-content" id="dicttype-content"></div></div>
</div>
<!--模态框结束-->



<script type="text/javascript">
  
$('#dicttypeGrid').datagrid({
  url: "<?php echo U('/dicttype/dataGrid');?>",
  height: 440,
  singleSelect: false,
  striped: true,
  pagination: true,
  rownumbers: true,
  pageNumber: 1,
  pageSize: 20,
  checkOnSelect: true,
  pageList: [10,20,30,40,50],
  loadMsg: '正在加载数据...',
  columns:[[
      {field:'id',checkbox: true},
      {field:'dicttypename',title:'类型名称',width:120},
      {field:'dicttypecode',title:'类型编码',width:80},
      {field:'parentcode',title:'父级编码',width:80},
      {field:'createtime',title:'创建时间',width:120},
      {field:'dicttypedesc',title:'描述',width:140}, 
  ]]
});

/**
 * 
 * 搜索
 */
$("#searchbtn").click(function () {
    var params = $("#search-form").serializeArray();
    $('#dicttypeGrid').datagrid('load', params);
});

/**
 *
 * 修改
 */
function modifyopera(obj)
{
    var rows = $('#dicttypeGrid').datagrid('getChecked');
    
    if( rows.length < 1 )
    {
        alert("请选择一行~");
    }
    else if( rows.length > 1 )
    {
        alert("只能选择一行~");
    }
    else
    {
        var id = rows[0].id;
        var url = obj.rel + "?id=" + id;
        $('#modifydicttype').attr("data-toggle", "modal");
        $('#modifydicttype').attr("data-target", "#dicttype-modal");
        $('#dicttype-content').load(url);
    }
}

/**
 *
 * 添加
 */
function addopera(obj)
{
    var rows = $('#dicttypeGrid').datagrid('getChecked');
     
    if( rows.length > 1 )
    {
        alert("最多只能选择一行~");
    }
    else if( rows.length < 1 )
    {
        var url = obj.rel;
        $('#adddicttype').attr("data-toggle", "modal");
        $('#adddicttype').attr("data-target", "#dicttype-modal");
        $('#dicttype-content').load(url);
    }
    else
    {
        $('#adddicttype').attr("data-toggle", "modal");
        $('#adddicttype').attr("data-target", "#dicttype-modal");
        var id = rows[0].id;
        var url = obj.rel + "?id=" + id;
        $('#dicttype-content').load(url);
    }
}

/**
 * 
 * 删除
 */
function deleteopera(obj)
{
    var rows = $('#dicttypeGrid').datagrid('getChecked');
    
    if( rows.length < 1)
    {
        alert("请选择要删除的行~");
    }
    else
    {
        var delconfirm = confirm("是否确定删除？");
         
        // 判断是否要删除
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
                url: "<?php echo U('/dicttype/delete');?>",
                data: {ids: ids},
                dataType: "json",
                success: function(data){ 
                    alert(data.content);
                    $('#dicttypeGrid').datagrid('reload');
                }
            });
        }
    }
}

/**
 * 
 * 清除数据
 */
$('#dicttype-modal').on('hidden.bs.modal', function (e) {
    $("#modifydicttype").removeAttr("data-toggle");
    $("#modifydicttype").removeAttr("data-target");
    $("#adddicttype").removeAttr("data-toggle");
    $("#adddicttype").removeAttr("data-target");
    $(':input','#add-dicttype-form').not(':button, :submit, :reset, :hidden').val('').removeAttr('checked').removeAttr('selected');
});
    
</script>