<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Browse</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
	<link href="../css/style.css" rel="stylesheet" type="text/css">
	<link href="../css/layerslider.css" rel="stylesheet" type="text/css">
	<link href="http://jschr.github.io/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" />
	<link href="../css/bootstrap-fileupload.css" rel="stylesheet" /> 
	<link href="http://maxwells.github.io/assets/bootstrap-tags/css/bootstrap-tags.css" rel="stylesheet" /> 
	


   

</head>
<body style="background-image:url('../content/background2.png')">
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


   	<div id="SignIn" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		Log in!
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
	</div>
	<div class="modal-body">
	<div class="row"><div class = "span4"><form class="form-inline" method="post" action="../account/signIn.php">
  	<input type="text" class="input-small" placeholder="Username" name="username">
  	<input type="password" class="input-small" placeholder="Password" name="password">
  	<button type="submit" class="btn btn-mini btn-warning">Sign in</button>
	</form></div></div>
	</div>
	</div>

		<br>
		<br>
		<br>
	
    <div class="container">
    <div class="page-header">
    
    <?php
								$connection = checkLogInStatus();

								if($connection != NULL)
									echo "<h1>Photographies</h1>
    	<br>
		<a style=\"color:#057EA0\" href=\"#Upload\" role=\"button\" data-toggle=\"modal\"><i class=\"icon-upload\"></i>&nbspWanna Share your work?</a>";
								else
									echo $AccountPleaseSignIn;
	?>
    
    
		
		<div id="Upload" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
        	Upload and have fun with it.
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class= "icon-remove"></i></button>
        </div>
        <div class="modal-body">
        	
        		
		<a href="#Share" role="button" class="btn btn-primary" data-toggle="modal"><i class="icon-share"></i>&nbspShare</a>
		<a href="#Local" role="button" class="btn btn-success" data-toggle="modal"><i class="icon-upload"></i>&nbspUpload</a>
		
            

        </div>
    </div>
		
		
		<div id="Share" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        
        	<form  method="post" action="share.php">
        	<div class="modal-body">
        		<span class="badge badge-success badge-mini"><i class="icon-share"></i>&nbsp&nbspLink :</span>&nbsp&nbsp&nbsp<input type="text" name="link">
				<br>
        		
            
            <div class="modal-footer">
    <a class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-circle-arrow-left"></i>&nbspBack</a>
    <input type="submit" class="btn btn-primary" />
  </div>
            </form>

        </div>
    </div>  
    
    
    		<div id="Local" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    		<form enctype="multipart/form-data" method="post" action = "upload.php">
        	<div class="modal-body">
        	
        	<input type="hidden" name="authorID" value="<?php  $idt = GetAuthorIDbyName($connection);echo $idt;?>" />
        	<input type="text" name="imageName" placeholder="Give a name to your image"/>
        	<div class="row">
        		<div class="span2">
	                  				<input type="text" class="input-small" name="tag1" placeholder="Tag1"/>
	            </div><div class="span2">
									<input type="text" class="input-small" name="tag2" placeholder="Tag2"/>
				</div><div class="span2">
									<input type="text" class="input-small" name="tag3" placeholder="Tag3"/>
				</div>
				<div class="span2">
									<input type="text" class="input-small" name="tag4" placeholder="Tag4"/>
				</div></div>
									
	                	
                
                    <div class="fileupload fileupload-new" data-provides="fileupload">
  <div class="fileupload-preview thumbnail" style="width: 512px; height: 288px;"></div>
  <div>
    <span class="btn btn-file"><span class="fileupload-new"><i class="halflings-icon folder-open"></i>
    </span><span class="fileupload-exists"><i class="halflings-icon refresh"></i></span><input type="file" name="uploadedfile"/></span>
    <a href="#" class="btn fileupload-exists" data-dismiss="fileupload"><i class="halflings-icon remove"></i></a>
  </div>
</div>

		<textarea rows="4" class="field span5" name="description" placeholder="Tell us the story behind the image."></textarea>
		
                    
                </div>
             	
            
  <div class="modal-footer">
    <a class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-circle-arrow-left"></i>&nbspBack</a>
    <input type="submit" class="btn  btn-primary" />
  </div>c
  </form>
  
    </div></div>
    
    <div class="container">
    
    <div id="wrapper">
    <?php
								$connection = checkLogInStatus();
								


								if($connection != NULL){
									$id = GetAuthorIDbyName($connection);
									
									include('imageFileController.php');
										
									setAuthor($connection);
										
									setAuthorID($id);
								if(!empty($_POST['text'])){
									$author = $connection;
									$text = $_POST['text'];
									$imageID = $_POST['imageID'];
									insertComment($author, $imageID, $text);

																
									}
								if(($_POST['formid']) == "like"){
									$imageID = $_POST['imageID2'];
									insertLike($imageID);
									}
								
									echo "    <div class=\"row\">
    <div class=\"span5\"></div>
    <div class=\"span4\">    <form class=\"form-search\" id=\"search\" method = \"post\" action=\"\">
    
  <input name=\"searchform\" type=\"text\" class=\"input-medium search-query\">
  <a class=\"btn btn-info\" onclick=\"document.getElementById('search').submit()\"><i class=\"halflings-icon white search\"></i></a>
</form></div>

    
    </div>";
									
									echo "<div id=\"filters\">
				<ul class=\"option-set\" data-option-key=\"filter\">
					<li><a href=\"#filter\" class=\"selected\" data-option-value=\"*\" style=\"color:#1E6B98\">All</a></li>
					<li>/</li>
					<li><a href=\"#filter\" data-option-value=\".nature\" style=\"color:#1E6B98\">Nature</a></li>
					<li>/</li>
					<li><a href=\"#filter\" data-option-value=\".people\" style=\"color:#1E6B98\">People</a></li>
					<li>/</li>
					<li><a href=\"#filter\" data-option-value=\".scenery\" style=\"color:#1E6B98\">Scenery</a></li>
					<li>/</li>
					<li><a href=\"#filter\" data-option-value=\".world\" style=\"color:#1E6B98\">World</a></li>
				</ul></div>";
									if(empty($_POST['searchform'])){
										$key = NULL;
									}
									
									else $key = $_POST['searchform'];
									
									if(empty($_POST['page'])){
										$page = 1;
									}
									else 
										$page = $_POST['page'];
									
									
									$pagination = showPagination($page);
									imagedisplay($key);
									
									echo $pagination;
									}
	
							
							
                            ?>
                        </div>
                        
       </div>                     
                            
    <div class="footer" style="background-image:url('../content/background.png')">
        <div class="container">
            <p class="muted credit" style="text-align:center">Copyright Yang Li 2012-2013.</p>
            <p class="muted credit" style="text-align:center">Powered by <a href="http://twitter.github.com/bootstrap/index.html" rel="tooltip" data-placement="top" title="Visit Bootstrap">Bootstrap</a>.</p>
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

<script src="http://jschr.github.io/bootstrap-modal/js/bootstrap-modalmanager.js"></script>
<script src="http://jschr.github.io/bootstrap-modal/js/bootstrap-modal.js"></script>
<script src ="../js/bootstrap-fileupload.js"></script>
<script src ="http://maxwells.github.io/assets/bootstrap-tags/lib/bootstrap-tags.js"></script>

<script defer="defer" src="../js/modernizr.js"></script>
<script defer="defer" src="../js/retina.js"></script>
<script defer="defer" src="../js/custom.js"></script>
    </body>
</html>