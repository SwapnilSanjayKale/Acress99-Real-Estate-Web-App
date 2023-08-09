




<?php include'header.php';?>




<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="assets/style1.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="POST" action="landing.php">
  
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" required>
  	</div>
  	<div class="input-group">
  	  <label>Email Id</label>
  	  <input type="text" name="email" required>
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="int" name="password" required>
  	</div>
	  <div class="input-group">
  	  <label>Confirm Password</label>
  	  <input type="int" name="confirmpassword" required>
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="post">Register</button>
  	</div>
  </form>
</body>
</html>

  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>
