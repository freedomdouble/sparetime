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
              <input type="text" class="form-control input-sm" placeholder="角色名称" name="rolename|EQ"/>
            </div>
            <div class="form-group input-group">
              <input type="text" class="form-control input-sm" placeholder="角色编码" name="rolecode|EQ"/>
            </div>
            <a id="searchbtn" class="btn btn-primary btn-sm">搜索</a>
            <button type="reset" class="btn btn-primary btn-sm">清除</button>
        </form>
    </div>
    <!--搜索结束-->
    
    <!--操作按钮开始-->
    <?php echo W('Resource/adminOperaMenu',array(10));?> 
    <!--操作按钮结束-->
    
    <!--roleGrid 开始-->
    <table id="roleGrid"></table>
    <!--roleGrid 结束-->
    
</div>
<!--面板结束-->

<!--模态框开始-->
<div class="modal fade" id="role-modal" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog"><div class="modal-content" id="role-content"></div></div>
</div>
<!--模态框结束-->



<script type="text/javascript">

/**
 * 
 * 授权
 */
function authrole(obj)
{
    var url = obj.rel;
    //选中
    var rows = $('#roleGrid').datagrid('getChecked');
    
    if(rows.length < 1)
    {
        alert("请选择一行");
    }
    else if(rows.length > 1)
    {
        alert("只能选择一行");
    }
    else
    {
        var id = rows[0].id;
        
        url = url + "?id=" + id;
        
        $("#authrole").attr("data-toggle", "modal");
        $("#authrole").attr("data-target", "#role-modal");
        
        $("#role-content").load(url);
    }
}

$('#roleGrid').datagrid({
  url: "<?php echo U('/role/dataGrid');?>",
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
      {field:'rolename',title:'角色名称',width:70},
      {field:'rolecode',title:'角色编码',width:70},
      {field:'createtime',title:'创建时间',width:160},
      {field:'roledesc',title:'描述',width:160},
  ]],
});

/*
 * 
 * 添加
 */
function addopera(obj)
{
    $("#addrole").attr("data-toggle", "modal");
    $("#addrole").attr("data-target", "#role-modal");
    
    var url = obj.rel;
    
    $("#role-content").load(url);
}

/**
 * 
 * 删除
 */
function deleteopera(obj)
{
    var url = obj.rel;
    // 选中的行数据
    var rows = $('#roleGrid').datagrid('getChecked'); 
    //  判断是否选中行
    if(rows.length < 1)
    {
        alert("请选择要删除的行");
    }
    else
    {
        var delconfirm = confirm("您确定要删除吗？");
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
                url: "<?php echo U('/role/delete');?>",
                data: {ids: ids},
                dataType: "json",
                success: function(data){ 
                    alert(data.content);
                    $('#roleGrid').datagrid('reload');
                }
            });
        }
    } 
}

/**
 * 
 * 搜索
 */
$("#searchbtn").click(function () {
    var params = $("#search-form").serializeArray();
    $('#roleGrid').datagrid('load', params);
});

/**
 * 
 * 修改
 */
function modifyopera(obj)
{
    // 选中的行数据
    var rows = $('#roleGrid').datagrid('getChecked'); 
    
    if( rows.length < 1 )
    {
        alert("请至少选择一行~");
    }
    else if( rows.length > 1 )
    {
        alert("只能选择一行");
    }
    else
    {
        var id = rows[0].id;
        var url = obj.rel + '?id=' + id;
        
        $("#modifyrole").attr("data-toggle", "modal");
        $("#modifyrole").attr("data-target", "#role-modal"); 
        
        $("#role-content").load(url);
    }
}

/**
 * 
 * 清除数据
 */
$('#role-modal').on('hidden.bs.modal', function (e) {
    $("#authrole").removeAttr("data-toggle");
    $("#authrole").removeAttr("data-target");
    $("#modifyrole").removeAttr("data-toggle");
    $("#modifyrole").removeAttr("data-target");
    $(':input','#add-role-form').not(':button, :submit, :reset, :hidden').val('').removeAttr('checked').removeAttr('selected');
});
    
</script>