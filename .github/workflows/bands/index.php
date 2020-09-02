<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="En" class="no-js">
<head>
	<meta charset="utf-8">
	<title>main page BandS 4 U</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="main page" />
    <meta name="viewport" content="width=device-width, intial-scale=1.0"/>
       <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="index.css" />
</head>

<body>
<style>
h3{background-color: #4294D1; color: #f7f7f7; padding: 15px; border-radius: 4px; box-shadow: 0 1px 6px rgba(57,73,76,0.35);}
		.img-box{margin-top: 20px;}
		.img-block{float: left; margin-right: 5px; text-align: center;}
		p{margin-top: 0;}
		img{width: 375px; min-height: 250px; margin-bottom: 10px; box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important; border:6px solid #f7f7f7;}
</style>

  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h2>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h2>
      </div>
      <?php endif ?>
      </div>
                <h1><a href="/home/anonymous/Desktop/NEW PAGE]\/bg.ico"> <img src="bg.ico" width="150" height="50"></a>  <span class="right">
                   	</a><strong>BUYING AND SELLING MADE EASY FOR STUDENT</strong></span>
                       
                </h1>
                <?php  if (isset($_SESSION['username'])) : ?>
        <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        <a href="profile.php" class="current-demo">profile</a>
    	<p><span> <a href="index.php?logout='1'" style="color: red;">logout</a></span> 
                       <?php endif ?>
					  <!-- logged in user information -->
    
                    </div>
                </div>
                </nav>
		     </header>
             <!-------------------Main Content------------------------------>
		<div class="container main">
			<h3>Select To Buy Now
            <style>
h3{background-color: #4294D1; color: #f7f7f7; padding: 15px; border-radius: 4px; box-shadow: 0 1px 6px rgba(57,73,76,0.35);}
		.img-box{margin-top: 20px;}
		.img-block{float: left; margin-right: 5px; text-align: center;}
		p{margin-top: 0;}
		img{width: 375px; min-height: 250px; margin-bottom: 10px; box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important; border:6px solid #f7f7f7;}
</style>
            </h3>
			<div class="img-box">
            <?php
	include "connection.php";

	$result = mysqli_connect($host,$uname) or die("Could not connect to database." .mysqli_error());
	mysqli_select_db($result,$db_name) or die("Could not select the databse." .mysqli_error());
	$image_query = mysqli_query($result,"select img_name,img_path from image_table");
	while($rows = mysqli_fetch_array($image_query))
	{
		$img_name = $rows['img_name'];
		$img_src = $rows['img_path'];
	?>
	
	<div class="img-block">
	<img src="<?php echo $img_src; ?>" alt="" title="<?php echo $img_name; ?>" class="img-responsive" />
	<p><strong><?php echo $img_name; ?></strong></p>
	</div>
	
	<?php
	}
	?>

			</div>
		</div>

</body>
</html>