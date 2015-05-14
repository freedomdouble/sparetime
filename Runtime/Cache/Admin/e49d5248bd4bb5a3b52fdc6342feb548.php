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
              <input type="text" class="form-control input-sm" placeholder="市名称" name="cityname|EQ"/>
            </div>
            <div class="form-group input-group">
              <input type="text" class="form-control input-sm" placeholder="市编码" name="citycode|EQ"/>
            </div>
            <div class="form-group input-group">
              <input type="text" class="form-control input-sm" placeholder="省编码" name="provincecode|EQ"/>
            </div>
            <a id="searchbtn" class="btn btn-primary btn-sm">搜索</a>
            <button type="reset" class="btn btn-primary btn-sm">清除</button>
        </form>
    </div>
    <!--搜索结束-->
    
    <!--操作按钮开始-->
    <?php echo W('Resource/adminOperaMenu',array(32));?>
    <!--操作按钮结束-->
    
    <!--cityGrid 开始-->
    <table id="cityGrid"></table>
    <!--cityGrid 结束-->
    
</div>
<!--面板结束-->

<!--模态框开始-->
<div class="modal fade" id="city-modal" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog"><div class="modal-content" id="city-content"></div></div>
</div>
<!--模态框结束-->



<script type="text/javascript">


$('#cityGrid').datagrid({
  url: "<?php echo U('/city/dataGrid');?>",
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
      {field:'cityname',title:'市名称',width:120},
      {field:'citycode',title:'市编码',width:160},
      {field:'provincecode',title:'省编码',width:160},
  ]],
});

/**
 * 
 * 修改
 */
function modifyopera(obj)
{
    // 选中的行数据
    var rows = $('#cityGrid').datagrid('getChecked'); 
    
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
        
        $("#modifycity").attr("data-toggle", "modal");
        $("#modifycity").attr("data-target", "#city-modal"); 
        
        $("#city-content").load(url);
    }
}

/**
 * 
 * 添加
 */
function addopera(obj)
{
    var url = obj.rel;
    $("#addcity").attr("data-toggle", "modal");
    $("#addcity").attr("data-target", "#city-modal"); 
    $("#city-content").load(url);
}

/**
 * 
 * 删除
 */
function deleteopera(obj)
{
    var rows = $('#cityGrid').datagrid('getChecked');
    
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
                url: "<?php echo U('/city/delete');?>",
                data: {ids: ids},
                success: function(data){ 
                    alert(data.content);
                    $('#cityGrid').datagrid('reload');
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
    $('#cityGrid').datagrid('load', params);
});

/**
 * 
 * 清除数据
 */
$('#city-modal').on('hidden.bs.modal', function (e) {
    $("#modifycity").removeAttr("data-toggle");
    $("#modifycity").removeAttr("data-target");
    $(':input','#add-city-form').not(':button, :submit, :reset, :hidden').val('').removeAttr('checked').removeAttr('selected');
});


</script>