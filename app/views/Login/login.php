<html>

<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
	integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
	.formLogin {
		width: 100%;
		max-width: 330px;
		padding: 15px;
		margin: 0 auto;
		margin-top: 150px;

	}
</style>

<body class="text-center">

	<div class="formLogin">
		<form method="post" action="">
			<h1 class="h3 mb-3 font-weight-normal">Account Login</h1>
			<?php
			if (isset($_GET['error']))
				echo $_GET['error'];
			?>
			<label class="sr-only">Username</label>
			<input type="text" name="username" class="form-control" placeholder="Username">

			<label class="sr-only">Password</label>
			<input type="password" name="password" class="form-control" placeholder="Password"><br>
			
			<input type="submit" name="action" value="Login" class="btn btn-success btn-primary btn-block" /><br>
			<a href="<?= BASE ?>/Default/register">No Account? Register</a>
		</form>
	</div>

</body>

</html>