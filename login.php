<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
	<section class="login">
		<div class="login_box">
			<div class="left">
				<div class="contact">
					<form action="" method="POST">
						<h3>SIGN IN</h3>
						<input type="text" placeholder="USERNAME" name="username">
						<input type="password" placeholder="PASSWORD" name="password">
						<input type="submit" value="LETS GO" name="submit" >
						<?php
							if (isset($_POST['submit'])) {
								$username = $_POST['username'];
								$password = $_POST['password'];

								$_SESSION['username'] = "rakaaja";
								$_SESSION['password'] = "2323";

								if ($username == $_SESSION['username'] && $password == $_SESSION['password']) {
									header('Location:admin.php');
								} else {
									echo "Username atau password salah !";
								}
							}
						?>
					</form>

				</div>
			</div>
			<div class="right">
				<div class="right-text">
					<h2>HOLLA OL!
					</h2>
					<h5>Login dulu, jangan ampe kaga !</h5>
				</div>
				<div class="right-inductor"><img src="" alt=""></div>
			</div>
		</div>
	</section>
</body>
</html>
