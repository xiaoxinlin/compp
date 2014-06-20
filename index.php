<?php
	require_once("./domain/UserClass.php");
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html ><!--  xmlns="http://www.w3.org/1999/xhtml" -->
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>创意家居小精品购物网站首页</title>
	
	<link rel="stylesheet" href="style/base.css" />
	<link rel="stylesheet" href="style/head.css" />

	<link rel="stylesheet" href="style/bootstrap.min.css" />
	<link rel="stylesheet" href="style/bootstrap-responsive.min.css" />

	<script src="js/jquery-2.1.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/head.js" ></script>
	
	</head>
	<body>
		<!-- 头部 -->
		<div class="headbg">
			<div class="headleft fl">
				<img src="images/logo2.png">
			</div>
			<div class="headmid fl">
				<div class="headmid-span1 fl"><span >创意家居<span></div>
				<div class="headmid-span2"><span >小精品购物网站<span></div>
			</div>
			<div class="headright fr">
				<div class="headright-up">
					<!-- <span>亲，欢迎来到小精品屋！</span>   -->
					<div class="headright-up-text">
						<?php 
							$user = 0;
							if(isset($_SESSION['user'])){
								$user = $_SESSION['user'];
							}
							
							if($user){
								//var_dump($user);
								$userName = $user->getNickname();
								echo "<strong>$userName</strong>";
							}else{
								echo "<a href='view/login.php'>登录 </a> | <a href='view/register.php'>注册 </a>";
							}
						?>
						
						 | <a href="./view/cartlist.php">我的订单 </a> | <a href="./controllers/UserController.php?type=logout">注销</a>
					</div>
				</div>
				<div class="index-cart"><a href="view/cartlist.php"><img src="images/index/cart5.png" width="130x" height="25px" /></a></div>
			</div>
		</div>

		<!-- 导航条 -->
		<div class="headNav">
		  <div class="navCon w1020">

		  	<!-- 导航左边 -->
		    <div class="navCon-cate fl navCon_on">
		      <div class="navCon-cate-title"> <a href="">全部商品分类</a></div>
		      <div class="cateMenu hide">
		        <ul>
		          <!-- 第一栏 -->
		          <li style="border-top: none;">
		            <div class="cate-tag"> <strong><a href="./controllers/goodController.php?type=getGoods&pageNow=1&category=drawing">客厅专用</a></strong>
		              <div class="listModel">
		                <p> <a href="#">花盆</a> 
		                	<a href="#">水果盘</a> 
		                	<a href="#">玩偶</a> 
							<a href="#">花瓶</a> 
		                </p>
		              </div>
		            </div>
		            <div class="list-item hide">
		              <ul class="itemleft">
		                <dl>
		                  <dd> 
		                  	<a href="#">花盆</a> 
		                  	<a href="#">水果盘</a> 
		                  	<a href="#">玩偶</a> 	               		          
		                  </dd>
		                </dl>
		                <div class="fn-clear"></div>
		                <dl>
		                  <dd> 
		                  	<a href="#">花瓶</a> 
		                  	<a href="#">茶杯</a> 
		                  	<a href="#">相架</a> 	                  			                  	
		                  </dd>
		                </dl>
		                <div class="fn-clear"></div>
		                <dl>
		                  <dd> 
		                  	<a href="#">小摆设</a> 
		                  	<a href="#">书</a> 
		                  	<a href="#">水壶</a> 		                  			                  	
		                  </dd>
		                </dl>
		                <div class="fn-clear"></div>
		              </ul>
		              <ul class="itemright">
		                <dl>
		                  <dt>促销商品</dt>
		                </dl>
		                <div class="ad-list mt10"> <a href="#"><img src='images/drawing/dr1.jpg' /></a></div>
		              </ul>
		            </div>
		          </li>

		          <!-- 第二栏 -->
		          <li >
		            <div class="cate-tag"> <strong><a href="./controllers/goodController.php?type=getGoods&pageNow=1&category=dining">餐厅专用</a></strong>
		              <div class="listModel">
		                <p> <a href="#">碟子</a> 
		                	<a href="#">刀具</a> 
							<a href="#">勺子</a> 
		                	<a href="#">碗</a> </p>
		              </div>
		            </div>
		            <div class="list-item hide">
		              <ul class="itemleft">
		                <dl>
		                  <dd> 
		                  	<a href="#">碟子</a> 
		                  	<a href="#">刀具</a> 
		                  	<a href="#">勺子</a> 	               		          
		                  </dd>
		                </dl>
		                <div class="fn-clear"></div>
		                <dl>
		                  <dd> 
		                  	<a href="#">碗</a> 
		                  	<a href="#">垫子</a> 
		                  	<a href="#">酒架</a> 	                  			                  	
		                  </dd>
		                </dl>
		                <div class="fn-clear"></div>
		                <dl>
		                  <dd> 
		                  	<a href="#">挂钩</a> 
		                  	<a href="#">洗刷用具</a> 
		                  	<a href="#">筷子</a> 		                  			                  	
		                  </dd>
		                </dl>
		                <div class="fn-clear"></div>
		              </ul>
		              <ul class="itemright">
		                <dl>
		                  <dt>促销商品</dt>
		                </dl>
		                <div class="ad-list mt10"> <a href="#"><img src='images/dining/di1.jpg'/></a></div>
		              </ul>
		            </div>
		          </li>

		          <!-- 第三栏 -->
		          <li >
		            <div class="cate-tag"> <strong><a href="./controllers/goodController.php?type=getGoods&pageNow=1&category=bedroom">卧室专用</a></strong>
		              <div class="listModel">
		                <p> <a href="#">墙贴</a> 
		                	<a href="#">台灯</a> 
		                	<a href="#">玩偶</a> 
							<a href="#">花瓶</a></p>		                
		              </div>
		            </div>
		            <div class="list-item hide">
		              <ul class="itemleft">
		                <dl>
		                  <dd> 
		                  	<a href="#">墙贴</a> 
		                  	<a href="#">台灯</a> 
		                  	<a href="#">玩偶</a> 	               		          
		                  </dd>
		                </dl>
		                <div class="fn-clear"></div>
		                <dl>
		                  <dd> 
		                  	<a href="#">花瓶</a> 
		                  	<a href="#">挂钩</a> 
		                  	<a href="#">卷纸筒</a> 	                  			                  	
		                  </dd>
		                </dl>
		                <div class="fn-clear"></div>
		                <dl>
		                  <dd> 
		                  	<a href="#">香薰</a> 
		                  	<a href="#">衣夹子</a> 
		                  	<a href="#">闹钟</a> 		                  			                  	
		                  </dd>
		                </dl>
		                <div class="fn-clear"></div>
		              </ul>
		              <ul class="itemright">
		                <dl>
		                  <dt>促销商品</dt>
		                </dl>
		                <div class="ad-list mt10"> <a href="#"><img src='images/bedroom/b1.jpg' /></a></div>
		              </ul>
		            </div>
		          </li>

		          <!-- 第四栏 -->
		          <li >
		            <div class="cate-tag"> <strong><a href="./controllers/goodController.php?type=getGoods&pageNow=1&category=children">童房专用</a></strong>
		              <div class="listModel">
		                <p> <a href="#">玩偶</a> 
		                	<a href="#">台灯</a> 
		                	<a href="#">抱枕</a> 
							<a href="#">灭蚊器</a></p>
		              </div>
		            </div>
		            <div class="list-item hide">
		              <ul class="itemleft">
		                <dl>
		                  <dd> 
		                  	<a href="#">玩偶</a> 
		                  	<a href="#">台灯</a> 
		                  	<a href="#">抱枕</a> 	               		          
		                  </dd>
		                </dl>
		                <div class="fn-clear"></div>
		                <dl>
		                  <dd> 
		                  	<a href="#">灭蚊器</a> 
		                  	<a href="#">相架</a> 
		                  	<a href="#">玩具</a> 	                  			                  	
		                  </dd>
		                </dl>
		                <div class="fn-clear"></div>
		                <dl>
		                  <dd> 
		                  	<a href="#">棉质花盆</a> 
		                  	<a href="#">碗</a> 
		                  	<a href="#">橡皮泥娃娃</a> 		                  			                  	
		                  </dd>
		                </dl>
		                <div class="fn-clear"></div>
		              </ul>
		              <ul class="itemright">
		                <dl>
		                  <dt>促销商品</dt>
		                </dl>
		                <div class="ad-list mt10"> <a href="#"><img src='images/children/c1.jpg' /></a></div>
		              </ul>
		            </div>
		          </li>


		           
		          <!-- 第五栏 -->
				 <li >
		            <div class="cate-tag"> <strong><a href="./controllers/goodController.php?type=getGoods&pageNow=1&category=schoolroom">书房专用</a></strong>
		              <div class="listModel">
		                <p> <a href="#">笔筒</a> 
		                	<a href="#">书架</a> 
		                	<a href="#">小摆饰</a> 
		                	<a href="#">小植物</a> </p>
		              </div>
		            </div>
		            <div class="list-item hide">
		              <ul class="itemleft">
		                <dl>
		                  <dd> 
		                  	<a href="#">笔筒</a> 
		                  	<a href="#">书架</a> 
		                  	<a href="#">小摆饰</a> 	               		          
		                  </dd>
		                </dl>
		                <div class="fn-clear"></div>
		                <dl>
		                  <dd> 
		                  	<a href="#">小植物</a> 
		                  	<a href="#">相架</a> 
		                  	<a href="#">盆栽花</a> 	                  			                  	
		                  </dd>
		                </dl>
		                <div class="fn-clear"></div>
		                <dl>
		                  <dd> 
		                  	<a href="#">记事本</a> 
		                  	<a href="#">雕塑</a> 
		                  	<a href="#">沙漏</a> 		                  			                  	
		                  </dd>
		                </dl>
		                <div class="fn-clear"></div>
		              </ul>
		              <ul class="itemright">
		                <dl>
		                  <dt>促销商品</dt>
		                </dl>
		                <div class="ad-list mt10"> <a href="#"><img src='images/schoolroom/s1.jpg' /></a></div>
		              </ul>
		            </div>
		         </li>
				

				<!-- 第六栏 -->
		          <li >
		            <div class="cate-tag"> <strong><a href="./controllers/goodController.php?type=getGoods&pageNow=1&category=outdoors">户外专用</a></strong>
		              <div class="listModel">
		                <p> <a href="#">雕像</a> 
		                	<a href="#">花盆</a> 
		                	<a href="#">盆栽</a> 
							<a href="#">玩偶</a></p>
		              </div>
		            </div>
		           <div class="list-item hide">
		              <ul class="itemleft">
		                <dl>
		                  <dd> 
		                  	<a href="#">雕像</a> 
		                  	<a href="#">花盆</a> 
		                  	<a href="#">盆栽</a> 	               		          
		                  </dd>
		                </dl>
		                <div class="fn-clear"></div>
		                <dl>
		                  <dd> 
		                  	<a href="#">玩偶</a> 
		                  	<a href="#">陶瓷</a> 
		                  	<a href="#">墙贴式盆栽</a> 	                  			                  	
		                  </dd>
		                </dl>
		                <div class="fn-clear"></div>
		                <dl>
		                  <dd> 
		                  	<a href="#">仿真动物</a> 
		                  	<a href="#">仿真植物</a> 
		                  	<a href="#">仿真水果</a> 		                  			                  	
		                  </dd>
		                </dl>
		                <div class="fn-clear"></div>
		              </ul>
		              <ul class="itemright">
		                <dl>
		                  <dt>促销商品</dt>
		                </dl>
		                <div class="ad-list mt10"> <a href="#"><img src='images/outdoors/o1.jpg' /></a></div>
		              </ul>
		            </div>
		          </li>
	           

		          <!-- 第七栏 -->
		          <li>
		            <div class="float-list-dnav"></div>
		          </li>
		      </ul>
		      </div>
		    </div>

		    <!-- 导航右边 -->
		    <div class="navCon-menu fl">
		    	<ul>
		    		<li><a href="#">首&nbsp;&nbsp;&nbsp;&nbsp;页</a></li>
		    		<li><a href="#">新闻资讯</a></li>
		    		<li><a href="#">客户服务</a></li>
		    		<li><a href="#">关于我们</a></li>
		    	</ul>	
		    </div>

		  </div>
		</div>


		<!-- 中间 -->
		<div class="mid">
			<div class="mid-midbg">
				<div class="midbg-mid">
					<div class="mid-query">
						<div class="query-btn">
							<form action = "./controllers/goodController.php?type=findGoods&pageNow=1" method="post">
								<input type="text"  name ="keyword" placeholder="搜 搜 就 有 啦 O(∩_∩)O~">
								<button type="submit" ><strong>搜  索</strong></button>
							</form>
						</div>
						<div class="query-a">
							<span>热门搜索：</span> <a href="#">相框</a>  <a href="#">花瓶</a>  <a href="#">台灯</a>  <a href="#">笔筒</a>
							<a href="#">碟子</a>  <a href="#">吊坠</a>  <a href="#">小夹子</a>  <a href="#">小书架</a>  <a href="#">小饭桶</a>  <a href="#">小单车</a>
						</div> 
					</div>

					<div class="mid-paper">
						<div class="mid-photo">
							<div class="container-fluid">
								<div class="row-fluid">
									<div class="span12">
										<div class="carousel slide" id="carousel-790951">
											<ol class="carousel-indicators">
												<li class="active" data-slide-to="0" data-target="#carousel-790951">
												</li>
												<li data-slide-to="1" data-target="#carousel-790951">
												</li>
												<li data-slide-to="2" data-target="#carousel-790951">
												</li>
												<li data-slide-to="3" data-target="#carousel-790951">
												</li>
											</ol>

											<div class="carousel-inner photo-border">
												<div class="item active">
													<img alt="" src="images/index/photo1.jpg"/>
												</div>
												<div class="item">
													<img alt="" src="images/index/photo2.jpg" />														
												</div>
												<div class="item">
													<img alt="" src="images/index/photo3.jpg" />													
												</div>
												<div class="item">
													<img alt="" src="images/index/photo4.jpg" />													
												</div>
												<!-- <a data-slide="prev" href="#carousel-790951" class="left carousel-control">‹</a> 
												<a data-slide="next" href="#carousel-790951" class="right carousel-control">›</a> -->

											</div> 
											<!--<a data-slide="prev" href="#carousel-790951" class="left carousel-control">‹</a> 
											<a data-slide="next" href="#carousel-790951" class="right carousel-control">›</a>-->
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="mid-nwes">
							<span class="news-title"><strong>新闻</strong></span>
							<span class="news-more"><a href="#">more&gt;&gt;</a></span>
							<ul>
								<li><a href="view/news1.php">广东高考预计月底放榜 广州昨日2000余人缺考</a></li>
								<li><a href="#">习近平：要改进院士遴选及退出制度</a></li>
								<li><a href="#">白皮书：外部势力利用香港干预中国内政</a></li>
								<li><a href="#">煤炭行业造就超万名亿万富翁</a></li>								
							</ul>
						</div>
						<div class="mid-notice">
							<span class="notice-title"><strong>公告</strong></span>
							<span class="notice-more"><a href="#">more&gt;&gt;</a></span>
							<ul>
								<li><a href="#">联通沃商店发公告：警惕假冒沃游戏合作</a></li>
								<li><a href="#">均安镇名菜食品示范店创建活动报名公告</a></li>
								<li><a href="#">三乡镇平东商业街338号铺面中标公告</a></li>
								<li><a href="#">华谊兄弟：2014年度第一期短期融资券发行公告</a></li>
							</ul> 
						</div>
						<div class="mid-us">
							<h5><strong>关于我们</strong></h5>
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>创意家居小精品购物网站</strong>，简称<strong>COMPP</strong>（competitive products），我们的产品都是带着创意性的、清新型的小精品，
							摆放在家里的任何方位都显得别具一格，可以给居家人士带来视觉上的享受。而此网站的精品共分为6类，分别是客厅专用、餐厅专用、卧室专用、童房专用、书房专用以及户外专用，有些精品可能在房子的任何地方都可以放置，
							但是我们只是按照我们的理解来分类，使用者可以随意将所购的精品放置在房子的其他地方。</p>
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;我们选择在网上出售是因为网上购创意家居小精品与实体店相比，可以带给人们更多的方便，
							不仅种类繁多，而且还能了解更多关于商品的细节问题。而且用户浏览购买方便，网店管理也方便灵活，随着客户对网上购物意识的不断加深，将会有着更加广阔的市场前景，并且我们也会一直提供真诚的服务，保证顾客的利益。
							</p>
						</div>
						<div class="mid-readmore"><a href=""><strong>Read more</strong></a></div>
					</div>
				</div>
			</div>
		</div>

		<!-- 尾部 -->
		<div class="tail">
			<div class="tail-text">
				<div class="tail-text1">
					<a href="#">关于COMPP</a> <a href="#">帮助中心</a> <a href="#">联系我们</a> 
					<a href="#">营销中心</a> <a href="#">版权说明</a> <a href="viewBack/back-login.php">后台登录</a>
				</div>
				<div class="tail-text2">
					<a href="http://baidu.com">百度</a> |  
					<a href="http://www.google.cn">谷歌</a> |  
					<a href="http://www.nfsysu.cn">中大南方</a> | 
					<a href="http://ai.taobao.com">淘宝网</a> | 
					<a href="http://www.jd.com">京东网</a> | 
					<a href="http://www.amazon.cn">亚马逊网</a> | 
					<a href="http://www.1688.com">阿里巴巴</a> | 
					<a href="https://www.alipay.com">支付宝</a>
				</div>
			</div>
		</div>
	
	</body>
</html>
