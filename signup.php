<!DOCTYPE html>
<html>
<head>	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
     <form action="signup-check.php" method="post">
     	<br><br><br>
		<br><br><br><br><br><br><br><br><br><br><br><br>
		<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>
<label for="Email">E-mail: </label>
                <input type="email" name="Email" id="Email" required placeholder="Enter your E-Mail ID">

 <label for="Phone">Phone Number: </label>
                <input type="tel" name="Number" id="Phone" pattern=".{10,}" required placeholder="Enter your Phone Number" title="Please enter valid Number">
				
     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>Re Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>

     	<button type="submit">Sign Up</button>
          <a href="index.php" class="ca">Already have an account?</a>
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
						<li><a href="dex.html">Home</a></li>
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