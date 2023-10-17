<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Page</title>
	<link rel="stylesheet" href="index.css">
	<script src="https://kit.fontawesome.com/53b89dd49e.js" crossorigin="anonymous"></script>
</head>
 <!-- email method -->
 <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
 <script type="text/javascript">
 (function() {
 emailjs.init("epVHGFQIo-D_O1Zqw");
 })();
 </script>
<body>
	<div class="container" id="container">
		<div class="form-container sign-up-container">
			<form action="signup.php" method="post">
				<h3>Signup with your Google account</h3>
				<div class="social-container">
					<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
					<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
				</div>
				<span>or use your email for registration</span>
				<input type="text" placeholder="Name" name="name" required/>
				<input type="email" placeholder="Enter your Email_Id" id="upmail" name="gmail" required/>
				<input type="password" placeholder="Enter your Email_id password" name="password" required/>
				<!-- <div class="password">
					<div class="passimg" onclick="upimg(this)" id="s01"><img src="10.png" alt="" class="patimg"></div>
					<div class="passimg" onclick="upimg(this)" id="s02"><img src="11.png" alt="" class="patimg"></div>
					<div class="passimg" onclick="upimg(this)" id="s03"><img src="12.png" alt="" class="patimg"></div>
					<div class="passimg" onclick="upimg(this)" id="s04"><img src="13.png" alt="" class="patimg"></div>
					<div class="passimg" onclick="upimg(this)" id="s05"><img src="14.png" alt="" class="patimg"></div>
					<div class="passimg" onclick="upimg(this)" id="s06"><img src="15.png" alt="" class="patimg"></div>
					<div class="passimg" onclick="upimg(this)" id="s07"><img src="16.png" alt="" class="patimg"></div>
					<div class="passimg" onclick="upimg(this)" id="s08"><img src="17.png" alt="" class="patimg"></div>
					<div class="passimg" onclick="upimg(this)" id="s09"><img src="18.png" alt="" class="patimg"></div>
					<div class="passimg" onclick="upimg(this)" id="s10"><img src="19.png" alt="" class="patimg"></div>
					<div class="passimg" onclick="upimg(this)" id="s11"><img src="20.png" alt="" class="patimg"></div>
					<div class="passimg" onclick="upimg(this)" id="s12"><img src="21.png" alt="" class="patimg"></div>
					<div class="passimg" onclick="upimg(this)" id="s13"><img src="22.png" alt="" class="patimg"></div>
					<div class="passimg" onclick="upimg(this)" id="s14"><img src="23.png" alt="" class="patimg"></div>
					<div class="passimg" onclick="upimg(this)" id="s15"><img src="24.png" alt="" class="patimg"></div>
				</div> -->
				<button id="signupbtn"  onclick="signup()">Sign Up</button>
			</form>
		</div>
		<div class="form-container sign-in-container">
			<form action="signin.php" method="post">
				<h1>Sign in</h1>
				<div class="social-container">
					<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
					<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
				</div>
				<span>or use your account</span>
				<input type="email" placeholder="Enter your Email_Id" id="inmail" required />
				<input type="password" autocomplete="current-password" required placeholder="Enter your Email_Id password" /> 
				<!-- <div class="password">
					<div class="passimg" onclick="inimg(this)" id="s01"><img src="10.png" alt="" class="patimg"></div>
					<div class="passimg" onclick="inimg(this)" id="s02"><img src="11.png" alt="" class="patimg"></div>
					<div class="passimg" onclick="inimg(this)" id="s03"><img src="12.png" alt="" class="patimg"></div>
					<div class="passimg" onclick="inimg(this)" id="s04"><img src="13.png" alt="" class="patimg"></div>
					<div class="passimg" onclick="inimg(this)" id="s05"><img src="14.png" alt="" class="patimg"></div>
					<div class="passimg" onclick="inimg(this)" id="s06"><img src="15.png" alt="" class="patimg"></div>
					<div class="passimg" onclick="inimg(this)" id="s07"><img src="16.png" alt="" class="patimg"></div>
					<div class="passimg" onclick="inimg(this)" id="s08"><img src="17.png" alt="" class="patimg"></div>
					<div class="passimg" onclick="inimg(this)" id="s09"><img src="18.png" alt="" class="patimg"></div>
					<div class="passimg" onclick="inimg(this)" id="s10"><img src="19.png" alt="" class="patimg"></div>
					<div class="passimg" onclick="inimg(this)" id="s11"><img src="20.png" alt="" class="patimg"></div>
					<div class="passimg" onclick="inimg(this)" id="s12"><img src="21.png" alt="" class="patimg"></div>
					<div class="passimg" onclick="inimg(this)" id="s13"><img src="22.png" alt="" class="patimg"></div>
					<div class="passimg" onclick="inimg(this)" id="s14"><img src="23.png" alt="" class="patimg"></div>
					<div class="passimg" onclick="inimg(this)" id="s15"><img src="24.png" alt="" class="patimg"></div>
				</div> -->
				<a  onclick="sendMail2()">Forgot your password?</a>
				<button onclick="signin()">Sign In</button>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1>Hi👋,there!</h1>
					<p>Enter your personal details and start journey with us</p>
					<button class="ghost" id="signIn">Sign In</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h1>Welcome Back!</h1>
					<p>To keep connected with us please login with your personal info</p>
					<button class="ghost" id="signUp">Sign Up</button>
				</div>
			</div>
		</div>
	</div>
	<script src="main.js"></script>
</body>

</html>