
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
    <link rel="stylesheet" href="http://jbutz.github.io/bootstrap-lightbox/assets/css/bootstrap-lightbox.min.css">
	<link rel="stylesheet" href="http://jbutz.github.io/bootstrap-lightbox/assets/prettify/prettify.css">
	<link rel="stylesheet" href="http://jbutz.github.io/bootstrap-lightbox/assets/css/styles.css">
	<link rel="stylesheet" href="image.css">

   

</head>
<body style="background-image:url('../content/background.png')">
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
                   
                    	<a class="brand" href="../src/index.php">Imagraphy<i class="icon-home"></i></a>
                    	<div class="nav-collapse collapse">
                        	<ul class="nav">                             
                            	<li><a href="./">Browse</a></li>
                            
                        </ul>
                        <ul class="nav pull-right" id="main-menu-right
			"><div class = "row">
  <button class="btn btn-mini btn-info"><i class = "icon-user"></i>&nbsp&nbspadmin</button>
	<a href="../account/logout.php" class="btn btn-mini "><i class = "icon-off"></i>&nbsp&nbspLog Out!</a></div>
</ul>                    </div>
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
    
    <h1>Photographies</h1>
    	<br>
		<a href="#Upload" role="button" data-toggle="modal"><i class="icon-upload"></i>&nbspWanna Share your work?</a>    
    
		
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
    <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-circle-arrow-left"></i>&nbspBack</button>
    <button type="submit" class="btn  btn-primary"><i class="icon-ok"></i>&nbspSubmit</button>
  </div>
            </form>

        </div>
    </div>  
    
    <div id="filters">
				<ul class="option-set" data-option-key="filter">
					<li><a href="#filter" class="selected" data-option-value="*">All</a></li>
					<li>/</li>
					<li><a href="#filter" data-option-value=".nature">Nature</a></li>
					<li>/</li>
					<li><a href="#filter" data-option-value=".people">People</a></li>
					<li>/</li>
					<li><a href="#filter" data-option-value=".scenery">Scenery</a></li>
					<li>/</li>
					<li><a href="#filter" data-option-value=".world">World</a></li>
				</ul>
			</div>
    		<div id="Local" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    		<form enctype="multipart/form-data" method="post" action = "upload.php">
        <div class="modal-body">
        		
                <div class="fileupload fileupload-new" data-provides="fileupload">
                    <i class="icon-plus"></i><input type="file"  name="uploadedfile" title="Browse"/>
                    
                </div>
                
             
            
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-circle-arrow-left"></i>&nbspBack</button>
    <button type="submit" class="btn  btn-primary"><i class="icon-ok"></i>&nbspSubmit</button>
  </div>
  </form>
  
    </div>  
    </div>
    <div id="wall" class="row-fluid">
    <div class="span3 item "><a data-toggle="lightbox" href="#demoLightbox0" class="thumbnail"
            				>
            				<div class="picture"><img src = http://web.engr.illinois.edu/~yangli7/photographies/test1.jpg></div></a><form name="1" method="post" action"">
							
            				admin and 9 people likes this photo<input type="hidden" value="1" name="imageID2">
            						<input type="hidden" value="like" name="formid"><button  class="btn btn-success disabled"
            						><i class="icon-thumbs-up"></i></button>
						</form></div>
            						
            						<div id="demoLightbox0" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
			<div class='lightbox-header'>
				<button type="button" class="close" data-dismiss="lightbox" aria-hidden="true">&times;</button>
			</div>
            								
            								
			<div class='lightbox-content'>
				<img src=http://web.engr.illinois.edu/~yangli7/photographies/test1.jpg>
				<div class="lightbox-caption">
						<div class ="row">
						<div class = "span4">
						
    					<span class="badge badge-success">Comments</span>
						<p align= "left" style="max-height:150px;max-width:400px;overflow: auto;">
						1&nbsp&nbspadmin:&nbsp&nbspwhat a good picture. I like it very much. Can you share me the original picture? Thanks.<br><br>2&nbsp&nbspapple:&nbsp&nbspAlaska is cool. Wanna go there soon.<br><br>3&nbsp&nbspadmin:&nbsp&nbspThat's great.<br><br>4&nbsp&nbspapple:&nbsp&nbspYoung and enthusiastic college students can get involved in a program called Promoting Undergraduate Research in Engineering<br><br>5&nbsp&nbspadmin:&nbsp&nbspAn event marking the official launching of the Blue Waters supercomputer will be held at NCSA on March 28.<br><br>6&nbsp&nbspadmin:&nbsp&nbspthis is a test comment<br><br>7&nbsp&nbspadmin:&nbsp&nbspthis is a test comment<br><br>14&nbsp&nbspadmin:&nbsp&nbspfds<br><br>19&nbsp&nbspstanford:&nbsp&nbspI am from stanford<br><br>20&nbsp&nbspmit:&nbsp&nbspHello, this is cool.<br><br>21&nbsp&nbspuiuc:&nbsp&nbspgood pic.<br><br>
							
    					</p>
						
						</div>
						<div class = "span4">
						<p align= "left">Put your comment here:</p>
						<form name="2" method="post" action="">
							<textarea rows="5" class="field span4" name="text"></textarea>
							<input type="hidden" value="1" name="imageID">
							<button type="submit" class="btn btn-primary" >submit</button>
						</form>
									
								
								
						</div>
				</div>
			</div>
				
			</div>
									</div>
		<div class="span3 item people"><a data-toggle="lightbox" href="#demoLightbox1" class="thumbnail"
            				>
            				<div class="picture"><img src = http://web.engr.illinois.edu/~yangli7/photographies/test4.jpg></div></a><form name="1" method="post" action"">
							
            				admin and 5 people likes this photo<input type="hidden" value="4" name="imageID2">
            						<input type="hidden" value="like" name="formid"><button  class="btn btn-success disabled"
            						><i class="icon-thumbs-up"></i></button>
						</form></div>
            						
            						<div id="demoLightbox1" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
			<div class='lightbox-header'>
				<button type="button" class="close" data-dismiss="lightbox" aria-hidden="true">&times;</button>
			</div>
            								
            								
			<div class='lightbox-content'>
				<img src=http://web.engr.illinois.edu/~yangli7/photographies/test4.jpg>
				<div class="lightbox-caption">
						<div class ="row">
						<div class = "span4">
						
    					<span class="badge badge-success">Comments</span>
						<p align= "left" style="max-height:150px;max-width:400px;overflow: auto;">
						8&nbsp&nbspadmin:&nbsp&nbspI love this pic<br><br>10&nbsp&nbspadmin:&nbsp&nbspso many people<br><br>12&nbsp&nbspapple:&nbsp&nbsplol!<br><br>16&nbsp&nbspapple:&nbsp&nbspwho are these people<br><br>23&nbsp&nbspbobby:&nbsp&nbspcool guys
