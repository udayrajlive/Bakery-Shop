<!DOCTYPE html>
<html>
<head>
	
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>The Cake Parlour By uDAY</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href="css/style1.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Armata|Julius+Sans+One' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/craftyslide.css" />
		
            <link rel="stylesheet" href="css/normalize.css">
            <link rel="stylesheet" href="css/style3.css">
           <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
		<SCRIPT src="js/jquery.min.js" type=text/javascript></SCRIPT>
	
	<link rel="stylesheet" type="text/css" href="css/style5.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
          <a href="signup.php" class="ca">Create an account</a>
     </form>
<div class="clear"> </div>
         </div>
		</div>
      	</div>
      	<div class="clear"> 	</div>
      </div>
     </div>
		<div class="footer">
			<div class="wrap">
      		<div class="footer-nav"> 
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="products.html">Products</a></li>
						<li><a href="#">Services</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
			</div>
			<div class="copy-right">
				<p>© 2021 All rights Reserved | Design by uday </a></p>
			</div>
			</div>
      	</div>
</body>
</html>