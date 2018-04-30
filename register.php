<?php include('server.php');  ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User registration system in PHP an MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	   <div class="header">
	   	   <center><h2>Register</h2></center>

	   </div>

	   <form method="post" action="register.php">
	   	     <div class="input-group">
	   	     	  <label>Username:</label>
	   	     	  <input type="text" name="username" required>
	   	     </div>

	   	     <div class="input-group">
	   	     	  <label>Email:</label>
	   	     	  <input type="email" name="email" required>
	   	     </div>

	   	     <div class="input-group">
	   	     	  <label>Password:</label>
	   	     	  <input type="text" name="pwd_1" required>
	   	     </div>

	   	     <div class="input-group">
	   	     	  <label>Confirm Password:</label>
	   	     	  <input type="text" name="pwd_2" required>
	   	     </div>

	   	     <div class="input-group">
	   	     	  <button type="submit" name="register" class="btn">Register</button>
	   	     </div>

	   	     <p>Already member? <a href="login.php">Sign in here !!</a></p>
	   </form>

</body>
</html>