<?php include('server.php') ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
    <meta charset="UTF-8" />
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
    <title>BandS REGISTRATION AND SIGN-UP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
</head>

<body>
    <div class="container">
        <!-- Codrops top bar -->
        <div class="codrops-top">

            <span class="right">
                    
                        
                </span>
            <div class="clr"></div>
        </div>
        <!--/ Codrops top bar -->
        <header>
            <h1>Login and Registration Form <span></span></h1>
            <nav class="codrops-demos">
                <span> <strong>"BUYING AND SELLING MADE EASY FOR STUDENT"</strong></span>


            </nav>
        </header>
        <section>
            <div id="container_demo">

                <a class="hiddenanchor" id="toregister"></a>
                <a class="hiddenanchor" id="tologin"></a>
                <div id="wrapper">
                    <div id="login" class="animate form">
                    <form method="post" action="login.php">
                      	<?php include('errors.php'); ?>
                    
                            <h1>Log in</h1>
                            <p>
                                <label for="username" class="uname" data-icon="u"> username </label>
                                <input id="username" name="username" required="required" type="text" placeholder="myusername or mymail@mail.com" />
                            </p>
                            <p>
                                <label for="password" class="youpasswd" data-icon="p">password </label>
                                <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" />
                            </p>
                            <p class="keeplogin">
                                <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />
                                <label for="loginkeeping">Keep me logged in</label>
                            </p>
                            <div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
      <p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
                        </form>
          
        
      
</body>

</html>