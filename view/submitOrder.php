
<!DOCTYPE HTML >
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="../style/bootstrap.min.css" />
		<link rel="stylesheet" href="../style/bootstrap-responsive.min.css" />
		<link rel="stylesheet" href="../style/news1.css" type="text/css"></link>

		<script type="text/javascript" src="../js/jquery-2.1.0.min.js"></script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>

		<title>小精品购物网站新闻</title>

	</head>

	<body >
		<!-- 头部 -->
		<div class = "container">
			<div class="row" style="border-bottom: 5px solid #65B600;">
				<div class="all-logo "><a href="../index.php"><img src="../images/logo3.png" width='50px' height='50px'></a></div>
				<form action="../controllers/goodController.php?type=findGoods&pageNow=1" method="post">
					<div class="all-query">
						<input type="query"  class="all-text" value="" placeholder="搜 搜 就 有 啦 O(∩_∩)O~">
						<input type="submit" class="all-btn" value="搜  索"></button>
					</div>
				</form>
			</div>
			<div class = 'row offset4'>
				<h1>成功提交订单 <small>欢迎下次购买</small> </h1>
			</div>
			<div class = 'row offset3'>
				<p><img src="../images/welcome.jpg" style="width:500px;height:350px;"></p>
			</div>
			<div class = 'row offset5'>

				<a class="btn btn-primary" href="../controllers/goodController.php?type=getGoods&pageNow=1&category=drawing">返回继续购物</a>
			</div>
			
			
			<!-- 尾部 -->
			<div class="row " id = "footer" style="border-top:2px solid #B3B3B4;margin-top:20px;">
				
					<div class="offset4" id = "about">
						<a href="#">关于COMPP</a> <a href="#">帮助中心</a> <a href="#">联系我们</a> 
						<a href="#">营销中心</a> <a href="#">版权说明</a>
					</div>
					<div class="offset3" id = "baidu" style="margin-left:370px;font-size: 16px; 
	margin-top:10px; ">
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