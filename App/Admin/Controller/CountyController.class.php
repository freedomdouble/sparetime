<?php
namespace Admin\Controller;

class CountyController extends CommonController {
    
    /**
     * 
     */
    public function index()
    {
        $this->display();
    }
    
    /**
     * 
     * 表格数据加载
     */
    public function dataGrid()
    {
        $condition = grid_search_filter(I("post."));
        
        $County = M("County");
        
        // 要查询的页码
        $page = (I('post.page','')) ? I('post.page') : 1;
        // 要查询的行数
        $rows = (I('post.rows','')) ? I('post.rows') : 20;
        
        // 要查询的实际行数
        $total = $County->where($condition)->count();
        // 要查询的数据
        $list = $County->where($condition)->limit($rows * ($page-1).','.$rows)->select();
        
        // 表格数据
        $data = array();
        $data['total'] = $total;
        $data['rows'] = $list ? $list : '';
      
        print_r(json_encode($data));
    }
    
    /**
     * 
     *  到达修改页面
     */
    public function toModify()
    {
        $id = I("get.id");
        
        $County = M("County");
        
        $county = $County->find($id);
        
        $this->assign("county", $county);
        
        $this->display("modify");
    }
    
    /**
     * 
     * 修改
     */
    public function modify()
    {
        $inputData = I("post.");
        
        $County = M("County");
        
        // 修改前的信息
        $county = $County->field('countycode')->find($inputData['id']);
        
        // 判断区县编码是否有改变
        if( $county['countycode'] != $inputData['countycode'] )
        {
            // 判断区县编码是否唯一
            $condition['countycode'] = $inputData['countycode'];
            $temp = $County->where($condition)->select();
            if( !empty($temp) )
            {
                $this->ajaxReturn( array('state' => -1, 'content' => '区县编码已经存在,修改失败~') );
                exit();
            }
        }
        
        $County->save($inputData);
        
        $this->ajaxReturn( array('state' => 1, 'content' => '修改成功~') );
    }
    
    /**
     * 
     *  到达添加页面
     */
    public function toAdd()
    {
        $this->display("add");
    }
    
    /**
     * 
     * 添加操作
     */
    public function add()
    {
        $County = M("County");
        
        $inputData = I("post.");
        
        $condition['countycode'] = $inputData['countycode'];
        
        $temp = $County->where($condition)->select();
        
        if( !empty($temp) )
        {
            $this->ajaxReturn( array('state' => -1, 'content' => '区县编码已经存在,添加失败~') );
            exit();
        }    
        
        $County->add($inputData);
        $this->ajaxReturn( array('state' => 1, 'content' => '添加成功~') );
    }
    
    /**
     * 
     * 删除
     */
    public function delete()
    {
        $ids = I('post.ids');
        
        $County = M("County");
        
        $County->delete($ids);
        
        $this->ajaxReturn( array('state' => 1, 'content' => '删除成功~') );
    }

    /**
     * 
     * 下拉菜单
     */
    public function dropdownJson()
    {
        $County = M("County");
        
        $keyword = I("get.keyword","");
        
        if(!empty($keyword))
        {
            $condition['citycode'] = $keyword;
            $countys = $County->where($condition)->select();
        }
        else
        {
            $countys = "";
        }
        
        // 下拉列表数据
        $data = array();
        $data['message']  = '';
        $data['redirect'] = '';
        $data['code']     = 200;
        $data['value']    = $countys ? $countys : '';
        
        print_r(json_encode($data));
    }

    /**
     * 
     */
    public function _empty($method)
    {
       echo '您访问的方法：' . $method . ' 不存在！'; 
    }

}