<br><br>
							
    					</p>
						
						</div>
						<div class = "span4">
						<p align= "left">Put your comment here:</p>
						<form name="2" method="post" action="">
							<textarea rows="5" class="field span4" name="text"></textarea>
							<input type="hidden" value="4" name="imageID">
							<button type="submit" class="btn btn-primary" >submit</button>
						</form>
									
								
								
						</div>
				</div>
			</div>
				
			</div>
									</div>
		<div class="span3 item natural"><a data-toggle="lightbox" href="#demoLightbox2" class="thumbnail"
            				>
            				<div class="picture"><img src = http://web.engr.illinois.edu/~yangli7/photographies/test5.jpg></div></a><form name="1" method="post" action"">
							
            				admin and 4 people likes this photo<input type="hidden" value="5" name="imageID2">
            						<input type="hidden" value="like" name="formid"><button  class="btn btn-success disabled"
            						><i class="icon-thumbs-up"></i></button>
						</form></div>
            						
            						<div id="demoLightbox2" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
			<div class='lightbox-header'>
				<button type="button" class="close" data-dismiss="lightbox" aria-hidden="true">&times;</button>
			</div>
            								
            								
			<div class='lightbox-content'>
				<img src=http://web.engr.illinois.edu/~yangli7/photographies/test5.jpg>
				<div class="lightbox-caption">
						<div class ="row">
						<div class = "span4">
						
    					<span class="badge badge-success">Comments</span>
						<p align= "left" style="max-height:150px;max-width:400px;overflow: auto;">
						9&nbsp&nbspadmin:&nbsp&nbspi love this pic<br><br>15&nbsp&nbspadmin:&nbsp&nbsplove love<br><br>18&nbsp&nbspstanford:&nbsp&nbspI love the airplane<br><br>
							
    					</p>
						
						</div>
						<div class = "span4">
						<p align= "left">Put your comment here:</p>
						<form name="2" method="post" action="">
							<textarea rows="5" class="field span4" name="text"></textarea>
							<input type="hidden" value="5" name="imageID">
							<button type="submit" class="btn btn-primary" >submit</button>
						</form>
									
								
								
						</div>
				</div>
			</div>
				
			</div>
									</div>
		</div>
        <br/><br/><br/><div class="span3 item people"><a data-toggle="lightbox" href="#demoLightbox3" class="thumbnail"
            				>
            				<div class="picture"><img src = http://web.engr.illinois.edu/~yangli7/photographies/test6.jpg></div></a><form name="1" method="post" action"">
							
            				admin and 2 people likes this photo<input type="hidden" value="6" name="imageID2">
            						<input type="hidden" value="like" name="formid"><button  class="btn btn-success disabled"
            						><i class="icon-thumbs-up"></i></button>
						</form></div>
            						
            						<div id="demoLightbox3" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
			<div class='lightbox-header'>
				<button type="button" class="close" data-dismiss="lightbox" aria-hidden="true">&times;</button>
			</div>
            								
            								
			<div class='lightbox-content'>
				<img src=http://web.engr.illinois.edu/~yangli7/photographies/test6.jpg>
				<div class="lightbox-caption">
						<div class ="row">
						<div class = "span4">
						
    					<span class="badge badge-success">Comments</span>
						<p align= "left" style="max-height:150px;max-width:400px;overflow: auto;">
						13&nbsp&nbspapple:&nbsp&nbspThis is a very interesting movie<br><br>
							
    					</p>
						
						</div>
						<div class = "span4">
						<p align= "left">Put your comment here:</p>
						<form name="2" method="post" action="">
							<textarea rows="5" class="field span4" name="text"></textarea>
							<input type="hidden" value="6" name="imageID">
							<button type="submit" class="btn btn-primary" >submit</button>
						</form>
									
								
								
						</div>
				</div>
			</div>
				
			</div>
									</div>
		<div class="span3 item natural"><a data-toggle="lightbox" href="#demoLightbox4" class="thumbnail"
            				>
            				<div class="picture"><img src = http://web.engr.illinois.edu/~yangli7/photographies/test7.jpg></div></a><form name="1" method="post" action"">
							
            				 0 people likes this photo<input type="hidden" value="7" name="imageID2">
            						<input type="hidden" value="like" name="formid"><button type="submit" class="btn btn-success"
            						><i class="icon-thumbs-up"></i></button>
						</form></div>
            						
            						<div id="demoLightbox4" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
			<div class='lightbox-header'>
				<button type="button" class="close" data-dismiss="lightbox" aria-hidden="true">&times;</button>
			</div>
            								
            								
			<div class='lightbox-content'>
				<img src=http://web.engr.illinois.edu/~yangli7/photographies/test7.jpg>
				<div class="lightbox-caption">
						<div class ="row">
						<div class = "span4">
						
    					<span class="badge badge-success">Comments</span>
						<p align= "left" style="max-height:150px;max-width:400px;overflow: auto;">
						11&nbsp&nbspadmin:&nbsp&nbspi am here<br><br>
							
    					</p>
						
						</div>
						<div class = "span4">
						<p align= "left">Put your comment here:</p>
						<form name="2" method="post" action="">
							<textarea rows="5" class="field span4" name="text"></textarea>
							<input type="hidden" value="7" name="imageID">
							<button type="submit" class="btn btn-primary" >submit</button>
						</form>
									
								
								
						</div>
				</div>
			</div>
				
			</div>
									</div>
		<div class="span3 item people"><a data-toggle="lightbox" href="#demoLightbox5" class="thumbnail"
            				>
            				<div class="picture"><img src = http://www.colorado.edu/cs/sites/default/files/styles/slider-image/public/BluegreenCircuitBoard.jpg></div></a><form name="1" method="post" action"">
							
            				 2 people likes this photo<input type="hidden" value="8" name="imageID2">
            						<input type="hidden" value="like" name="formid"><button type="submit" class="btn btn-success"
            						><i class="icon-thumbs-up"></i></button>
						</form></div>
            						
            						<div id="demoLightbox5" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
			<div class='lightbox-header'>
				<button type="button" class="close" data-dismiss="lightbox" aria-hidden="true">&times;</button>
			</div>
            								
            								
			<div class='lightbox-content'>
				<img src=http://www.colorado.edu/cs/sites/default/files/styles/slider-image/public/BluegreenCircuitBoard.jpg>
				<div class="lightbox-caption">
						<div class ="row">
						<div class = "span4">
						
    					<span class="badge badge-success">Comments</span>
						<p align= "left" style="max-height:150px;max-width:400px;overflow: auto;">
						24&nbsp&nbspadmin:&nbsp&nbspthis is a computer science chip
