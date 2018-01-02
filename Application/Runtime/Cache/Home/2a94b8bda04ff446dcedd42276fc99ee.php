<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link href="/RealHome/Public/Home/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/RealHome/Public/Home/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--menu-->
<script src="/RealHome/Public/Home/js/scripts.js"></script>
<link href="/RealHome/Public/Home/css/styles.css" rel="stylesheet">
<!--//menu-->
<!--theme-style-->
<link href="/RealHome/Public/Home/css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Real Home Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- slide -->
<script src="/RealHome/Public/Home/js/responsiveslides.min.js"></script>
   <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
 
</head>
<body >
<!--header-->
	<!-- <?php unset($_SESSION['home']) ?> -->
	<!-- <?php echo var_dump($cimage);?> -->
	
	<div class="navigation">
		<div class="container-fluid">
			<nav class="pull">
				<ul>
					<li><a  href="index.html">Home</a></li>
					<li><a  href="about.html">About Us</a></li>
					<li><a  href="blog.html">Blog</a></li>
					<li><a  href="terms.html">Terms</a></li>
					<li><a  href="privacy.html">Privacy</a></li>
					<li><a  href="contact.html">Contact</a></li>
				</ul>
			</nav>			
		</div>
	</div>

<div class="header">
	<div class="container">
		<!--logo-->
			<div class="logo">
				<h1><a href="<?php echo U('Index/index');?>">REAL HOME</a></h1>
			</div>
		<!--//logo-->
		<div class="top-nav">
			<ul class="right-icons">
				
					<?php if(($_SESSION['user'] == 0 ) ): ?><li><a  href="<?php echo U('Public/login');?>"><i class="glyphicon glyphicon-user"> </i>Login</a></li>

					<?php else: ?> 

					<li><a  href="<?php echo U('User/index');?>"><i class="glyphicon glyphicon-user"> </i><?php echo($_SESSION['user']['nickname'])?></a></li>

					 <li><a href="<?php echo U('Public/logout');?>"><span ><i class="glyphicon glyphicon-off"> 退出 </i></span></a></li><?php endif; ?>
<!-- 
				<li><a  href="<?php echo U('Public/login');?>"><i class="glyphicon glyphicon-user"> </i>Login</a></li>


				<li><a  href="<?php echo U('Public/login');?>"><i class="glyphicon glyphicon-user"> </i>123</a></li>
 -->
				

				<li><a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a></li>
				
			</ul>
			<div class="nav-icon">
				<div class="hero fa-navicon fa-2x nav_slide_button" id="hero">
						<a href="#"><i class="glyphicon glyphicon-menu-hamburger"></i> </a>
					</div>	
				<!---
				<a href="#" class="right_bt" id="activator"><i class="glyphicon glyphicon-menu-hamburger"></i>  </a>
			--->
			</div>
		<div class="clearfix"> </div>
			<!---pop-up-box---->
			   
				<link href="/RealHome/Public/Home/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
				<script src="/RealHome/Public/Home/js/jquery.magnific-popup.js" type="text/javascript"></script>
			<!---//pop-up-box---->
				<div id="small-dialog" class="mfp-hide">
					    <!----- tabs-box ---->
				<div class="sap_tabs">	
				     <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <ul class="resp-tabs-list">
						  	  <li class="resp-tab-item " aria-controls="tab_item-0" role="tab"><span>All Homes</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>For Sale</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>For Rent</span></li>
							  <div class="clearfix"></div>
						  </ul>				  	 
						  <div class="resp-tabs-container">
						  		<h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>All Homes</h2><div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
								 	<div class="facts">
									  	<div class="login">
											<input type="text" value="Search Address, Neighborhood, City or Zip" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search Address, Neighborhood, City or Zip';}">		
									 		<input type="submit" value="">
									 	</div>        
							        </div>
						  		</div>
							     <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>For Sale</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
									<div class="facts">									
										<div class="login">
											<input type="text" value="Search Address, Neighborhood, City or Zip" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search Address, Neighborhood, City or Zip';}">		
									 		<input type="submit" value="">
									 	</div> 
							        </div>	
								 </div>									
							      <h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span>For Rent</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
									 <div class="facts">
										<div class="login">
											<input type="text" value="Search Address, Neighborhood, City or Zip" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search Address, Neighborhood, City or Zip';}">		
									 		<input type="submit" value="">
									 	</div> 
							         </div>	
							    </div>
					      </div>
					 </div>
					 <script src="/RealHome/Public/Home/js/easyResponsiveTabs.js" type="text/javascript"></script>
				    	<script type="text/javascript">
						    $(document).ready(function () {
						        $('#horizontalTab').easyResponsiveTabs({
						            type: 'default', //Types: default, vertical, accordion           
						            width: 'auto', //auto or any width like 600px
						            fit: true   // 100% fit in a container
						        });
						    });
			  			 </script>	
				</div>
				</div>
				 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>
					
	
		</div>
		<div class="clearfix"> </div>
		</div>	
