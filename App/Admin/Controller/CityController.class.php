<?php
namespace Admin\Controller;

class CityController extends CommonController {
    
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
        
        $City = M("City");
        
        // 要查询的页码
        $page = (I('post.page','')) ? I('post.page') : 1;
        // 要查询的行数
        $rows = (I('post.rows','')) ? I('post.rows') : 20;
        
        // 要查询的实际行数
        $total = $City->where($condition)->count();
        // 要查询的数据
        $list = $City->where($condition)->limit($rows * ($page-1).','.$rows)->select();
        
        // 表格数据
        $data = array();
        $data['total'] = $total;
        $data['rows'] = $list ? $list : '';
      
        print_r(json_encode($data));
    }

    /**
     * 
     * 下拉菜单
     */
    public function dropdownJson()
    {
        $City = M("City");
        
        $keyword = I("get.keyword","");
        
        if(!empty($keyword))
        {
            $condition['provincecode'] = $keyword;
            $citys = $City->where($condition)->select();
        }
        else
        {
            $citys = "";
        }
        
        // 下拉列表数据
        $data = array();
        $data['message']  = '';
        $data['redirect'] = '';
        $data['code']     = 200;
        $data['value']    = $citys ? $citys : '';
        
        print_r(json_encode($data));
    }
    
    /**
     * 
     * 到达修改页面
     */
    public function toModify()
    {
        $id   = I("get.id");
        
        $City = M("City");
        
        $city = $City->find($id);
        
        $this->assign("city", $city);
        
        $this->display("modify");
    }
    
    /**
     * 
     * 修改
     */
    public function modify()
    {
        $inputData = I("post.");
        
        $City = M("City");
        
        $info = $City->find($inputData['id']);
        
        if($info['citycode'] != $inputData['citycode'])
        {
            $condition['citycode'] = $inputData['citycode'];
            $temp = $City->where($condition)->select();
            if( !empty($temp) )
            {
                $this->ajaxReturn( array('state' => -1, 'content' => '城市编码已经存在,修改失败~') );
                exit();
            }
        }
        
        $City->save($inputData);
        $this->ajaxReturn( array('state' => 1, 'content' => '修改成功~') );
    }
    
    /**
     * 
     * 到达添加页面
     */
    public function toAdd()
    {
        $this->display("add");
    }
    
    /**
     * 
     * 添加
     */
    public function add()
    {
        $inputData = I("post.");
        
        $City = M("City");
        
        $condition['citycode'] = $inputData['citycode'];
        
        $temp = $City->where($condition)->select();
        
        if( !empty($temp) )
        {
            $this->ajaxReturn( array('state' => -1, 'content' => '城市编码已经存在,添加失败~') );
            exit();
        }
        
        $City->add($inputData);
        
        $this->ajaxReturn( array('state' => 1, 'content' => '添加成功~') );
    }
    
    /**
     * 
     * 删除
     */
    public function delete()
    {
        $County = M("County");
        $City   = M("City");
        
        $ids = I("post.ids");
        
        $idArr = preg_split('/[,]/', $ids);
        
        foreach($idArr as $v)
        {
            $condition['cityid'] = $v;
            $temp = $County->where($condition)->select();
            if( !empty($temp) )
            {
                $this->ajaxReturn( array('state' => -1, 'content' => '请先删除相关区县信息,删除失败~') );
                exit();
            }
        }
        
        $City->delete($ids);
        
        $this->ajaxReturn( array('state' => 1, 'content' => '删除成功~') );
    }

    /**
     * 
     */
    public function _empty($method)
    {
       echo '您访问的方法：' . $method . ' 不存在！'; 
    }

}