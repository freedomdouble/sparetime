<?php
namespace Admin\Model;


class ResourceModel extends CommonModel
{
    /**
     *  最大的资源
     */
    public function findMaxResource() {
        
        $Resource = M('Resource');
        
        $maxResource = $Resource->order(array('resourcegroup'=>'desc','resourcecode'=>'desc'))->limit(1)->select();
        
        if( empty($maxResource) ) {
            
            return false;
        } else{
            
            return $maxResource[0];
        }
    }
    
    /**
     * 
     */
    public function getByReourceurl($resourceurl)
    {
        $coundition['resourceurl'] = $resourceurl;
        
        $Resource = M('Resource');
        
        return $Resource->where($coundition)->find();
    }
}