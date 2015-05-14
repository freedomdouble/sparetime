<?php

namespace Admin\Controller;

class DicttypeController extends CommonController {
  
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
        
        // 要查询的页码
        $page = (I('post.page','')) ? I('post.page') : 1;
        // 要查询的行数
        $rows = (I('post.rows','')) ? I('post.rows') : 20;
        
        $Dicttype = M('Dicttype');
        
        $total = $Dicttype->where($condition)->count();
        $list  = $Dicttype->where($condition)->limit($rows * ($page-1).','.$rows)->select();
        
        // 表格数据
        $data = array();
        $data['total'] = $total;
        $data['rows'] = $list ? $list : '';
          
        print_r(json_encode($data));
    }
    
    /**
     * 
     * 到达添加页面
     */
    public function toAdd()
    {
        // 没有选择父级字典内容
        if( !isset($_GET['id']) )
        {
            $this->display('add');
            exit();
        }
        
        $id = I('get.id');
        
        $Dicttype = M('Dicttype');
        
        $dicttype = $Dicttype->find($id);
        
        $this->assign('dicttype', $dicttype);
        
        $this->display('add');
    }
    
    /**
     * 
     * 添加
     */
    public function add()
    {
        $Dicttype = M('Dicttype');
        
        $inputData = I('post.');
        
        if($inputData['parentcode'] == $inputData['dicttypecode'])
        {
            $this->ajaxReturn( array('state' => -1, 'content' => '类型编码和父级编码不能相同,添加失败~') );
            exit();
        } 
        
        $condition['dicttypecode'] = $inputData['dicttypecode'];
        
        $info = $Dicttype->where($condition)->find();
          
        if( !empty($info) )
        {
            $this->ajaxReturn( array('state' => -1, 'content' => '编码已经存在,添加失败~') );
            exit();
        }
        
        $inputData['createtime'] = date("Y-m-d H:i:s");
        
        $Dicttype->add($inputData);
        
        $this->ajaxReturn( array('state' => 1, 'content' => '添加成功~') );
    }
    
    /**
     * 
     * 到达修改页面
     */
    public function toModify()
    {
        $id = I('get.id');
        
        $Dicttype = M('Dicttype');
        
        // 当前要修改的字典类型
        $dicttype = $Dicttype->find($id);
        
        $this->assign('dicttype', $dicttype);
        
        $this->display('modify');
    }
    
    /**
     * 
     * 修改
     */
    public function modify()
    {
        $Dicttype = M('Dicttype');
        
        // 输入的数据
        $inputData = I('post.');
        
        if($inputData['parentcode'] == $inputData['dicttypecode'])
        {
            $this->ajaxReturn( array('state' => -1, 'content' => '类型编码和父级编码不能相同,添加失败~') );
            exit();
        }
        
        // 当前修改的字典类型
        $dicttype = $Dicttype->find($inputData['id']);
              
        if( $dicttype['dicttypecode'] != $inputData['dicttypecode'] )
        {
            // 查看编码是否已经存在
            $condition['dicttypecode'] = $inputData['dicttypecode'];
            $info = $Dicttype->where($condition)->find();
            if( !empty($info) )
            {
                $this->ajaxReturn( array('state' => -1, 'content' => '编码已经存在,添加失败~') );
                exit();
            }
        }
        
        $Dicttype->save($inputData);
        
        $this->ajaxReturn( array('state' => 1, 'content' => '修改成功~') );
    }
    
    /**
     * 
     * 删除
     */
    public function delete()
    {
        $Dict = M('Dict');
        $Dicttype = M('Dicttype');
        
        // 要删除的主键集合
        $ids = I('post.ids');
        
        $idArr = preg_split('/[,]/', $ids);
        
        foreach($idArr as $value)
        {
            $condiction['dicttypeid'] = $value;
            $dictInfo = $Dict->where($condiction)->find();
            
            if( !empty($dictInfo) )
            {
                $this->ajaxReturn( array('state' => -1, 'content' => '请先删除字典内容,删除失败~') );
                exit();
            }
            
            $dicttypeInfo = $Dicttype->find($value);
            
            $map['parentcode'] = $dicttypeInfo['dicttypecode'];
            
            $tempInfo = $Dicttype->where($map)->find();
            
            if( !empty($tempInfo) )
            {
                $this->ajaxReturn( array('state' => -1, 'content' => '请先删除子字典类型,删除失败~') );
                exit();
            }
        }
        
        $Dicttype->delete($ids);
        
        $this->ajaxReturn( array('state' => 1, 'content' => '删除成功~') );
    }
    
    /**
     * 
     * 下拉选项
     */
    public function dropdownJson()
    {
        $Dicttype = M("Dicttype");
        
        $dicttypes = $Dicttype->select();
        
        // 下拉列表数据
        $data = array();
        $data['message']  = '';
        $data['redirect'] = '';
        $data['code']     = 200;
        $data['value']    = $dicttypes ? $dicttypes : '';
        
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