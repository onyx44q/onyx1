
<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Patient</title>
	<link rel="stylesheet" type="text/css" href="style11.css">
</head>
<body>
	<div class="header">
	<h2>Patient Login</h2>
	<img src="images (1).png" height="100" width="100">
</div>

<form method="post" action="login.php">

	<?php include ('errors.php')?>

	<div class="input-group">
		<label>User ID</label>
		<input type="text" name="UserID">

	</div>




	<div class="input-group">
		<label>Password</label>
		<input type="Password" name="password">



	<div class="input-group">
		<button type="submit" name="Login" class="btn"> Login</button>
	</div>

	<p>
		Not a member? <a href="1st.php">Sign Up </a>
	</p>
	




</form>
<script src="app.js"></script>
</body>
</html>