<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$imges = M('himages')->where(array('status'=>array('eq','1')))->select();
    	$this->assign('images',$imges);
        $cimage = M('cimages')->select();
        $this->assign('cimage',$cimage);
     	$this->assign('title','LOREM');
        $this->display();
    }

    public function about()
    {
         
        $this->display();
    }


}