<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>BandS REGISTRATION</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="register.css" />

    
	

</head>
<body>

  <div class="header">
  	<h1>Register</h1>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
      <div class="input-group">
  	  <label>name</label>
  	  <input type="text" name="name"  value="<?php echo $name; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
      <div class="input-group">
  	  <label>picture</label>
  	  <input type="file" name="picture" value="<?php echo $picture; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password" value="<?php echo $password; ?>">
	  </div>
	
	  <div class="input-group">
  	  <label>Date Of Birth</label>	 
	<input type="date" name="dob" value="<?php echo $dob; ?>">
 	</div>
  	<div class="input-group">
  	  <label>Contact Number</label>
  	  <input type="text" name="number" value="<?php echo $number; ?>">
  	</div>
      <div class="input-group">
  	  <label>Address</label>
  	  <input type="text" name="address" value="<?php echo $address; ?>">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>