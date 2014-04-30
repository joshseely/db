<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Upload</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://twitter.github.io/bootstrap/assets/css/bootstrap.css" rel="stylesheet">
    <link href="http://bootswatch.com/default/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="http://bootswatch.com/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://bootswatch.com/css/bootswatch.css" rel="stylesheet">

    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
        position:relative;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
	<script>
function PrintImageName()
{

 var image_name = document.getElementById("image_name");
 var image_link = document.getElementById("image_link");


if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
var data = "image_name="+image_name+'&image_link='+image_link;
xmlhttp.open("POST","Ajax_handler/share_image_name_set.php?"+data,true);
xmlhttp.send();
}
</script>
	    


</head>
<body style="background-image:url('../content/background.png');">
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
</header>
    <div class="container">

<?php
	include('imageFileController.php');
	if(empty($_POST['link']))
		die("Error: No link");
	echo $_POST['link'];

?>
			<div class="span2"></div>
			<div class="span6">
			<div class="page-header">
				<form  onsubmit="return PrintImageName()">
                <input type='hidden' id='image_link' name='image_link' value='<?php echo $_POST['link']?>' />
                <input type="text" name='image_name' id='image_name' placeholder='Give a name to this image'>
				<span class="btn btn-primary btn-mini" type='submit'>submit</span>
            	</form>
            </div>	
			    	
			 		
    		<img src="
    		<?php
			echo $_POST['link'];
    		?>
    		" style="max-width:640px;max-height:360px">
    		</div>
    	
</div>

<div class="footer">
        <div class="container">
            <p class="muted credit" style="text-align:center">Copyright Yang Li 2012-2013.</p>
            <p class="muted credit" style="text-align:center">Powered by <a href="http://twitter.github.com/bootstrap/index.html" rel="tooltip" data-placement="top" title="Visit Bootstrap">Bootstrap</a>. Theme made by 
                <a href="http://thomaspark.me/" rel="tooltip" data-placement="top" title="Visit the author's personal page">Thomas Park</a></p>
        </div>
    </div>


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://bootswatch.com/js/jquery.smooth-scroll.min.js"></script>
    <script src="http://bootswatch.com/js/bootstrap.min.js"></script>
    <script src="http://bootswatch.com/js/bootswatch.js"></script>
    <script src="http://gregpike.net/demos/bootstrap-file-input/bootstrap.file-input.js"></script>
    <script src="/site_media/static/pinax/js/theme.js"></script>
    <script src="https://raw.github.com/eldarion/bootstrap-ajax/master/js/bootstrap-ajax.js"></script>

</body>
</html>