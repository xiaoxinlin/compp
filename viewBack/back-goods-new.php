<?php
	require_once("../domain/UserClass.php");
	session_start();
?>
<!DOCTYPE HTML >
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="../style/bootstrap.min.css" />
		<link rel="stylesheet" href="../style/bootstrap-responsive.min.css" />
		<link rel="stylesheet" href="../style/back.css" type="text/css"></link>

		<script type="text/javascript" src="../js/jquery-2.1.0.min.js"></script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>

		<title>创意家居小精品购物网站后台管理</title>

	</head>

	<body>
		<!-- 头部 -->
		<div class="back-header">
			<div class="back-logo"><a href="../index.php"><img src="../images/logo3.png" width='50px' height='50px'></a></div>
			<div class="back-header-title"><span>创意家居小精品购物网站后台管理</span></div>
			<div class="back-header-right">
				<?php 
							$user = 0;
							if(isset($_SESSION['user'])){
								$user = $_SESSION['user'];
							}
							
							if($user){
								//var_dump($user);
								$userName = $user->getNickname();
								echo "<span>管理员：</span><span>$userName</span>";
							}
				?>
				<a href="../controllers/UserController.php?type=logout">注销</a>
			</div>
		</div>
		

		<!-- 中间 -->
		<div class="back-left">
			<div class="back-left-img"><img src="../images/back/p2.jpg"><br><span><?php echo $userName;?></span></div>
			<div class="back-left-nav">
				<ul>
					<li>
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne"> 管理用户 </a>
							</div>
							<div id="collapseOne" class="accordion-body in collapse" style="height: auto;">
								<div class="accordion-inner">
									<a href="back-customer.php">客户管理</a>
								</div>
								<div class="accordion-inner">
									<a href="back-admin.php">管理员管理</a>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo"><a href="back-orders.php" class="orders-a">管理订单</a></a>
							</div>
						</div>
					</li>
					<li>
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree"> <a href="back-goods.php" class="goods-a">管理商品</a></a>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>

		<div class="back-right">
			<div class="back-goods-new-right">
				<div class="goods-new-title"><span>添加商品</span></div>
				<div class="goods-new-text">
					<form action="../controllers/goodController.php?type=addGood" method="post" enctype='multipart/form-data'>
						<ul>
							<li>商&nbsp;&nbsp;品&nbsp;&nbsp;名：<input type="text" id="goodname" name="goodname" value="" required /></li>
							<li>商品价格：<input type="text" id="price" name="price" value="" required /></li>
							<li>商品描述：<input type="text" id="desc" name="desc" value="" required /></li>
							<li>商品类别：
								<select name="cate">
									<option value="drawing">客厅专用</option>
									<option value="bedroom">餐厅专用</option>
									<option value="bedroom">卧室专用</option>
									<option value="children">童房专用</option>
									<option value="schoolroom">书房专用</option>
									<option value="outdoors">户外专用</option>
								</select>
							</li>
							<li>商品图像：<input type="file" id="photo" name="file" ></li>
							<li>
								<input type="submit" name="submit" id="submit" class="btn" value="保存" />
								<input type="reset" name="reset" id="reset" class="btn" value="重填" />
								<a href="back-goods.php"  class="btn" name="cancel" id="cancel">取消</a>
							</li>
						</ul>				
					</form>
				</div>
			</div>
		</div>	

	</body>
</html>