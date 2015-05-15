<?php
namespace Admin\Controller;

class ProvinceController extends CommonController {
    
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
        
        $Province = M("Province");
        
        // 要查询的页码
        $page = (I('post.page','')) ? I('post.page') : 1;
        // 要查询的行数
        $rows = (I('post.rows','')) ? I('post.rows') : 20;
        
        // 要查询的实际行数
        $total = $Province->where($condition)->count();
        // 要查询的数据
        $list = $Province->where($condition)->limit($rows * ($page-1).','.$rows)->select();
        
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
        $Provice = M("Province");
        
        $keyword = I("get.keyword","");
        
        if(!empty($keyword))
        {
            $condition['provincename'] = array('LIKE', '%' . $keyword . '%');
            $provinces = $Provice->where($condition)->select();
        }
        else
        {
            $provinces = $Provice->select();
        }
        
        // 下拉列表数据
        $data = array();
        $data['message']  = '';
        $data['redirect'] = '';
        $data['code']     = 200;
        $data['value']    = $provinces ? $provinces : '';
        
        print_r(json_encode($data));
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
        $Province = M("Province");
        
        $inputData = I("post.");
        
        $condition['provincecode'] = $inputData['provincecode'];
        
        $temp = $Province->where($condition)->select();
        
        if( !empty($temp) )
        {
            $this->ajaxReturn( array('state' => -1, 'content' => '编码已经存在,添加失败~') );
            exit();
        }
        
        $Province->add($inputData);
        
        $this->ajaxReturn( array('state' => 1, 'content' => '添加成功~') );
    }
    
    /**
     * 
     * 到达修改页面
     */
    public function toModify()
    {
        $id = I("get.id");
        
        $Province = M("Province");
        
        $province = $Province->find($id);
        
        $this->assign('province',$province);
        
        $this->display("modify");
    }
    
    /**
     * 
     * 修改
     */
    public function modify()
    {
        $Province = M("Province");
        
        $inputData = I("post.");
        
        $info = $Province->find($inputData['id']);
        
        if( $info['provincecode'] != $inputData['provincecode'] )
        {
            $condition['provincecode'] = $inputData['provincecode'];
            $temp = $Province->where($condition)->select();
            if( !empty($temp) )
            {
                $this->ajaxReturn( array('state' => -1, 'content' => '编码已经存在,修改失败~') );
                exit();
            }
        }
        
        $Province->save($inputData);
        
        $this->ajaxReturn( array('state' => -1, 'content' => '修改成功~') );
    }
    
    /**
     * 
     * 删除
     */
    public function delete()
    {
        $City     = M("City");
        $Province = M("Province");
        
        $ids = I("post.ids");
        
        $idArr = preg_split("/[,]/", $ids);
        
        foreach($idArr as $v)
        {
            $condition['provinceid'] = $v;
            $temp = $City->where($condition)->select();
            if( !empty($temp) )
            {
                $this->ajaxReturn( array('state' => -1, 'content' => '请先删除相关市级信息,删除失败~') );
                exit();
            }
        }
        
        $Province->delete($ids);
        
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