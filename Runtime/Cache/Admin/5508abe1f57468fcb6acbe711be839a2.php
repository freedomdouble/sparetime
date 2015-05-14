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
              <input type="text" class="form-control input-sm" placeholder="区县名称" name="countyname|EQ"/>
            </div>
            <div class="form-group input-group">
              <input type="text" class="form-control input-sm" placeholder="区县编码" name="countycode|EQ"/>
            </div>
            <div class="form-group input-group">
              <input type="text" class="form-control input-sm" placeholder="省编码" name="provincecode|EQ"/>
            </div>
            <div class="form-group input-group">
              <input type="text" class="form-control input-sm" placeholder="市编码" name="citycode|EQ"/>
            </div>
            <a id="searchbtn" class="btn btn-primary btn-sm">搜索</a>
            <button type="reset" class="btn btn-primary btn-sm">清除</button>
        </form>
    </div>
    <!--搜索结束-->
    
    <!--操作按钮开始-->
    <?php echo W('Resource/adminOperaMenu',array(36));?>
    <!--操作按钮结束-->
    
    <!--countyGrid 开始-->
    <table id="countyGrid"></table>
    <!--countyGrid 结束-->
    
</div>
<!--面板结束-->

<!--模态框开始-->
<div class="modal fade" id="county-modal" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog"><div class="modal-content" id="county-content"></div></div>
</div>
<!--模态框结束-->



<script type="text/javascript">


$('#countyGrid').datagrid({
  url: "<?php echo U('county/dataGrid');?>",
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
      {field:'countyname',title:'区县名称',width:120},
      {field:'countycode',title:'区县编码',width:160},
      {field:'provincecode',title:'省级编码',width:160},
      {field:'citycode',title:'市级编码',width:160},
  ]],
});

/**
 * 
 * 修改
 */
function modifyopera(obj)
{
    // 选中的行数据
    var rows = $('#countyGrid').datagrid('getChecked'); 
    
    if( rows.length < 1 )
    {
        alert("请选择一行~");
    }
    else if( rows.length > 1 )
    {
        alert("只能选择一行");
    }
    else
    {
        var id = rows[0].id;
        var url = obj.rel + '?id=' + id;
        
        $("#modifycounty").attr("data-toggle", "modal");
        $("#modifycounty").attr("data-target", "#county-modal"); 
        
        $("#county-content").load(url);
    }
}

/**
 * 
 * 添加
 */
function addopera(obj)
{
    var url = obj.rel;
    $("#addcounty").attr("data-toggle", "modal");
    $("#addcounty").attr("data-target", "#county-modal"); 
    $("#county-content").load(url);
}

/**
 * 
 * 删除
 */
function deleteopera(obj)
{
    var rows = $('#countyGrid').datagrid('getChecked');
    
    if(rows.length < 1)
    {
        alert("请至少选择一行~");
    }
    else
    {
        var delconfirm = confirm("您确定要删除吗？");
        
        if( delconfirm == true )
        {
            var ids = "";
        
            for(var i=0; i < rows.length; i++)
            {
                ids += (rows[i].id + ',');    
            }
            
            ids = ids.substr(0, ids.length-1);
            
            $.ajax({
                type: 'POST',
                dataType: 'json',
                url: "<?php echo U('/county/delete');?>",
                data: {ids: ids},
                success: function(data){ 
                    alert(data.content);
                    $('#countyGrid').datagrid('reload');
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
    $('#countyGrid').datagrid('load', params);
});


/**
 * 
 * 清除数据
 */
$('#county-modal').on('hidden.bs.modal', function (e) {
    $("#modifycounty").removeAttr("data-toggle");
    $("#modifycounty").removeAttr("data-target");
    $(':input','#add-county-form').not(':button, :submit, :reset, :hidden').val('').removeAttr('checked').removeAttr('selected');
});

</script>