</div>

<!--//-->	
	<div class=" header-right">
		<div class=" banner">
			 <div class="slider">
			    <div class="callbacks_container">
			      <ul class="rslides" id="slider">	
			      <?php if(is_array($images)): $i = 0; $__LIST__ = $images;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li>
					 
			          	 <div class="banner1" style="background-image: url(/RealHome/Public/Uploads/<?php echo ($v["image"]); ?>)  ">
			           		<div class="caption">
					          	<h3>去旅行,去生活</h3>
					          	<p>哪怕就住一晚</p>
			          		</div>
			          	</div>
			         
			         </li><?php endforeach; endif; else: echo "" ;endif; ?>
					 <!-- <li>
			          	 <div class="banner2">
			           		<div class="caption">
					          	<h3><span>vivam</span>us site</h3>
					          	<p>Nunc dignissim risus idi</p>
			          		</div>
			          	</div>
			         </li>
			         <li>
			          	 <div class="banner3">
			           		<div class="caption">
					          	<h3><span>vivam</span>us site</h3>
					          	<p>Nunc dignissim risus idi</p>
			          		</div>
			          	</div>
			         </li> -->		
			      </ul>
			  </div>
			</div>
		</div>
	</div>
	 	
<!--//header-->
<div class="container">
	
	<!--price-->
	<form action="<?php echo U('Search/search');?>" method="post">
	<div class="price">
		<div class="price-grid">
			<div class="col-sm-3 price-top">
				<h4>province</h4>
				<select class="pro in-drop" name="province">
				</select>
			</div>
			<div class="col-sm-3 price-top">
				<h4>city</h4>
				<select class="city in-drop" name="city">
				</select>
			</div>
			<div class="col-sm-4 price-top">
				<h4>Rooms</h4>
				<select class="in-drop" name="bed">
					<!-- <option>No. of Bedrooms</option> -->
					<option value="1">1 居</option>
					<option value="2">2 居</option>
					<option value="3">3 居</option>
					<option value="4">4 居</option>
					<!-- <option value="">4+ 居</option> -->
				</select>
			</div>
			<div class="col-sm-2 price-top">
				<h4 style='color:#F7F7F7'>立即搜索</h4>
				<input type="submit" class="hvr-sweep-to-right"  value="立即搜索">
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- <div class="price-grid">
			<div class="col-sm-6 price-top1">
				<h4>Price Range</h4>
				<ul>
					<li>
						<select class="in-drop">
							<option>Price From</option>
							<option>0</option>
							<option>5 Lacs </option>
							<option>10 Lacs</option>
							<option>15 Lacs</option>
							<option>20 Lacs</option>
							<option>25 Lacs</option>
							<option>30 Lacs</option>
							<option>35 Lacs</option>
							<option>40 Lacs</option>
							<option>45 Lacs</option>
							<option>50 Lacs</option>
							<option>55 Lacs</option>
							<option>60 Lacs</option>
							<option>65 Lacs</option>
							<option>70 Lacs</option>
							<option>75 Lacs</option>
							<option>80 Lacs</option>
							<option>85 Lacs</option>
							<option>90 Lacs</option>
							<option>95 Lacs</option>
						</select>
					</li>
					<span>-</span>
					<li>
						<select class="in-drop">
							<option>Price To</option>
							<option>5 Lacs</option>
							<option>10 Lacs</option>
							<option>15 Lacs</option>
							<option>20 Lacs</option>
							<option>25 Lacs</option>
							<option>30 Lacs</option>
							<option>35 Lacs</option>
							<option>40 Lacs</option>
							<option>45 Lacs</option>
							<option>50 Lacs</option>
							<option>55 Lacs</option>
							<option>60 Lacs</option>
							<option>65 Lacs</option>
							<option>70 Lacs</option>
							<option>75 Lacs</option>
							<option>80 Lacs</option>
							<option>85 Lacs</option>
							<option>90 Lacs</option>
							<option>95 Lacs</option>
							<option>100 Cr</option>
						</select>
					</li>
				</ul>
			</div>
			<div class="col-sm-6 price-top1">
				<h4>Area</h4>
				<ul>
					<li>
						<select class="in-drop">
							<option>Sqmt From</option>
							<option>0</option>
							<option>500 Sq Ft</option>
							<option>1000 Sq Ft</option>
							<option>1500 Sq Ft</option>
							<option>2000 Sq Ft</option>
							<option>2500 Sq Ft</option>
							<option>3000 Sq Ft</option>
							<option>3500 Sq Ft</option>
							<option>4000 Sq Ft</option>
							<option>4500 Sq Ft</option>
						</select>
					</li>
					<span>-</span>
					<li>
						<select class="in-drop">
							<option>Sqmt To</option>
							<option>500 Sq Ft</option>
							<option>1000 Sq Ft</option>
							<option>1500 Sq Ft</option>
							<option>2000 Sq Ft</option>
							<option>2500 Sq Ft</option>
							<option>3000 Sq Ft</option>
							<option>3500 Sq Ft</option>
							<option>4000 Sq Ft</option>
							<option>4500 Sq Ft</option>
							<option>5000+ Sq Ft</option>
						</select>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div> -->
	</div>
	</form>

				  <script>
			    //获取省份信息
			    $.ajax({
			        type:'get',
			        url:"<?php echo U('Search/address');?>",
			        success:function(data){
			            //先清空原先的数据
			            //遍历省份数据
			            console.log(data);
			            for (var i = 0; i < data.length; i++) {
			                $('<option value="'+data[i].id+'">'+data[i].name+'</option>').appendTo('.pro');
			            }
			        },
			        dataType:'json',
			        async:false,//同步!!!!!!
			    })


			    //绑定事件
			    $('.pro').change(function(){
			        //获取当前的vale值
			        var pid = $(this).val();
			        
			        // 一触发change事件,就清空后面所有的数据
			        // $(this).next('select').show().empty();
			        	$('.city').show().empty();
			        // 保留$(this)变量
			        var _this = $(this);

			        // 请求下一级数据
			        $.ajax({
			            type:'get',
			            url: "<?php echo U('Search/address');?>",
			            data:"pid="+pid,
			            success:function(data){
			                // 如果下一级没数据,就隐藏后面的下拉框
			                if (!data) {
			                    _this.nextAll('select').hide();
			                    return;

			                };
			                // console.log(data);
			                // console.log($(this).constructor);
			                // 填充下一级的数据
			                // console.log(data);
			                for (var i = 0; i < data.length; i++) {
			                	// console.log(_this.next('select'));
			                    $('<option value="'+data[i].id+'">'+data[i].name+'</option>').appendTo($('.city'));
			                }
			                //自动触发后面的select的change事件
			                _this.next('select').trigger('change');
			            },
			            dataType:'json',
			        
			    	})
				})

			    //自动加载省份的change事件
			    $('.pro').trigger('change');

			    </script>
	<!---->
	<div class="top-grid">
		<h3>Top City</h3>
		<div class="grid-at">
			<div class="col-md-3 grid-city">
				<div class="grid-lo">
					<a href="<?php echo U('Goods/index');?>">
						<figure class="effect-layla">
						<img class=" img-responsive" src="/RealHome/Public/Uploads/<?php echo ($cimage['0'][image]); ?>" alt="img06">
						<figcaption>
							<h4><?php echo ($cimage['0']['city']); ?></h4>
							
						</figcaption>			
					</figure>
					</a>
				 </div>
			</div>
			<div class="col-md-3 grid-city">
				<div class="grid-lo">
						<a href="buy_single.html">
					<figure class="effect-layla">
						<img class=" img-responsive" src="/RealHome/Public/Uploads/<?php echo ($cimage['1'][image]); ?>" alt="img06">
						<figcaption>
							<h4><?php echo ($cimage['1']['city']); ?></h4>
							
						</figcaption>			
					</figure>
					</a>
				 </div>
			</div>
			<div class="col-md-6 grid-city grid-city1">
				<div class="grid-me">
				<div class="col-md-8 grid-lo1">
					<div class=" grid-lo">
							<a href="buy_single.html">
					<figure class="effect-layla">
						<img class=" img-responsive" src="/RealHome/Public/Uploads/<?php echo ($cimage['2'][image]); ?>" alt="img06">
						<figcaption>
							<h4 class="effect1"><?php echo ($cimage['2']['city']); ?></h4>
							
						</figcaption>			
					</figure>
					</a>
				 </div>
				</div>
				 <div class="col-md-4 grid-lo2">
				 	<div class=" grid-lo">
				 			<a href="buy_single.html">
					<figure class="effect-layla">
						<img class=" img-responsive" src="/RealHome/Public/Uploads/<?php echo ($cimage['3'][image]); ?>" alt="img06">
						<figcaption>
							<h4 class="effect2"><?php echo ($cimage['3']['city']); ?></h4>
							
						</figcaption>			
					</figure>
					</a>
				 </div>
				 </div>
				 <div class="clearfix"> </div>
			</div>	
			<div class="grid-me">
				<div class="col-md-6 grid-lo3">
					<div class=" grid-lo">
							<a href="buy_single.html">
					<figure class="effect-layla">
						<img class="img-responsive" src="/RealHome/Public/Uploads/<?php echo ($cimage['4'][image]); ?>" alt="img06">
						<figcaption>
							<h4 class="effect3"><?php echo ($cimage['4']['city']); ?></h4>
							
						</figcaption>			
					</figure>
					</a>
				 </div>
				 </div>
				 <div class="col-md-6 grid-lo4">
				 	<div class=" grid-lo">
				 			<a href="buy_single.html">
					<figure class="effect-layla">
						<img class="img-responsive" src="/RealHome/Public/Uploads/<?php echo ($cimage['5'][image]); ?>" alt="img06">
						<figcaption>
							<h4 class="effect3"><?php echo ($cimage['5']['city']); ?></h4>
							
						</figcaption>			
					</figure>
					</a>
				 </div>
				 </div>
				 <div class="clearfix"> </div>
			</div>	
			</div>
			<div class="clearfix"> </div>
		</div>

	</div>
