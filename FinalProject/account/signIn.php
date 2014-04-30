<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Sign In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
	<link href="../css/style.css" rel="stylesheet" type="text/css">
	<link href="../css/layerslider.css" rel="stylesheet" type="text/css">

    


</head>


<body style="background-image:url('../content/background2.png');">
<header>
<div class="container">
			
			<!--start: Navigation -->
			<div class="navbar">
	    		<div class="navbar-inner">
	          		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
	            		<span class="icon-bar"></span>
	            		<span class="icon-bar"></span>
	            		<span class="icon-bar"></span>
	          		</a>
                   
                    <div class="nav-collapse collapse">
                        <ul class="nav">                             
                        		<div class="meta">
                        			<div class="span1">
                        			<a  href="../src/index.php">
                        		&nbsp&nbsp&nbsp&nbsp<i class="glyphicons-icon home"></i></a><p>
                        		<span style="color: #0A64A3">I</span><span>ma<span style="color: #FE4F00;
                        		">G</span>raphy</span></p></div>
                        		<div class="span1">
                            	<a href="../images/browse.php"><i class="glyphicons-icon camera"></i></a> 
                            	<p>Browse</p>                       
                				</div></div>
                        </ul>
                        <?php
								include('../account/accountController.php');

								$connection = checkLogInStatus();
								if($connection == NULL)
									echo $LogOutHeader;
								else
									echo "<ul class=\"nav pull-right\" id=\"main-menu-right
			\">						<div class=\"meta\">
	<div class=\"span1\">								
  <a ><i class = \"glyphicons-icon user\"></i></a><p>&nbsp&nbsp$connection</p></div>
	<a href=\"../account/logout.php\"><i class = \"glyphicons-icon power\"></i></a><p>Log out</p></div>
</ul>";
                            ?>
                    </div>
	        	</div>
	      	</div>	
			<!--end: Navigation -->
</div>
</header><br><br><br><br>
    <div class="container">
    <?php
		if(empty($_POST['username']))
		die("Error: No UserName");

		if(empty($_POST['password']))
		die("Error: No Password");


		$signIn = AccountSignIn($_POST['username'],$_POST['password']);
		if($signIn)
			echo $AccountSignInSucc;
		
		else
			echo $AccountSignInFail;

	?>
	</div>
	<br>
 <div class="footer">
        <div class="container">
            <p class="muted credit" style="text-align:center">Copyright Yang Li 2012-2013.</p>
            <p class="muted credit" style="text-align:center">Powered by <a href="http://twitter.github.com/bootstrap/index.html" rel="tooltip" data-placement="top" title="Visit Bootstrap">Bootstrap</a></p>
                    </div>
    </div>


<script src="../js/jquery-1.9.1.min.js"></script>
<script src="../js/jquery.isotope.min.js"></script>
<script src="../js/jquery.imagesloaded.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/flexslider.js"></script>
<script src="../js/carousel.js"></script>
<script src="../js/jquery.cslider.js"></script>
<script src="../js/slider.js"></script>
<script src="../js/jquery.fancybox.js"></script>
<script src="../js/twitter.js"></script>
<script src="../js/jquery.placeholder.min.js"></script>

<script src="../js/jquery-easing-1.3.js"></script>
<script src="../js/layerslider.kreaturamedia.jquery.js"></script>

<script src="../js/excanvas.js"></script>
<script src="../js/jquery.flot.js"></script>
<script src="../js/jquery.flot.pie.min.js"></script>
<script src="../js/jquery.flot.stack.js"></script>
<script src="../js/jquery.flot.resize.min.js"></script>

<script defer="defer" src="../js/modernizr.js"></script>
<script defer="defer" src="../js/retina.js"></script>
<script defer="defer" src="../js/custom.js"></script>
<script src="http://gregpike.net/demos/bootstrap-file-input/bootstrap.file-input.js"></script>
    

</body>
</html>