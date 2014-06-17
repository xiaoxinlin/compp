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
				<span><a href="login.php">登录</a></span> | 
				<span><a href="register.php">注册</a></span> | 
				<span><a href="cartlist.php">我的精品</a></span> | 
				<span><a href="">注销</a></span>
			</div>
		</div>

		<!-- 中间 -->
		<div class="cart-mid">
			<div class="cart-mid-my"><span>我的精品：</span></div>
			<div class="container-fluid">
				<div class="row-fluid">
					<div class="span12">
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
						</table>
					</div>
				</div>
			</div>

			<div class="cart-mid-btn">
				<button id="" class="btn btn-large"><a href="">清空购物车</a></button>
				<button id="" class="btn btn-large"><a href="../index.php">继续购物</a></button>
				<button id="" class="btn btn-large"><a href="">立刻结算</a></button>
				<div class="cart-mid-allprice">总额：<span>0.00</span>元</div>
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