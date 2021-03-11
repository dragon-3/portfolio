<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>	
		<title>お問い合わせ</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta charset="UTF-8">
		<script type="text/javascript" src="jquery.js"></script>  
		<script type="text/javascript" src="validate.js"></script>  
		
		<script type="text/javascript">
			$(document).ready(function(){
			
				$("#form").validate();
			});
		</script>

		<style type="text/css">
			body { font-family: Arial; font-size: 16px; margin: 0px;}
			fieldset { border:0; }
			label { display: block; width: 180px; float:left; clear:both; margin-top: 10px; }
			label em { display: block; float:right; padding-right:8px; color:red; }
			textarea, input { float:left; width: 220px; padding: 2px; }
			textarea { height: 180px; }
			#submit { margin-left:180px; clear:both; width:100px; }
			
			label.error { float: left; color: red; clear:none; width:200px; padding-left: 10px; font-size: 11px; }
			.required_msg { padding-left: 180px; clear:both; float:left; color:red; }
			h1 { background: ; padding: 20px; font-size: 1.2em; color: black; margin: 0 0 20px 0; text-align: left;}
			.top { margin: 20px; font-size: 20px; font-family: 'Raleway', sans-serif; }
			
			.topnav {
				overflow: hidden;
				background-color: white;
				margin: 30px;
			}
    
			.topnav a {
				
				display: inline-block;
				color: black;
				text-align: center;
				padding: 14px 16px;
				text-decoration: none;
				font-size: 17px;
			}
				
			.topnav a:hover {
				background-color: #ddd;
				color: black;
			}
				
			.topnav a.active {
				background-color: #4CAF50;
				color: white;
			}
				
			.topnav .icon {
				display: none;
			}
				
			@media screen and (max-width: 600px) {
				.topnav a:not(:first-child) {display: none;}
				.topnav a.icon {
					float: right;
					display: block;
				}
			}
				
			@media screen and (max-width: 600px) {
				.topnav.responsive {
					position: relative;
					background: black;
				}
				.topnav.responsive .icon {
					position: absolute;
					right: 0;
					top: 0;
					color: white;
				}
				.topnav.responsive a {
					float: none;
					display: block;
					text-align: left;
					color: white;
					padding: 12px 14px;
					font-size: 14px;
			
				}
			}
			@media only screen and (max-width: 600px) { 
				
				.top { 
					margin: 2px; 
					font-size: 18px; 
				}
				
			}
			  
			  /* footer */

			.footer {
			margin-top: 70px;
			text-align: center;
			background: black;
			color: white;
			}

			.footer a {
			color: white;
			}



			.location {
			padding-top: 30px;
			
			}

			.location p {
			font-size: 18px;
			}

			.social-media {
			text-align: center;
			display: inline-block;
			}

			.social-media p {
			
			font-size: 22px;
			}

			.instagram {
			display: inline-block;
			margin: 30px;
			}

			.twitter {
			display: inline-block;
			margin: 30px;

			}

			.social-media img {
			height: 30px;
			width: 30px;
  			border-radius: 100px;

			
			} 

			.coming {
			color: white;
			font-size: 40px;
			text-align: center;

			margin: 200px;
			}

			.contact-us a {
			
			
			}
		</style>
	</head>
	<body>

		<div class="topnav" id="myTopnav">
			<a href="index-jp.html" class="home">ホーム</a>
			<a href="work-jp.html" class="work">サービス</a>
			<a href="contact-jp.php" class="contact">お問い合わせ　</a>
			<a href="javascript:void(0);" class="icon" onclick="myFunction()">
			<i class="fa fa-bars"></i>
			</a>
		</div>

		<h1>お問い合わせ</h1>
		
		<form action="" method="post" id="form">
			<fieldset>
			
				<label for="name">お名前: <em>*</em></label>
				<input type="text" name="name" id="name" class="require name" value="<?php echo $form['name']; ?>"> <?php echo $error['name'] ?>
				
				<label for="phone">電話番号: <em>*</em></label>
				<input type="text" name="phone" id="phone" class="require phone" value="<?php echo $form['phone']; ?>"> <?php echo $error['phone'] ?>
				
				<label for="country">国:</label>
				<input type="text" name="country" id="country" value="<?php echo $form['country']; ?>">				
				<label for="email">メールアドレス: <em>*</em></label>
				<input type="text" name="email" id="email" class="require email" value="<?php echo $form['email']; ?>"> <?php echo $error['email'] ?>
				
				<label for="comments">コメント:</label>
				<textarea name="comments" id="comments"><?php echo $form['comments']; ?></textarea>
				
				<p class="required_msg">* 要入力</p>
				
				<input type="submit" name="submit" id="submit" value="送信">
			
			</fieldset>
		</form>

		

		<script>
			function myFunction() {
			var x = document.getElementById("myTopnav");
			if (x.className === "topnav") {
				x.className += " responsive";
			} else {
				x.className = "topnav";
			}
			}
		</script>
	</body>
</html>