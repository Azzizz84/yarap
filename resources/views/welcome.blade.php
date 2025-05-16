<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Creative Colorlib SignUp Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
 <style>
      /* Add to your public CSS file or Blade view */
.social-login {
  display: flex;
  gap: 1px;
}

.social-button {
  display: inline-flex;
  align-items: center;
  padding: 10px;
  text-decoration: none;
  color: white;
  border-radius: 5px;
  font-weight: bold;
}

.google-btn {
  background-color: #4285F4;
  size:0cap;
}

.facebook-btn {
  background-color: #3b5998;
  size:0cap;
}

.apple-btn {
  background-color: #333;
}

.social-button img {
  width: 2px;
  margin-right: 1px;
}
.social-register {
  display: flex;
  justify-content: space-between;
  margin-top: 2px;
}
.social-register .btn {
  flex: 1;
  margin: 0 5px;
  padding: 10px;
  border: none;
  border-radius: 4px;
  color: #fff;
  font-size: 16px;
  text-align: center;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
}
.social-register .btn.apple {
  background-color: #000;
}
.social-register .btn.facebook {
  background-color: #1877f2;
}
.social-register .btn.google {
  background-color: #db4437;
}
.social-register .btn img {
  width: 2px;
  height: 2px;
  margin-right: 5px;
}
 </style>
<link rel="stylesheet" href="{{ asset('style.css') }}">
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		
		<div class="main-agileinfo">
			<div class="agileits-top">
            <h1>Welcome to Istinarah✨!</h1>
				<form action="#" method="post">
					<input class="text" type="text" name="Username" placeholder="Username" required="">
					<input class="text email" type="email" name="email" placeholder="Email" required="">
					<input class="text" type="password" name="password" placeholder="Password" required="">
					<input class="text w3lpass" type="password" name="password" placeholder="Confirm Password" required="">
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" value="SIGNUP">
				</form>
				<p>Don't have an Account? <a href="#"> Login Now!</a></p>
			</div>
             <!-- Social Login Buttons -->
		</div>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p>© 2025 All rights reserved | Design by Aziz Almaadeni</p>
		</div>

		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>
</html>