<br><br>
							
    					</p>
						
						</div>
						<div class = "span4">
						<p align= "left">Put your comment here:</p>
						<form name="2" method="post" action="">
							<textarea rows="5" class="field span4" name="text"></textarea>
							<input type="hidden" value="8" name="imageID">
							<button type="submit" class="btn btn-primary" >submit</button>
						</form>
									
								
								
						</div>
				</div>
			</div>
				
			</div>
									</div>
		</div>
        <br/><br/><br/><div class="span3 item natural"><a data-toggle="lightbox" href="#demoLightbox6" class="thumbnail"
            				>
            				<div class="picture"><img src = http://1.bp.blogspot.com/-UcLQ5tnagQE/TyRGhku9AhI/AAAAAAAABnI/DWq010NSPTw/s1600/Computer-Science.jpg></div></a><form name="1" method="post" action"">
							
            				 0 people likes this photo<input type="hidden" value="10" name="imageID2">
            						<input type="hidden" value="like" name="formid"><button type="submit" class="btn btn-success"
            						><i class="icon-thumbs-up"></i></button>
						</form></div>
            						
            						<div id="demoLightbox6" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
			<div class='lightbox-header'>
				<button type="button" class="close" data-dismiss="lightbox" aria-hidden="true">&times;</button>
			</div>
            								
            								
			<div class='lightbox-content'>
				<img src=http://1.bp.blogspot.com/-UcLQ5tnagQE/TyRGhku9AhI/AAAAAAAABnI/DWq010NSPTw/s1600/Computer-Science.jpg>
				<div class="lightbox-caption">
						<div class ="row">
						<div class = "span4">
						
    					<span class="badge badge-success">Comments</span>
						<p align= "left" style="max-height:150px;max-width:400px;overflow: auto;">
						
							
    					</p>
						
						</div>
						<div class = "span4">
						<p align= "left">Put your comment here:</p>
						<form name="2" method="post" action="">
							<textarea rows="5" class="field span4" name="text"></textarea>
							<input type="hidden" value="10" name="imageID">
							<button type="submit" class="btn btn-primary" >submit</button>
						</form>
									
								
								
						</div>
				</div>
			</div>
				
			</div>
									</div>
		<div class="span3 item people"><a data-toggle="lightbox" href="#demoLightbox7" class="thumbnail"
            				>
            				<div class="picture"><img src = https://lh3.ggpht.com/-fLPuQC9DyBQ/TRZejmIKLeI/AAAAAAAAOTQ/_FLdUZHD-_w/s0/></div></a><form name="1" method="post" action"">
							
            				admin and 2 people likes this photo<input type="hidden" value="12" name="imageID2">
            						<input type="hidden" value="like" name="formid"><button  class="btn btn-success disabled"
            						><i class="icon-thumbs-up"></i></button>
						</form></div>
            						
            						<div id="demoLightbox7" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
			<div class='lightbox-header'>
				<button type="button" class="close" data-dismiss="lightbox" aria-hidden="true">&times;</button>
			</div>
            								
            								
			<div class='lightbox-content'>
				<img src=https://lh3.ggpht.com/-fLPuQC9DyBQ/TRZejmIKLeI/AAAAAAAAOTQ/_FLdUZHD-_w/s0/>
				<div class="lightbox-caption">
						<div class ="row">
						<div class = "span4">
						
    					<span class="badge badge-success">Comments</span>
						<p align= "left" style="max-height:150px;max-width:400px;overflow: auto;">
						17&nbsp&nbspadmin:&nbsp&nbspI love UIUC<br><br>25&nbsp&nbspadmin:&nbsp&nbspSnow day :)<br><br>
							
    					</p>
						
						</div>
						<div class = "span4">
						<p align= "left">Put your comment here:</p>
						<form name="2" method="post" action="">
							<textarea rows="5" class="field span4" name="text"></textarea>
							<input type="hidden" value="12" name="imageID">
							<button type="submit" class="btn btn-primary" >submit</button>
						</form>
									
								
								
						</div>
				</div>
			</div>
				
			</div>
									</div>
		<div class="span3 item natural"><a data-toggle="lightbox" href="#demoLightbox8" class="thumbnail"
            				>
            				<div class="picture"><img src = http://img5.17dm.com/attachment/forum/201110/01/0704336rfjtb51evaxb6kn.jpg></div></a><form name="1" method="post" action"">
							
            				 0 people likes this photo<input type="hidden" value="13" name="imageID2">
            						<input type="hidden" value="like" name="formid"><button type="submit" class="btn btn-success"
            						><i class="icon-thumbs-up"></i></button>
						</form></div>
            						
            						<div id="demoLightbox8" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
			<div class='lightbox-header'>
				<button type="button" class="close" data-dismiss="lightbox" aria-hidden="true">&times;</button>
			</div>
            								
            								
			<div class='lightbox-content'>
				<img src=http://img5.17dm.com/attachment/forum/201110/01/0704336rfjtb51evaxb6kn.jpg>
				<div class="lightbox-caption">
						<div class ="row">
						<div class = "span4">
						
    					<span class="badge badge-success">Comments</span>
						<p align= "left" style="max-height:150px;max-width:400px;overflow: auto;">
						22&nbsp&nbspbobby:&nbsp&nbspbobby loves this cartoon