</div>

<div class="container">
	<div class="future">
		<h3 >Fetured Projects</h3>
			<div class="content-bottom-in">
					<ul id="flexiselDemo1">			
						<li><div class="project-fur">
								<a href="single.html" ><img class="img-responsive" src="/RealHome/Public/Home/images/pi.jpg" alt="" />	</a>
									<div class="fur">
										<div class="fur1">
		                                    <span class="fur-money">$2.44 Lacs - 5.28 Lacs </span>
		                                    <h6 class="fur-name"><a href="single.html">Contrary to popular</a></h6>
		                                   	<span>Paris</span>
                               			</div>
			                            <div class="fur2">
			                               	<span>2 BHK</span>
			                             </div>
									</div>					
							</div></li>
							<li><div class="project-fur">
									<a href="single.html" ><img class="img-responsive" src="/RealHome/Public/Home/images/pi1.jpg" alt="" />	</a>
										<div class="fur">
											<div class="fur1">
			                                    <span class="fur-money">$2.44 Lacs - 5.28 Lacs </span>
			                                   <h6 class="fur-name"><a href="single.html">Contrary to popular</a></h6>
			                                   	<span>Paris</span>
	                               			</div>
				                            <div class="fur2">
				                               	<span>2 BHK</span>
				                             </div>
										</div>					
								</div></li>
								<li><div class="project-fur">
								<a href="single.html" ><img class="img-responsive" src="/RealHome/Public/Home/images/pi2.jpg" alt="" />	</a>
									<div class="fur">
										<div class="fur1">
		                                    <span class="fur-money">$2.44 Lacs - 5.28 Lacs </span>
		                                   <h6 class="fur-name"><a href="/RealHome/Public/Home/single.html">Contrary to popular</a></h6>
		                                   	<span>Paris</span>
                               			</div>
			                            <div class="fur2">
			                               	<span>2 BHK</span>
			                             </div>
									</div>					
							</div></li>
							<li><div class="project-fur">
								<a href="single.html" ><img class="img-responsive" src="/RealHome/Public/Home/images/pi3.jpg" alt="" />	</a>
									<div class="fur">
										<div class="fur1">
		                                    <span class="fur-money">$2.44 Lacs - 5.28 Lacs </span>
		                                    <h6 class="fur-name"><a href="single.html">Contrary to popular</a></h6>
		                                   	<span>Paris</span>
                               			</div>
			                            <div class="fur2">
			                               	<span>2 BHK</span>
			                             </div>
									</div>					
							</div></li>
					</ul>
					<script type="text/javascript">
						$(window).load(function() {
							$("#flexiselDemo1").flexisel({
								visibleItems: 4,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 3000,    		
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
						    	responsiveBreakpoints: { 
						    		portrait: { 
						    			changePoint:480,
						    			visibleItems: 1
						    		}, 
						    		landscape: { 
						    			changePoint:640,
						    			visibleItems: 2
						    		},
						    		tablet: { 
						    			changePoint:768,
						    			visibleItems: 3
						    		}
						    	}
						    });
						    
						});
			</script>
			<script type="text/javascript" src="/RealHome/Public/Home/js/jquery.flexisel.js"></script>
		</div>
	</div>
