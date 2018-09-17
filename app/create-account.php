<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Create an account</title>
	<!-- <link rel="stylesheet" type="text/css" href="style/header.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="style/create-account.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="style/footer.css"> -->
	<link rel="stylesheet" type="text/css" href="style/css/buildd.css">
</head>

<body>

	<div class="container">

		<?php
		include ('header.php');
		?>

		<main>

			<div class="content">

				<div class="sign_up">

					<div class="sign_up-form">
						<label class="sign_up-label-name" for="username">Username</label>
						<input class="sign_up-input" type="text" name="username" placeholder="Enter Username" required>
					</div>

					<div class="sign_up-form">
						<label class="sign_up-label-name" for="email">Email</label>
						<input class="sign_up-input" type="email" name="email" placeholder="Enter Email">
					</div>

					<div class="sign_up-form">
						<label class="sign_up-label-name" for="password">Password</label>
						<input class="sign_up-input" type="password" name="password" placeholder="Enter Password" required>
					</div>
					<div class="sign_up-form">
						<label class="sign_up-label-name">Repeat Password</label>
						<input class="sign_up-input" type="password" name="repeat-password" placeholder="Repeat Password" required>
					</div>
					<div class="sign_up-remember-checkbox">
						<input class="sign_up-checkbox-icon" type="checkbox" name="remember">
						<label class="sign_up-check" for="checkbox">Remember me</label>
					</div>
					<button type="button" class="sign_up-submit">Sign up</button>
				

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