<br><br>
							
    					</p>
						
						</div>
						<div class = "span4">
						<p align= "left">Put your comment here:</p>
						<form name="2" method="post" action="">
							<textarea rows="5" class="field span4" name="text"></textarea>
							<input type="hidden" value="13" name="imageID">
							<button type="submit" class="btn btn-primary" >submit</button>
						</form>
									
								
								
						</div>
				</div>
			</div>
				
			</div>
									</div>
		</div>
        <br/><br/><br/><div class="span3 item natural"><a data-toggle="lightbox" href="#demoLightbox9" class="thumbnail"
            				>
            				<div class="picture"><img src = http://www.hdwallpapersarena.com/wp-content/uploads/2012/06/computer-hd-wallpapers-7.jpg></div></a><form name="1" method="post" action"">
							
            				 0 people likes this photo<input type="hidden" value="14" name="imageID2">
            						<input type="hidden" value="like" name="formid"><button type="submit" class="btn btn-success"
            						><i class="icon-thumbs-up"></i></button>
						</form></div>
            						
            						<div id="demoLightbox9" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
			<div class='lightbox-header'>
				<button type="button" class="close" data-dismiss="lightbox" aria-hidden="true">&times;</button>
			</div>
            								
            								
			<div class='lightbox-content'>
				<img src=http://www.hdwallpapersarena.com/wp-content/uploads/2012/06/computer-hd-wallpapers-7.jpg>
				<div class="lightbox-caption">
						<div class ="row">
						<div class = "span4">
						
    					<span class="badge badge-success">Comments</span>
						<p align= "left" style="max-height:150px;max-width:400px;overflow: auto;">
						
							
    					</p>
						
						</div>
						<div class = "span4">
						<p align= "left">Put your comment here:</p>
						<form name="2" method="post" action="">
							<textarea rows="5" class="field span4" name="text"></textarea>
							<input type="hidden" value="14" name="imageID">
							<button type="submit" class="btn btn-primary" >submit</button>
						</form>
									
								
								
						</div>
				</div>
			</div>
				
			</div>
									</div>
		<div class="span3 item natural"><a data-toggle="lightbox" href="#demoLightbox10" class="thumbnail"
            				>
            				<div class="picture"><img src = ../photography/plane_hdr1.jpg></div></a><form name="1" method="post" action"">
							
            				 0 people likes this photo<input type="hidden" value="15" name="imageID2">
            						<input type="hidden" value="like" name="formid"><button type="submit" class="btn btn-success"
            						><i class="icon-thumbs-up"></i></button>
						</form></div>
            						
            						<div id="demoLightbox10" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
			<div class='lightbox-header'>
				<button type="button" class="close" data-dismiss="lightbox" aria-hidden="true">&times;</button>
			</div>
            								
            								
			<div class='lightbox-content'>
				<img src=../photography/plane_hdr1.jpg>
				<div class="lightbox-caption">
						<div class ="row">
						<div class = "span4">
						
    					<span class="badge badge-success">Comments</span>
						<p align= "left" style="max-height:150px;max-width:400px;overflow: auto;">
						
							
    					</p>
						
						</div>
						<div class = "span4">
						<p align= "left">Put your comment here:</p>
						<form name="2" method="post" action="">
							<textarea rows="5" class="field span4" name="text"></textarea>
							<input type="hidden" value="15" name="imageID">
							<button type="submit" class="btn btn-primary" >submit</button>
						</form>
									
								
								
						</div>
				</div>
			</div>
				
			</div>
									</div>
		<div class="span3 item natural"><a data-toggle="lightbox" href="#demoLightbox11" class="thumbnail"
            				>
            				<div class="picture"><img src = http://1.bp.blogspot.com/-4cCkwo3vsD8/T0VAbFn3raI/AAAAAAAADDQ/hus6sWeesIk/s1600/Alexandra+Falls+and+the+Aurora,++Northwest+Territories.jpg></div></a><form name="1" method="post" action"">
							
            				 0 people likes this photo<input type="hidden" value="16" name="imageID2">
            						<input type="hidden" value="like" name="formid"><button type="submit" class="btn btn-success"
            						><i class="icon-thumbs-up"></i></button>
						</form></div>
            						
            						<div id="demoLightbox11" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
			<div class='lightbox-header'>
				<button type="button" class="close" data-dismiss="lightbox" aria-hidden="true">&times;</button>
			</div>
            								
            								
			<div class='lightbox-content'>
				<img src=http://1.bp.blogspot.com/-4cCkwo3vsD8/T0VAbFn3raI/AAAAAAAADDQ/hus6sWeesIk/s1600/Alexandra+Falls+and+the+Aurora,++Northwest+Territories.jpg>
				<div class="lightbox-caption">
						<div class ="row">
						<div class = "span4">
						
    					<span class="badge badge-success">Comments</span>
						<p align= "left" style="max-height:150px;max-width:400px;overflow: auto;">
						26&nbsp&nbspadmin:&nbsp&nbspwhat a great aurora
<br><br>27&nbsp&nbspadmin:&nbsp&nbspwhat a great aurora
<br><br>
							
    					</p>
						
						</div>
						<div class = "span4">
						<p align= "left">Put your comment here:</p>
						<form name="2" method="post" action="">
							<textarea rows="5" class="field span4" name="text"></textarea>
							<input type="hidden" value="16" name="imageID">
							<button type="submit" class="btn btn-primary" >submit</button>
						</form>
									
								
								
						</div>
				</div>
			</div>
				
			</div>
									</div>
		</div>
        <br/><br/><br/></div>
        <br/><br/><br/></div></div>                           
                            
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
    <script src="http://jbutz.github.io/bootstrap-lightbox/assets/js/scale.fix.js"></script>
	<script src="http://jbutz.github.io/bootstrap-lightbox/assets/prettify/prettify.js"></script>
	<script src="http://jbutz.github.io/bootstrap-lightbox/assets/js/bootstrap-lightbox.min.js"></script>
    </body>
</html>