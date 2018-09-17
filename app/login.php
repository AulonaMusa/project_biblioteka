<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<!-- <link rel="stylesheet" type="text/css" href="style/login.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="style/footer.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="style/header.css"> -->
	<link rel="stylesheet" type="text/css" href="style/css/buildd.css">
</head>

<body>

<div class="container">

<?php
     include('header.php');
?>

	<main>
		<div class="content">

			<div class="login">
				<div class="login-form">
					<label class="login-label-name" for="username">Username</label>
					<input class="login-input" type="text" name="username" placeholder="Enter Username" required>
					<!-- <span class="error_input" v-if="error != null">Error this ...</span> -->
				</div>
				<div class="login-form">
					<label class="login-label-name" for="password">Password</label>
					<input class="login-input" type="password" name="password" placeholder="Enter Password" required>
				</div>
				<div class="login-remember-checkbox">
					<input class="login-checkbox-icon" type="checkbox" name="remember">
					<label class="login-check" for="checkbox">Remember me</label>
				</div>
				<div class="login-lower">
					<a class="login-lower-forgot" href="#">Forgot password</a>
					<button class="login-lower-submit" type="submit">Login</button>
				</div>
				<a class="login-lower-new-account" href="create-account.php">Create an account</a>
		    </div>

		</div>
	</main>


	 <footer class="login-footer-content-copyrights">	
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>	
		<a href="https://www.w3schools.com/" target="_blank">WWW.W3SCHOOL.COM</a>
	</footer>  




	 <!-- 
		<?php
		include('footer_copyrights.php');
		?> 
	-->
 

   </div>

</body>

</html>



