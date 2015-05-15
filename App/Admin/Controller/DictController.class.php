<?php
namespace Admin\Controller;

class DictController extends CommonController {
    
    /**
     * 
     */
    public function index()
    {
        $this->display();
    }
    
    /**
     * 
     *  表格数据加载
     */
    public function dataGrid()
    {
        $condition = grid_search_filter(I("post."));
        
        // 要查询的页码
        $page = (I('post.page','')) ? I('post.page') : 1;
        // 要查询的行数
        $rows = (I('post.rows','')) ? I('post.rows') : 20;
        
        $Dict = M('Dict');
        
        $total = $Dict->where($condition)->count();
        $list  = $Dict->where($condition)->limit($rows * ($page-1).','.$rows)->select();
        
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
        $Dicttype = M('Dicttype');

        // 字典类型 ID
        $id = I('get.id');
        
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
       $Dict = M('Dict');

       $inputData = I('post.');
       
       $condition['dictcode']     = $inputData['dictcode'];
       $condition['dicttypecode'] = $inputData['dicttypecode'];
       
       $dictInfo = $Dict->where($condition)->find();
       
       if( !empty($dictInfo) )
       {
          $this->ajaxReturn( array('state'=>-1, 'content'=>'字典编码已经存在,添加失败~') );
          exit();
       }
       
       $inputData['createtime'] = date("Y-m-d H:i:s", time());
       
       $Dict->add($inputData);
       
       $this->ajaxReturn( array('state'=>1, 'content'=>'添加字典成功~') );
    }
    
    /**
     * 
     * 到达修改页面
     */
    public function toModify()
    {
        // 字典 ID
        $id = I('get.id');
        
        $Dict = M('Dict');
        
        $dict = $Dict->find($id);
        
        $this->assign('dict', $dict);
        
        $this->display('modify');
    }
    
    /**
     * 
     * 修改
     */
    public function modify()
    {
       $inputData = I('post.');
       
       $Dict = M('Dict');
       
       $dict = $Dict->find($inputData['id']);
        
       if($dict['dictcode'] != $inputData['dictcode'])
       {
          $condition['dictcode']     = $inputData['dictcode'];
          $condition['dicttypecode'] = $inputData['dicttypecode'];
          
          $dictInfo = $Dict->where($condition)->find();
          
          if( !empty($dictInfo) )
          {
             $this->ajaxReturn( array('state'=>-1, 'content'=>'字典编码已经存在,修改失败~') );
             exit();
          }
       }
       
       $Dict->save($inputData);
       
       $this->ajaxReturn( array('state'=>1, 'content'=>'修改成功~') );
    }
    
    /**
     * 
     * 删除
     */
    public function delete()
    {
        $ids = I('post.ids');
        
        $Dict = M('Dict');
        
        $Dict->delete($ids);
        
        $this->ajaxReturn( array('state'=>1, 'content'=>'删除成功~') );
    }
   
    /**
     * 
     */
    public function _empty($method)
    {
       echo '您访问的方法：' . $method . ' 不存在！'; 
    }
}