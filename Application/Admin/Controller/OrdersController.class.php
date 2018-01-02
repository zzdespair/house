<?php 
	namespace Admin\Controller;
	
	//用户管理 控制器
	class OrdersController extends AdminController{

		private $_order = null; //数据库操作类
		private $_user = null; //用户表操作类

		//初始化操作
		public function _initialize(){
			parent::_initialize();
			$this->_order = D('orders');
			$this->_user = D('User');
			$this->_goods = D('Goods');
		}


		//列表详情
		public function index(){
			//查询数据
			$list = $this->_order->select();
			// var_dump($list);exit;
			//分配变量
			$this->assign("list",$list);
			
			//加载模板
			$this->display();
		}

	
		//加载修改页面
		public function details(){
			//查出数据
			$vo = $this->_order->where(array('id'=>array('eq',I('id'))))->find();
			//向模板分配数据
			$gid=$vo[gid];
			$uid=$vo[gid];
			// $glist = $this->_user->where()->find();
			// $ulist = $this->_user->where()->find();

			$this->assign('list',$vo);
			$this->assign('glist',$glist);
			$this->assign('ulist',$ulist);
			//加载模板
			$this->display();
		}

}
		


