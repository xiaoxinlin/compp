<?php
	require_once("../domain/GoodClass.php");
	require_once("../domain/UserClass.php");
	require_once("../domain/CommentClass.php");
	session_start();

	$good = $_SESSION['good'];
	$goodId = $good->getId();
	$goodName = $good->getName();
	$goodPrice = $good->getPrice();
	$goodDescription = $good->getDescription();
	$goodCategory = $good->getCategory();
	$goodUrl = $good->getUrl();

?>
<!DOCTYPE HTML >
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="../style/bootstrap.min.css" />
		<link rel="stylesheet" href="../style/bootstrap-responsive.min.css" />
		<link rel="stylesheet" href="../style/dr1-details.css" type="text/css"></link>

		<script type="text/javascript" src="../js/jquery-2.1.0.min.js"></script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>
		<script type="text/javascript" src="../js/details.js"></script>

		<title>小精品购物网站dr1详情</title>
	</head>

	<body>
		<!-- 头部 -->
		<div class="all-header">
			<div class="all-logo"><a href="../index.php"><img src="../images/logo3.png" width='50px' height='50px'></a></div>
			<form action="../controllers/goodController.php?type=findGoods&pageNow=1" method="post">
					<div class="all-query">
						<input type="query"  class="all-text" value="" placeholder="搜 搜 就 有 啦 O(∩_∩)O~">
						<input type="submit" class="all-btn" value="搜  索"></button>
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
						
						 | <a href="./cartlist.php">我的订单 </a>  | <a href="../controllers/UserController.php?type=logout">注销</a>
			</div>
		</div>

		<!-- 中间上 -->
		<div class="dr1-mid-up">
			
			<div class="dr1-mid-img">
				<img src='../<?php echo $goodUrl;?>'>
			</div>

			<div class="dr1-mid-upright">
				<ul>
					<li><span><?php echo "$goodName"; ?></span></li>
					<li><span><?php echo "$goodDescription"; ?></span></li>
					<li><span class="dr1-mid-price">原&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;价 ：</span><span class="dr1-mid-yuanjia">￥<?php echo $goodPrice;?></span></li>
					<li><span class="dr1-mid-price">折&nbsp;&nbsp;&nbsp;后&nbsp;&nbsp;&nbsp;价 ：</span><span class="dr1-mid-yuan">￥</span><span class="dr1-mid-zhejia"><?php echo $goodPrice*0.9;?></span></li>
					<!-- <li><span class="dr1-mid-price">数&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;量 ：</span>
						<span id="btn-increase" class="btn btn-mini dr1-btn-increase">∧</span>
						<input id="nums" type="text" max-size="50" value='1'>
						<span id="btn-decrease" class="btn btn-mini dr1-btn-decrease">∨</span>
					</li> -->
					<li><span class="dr1-mid-buy"><a onclick="getNums()" href="../controllers/cartController.php?type=addGood&id=<?php echo $goodId;?>">加入购物车</a></span></li>
				</ul>
				<!--<ul>
					<li><span>适于客厅装饰的花盆——花盆（英文名：flower pot），种花用的一种器皿，
						花卉生产者或养花人士可以根据花卉的特性和需要以及花盆的特点选用花盆。</span></li>
					<li><span class="dr1-mid-price">原&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;价 ：</span><span class="dr1-mid-yuanjia">￥15.00</span></li>
					<li><span class="dr1-mid-price">折&nbsp;&nbsp;&nbsp;后&nbsp;&nbsp;&nbsp;价 ：</span><span class="dr1-mid-yuan">￥</span><span class="dr1-mid-zhejia">12.00</span></li>
					<li><span class="dr1-mid-price">数&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;量 ：</span>
						<span id="btn-increase" class="btn btn-mini dr1-btn-increase">∧</span>
						<input type="text" max-size="50" value='1'>
						<span id="btn-decrease" class="btn btn-mini dr1-btn-decrease">∨</span>
					</li>
					<li><span class="dr1-mid-buy"><a href="cartlist.php">加入购物车</a></span></li>
				</ul>-->
			</div>
		</div>

		<!-- 中间下 -->
		<div class="dr1-mid-down">
			<div class="dr1-mid-down-title">
				<img src="../images/comment.jpg">
				<span>累计评价：</span><label>如您对此精品有什么建议，欢迎顺手写下来哦！</label>
			</div>
			<div class="dr1-mid-comment">
				<?php 

					$commentList = $_SESSION['commentList'];
				?>
				<div class="dr1-mid-comment-title"><span>已有评论：</span></div>
				<div>
					<ul>
						<?php
							for ($i=0; $i < count($commentList) ; $i++) { 
								$comment = $commentList[$i];
								$context = $comment->getContext();
								echo "<li><span>$context</span></li>";
							}
						?>
						<!--<li><span>颜色很好，花盆很小巧，价钱也很值，值得购买啊！</span></li>
						<li><span>颜色很好，花盆很小巧，价钱也很值，值得购买啊！赶紧行动吧！</span></li>
						<li><span>颜色很好，花盆很小巧，价钱也很值，买了送人的，她好喜欢。</span></li>
					-->
					</ul>
				</div>
				<div><button type="button" name="comment" class="btn btn-large colorr-btn" id="dr1-comment">我想评论</button></div>

				<div id="dr1-comment-hidden" class="dr1-comment-hidden">
					<form action="../controllers/commentController.php?type=addComment&id=<?php echo $goodId; ?>" method="post">
					  <fieldset>
					    <legend>评论内容：</legend>
					    <!-- <label>Label name</label> -->
					    <textarea cols="50" rows="5" name = "comment"></textarea><br>
					    <button type="submit" id="dr1-submit" class="btn">保存</button><button type="reset" class="btn">重填</button>
					  </fieldset>
					</form>
				</div>

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