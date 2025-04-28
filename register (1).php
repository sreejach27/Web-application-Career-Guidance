<?php include('registerserver.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<style>
body {
       background: url(pic8.jpg.jpeg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>
	<div class="header">
		<h2>Registration</h2>
	</div>
	
	<form method="post" action="register.php">
		<?php include('errors.php');?>


		<div class="input-group">
			<label>Name</label>
			<input type="text" name="Name">
		</div>
		<div class="input-group">
			<label>Gender </label>
			<input type="text" name="Gender">
		</div>
		<div class="input-group">
			<label>DOB(YYYY-MM-DD)</label>
			<input type="text" name="DOB">
		</div>
		<div class="input-group">
			<label>AadharNumber</label>
			<input type="text" name="AadharNumber">
		</div>
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="Address">
		</div>
		<div class="input-group">
			<label>District</label>
			<input type="text" name="District">
		</div>
		<div class="input-group">
			<label>MobileNumber</label>
			<input type="" name="MobileNumber">
		</div>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="Username">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="Password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn"  name="reg_user">Register</button>
		</div>
		
	</form>
</body>
</html>


