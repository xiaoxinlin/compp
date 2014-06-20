<?php
	require_once("../domain/CartClass.php");
	require_once("../domain/UserClass.php");
	require_once("../domain/GoodClass.php");
	session_start();
?>
<!DOCTYPE HTML >
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="../style/bootstrap.min.css" />
		<link rel="stylesheet" href="../style/bootstrap-responsive.min.css" />
		<link rel="stylesheet" href="../style/cartlist.css" type="text/css"></link>

		<script type="text/javascript" src="../js/jquery-2.1.0.min.js"></script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>

		<title>小精品购物网站购物车</title>

	</head>

	<body>
		<!-- 头部 -->
		<div class="all-header">
			<div class="all-logo"><a href="../index.php"><img src="../images/logo3.png" width='50px' height='50px'></a></div>
			<div class="all-query">
				<input type="query"  class="all-text" value="" placeholder="搜 搜 就 有 啦 O(∩_∩)O~">
				<input type="submit" class="all-btn" value="搜  索"></button>
			</div>
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
						
						 | <a href="../controllers/UserController.php?type=logout">注销</a>
			</div>
		</div>

		<!-- 中间 -->
		<div class="cart-mid">
			<div class="cart-mid-my"><span>我的精品：</span></div>
			<div class="container-fluid">
				<div class="row-fluid">
					<div class="span12">
						<?php
							$cart = $_SESSION['cart'];
							//var_dump($cart);
							$totalPrice = $cart->getTotalPrice();
							//var_dump($totalPrice);
							$goodList = $cart->getGoodList();
							//var_dump($goodList);
						?>
						<table class="table">
							<thead>
								<tr>
									<th>精品名称</th>
									<th>缩略图</th>
									<th>单价</th>
									<th>数量</th>
									<th>操作</th>
								</tr>
							</thead>
							<tbody>
								<?php
									for ($i=0; $i <count($goodList) ; $i++) { 
										$keys = array_keys ( $goodList );
										$good = $goodList[$keys[$i]];
										$goodId = $good->getId();
										$goodName = $good->getName();
										$goodPrice = $good->getPrice();
										$goodDescription = $good->getDescription();
										$goodCategory = $good->getCategory();
										$goodUrl = $good->getUrl();
										$goodNums = $good->getNums();
										echo "<tr>";
										echo "<td>$goodName</td>";
										echo "<td><a href='../controllers/goodController.php?type=getGood&id=$goodId'><img src='../$goodUrl'></a></td>";
										echo "<td>$goodPrice</td>";
										echo "<td><input type='text' name='quantity' value='$goodNums' class='cart-mid-quantity'></td>";
										echo "<td><a class = 'btn' name='delete' href='../controllers/cartController.php?type=delGood&id=$goodId'>删除</a></td>";
										echo "</tr>";
									}

								?>
							</tbody>
						</table>
						<!--<table class="table">
							<thead>
								<tr>
									<th>精品名称</th>
									<th>缩略图</th>
									<th>单价</th>
									<th>数量</th>
									<th>操作</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>花盆</td>
									<td><a href="dr1-details.php"><img src="../images/drawing/dr1.jpg"></a></td>
									<td>12元</td>
									<td><input type="text" name="quantity" value="1" class="cart-mid-quantity"></td>
									<td><input type="button" name="delete" value="删除"></td>
								</tr>
								<tr>
									<td>2</td>
									<td><a href="dr1-details.php"><img src="../images/drawing/dr1.jpg"></td>
									<td>Thornton</td>
									<td>@fat</td>
									<td>@mdo</td>
								</tr>
								<tr>
									<td>3</td>
									<td><a href="dr1-details.php"><img src="../images/drawing/dr1.jpg"></td>
									<td>the Bird</td>
									<td>@twitter</td>
									<td>@mdo</td>
								</tr>
							</tbody>
						</table>-->
					</div>
				</div>
			</div>

			<div class="cart-mid-btn">
				<button id="" class="btn btn-large"><a href="../controllers/cartController.php?type=clearCart">清空购物车</a></button>
				<button id="" class="btn btn-large"><a href="../controllers/goodController.php?type=getGoods&pageNow=1&category=drawing">继续购物</a></button>
				<button id="" class="btn btn-large"><a href="">提交订单</a></button>
				<div class="cart-mid-allprice">总额：<span><?php echo $totalPrice;?></span>元</div>
			</div>
		</div>


		<!-- 尾部 -->
		<div class="all-tail">
			<div class="all-tail-text">
				<div class="all-tail-text1">
					<a href="#">关于COMPP</a> <a href="#">帮助中心</a> <a href="#">联系我们</a> 
					<a href="#">营销中心</a> <a href="#">版权说明</a>
				</div>
				<div class="all-tail-text2">
					<a href="http://baidu.com">百度</a> |  
					<a href="http://www.google.cn">谷歌</a> |  
					<a href="http://www.nfsysu.cn">中大南方</a> | 
					<a href="http://ai.taobao.com#">淘宝网</a> | 
					<a href="http://www.jd.com">京东网</a> | 
					<a href="http://www.amazon.cn">亚马逊网</a> | 
					<a href="http://www.1688.com">阿里巴巴</a> | 
					<a href="https://www.alipay.com">支付宝</a>
				</div>
			</div>
		</div>
	</body>
</html>