<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>控制台 - 后台管理系统</title>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- basic styles -->
		<link href="/RealHome/Public/assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/RealHome/Public/assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="/RealHome/Public/assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<!-- fonts -->
		<!--
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />
		-->
		<!-- ace styles -->

		<link rel="stylesheet" href="/RealHome/Public/assets/css/ace.min.css" />
		<link rel="stylesheet" href="/RealHome/Public/assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="/RealHome/Public/assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="/RealHome/Public/assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="/RealHome/Public/assets/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		
		

		<!--[if lt IE 9]>
		<script src="/RealHome/Public/assets/js/html5shiv.js"></script>
		<script src="/RealHome/Public/assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		<div class="navbar navbar-default" id="navbar">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand">
						<small>
							<i class="icon-leaf"></i>
							LAMP兄弟连 后台管理系统
						</small>
					</a><!-- /.brand -->
				</div><!-- /.navbar-header -->

				<div class="navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="grey">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-tasks"></i>
								<span class="badge badge-grey">4</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="icon-ok"></i>
									还有4个任务完成
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">软件更新</span>
											<span class="pull-right">65%</span>
										</div>

										<div class="progress progress-mini ">
											<div style="width:65%" class="progress-bar "></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">硬件更新</span>
											<span class="pull-right">35%</span>
										</div>

										<div class="progress progress-mini ">
											<div style="width:35%" class="progress-bar progress-bar-danger"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">单元测试</span>
											<span class="pull-right">15%</span>
										</div>

										<div class="progress progress-mini ">
											<div style="width:15%" class="progress-bar progress-bar-warning"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">错误修复</span>
											<span class="pull-right">90%</span>
										</div>

										<div class="progress progress-mini progress-striped active">
											<div style="width:90%" class="progress-bar progress-bar-success"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										查看任务详情
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="purple">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-bell-alt icon-animated-bell"></i>
								<span class="badge badge-important">8</span>
							</a>

							<ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="icon-warning-sign"></i>
									8条通知
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-pink icon-comment"></i>
												新闻评论
											</span>
											<span class="pull-right badge badge-info">+12</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<i class="btn btn-xs btn-primary icon-user"></i>
										切换为编辑登录..
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-success icon-shopping-cart"></i>
												新订单
											</span>
											<span class="pull-right badge badge-success">+8</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-info icon-twitter"></i>
												粉丝
											</span>
											<span class="pull-right badge badge-info">+11</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										查看所有通知
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="green">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-envelope icon-animated-vertical"></i>
								<span class="badge badge-success">5</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="icon-envelope-alt"></i>
									5条消息
								</li>

								<li>
									<a href="#">
										<img src="/RealHome/Public/assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Alex:</span>
												不知道写啥 ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>1分钟以前</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										<img src="/RealHome/Public/assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Susan:</span>
												不知道翻译...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>20分钟以前</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										<img src="/RealHome/Public/assets/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Bob:</span>
												到底是不是英文 ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>下午3:15</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="inbox.html">
										查看所有消息
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="/RealHome/Public/assets/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>欢迎光临,</small>
									<?php echo ($_SESSION['admin_user']['username']); ?>
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="icon-cog"></i>
										重置密码
									</a>
								</li>

								<li>
									<a href="<?php echo U('User/profile');?>">
										<i class="icon-user"></i>
										个人资料
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="<?php echo U('Public/logout');?>">
										<i class="icon-off"></i>
										退出
									</a>
								</li>
							</ul>
						</li>
					</ul><!-- /.ace-nav -->
				</div><!-- /.navbar-header -->
			</div><!-- /.container -->
		</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

				<div class="sidebar" id="sidebar">
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>

					<div class="sidebar-shortcuts" id="sidebar-shortcuts">
						<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
							<button class="btn btn-success">
								<i class="icon-signal"></i>
							</button>

							<button class="btn btn-info">
								<i class="icon-pencil"></i>
							</button>

							<button class="btn btn-warning">
								<i class="icon-group"></i>
							</button>

							<button class="btn btn-danger">
								<i class="icon-cogs"></i>
							</button>
						</div>

						<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
							<span class="btn btn-success"></span>

							<span class="btn btn-info"></span>

							<span class="btn btn-warning"></span>

							<span class="btn btn-danger"></span>
						</div>
					</div><!-- #sidebar-shortcuts -->

					<ul class="nav nav-list">
						<li <?php if((CONTROLLER_NAME) == "Index"): ?>class="active"<?php endif; ?>>
							<a href="<?php echo U('Index/index');?>">
								<i class="icon-dashboard"></i>
								<span class="menu-text"> 控制台 </span>
							</a>
						</li>

						<li> <!-- 地域管理 -->
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 地域管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu" <?php if((CONTROLLER_NAME) == "Categorys"): ?>style="display:block"<?php endif; ?>>
								<li <?php if((CONTROLLER_NAME== 'Categorys') and (ACTION_NAME== 'index')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Categorys/index');?>">
										<i class="icon-double-angle-right"></i>
										城市列表
									</a>
								</li>

								<li <?php if((CONTROLLER_NAME== 'Categorys') and (ACTION_NAME== 'treeLists')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Categorys/treeList');?>">
										<i class="icon-double-angle-right"></i>
										区域树列表
									</a>
								</li>

								<li <?php if((CONTROLLER_NAME== 'Categorys') and (ACTION_NAME== 'add')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Categorys/add');?>"  >
										<i class="icon-double-angle-right icon-plus"></i>
										区域添加
									</a>
								</li>
							</ul>
						</li>
						
						<!-- 房屋管理 -->
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 房屋管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu" <?php if((CONTROLLER_NAME) == "Goods"): ?>style="display:block"<?php endif; ?>>
								<li <?php if((CONTROLLER_NAME== 'Goods') and (ACTION_NAME== 'index')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Goods/index');?>">
										<i class="icon-double-angle-right"></i>
										房屋列表
									</a>
								</li>
								<li <?php if((CONTROLLER_NAME== 'Goods') and (ACTION_NAME== 'add')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Goods/add');?>"  >
										<i class="icon-double-angle-right icon-plus"></i>
										房屋添加
									</a>
								</li>
							</ul>
						</li>

						<!--房源图片管理-->
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 房源图片管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu" <?php if((CONTROLLER_NAME) == "Goods"): ?>style="display:block"<?php endif; ?>>
								<li <?php if((CONTROLLER_NAME== 'GoodsImg') and (ACTION_NAME== 'index')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('GoodsImg/index');?>">
										<i class="icon-double-angle-right"></i>
										图片列表
									</a>
								</li>
								<li <?php if((CONTROLLER_NAME== 'GoodsImg') and (ACTION_NAME== 'add')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('GoodsImg/add');?>"  >
										<i class="icon-double-angle-right icon-plus"></i>
										图片添加
									</a>
								</li>
							</ul>
						</li>
						<!--图片管理-->


						<li><!--首页管理-->
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 轮播图管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu" <?php if((CONTROLLER_NAME) == "Header"): ?>style="display:block"<?php endif; ?>>
								<li <?php if((CONTROLLER_NAME== 'Header') and (ACTION_NAME== 'index')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Header/index');?>">
										<i class="icon-double-angle-right"></i>
										图片详情
									</a>
								</li>


								<li <?php if((CONTROLLER_NAME== 'Header') and (ACTION_NAME== 'upload')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Header/upload');?>"  >
										<i class="icon-double-angle-right icon-plus"></i>
										添加图片
									</a>
								</li>
							</ul>
						</li>


						
						<li><!--首页管理-->
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 热门城市管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu" <?php if((CONTROLLER_NAME) == "City"): ?>style="display:block"<?php endif; ?>>
								<li <?php if((CONTROLLER_NAME== 'City') and (ACTION_NAME== 'index')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('City/index');?>">
										<i class="icon-double-angle-right"></i>
										热门城市详情
									</a>
								</li>
							</ul>
						</li>											
							

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 后台用户管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu" <?php if((CONTROLLER_NAME) == "User"): ?>style="display:block"<?php endif; ?>>
								<li <?php if((CONTROLLER_NAME== 'User') and (ACTION_NAME== 'index')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('User/index');?>">
										<i class="icon-double-angle-right"></i>
										管理员列表
									</a>
								</li>
								<li <?php if((CONTROLLER_NAME== 'User') and (ACTION_NAME== 'add')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('User/add');?>"  >
										<i class="icon-double-angle-right icon-plus"></i>
										添加管理员
									</a>
								</li>
							</ul>
						</li>
						
						<li>
							<a href="<?php echo U('Yonghu/index');?>" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 前台用户管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 角色管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu" <?php if((CONTROLLER_NAME) == "Role"): ?>style="display:block"<?php endif; ?>>
								<li <?php if((CONTROLLER_NAME== 'Role') and (ACTION_NAME== 'index')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Role/index');?>">
										<i class="icon-double-angle-right"></i>
										角色列表
									</a>
								</li>
								<li <?php if((CONTROLLER_NAME== 'Role') and (ACTION_NAME== 'add')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Role/add');?>"  >
										<i class="icon-double-angle-right icon-plus"></i>
										角色添加
									</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 订单管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu" <?php if((CONTROLLER_NAME) == "Orders"): ?>style="display:block"<?php endif; ?>>
								<li <?php if((CONTROLLER_NAME== 'Orders') and (ACTION_NAME== 'index')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Orders/index');?>">
										<i class="icon-double-angle-right"></i>
										订单列表
									</a>
								</li>
								<li <?php if((CONTROLLER_NAME== 'Orders') and (ACTION_NAME== 'add')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Orders/add');?>"  >
										<i class="icon-double-angle-right icon-plus"></i>
										订单处理
									</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 角色管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu" <?php if((CONTROLLER_NAME) == "Role"): ?>style="display:block"<?php endif; ?>>
								<li <?php if((CONTROLLER_NAME== 'Role') and (ACTION_NAME== 'index')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Role/index');?>">
										<i class="icon-double-angle-right"></i>
										角色列表
									</a>
								</li>
								<li <?php if((CONTROLLER_NAME== 'Role') and (ACTION_NAME== 'add')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Role/add');?>"  >
										<i class="icon-double-angle-right icon-plus"></i>
										角色添加
									</a>
								</li>
							</ul>
						</li>
						

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 节点管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu" <?php if((CONTROLLER_NAME) == "Node"): ?>style="display:block"<?php endif; ?>>
								<li <?php if((CONTROLLER_NAME== 'Node') and (ACTION_NAME== 'index')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Node/index');?>">
										<i class="icon-double-angle-right"></i>
										节点列表
									</a>
								</li>
								<li <?php if((CONTROLLER_NAME== 'Node') and (ACTION_NAME== 'add')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Node/add');?>"  >
										<i class="icon-double-angle-right icon-plus"></i>
										节点添加
									</a>
								</li>
							</ul>
						</li>
					
					<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 投诉管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu" <?php if((CONTROLLER_NAME) == "Complain"): ?>style="display:block"<?php endif; ?>>
								<li <?php if((CONTROLLER_NAME== 'Complain') and (ACTION_NAME== 'index')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Complain/index');?>">
										<i class="icon-double-angle-right"></i>
										待处理投诉
									</a>
								</li>
								<li <?php if((CONTROLLER_NAME== 'Complain') and (ACTION_NAME== 'finish')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Complain/finish');?>"  >
										<i class="icon-double-angle-right icon-plus"></i>
										已处理投诉
									</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="<?php echo U('Comment/index');?>" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 评论 </span>

								<b class="arrow icon-angle-down"></b>
							</a>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 友情链接管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu" <?php if((CONTROLLER_NAME) == "Blogroll"): ?>style="display:block"<?php endif; ?>>
								<li <?php if((CONTROLLER_NAME== 'Blogroll') and (ACTION_NAME== 'index')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Blogroll/index');?>">
										<i class="icon-double-angle-right"></i>
										友情链接列表
									</a>
								</li>
								<li <?php if((CONTROLLER_NAME== 'Blogroll') and (ACTION_NAME== 'add')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Blogroll/add');?>"  >
										<i class="icon-double-angle-right icon-plus"></i>
										友情链接添加
									</a>
								</li>

							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 公告管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu" <?php if((CONTROLLER_NAME) == "Notice"): ?>style="display:block"<?php endif; ?>>
								<li <?php if((CONTROLLER_NAME== 'Notice') and (ACTION_NAME== 'index')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Notice/index');?>">
										<i class="icon-double-angle-right"></i>
										公告列表
									</a>
								</li>
								<li <?php if((CONTROLLER_NAME== 'Notice') and (ACTION_NAME== 'add')): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Notice/add');?>"  >
										<i class="icon-double-angle-right icon-plus"></i>
										公告添加
									</a>
								</li>

							</ul>
						</li>
					
					</ul><!-- /.nav-list -->

					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>

				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							
	<li>
		<i class="icon-home home-icon"></i>
		<a href="#">首页</a>
	</li>
	<li class="active">订单管理</li>

						</ul><!-- .breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="icon-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- #nav-search -->
					</div>

					<div class="page-content">
						<div class="page-header">
							
	<h1>
		订单管理
		<small>
			<i class="icon-double-angle-right"></i>
			 订单详情
		</small>
	</h1>

						</div><!-- /.page-header -->
						
	<h3>房源详情</h3>
		<table class="table">
			<tr align='left' bgcolor="#ccc">
				<th>编号</th>
				<!-- <th>房东</th> -->
				<th>地址</th>
				<th>租户</th>
				<th>手机号</th>
				<th>入住月数</th>
				<th>金额</th>
				<th>订单状态</th>
				<th>支付状态</th>
				<th>取消状态</th>
				<!-- <th>操作</th> -->
			</tr>
			<tr>
				<td><?php echo ($list["id"]); ?></td>
				<!-- <td><?php echo ($vo["gid"]); ?></td> -->
				<td><?php echo ($list["address"]); ?></td>
				<td><?php echo ($list["receiver"]); ?></td>
				<td><?php echo ($list["phone"]); ?></td>
				<td><?php echo ($list["months"]); ?></td>
				<td><?php echo ($list["amount"]); ?></td>
				<td><?php if($vo["status"] == 1): ?>未确认<?php else: ?>已确认<?php endif; ?></td>
				<td><?php if($vo["ispay"] == 1): ?>未支付<?php else: ?>已支付<?php endif; ?></td>
				<td><?php if($vo["cancel"] == 1): ?>已入住<?php else: ?>订单取消<?php endif; ?></td>
			</tr>
		</table>
	<h3>租户详情</h3>
		<table class="table">
			<tr align='left' bgcolor="#ccc">
				<th>编号</th>
				<!-- <th>房东</th> -->
				<th>地址</th>
				<th>租户</th>
				<th>手机号</th>
				<th>入住月数</th>
				<th>金额</th>
				<th>订单状态</th>
				<th>支付状态</th>
				<th>取消状态</th>

			</tr>
			<tr>
				<td><?php echo ($ulist["id"]); ?></td>
				<!-- <td><?php echo ($vo["gid"]); ?></td> -->
				<td><?php echo ($ulist["address"]); ?></td>
				<td><?php echo ($ulist["receiver"]); ?></td>
				<td><?php echo ($ulist["phone"]); ?></td>
				<td><?php echo ($ulist["months"]); ?></td>
				<td><?php echo ($ulist["amount"]); ?></td>
				<td><?php if($vo["status"] == 1): ?>未确认<?php else: ?>已确认<?php endif; ?></td>
				<td><?php if($vo["ispay"] == 1): ?>未支付<?php else: ?>已支付<?php endif; ?></td>
				<td><?php if($vo["cancel"] == 1): ?>已入住<?php else: ?>订单取消<?php endif; ?></td>
				
			
			</tr>
		</table>
	

					</div><!-- /.page-content -->
				</div><!-- /.main-content -->

				<div class="ace-settings-container" id="ace-settings-container">
					<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
						<i class="icon-cog bigger-150"></i>
					</div>

					<div class="ace-settings-box" id="ace-settings-box">
						<div>
							<div class="pull-left">
								<select id="skin-colorpicker" class="hide">
									<option data-skin="default" value="#438EB9">#438EB9</option>
									<option data-skin="skin-1" value="#222A2D">#222A2D</option>
									<option data-skin="skin-2" value="#C6487E">#C6487E</option>
									<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
								</select>
							</div>
							<span>&nbsp; 选择皮肤</span>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
							<label class="lbl" for="ace-settings-navbar"> 固定导航条</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
							<label class="lbl" for="ace-settings-sidebar"> 固定滑动条</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
							<label class="lbl" for="ace-settings-breadcrumbs">固定面包屑</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
							<label class="lbl" for="ace-settings-rtl">切换到左边</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
							<label class="lbl" for="ace-settings-add-container">
								切换窄屏
								<b></b>
							</label>
						</div>
					</div>
				</div><!-- /#ace-settings-container -->
			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<!--
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		-->
		<!-- <![endif]-->

		<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='/RealHome/Public/assets/js/jquery-2.0.3.min.js'>"+"<"+"script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='/RealHome/Public/assets/js/jquery.mobile.custom.min.js'>"+"<"+"script>");
		</script>
		<script src="/RealHome/Public/assets/js/bootstrap.min.js"></script>
		<script src="/RealHome/Public/assets/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="/RealHome/Public/assets/js/excanvas.min.js"></script>
		<![endif]-->

		<script src="/RealHome/Public/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="/RealHome/Public/assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="/RealHome/Public/assets/js/jquery.slimscroll.min.js"></script>
		<script src="/RealHome/Public/assets/js/jquery.easy-pie-chart.min.js"></script>
		<script src="/RealHome/Public/assets/js/jquery.sparkline.min.js"></script>
		<script src="/RealHome/Public/assets/js/flot/jquery.flot.min.js"></script>
		<script src="/RealHome/Public/assets/js/flot/jquery.flot.pie.min.js"></script>
		<script src="/RealHome/Public/assets/js/flot/jquery.flot.resize.min.js"></script>

		<!-- ace scripts -->

		<script src="/RealHome/Public/assets/js/ace-elements.min.js"></script>
		<script src="/RealHome/Public/assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			jQuery(function($) {
				$('.easy-pie-chart.percentage').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
					var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
					var size = parseInt($(this).data('size')) || 50;
					$(this).easyPieChart({
						barColor: barColor,
						trackColor: trackColor,
						scaleColor: false,
						lineCap: 'butt',
						lineWidth: parseInt(size/10),
						animate: /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()) ? false : 1000,
						size: size
					});
				})
			
				$('.sparkline').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
					$(this).sparkline('html', {tagValuesAttribute:'data-values', type: 'bar', barColor: barColor , chartRangeMin:$(this).data('min') || 0} );
				});
			
			
			
			
			  var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
			  var data = [
				{ label: "social networks",  data: 38.7, color: "#68BC31"},
				{ label: "search engines",  data: 24.5, color: "#2091CF"},
				{ label: "ad campaigns",  data: 8.2, color: "#AF4E96"},
				{ label: "direct traffic",  data: 18.6, color: "#DA5430"},
				{ label: "other",  data: 10, color: "#FEE074"}
			  ]
			  function drawPieChart(placeholder, data, position) {
			 	  $.plot(placeholder, data, {
					series: {
						pie: {
							show: true,
							tilt:0.8,
							highlight: {
								opacity: 0.25
							},
							stroke: {
								color: '#fff',
								width: 2
							},
							startAngle: 2
						}
					},
					legend: {
						show: true,
						position: position || "ne", 
						labelBoxBorderColor: null,
						margin:[-30,15]
					}
					,
					grid: {
						hoverable: true,
						clickable: true
					}
				 })
			 }
			 drawPieChart(placeholder, data);
			
			 /**
			 we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
			 so that's not needed actually.
			 */
			 placeholder.data('chart', data);
			 placeholder.data('draw', drawPieChart);
			
			
			
			  var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
			  var previousPoint = null;
			
			  placeholder.on('plothover', function (event, pos, item) {
				if(item) {
					if (previousPoint != item.seriesIndex) {
						previousPoint = item.seriesIndex;
						var tip = item.series['label'] + " : " + item.series['percent']+'%';
						$tooltip.show().children(0).text(tip);
					}
					$tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
				} else {
					$tooltip.hide();
					previousPoint = null;
				}
				
			 });
			
			
			
			
			
			
				var d1 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d1.push([i, Math.sin(i)]);
				}
			
				var d2 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d2.push([i, Math.cos(i)]);
				}
			
				var d3 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.2) {
					d3.push([i, Math.tan(i)]);
				}
				
			
				var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
				$.plot("#sales-charts", [
					{ label: "Domains", data: d1 },
					{ label: "Hosting", data: d2 },
					{ label: "Services", data: d3 }
				], {
					hoverable: true,
					shadowSize: 0,
					series: {
						lines: { show: true },
						points: { show: true }
					},
					xaxis: {
						tickLength: 0
					},
					yaxis: {
						ticks: 10,
						min: -2,
						max: 2,
						tickDecimals: 3
					},
					grid: {
						backgroundColor: { colors: [ "#fff", "#fff" ] },
						borderWidth: 1,
						borderColor:'#555'
					}
				});
			
			
				$('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('.tab-content')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			
			
				$('.dialogs,.comments').slimScroll({
					height: '300px'
			    });
				
				
				//Android's default browser somehow is confused when tapping on label which will lead to dragging the task
				//so disable dragging when clicking on label
				var agent = navigator.userAgent.toLowerCase();
				if("ontouchstart" in document && /applewebkit/.test(agent) && /android/.test(agent))
				  $('#tasks').on('touchstart', function(e){
					var li = $(e.target).closest('#tasks li');
					if(li.length == 0)return;
					var label = li.find('label.inline').get(0);
					if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
				});
			
				$('#tasks').sortable({
					opacity:0.8,
					revert:true,
					forceHelperSize:true,
					placeholder: 'draggable-placeholder',
					forcePlaceholderSize:true,
					tolerance:'pointer',
					stop: function( event, ui ) {//just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
						$(ui.item).css('z-index', 'auto');
					}
					}
				);
				$('#tasks').disableSelection();
				$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
					if(this.checked) $(this).closest('li').addClass('selected');
					else $(this).closest('li').removeClass('selected');
				});
				
			
			})
		</script>
	<div style="display:none">
		<!--
		<script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script>
		-->
		</div>
</body>
</html>