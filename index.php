<?php
	$themes = array("default","forest","autumn","stones","snow","flower");
	$theme = $themes[array_rand($themes)];
?>
<html>
	<head>
		<title>Metro Login :: Metro Designed Login Page!</title>
		<meta name="description" content="Metro Designed Login Page by Alireza Sheikholmolouki" />
		<meta name="keywords" content="HTML,Metro,Login,Windows8,js,javascript,Alireza,Sheikholmolouki" />
		<meta name="author" content="Alireza Sheikholmolouki" />
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="css/style.css" />
		<!--HERE'S THEME-->
			<link rel="stylesheet" href="themes/<?php echo $theme ?>.css" />
		<!--HERE'S THEME-->
		<script src="js/jquery.js"></script>
		<script src="js/jquery.ui.core.js"></script>
		<script src="js/jquery.ui.widget.js"></script>
		<script src="js/jquery.ui.mouse.js"></script>
		<script src="js/jquery.ui.draggable.js"></script>
		<script src="js/touch.js"></script>
		<script src="js/moment.js"></script>
		<script src="js/script.js"></script>
	</head>
	<body>
		<div class="fullScreenItem" id="loginPage">
			<div id="loginFormCenter">
				<div id="LoginFormContainer">
					<img src="images/me.jpg">
					<div id="rightContainer">
						<h1>
							<span id="user" ContentEditable="false">[Username]</span>
							<span id="notyou">(not you?)</span>
						</h1>
						<h4>Locked</h4>
						<form id="loginForm" action="" method="POST">
							<input id="username" name="user" style="display:none;" required>
							<input id="pass" name="pass" type="password" placeholder="Password" required>
							<div id="showPass"></div>
							<div id="submit"></div>
						</form>
						<a href="#signup">
							<article id="signup">or Signup</article>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div id="rightBar" class="bottomBar">
			<a href="" target="_blank">
				<img src="images/buyitem.png" alt="Buy Item On ThemeForest.com" title="Buy Item On ThemeForest.com" />
			</a>
			<a href="http://codecanyon.net/user/Alireza29675/portfolio" target="_blank">
				<img src="images/portfolio.png" alt="Go to My portfolio" title="Go to My portfolio" />
			</a>
		</div>
		<div id="leftBar" class="bottomBar">
			<a href="http://AlirezaDesigner.com/" target="_blank">
				<img src="images/alirezadesigner.png" alt="Go to AlirezaDesigner.com!" title="Go to AlirezaDesigner.com!" />
			</a>
		</div>
		<div class="fullScreenItem draggable" id="loginCover">
			<p id="time">13:56</p>
			<p id="date">Thursday, Decemeber 14</p>
		</div>
	</body>
</html>