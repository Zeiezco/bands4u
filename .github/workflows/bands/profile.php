<?php 
  session_start(); 
  include('upload-code.php'); // Include upload code Script page.
  ?>
<!DOCTYPE html>
<html>
    <html lang="En" class="no-js">
        <head>
        <meta charset="utf-8">
        <title>Profile Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="main page" />
            <meta name="author" content="Codrops" />
            <meta name="author" content="Codrops" />
            <link rel="shortcut icon" href="../favicon.ico"> 
            <link rel="stylesheet" type="text/css" href="profile.css" />
    </head>
    <body>
         <div class="container">
            <div class="codrops-top">
           <h1>   <a href="/home/anonymous/Desktop/NEW PAGE]\/bg.ico"> <img src="bg.ico" width="150" height="150">
             </a> </h1>
             <span class="right">
                 
                    <a>    <?php  if (isset($_SESSION['username'])) : ?>
            <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
                        <a href="index.php?logout='1'" style="color: red;">logout</a><?php endif ?></a>
                </span>
                <div class="clr"></div>
            </div>
            <h6>
            <style>
	
		html, body{background: #ececec; height: 100%; margin: 0; font-family: Arial;}
		.main{height: 100%; display: flex; justify-content: center;}
		.main .image-box{width:300px; margin-top: 30px;}
		.main h2{text-align: center; color: #4D4D4D;}
		.main .tb{width: 100%; height: 40px; margin-bottom: 5px; padding-left: 5px;}
		.main .file_input{margin-top: 10px; margin-bottom: 10px;}
		.main .btn{width: 100%; height: 40px; border: none; border-radius: 3px; background: #27a465; color: #f7f7f7;}
		.main .msg{color: red; text-align: center;}
	
	</style>
            <div class="container main" >
		<div class="image-box">
			<h2>Image Upload</h2>
			<form method="POST" name="upfrm" action="" enctype="multipart/form-data">
				<div>
					<input type="text" placeholder="Enter image name" name="img-name" class="tb" />
          <input type="text" placeholder="Enter Good Details" name="details" class="tb" />
          <input type="num" placeholder="Enter Contact Number" name="number" class="tb" />
          <input type="text" placeholder="Price" name="Price" class="tb" />
					<input type="file" name="fileImg" class="file_input" />
					<input type="submit" value="Upload" name="btn_upload" class="btn" />
				</div>
			</form>
			<div class="msg">
			<strong>
		<?php if(isset($error)){echo $error;}?>
	</strong>

			</div>
		</div>
	</div>
            </h6>
          
    </body>
</html>