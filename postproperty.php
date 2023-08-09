
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
	
  <form method="POST" action="insert.php">
  
  	<div class="input-group">
  	  <label>Title</label>
  	  <input type="text" name="p_title" required>
  	</div>
  	<div class="input-group">
  	  <label>Description</label>
  	  <input type="text" name="p_desc" required>
  	</div>
  	<div class="input-group">
  	  <label>Price</label>
  	  <input type="int" name="price" required>
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="post">Post</button>
  	</div>
  </form>
</body>
</html>
