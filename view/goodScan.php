<?php 
 
require_once("../domain/PageClass.php");
require_once("../domain/GoodClass.php");
require_once("../domain/UserClass.php");
session_start();
?>
<!DOCTYPE HTML >
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="../style/drawing.css" type="text/css"></link>
		<link rel="stylesheet" href="../style/bootstrap.min.css" />
		<link rel="stylesheet" href="../style/bootstrap-responsive.min.css" />

		<script src="../js/jquery-2.1.0.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

		<title>小精品购物网站客厅专用类别</title>
	</head>

	<body>
		<!-- 头部 -->
		<div class="all-header">
			<div class="all-logo"><a href="../index.php"><img src="../images/logo3.png" width='50px' height='50px'></a></div>
			<form action="../controllers/goodController.php?type=findGoods&pageNow=1" method="post">
				<div class="all-query">
					<input type="query"  class="all-text" name="keyword" value="" placeholder="搜 搜 就 有 啦 O(∩_∩)O~">
					<input type="submit" class="all-btn" value="搜  索">
				</div>
			</form>
			<div class="all-header-right">
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
								echo "<a href='./login.php'>登录 </a> | <a href='./register.php'>注册 </a>";
							}
						?>
						
						 | <a href="./cartlist.php">我的订单 </a> | <a href="../controllers/UserController.php?type=logout">注销</a>
			</div>
		</div>

		<!-- 中间 -->
		<div class="dr-mid">
			<div class="dr-mid-left">
				<ul>
					<li>
						<div class="dr-mid-div1">
							<div class="dr-mid-div2"><a href="../controllers/goodController.php?type=getGoods&pageNow=1&category=drawing">客厅专用</a></div>
							<div class="dr-mid-div3">
								<ul>
									<li><a href="#">花盆</a> <a href="#">水果盘</a> <a href="#">玩偶</a></li>
				                  	<li><a href="#">花瓶</a> <a href="#">茶杯</a> <a href="#">相架</a></li>
				                 </ul>
								
							</div>
						</div>
					</li>
					<li>
						<div class="dr-mid-div1">
							<div class="dr-mid-div2"><a href="../controllers/goodController.php?type=getGoods&pageNow=1&category=dining">餐厅专用</a></div>
							<div class="dr-mid-div3">
								<ul>
				                  	<li>
					                  	<a href="#">碟子</a> 
					                	<a href="#">刀具</a> 
										<a href="#">勺子</a> 
				                	</li>
				                  	<li>
					                  	<a href="#">挂钩</a> 
					                  	<a href="#">洗刷用具</a> 
					                  	<a href="#">筷子</a>
				                	</li>
				                </ul>
							</div>
						</div>
					</li>
					<li>
						<div class="dr-mid-div1">
							<div class="dr-mid-div2"><a href="../controllers/goodController.php?type=getGoods&pageNow=1&category=bedroom">卧室专用</a></div>
							<div class="dr-mid-div3">
								<ul>
				                  	<li>
					                  	<a href="#">墙贴</a> 
					                	<a href="#">台灯</a> 
					                	<a href="#">玩偶</a> 
				                	</li>
				                	<li>
					                  	<a href="#">花瓶</a>
					                  	<a href="#">挂钩</a> 
		                  				<a href="#">卷纸筒</a>
				                	</li>
				                 </ul>
							</div>
						</div>
					</li>
					<li>
						<div class="dr-mid-div1">
							<div class="dr-mid-div2"><a href="../controllers/goodController.php?type=getGoods&pageNow=1&category=children">童房专用</a></div>
							<div class="dr-mid-div3">
								<ul>
				                  	<li>
					                  	<a href="#">玩偶</a> 
					                  	<a href="#">台灯</a> 
					                  	<a href="#">抱枕</a>
				                	</li>
				                	<li>
					                  	<a href="#">灭蚊器</a> 
					                  	<a href="#">相架</a> 
					                  	<a href="#">玩具</a> 
				                	</li>
				                 </ul>
							</div>
						</div>
					</li>
					<li>
						<div class="dr-mid-div1">
							<div class="dr-mid-div2"><a href="../controllers/goodController.php?type=getGoods&pageNow=1&category=schoolroom">书房专用</a></div>
							<div class="dr-mid-div3">
								<ul>
				                  	<li>
					                  	<a href="#">笔筒</a> 
					                  	<a href="#">书架</a> 
					                  	<a href="#">小摆饰</a> 
				                	</li>
				                	<li>
					                  	<a href="#">小植物</a> 
					                  	<a href="#">相架</a> 
					                  	<a href="#">盆栽花</a>
				                	</li>
				                 </ul>
							</div>
						</div>
					</li>
					<li>
						<div class="dr-mid-div1">
							<div class="dr-mid-div2"><a href="../controllers/goodController.php?type=getGoods&pageNow=1&category=outdoors">户外专用</a></div>
							<div class="dr-mid-div3">
								<ul>
				                  	<li>
					                  	<a href="#">雕像</a> 
					                  	<a href="#">花盆</a> 
					                  	<a href="#">盆栽</a>
				                	</li>
				                	<li>
					                  	<a href="#">玩偶</a> 
					                  	<a href="#">陶瓷</a> 
					                  	<a href="#">墙贴式盆栽</a>
				                	</li>
				                 </ul>
							</div>
						</div>
					</li>

				</ul>

			</div>
			<?php 
				$goods = (object)$_SESSION['goods'];
				//var_dump($goods);
				$goodList = $goods->getGoodList();
				//var_dump($goodList);
			?>
			<div class="dr-mid-right">
				<!-- 面包导航 -->
				<div class="dr-mid-rightnav">
					<div class="container-fluid">
						<div class="row-fluid">
							<div class="span12">
								<ul class="breadcrumb">
									<li>
										<a href="../index.php">主页</a> <span class="divider">/</span>
									</li>
									<li class="active">
										<?php
											if($goods->getCategory()=="drawing"){
												echo "客厅专用";
											}elseif ($goods->getCategory()=="bedroom") {
												echo "卧室专用";
											}elseif ($goods->getCategory()=="children") {
												echo "童房专用";
											}elseif ($goods->getCategory()=="dining") {
												echo "餐厅专用";
											}elseif ($goods->getCategory()=="outdoors") {
												echo "户外专用";
											}elseif ($goods->getCategory()=="schoolroom") {
												echo "书房专用";
											}
										?>
									</li>
									<!-- <li>
										<a href="drawing.php">客厅专用</a> <span class="divider">/</span>
									</li>
									<li class="active">花盆</li> -->
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="dr-mid-photo">
					<!--<ul>
						<li><a href=""><img src="../images/drawing/dr1.jpg" /></a>
						<a href=""><img src="../images/drawing/dr2.jpg" /></a>
						<a href=""><img src="../images/drawing/dr3.jpg" /></a>
						<a href=""><img src="../images/drawing/dr4.jpg" /></a>
						<a href=""><img src="../images/drawing/dr5.jpg" /></li>

						<li><a href=""><img src="../images/drawing/dr6.jpg" /></a>
						<a href=""><img src="../images/drawing/dr7.jpg" /></a>
						<a href=""><img src="../images/drawing/dr8.jpg" /></a>
						<a href=""><img src="../images/drawing/dr9.jpg" /></a>
						<a href=""><img src="../images/drawing/dr10.jpg" /></a></li>
					</ul>-->
					<?php 
						
						echo "<ul>";
						for ($i=0; $i <count($goodList) ; $i++) { 
							if($i % 5 == 0){
								echo "<li>";
							}
							$good = $goodList[$i];
							$id = $good->getId();
							$url = $good->getUrl();
							echo "<a href='../controllers/goodController.php?type=getGood&id=$id'><img src='../$url' /></a>";
							if($i % 5 == 4){
								echo "</li>";
							}
							
						}
						echo "</ul>";
					?>
				</div>

				<div class="dr-mid-page">
					<div class="container-fluid">
						<div class="row-fluid">
							<div class="span12">
								<div class="pagination">
									<ul>
										<li>
											<a href="../controllers/goodController.php?type=getGoods&pageNow=<?php if ( ($goods->getPageNow()-1)==0 ){echo $goods->getPageNow();}else{ echo $goods->getPageNow()-1;}?>&category=<?php echo $goods->getCategory();?>" name="previous">上一页</a>
										</li>
										<!-- <li>
											<a href="#">1</a>
										</li>
										<li>
											<a href="#">2</a>
										</li>
										<li>
											<a href="#">3</a>
										</li>
										<li>
											<a href="#">4</a>
										</li>
										<li>
											<a href="#">5</a>
										</li> -->
										<li>
											<a href="../controllers/goodController.php?type=getGoods&pageNow=<?php if ( $goods->getPageNow()==$goods->getPageCount() ){echo $goods->getPageNow();}else{ echo $goods->getPageNow()+1;}?>&category=<?php echo $goods->getCategory();?>" name="next">下一页</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
				
		</div>
	</body>
</html>