</div>



<!--footer-->
<div class="footer">
	<div class="container">
		<div class="footer-top-at">
			<div class="col-md-3 amet-sed">
				<h4>Our Company</h4>
				<ul class="nav-bottom">
					<li><a href="about.html">About Us</a></li>
					<li><a href="blog.html">For Sale By Owner Blog</a></li>
					<li><a href="mobile_app.html">Mobile</a></li>
					<li><a href="terms.html">Terms & Conditions</a></li>
					<li><a href="privacy.html">Privacy Policy</a></li>	
					<li><a href="blog.html">Blog</a></li>
					
				</ul>	
			</div>
			<div class="col-md-3 amet-sed ">
				<h4>Work With Us</h4>
					<ul class="nav-bottom">
						<li><a href="single.html">Real Estate Brokers</a></li>
						<li><a href="single.html">Business Development</a></li>
						<li><a href="single.html">Affiliate Programs</a></li>
						<li><a href="contact.html">Sitemap</a></li>
						<li><a href="career.html">Careers</a></li>
						<li><a href="feedback.html">Feedback</a></li>	
					</ul>	
			</div>
			<div class="col-md-3 amet-sed">
				<h4>Customer Support</h4>
				<p>Mon-Fri, 7AM-7PM </p>
				<p>Sat-Sun, 8AM-5PM </p>
				<p>177-869-6559</p>
					<ul class="nav-bottom">
						<li><a href="#">Live Chat</a></li>
						<li><a href="faqs.html">Frequently Asked Questions</a></li>
						<li><a href="suggestion.html">Make a Suggestion</a></li>
					</ul>	
			</div>
			<div class="col-md-3 amet-sed ">
				<h4>Property Services</h4>
				   <ul class="nav-bottom">
						<li><a href="single.html">Residential Property</a></li>
						<li><a href="single.html">Commercial Property</a></li>
						<li><a href="login.html">Login</a></li>
						<li><a href="register.html">Register</a></li>
						<li><a href="typo.html">Short Codes</a></li>	
					</ul>	
					<ul class="social">
						<li><a href="#"><i> </i></a></li>
						<li><a href="#"><i class="gmail"> </i></a></li>
						<li><a href="#"><i class="twitter"> </i></a></li>
						<li><a href="#"><i class="camera"> </i></a></li>
						<li><a href="#"><i class="dribble"> </i></a></li>
					</ul>
			</div>
		<div class="clearfix"> </div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="col-md-4 footer-logo">
				<h2><a href="index.html">REAL HOME</a></h2>
			</div>
			<div class="col-md-8 footer-class">
				<p >Copyright &copy; 2015.Company name All rights reserved.</p>
			</div>
		<div class="clearfix"> </div>
	 	</div>
	</div>
</div>
<!--//footer-->
</body>
</html>