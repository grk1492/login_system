<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User registration system in PHP an MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	   <div class="header">
	   	   <center><h2>Login</h2></center>

	   </div>

	   <form method="post" action="login.php">
	   	     <div class="input-group">
	   	     	  <label>Username:</label>
	   	     	  <input type="text" name="username" required>
	   	     </div>

	   	     <div class="input-group">
	   	     	  <label>Password:</label>
	   	     	  <input type="text" name="pwd_1" required>
	   	     </div>

	   	     <div class="input-group">
	   	     	  <button type="submit" name="login" class="btn">Login</button>
	   	     </div>

	   	     <p>Not a member yet !? <a href="register.php">Sign up !!!!</a></p>
	   </form>

</body>
</html>