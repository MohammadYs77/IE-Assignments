<?php

if (isset($_POST['usr']) && isset($_POST['pwd'])) {

	$eml = $_POST['usr'];
	$pwd = $_POST['pwd'];

	if ($eml == 'something@gmail.com' && $pwd == '123') {
		echo "<p>Welcome<p>";
	} else {
		show_login_page('Wrong email or password !');
	}
} else {
	show_login_page();
}
?>


<?php

function show_login_page($msg = '')
{
?>

	<!DOCTYPE html>
	<html>

	<head>
		<title>Login</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="Login.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	</head>

	<body>
		<div class="container-fluid">
			<div class="row">
				<h2 style="text-align:center;color: white;">Welcome</h2>
			</div>
			<div class="row">

				<div class="col-sm-3"></div>

				<div class="col-sm-6">
					<form method="post" action="index.php">
						<div class="form-group">

							<div class="row">
								<label for="usr" class="col-sm-3 col-form-label">Email Address</label>
								<div class="col-sm-9">
									<input type="text" name="usr" id="usr" class="form-control" required placeholder="Enter email">
								</div>
							</div>

							<div class="row">
								<label for="pwd" class="col-sm-3 col-form-label">Password</label>
								<div class="col-sm-9">
									<input type="password" name="pwd" id="pwd" class="form-control" required placeholder="Enter password">
									<p style="font-size: 12px;">
										<b>Forgot password?
											<a href="https://www.w3schools.com/w3css/default.asp" target="_blank">
												Click here!
											</a>
										</b>
									</p>
								</div>
							</div>

							<div class="ro">
								<div class="col-sm-12">
									<label><input type="checkbox"> Remember me</label>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-3">
									<button type="submit" class="btn">Log in</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		</div>
	</body>

	</html>

<?php
}
?>