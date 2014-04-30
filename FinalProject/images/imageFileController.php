<?php
// Connect to the database
$user_name = "yangli7_admin";
$user_password = "qwer1234";
$database_name = "yangli7_cs242Final";
$host = "mysql:host=engr-cpanel-mysql.engr.illinois.edu;dbname=yangli7_cs242Final";
$db = new PDO($host, $user_name, $user_password);

$author = "";
$authorID = 0;


function setAuthor($a){
	global $author;
	$author = $a;
	
}

function setAuthorID($id){
	global $authorID;
	$authorID = $id;
}

// Fetch the accountTable
$imageTable = $db->prepare("SELECT * FROM Images");
$commentTable = $db->prepare("SELECT * FROM Comment");
$likeTable = $db->prepare("SELECT * FROM Likes");
$authorTable = $db->prepare("SELECT * FROM Users");
$tagTable = $db->prepare("SELECT * FROM Tag");

$imageArray = array();
$commentArray = array();
$likeArray = array();
$authorArray = array();
$tagArray = array();

// images table
$counter = 0;
if ($imageTable->execute(array($_GET['name']))) {
	while($row = $imageTable->fetch())
	{
		$imageArray['ImageID'][$counter] = $row['ImageID'];
		$imageArray['ImageLink'][$counter] = $row['ImageLink'];
		$imageArray['AuthorID'][$counter] = $row['AuthorID'];
		$imageArray['Likes'][$counter] = $row['Likes'];
		$imageArray['ImageName'][$counter] = $row['ImageName'];
		$imageArray['Description'][$counter] = $row['Description'];
		$counter++;
	}
}

// comments table
$counter = 0;
if ($commentTable->execute(array($_GET['name']))) {
	while($row = $commentTable->fetch())
	{
		$commentArray['id'][$counter] = $row['id'];
		$commentArray['author'][$counter] = $row['author'];
		$commentArray['text'][$counter] = $row['text'];
		$commentArray['imageID'][$counter] = $row['imageID'];

		$counter++;
	}
}


// likes table
$counter = 0;
if ($likeTable->execute(array($_GET['name']))) {
	while($row = $likeTable->fetch())
	{
		$likeArray['id'][$counter] = $row['id'];
		$likeArray['author'][$counter] = $row['author'];
		$likeArray['imageID'][$counter] = $row['imageID'];

		$counter++;
	}
}

// Authors table
$counter = 0;
if ($authorTable->execute(array($_GET['name']))) {
	while($row = $authorTable->fetch())
	{
		$authorArray['username'][$counter] = $row['username'];
		$authorArray['id'][$counter] = $row['infoID'];

		$counter++;
	}
}

// Tags table
$counter = 0;
if ($tagTable->execute(array($_GET['name']))) {
	while($row = $tagTable->fetch())
	{
		$tagArray['tagName'][$counter] = $row['tagName'];
		$tagArray['tagImageID'][$counter] = $row['tagImageID'];

		$counter++;
	}
}


// function that return a tag string given the imageID
function showTag($id){
	global $db;
	global $tagArray;
	$retu = "";
	for($i = 0; $i < count($tagArray['tagName']); $i++){
		if($id == $tagArray['tagImageID'][$i])
			$retu = $retu." ".$tagArray['tagName'][$i];
		
	}
	return $retu;
}


// function that upload the imagelink to the database.
function upload($link,$imageName,$description,$id){
	global $db;
	global $authorID;
	global $imageArray;
	
	
	// prevent SQL Injection attact.
	$stmt = $db->prepare("INSERT INTO Images (ImageID, ImageLink, AuthorID, Likes, ImageName, Description)
				VALUES(:ImageID, :ImageLink, :AuthorID, :Likes, :ImageName, :Description)");
	$stmt->bindParam(':ImageID', $null);
	$stmt->bindParam(':ImageLink', $a);
	$stmt->bindParam(':AuthorID', $s);
	$stmt->bindParam(':Likes', $l);
	$stmt->bindParam(':ImageName', $t);
	$stmt->bindParam(':Description', $d);
	
	
	$ll = 0;
	
	$a = htmlspecialchars($link);
	$null = NULL;
	$s = htmlspecialchars($id);
	$t = htmlspecialchars($imageName);
	$d = htmlspecialchars($description);
	$l = $ll;
	
	$stmt->execute();
	
	$num = count($imageArray['ImageID']);
	$num = $num - 1;
	$retu = $imageArray['ImageID'][$num];
	$retu += 1;
	
	return $retu;
}


// function that insert a tag to the database.
function insertTag($tag,$imageID){
	global $db;

	// prevent SQL Injection attact.
	$stmt = $db->prepare("INSERT INTO Tag (tagName, tagImageID)
				VALUES(:tagName, :tagImageID)");
	$stmt->bindParam(':tagName', $i);
	$stmt->bindParam(':tagImageID', $a);

	$i = htmlspecialchars($tag);
	$a = htmlspecialchars($imageID);
	
	$stmt->execute();
	
	
}

// function that insert a comment into the database.
function insertComment($author, $imageID, $text){
	global $db;
	global $commentArray;
	global $commentTable;
	
	// prevent SQL Injection attact.
	$stmt = $db->prepare("INSERT INTO Comment (id, author, text, imageID)
				VALUES(:id, :author, :text, :imageID)");
	$stmt->bindParam(':id', $null);
	$stmt->bindParam(':author', $a);
	$stmt->bindParam(':text', $s);
	$stmt->bindParam(':imageID', $t);
	
	$a = htmlspecialchars($author);
	$null = NULL;
	$s = $text;
	$t = $imageID;
	
	$stmt->execute();
	
	// update the local result;
	$commentTable = $db->prepare("SELECT * FROM Comment");
	$counter = 0;
	if ($commentTable->execute(array($_GET['name']))) {
		while($row = $commentTable->fetch())
		{
			$commentArray['id'][$counter] = $row['id'];
			$commentArray['author'][$counter] = $row['author'];
			$commentArray['text'][$counter] = $row['text'];
			$commentArray['imageID'][$counter] = $row['imageID'];
	
			$counter++;
		}
	}
	
	
}

// function that load the comments given the image ID return a structured comment displaying.
function loadComment($imageID){
	global $commentArray;
	$myComments = "";
	
	for($i = 0; $i < count($commentArray['id']); $i++){
		if ($commentArray['imageID'][$i] == $imageID){
			$myComments = $myComments.$commentArray['id'][$i]."&nbsp&nbsp".$commentArray['author'][$i].":&nbsp&nbsp".$commentArray['text'][$i]."<br><br>";			
		}
	}
	
	return $myComments;
	
	
}



// function that checks whether author likes this image.
function imageLikes($imageID){
	global $author;
	global $likeArray;
	for($i = 0; $i < count($likeArray['id']); $i++){
		if ($likeArray['author'][$i] == $author && $imageID == $likeArray['imageID'][$i]) {
			return $author." and";
		}
		
	}
	return "";
	
}


function insertLike($imageID){
	global $db;
	global $author;
	global $likeTable;
	global $likeArray;
	global $imageArray;
	
	$index = 0;
	for($i = 0; $i < count($imageArray['ImageID']); $i++){
		if($imageArray['ImageID'][$i] == $imageID)
		{
			$index = $i;
			break;
		}
		
	}
	$totalLikes = $imageArray['Likes'][$index];
	$totalLikes+=1;
	$imageArray['Likes'][$index] +=1;
	
	
	// prevent SQL Injection attact.
	$stmt = $db->prepare("INSERT INTO Likes (id, author, imageID)
				VALUES(:id, :author, :imageID)");
	$stmt->bindParam(':id', $null);
	$stmt->bindParam(':author', $a);
	$stmt->bindParam(':imageID', $t);
	
	$a = htmlspecialchars($author);
	$null = NULL;
	$t = $imageID;
	
	$stmt->execute();
	
	
			$stmt1 = $db->prepare("UPDATE Images SET Likes = :Likes WHERE
				ImageID = :ImageID");
			$stmt1->bindParam(':Likes', $t1);
			$stmt1->bindParam(':ImageID', $i);
			
			$t1 = $totalLikes;
			$i = $imageID;
			
			$stmt1->execute();

	
	
	// update the local result;
	$likeTable = $db->prepare("SELECT * FROM Likes");
	$counter = 0;
	if ($likeTable->execute(array($_GET['name']))) {
		while($row = $likeTable->fetch())
		{
			$likeArray['id'][$counter] = $row['id'];
			$likeArray['author'][$counter] = $row['author'];
			$likeArray['imageID'][$counter] = $row['imageID'];
	
			$counter++;
		}
	}
	
}


// echoing the successful image upload.
$imageUploadSucc = "<div class=\"page-header\">
    <h1>Success!</h1>
  </div><div class=\"span6\">
      <div class=\"alert alert-success\">
        <strong>Success</strong> You successfully Shared your Link.
      </div>
    </div>";


// function that filter with the keywords
function searchFilter($keywords,$imageArray){
	$ta = array();
	$j = 0;
	for($i = 0; $i< count($imageArray['ImageName']); $i++){
		if(strpos($imageArray['ImageName'][$i], $keywords) !== false){
			$ta['ImageID'][$j] = $imageArray['ImageID'][$i];
			$ta['ImageLink'][$j] = $imageArray['ImageLink'][$i];
			$ta['AuthorID'][$j] = $imageArray['AuthorID'][$i];
			$ta['Likes'][$j] = $imageArray['Likes'][$i];
			$ta['ImageName'][$j] = $imageArray['ImageName'][$i];
			$ta['Description'][$j] = $imageArray['Description'][$i];
			$j+=1;
		}
		
	}
	
	return $ta;
}

// echoing the images from database

function imagedisplay($keywords){
	
global $imageArray;
global $likeArray;
global $authorArray;
global $author;
// parameters for displaying images
if($keywords==NULL)
	$imageArray1 = $imageArray;
else 
	$imageArray1 = searchFilter($keywords, $imageArray);


$imageDisplay = "";
$ini = 0;
$imageDisplay = $imageDisplay."<div id=\"wall\" class=\"row-fluid\">
    ";
    for($i = 0; $i < count($imageArray1['ImageID']); $i++) {
    		$id = $imageArray1['ImageID'][$i];
    	 
        			$tag = showTag($id);
        		
        		if($imageArray1['ImageName'][$i] == NULL)
        			$imageArray1['ImageName'][$i] = "Untitled Image";
        		
        		$imageName = $imageArray1['ImageName'][$i];
        		
        		$authorName = "";
        		for($j = 0; $j < count($authorArray['id']); $j++){
        			if($imageArray1['AuthorID'][$i] == $authorArray['id'][$j]){
        				$authorName = $authorArray['username'][$j];
        				break;
        			}
        			
        		}
        		
        		
        		
        		$like = $imageArray1['Likes'][$i];
        		$word  = imageLikes($id);
        		$disable = "";
        		$type = "onclick=\"document.getElementById('likeform".$ini."').submit()\"";
        		$icon = "fa-icon-heart-empty";
        		if($word != ""){
        			$disable = " disabled";
        			$type = "";
        			$icon = "fa-icon-heart";	
        			
        		}
        		$word = $like;
        	
            $imageDisplay = $imageDisplay."
            		<div class=\"span3 item ".$tag."\">
            			<div class=\"picture\">
            					<a href=\"#imageModal".$ini."\" class=\"image\"".$ini." data-toggle=\"modal\">
            							<img src = ".$imageArray1['ImageLink'][$i]." alt=\"\"/>
            				</a>
            					
            			
		            	</div>
            			<br>
            			
            									
            			<form id=\"likeform".$ini."\" name=\"1\" method=\"post\" action\"\">
            					<input type=\"hidden\" value=\"".$id."\" name=\"imageID2\">
            					<input type=\"hidden\" value=\"like\" name=\"formid\"><div class=\"meta\">
            							<i class=\"fa-icon-camera-retro\"></i>&nbsp".$imageName."&nbsp
            					<a href=\"#\" ".$type.">
            							<i class=\"".$icon."\">
            							</i>
            					</a>&nbsp".$word."&nbsp&nbsp<i class=\"fa-icon-github\"></i>&nbsp".$authorName 
            							."</div>
            					<i class=\"fa-icon-tags\"></i>".$tag."
						</form>
            			
            		</div>
					";
            $ini += 1;

    }
    $imageDisplay = $imageDisplay."</div>";
    
    for ($i = 0; $i < count($imageArray1['ImageID']); $i++) {
        $id = $imageArray1['ImageID'][$i];
        $description = $imageArray1['Description'][$i];
        $imageName = $imageArray1['ImageName'][$i];
        
        $authorName = "";
        for($j = 0; $j < count($authorArray['id']); $j++){
        	if($imageArray1['AuthorID'][$i] == $authorArray['id'][$j]){
        		$authorName = $authorArray['username'][$j];
        		break;
        	}
        	 
        }
    	    	
    	$modal = "
    			<div id=\"imageModal".$i."\" class=\"modal container hide fade\" tabindex=\"-1\">
    				<div class = \"modal-header\">
    					\"".
    						$imageName."\" | Photo by<a class=\"btn btn-link btn-mini\">".$authorName."</a>
    					
    					<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><i class= \"icon-remove\"></i></button>
    				</div>
    					
    				<div class = \"modal-body\">
    					
    						
    							<img src = ".$imageArray1['ImageLink'][$i]." style=\"width:1300px\"  alt=\"\" />
    							<div class=\"slide-caption\">
    								<div class=\"accordion\" id=\"accordion2\">
 										 <div class=\"accordion-group\">
    										<div class=\"accordion-heading\">
      											<a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse".$i."\">
        										<i class=\"glyphicons-icon white circle_plus\"></i>
      											</a>
    											</div>
    											<div id=\"collapse".$i."\" class=\"accordion-body collapse\">
      											<div class=\"accordion-inner\">
      											
    								<div class = \"row\">
    									<div class = \"span3\">
    										<span class = \"badge badge-info\"><i class=\"fa-icon-book\"></i></span><br>
    										<p align= \"left\" style=\"max-height:150px;max-width:400px;overflow: auto;\">
											".$description."
    										</p>
    									</div>
    									<div class = \"span4\">
											<span class=\"badge badge-success\"><i class=\"fa-icon-comments\"></i></span><br>
											<p align= \"left\" style=\"max-height:150px;max-width:400px;overflow: auto;\">
											".loadComment($id)."
    										</p>
										</div>
										<div class = \"span3\">
											<span class=\"badge badge-primary\"><i class=\"fa-icon-edit\"></i></span>
											<form id = \"commentform".$id."\"name=\"2\" method=\"post\" action=\"\">
													
												<br><textarea rows=\"4\" class=\"field span3\" name=\"text\"></textarea>
												<input type=\"hidden\" value=\"".$id."\" name=\"imageID\">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
														&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
														&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
														&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
														&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
														
												<a class= \" badge badge-warning\" onclick=\"document.getElementById('commentform".$id."').submit()\">
														<i class=\"fa-icon-pencil\"></i></a>
											</form>
										</div>
									</div>
								</div>
    						</div></div></div></div>
    								
    				</div>				
    			</div>";
    	
    	$imageDisplay = $imageDisplay.$modal;
    	
    }
    
	
	echo $imageDisplay;
	

}

function indexPageSlider(){
	global $imageArray;
	$num_image = count($imageArray['ImageID']);
	$max = $num_image - 1;
	$i1 = rand(0,$max);
	
	while(true){
		$i2 = rand(0,$max);
		if($i2 != $i1)
			break;
	}

	while(true){
		$i3 = rand(0,$max);
		if($i3 != $i1 && $i3 != $i2)
			break;
	}

	while(true){
		$i4 = rand(0,$max);
		if($i4 != $i1 && $i4 != $i2 && $i4 != $i3)
			break;
	}
	
	echo "<div id=\"wrapper\" class=\"full\">
			
			<div class=\"slider\">
				<div id=\"flex1\" class=\"flexslider home\">
					<ul class=\"slides\">

						<li>
							<img style=\"width:1280px;height:600px\" src=\"".$imageArray['ImageLink'][$i1]."\" alt=\"\" />
							<div class=\"slide-caption n\">
								<h3>".$imageArray['ImageName'][$i1]."</h3>
							</div>
						</li>

						<li>
							<img style=\"width:1280px;height:600px\" src=\"".$imageArray['ImageLink'][$i2]."\" alt=\"\" />
							<div class=\"slide-caption\">
								<h3>".$imageArray['ImageName'][$i2]."</h3>
							</div>
						</li>

						<li>
							<img style=\"width:1280px;height:600px\" src=\"".$imageArray['ImageLink'][$i3]."\" alt=\"\" />
							<div class=\"slide-caption\">
								<h3>".$imageArray['ImageName'][$i3]."</h3>
							</div>
						</li>
						
						<li>
							<img style=\"width:1280px;height:600px\" src=\"".$imageArray['ImageLink'][$i4]."\" alt=\"\" />
							<div class=\"slide-caption\">
								<h3>".$imageArray['ImageName'][$i4]."</h3>
							</div>
						</li>

					</ul>
				</div>
			</div>
		
		</div>";
}

function showPagination($page){
	global $imageArray;
	
	
	$numEle = count($imageArray['ImageName']);
	$numPage = (int)($numEle/10);
	if(($numEle % 10) != 0)	$numPage += 1;
	
	if ($page == "prev"){
		$page = 1;
	}
	
	if ($page == "next"){
		$page = $numPage;
	}
	
	$retuPage = "
						<div class=\"row\"><div class=\"span13\"><form id = \"pageFormPrev\" method=\"post\" action=\"\"><input type=\"hidden\" value=\"prev\" name=\"page\" />
								<a class=\"badge badge-info\" onclick=\"document.getElementById('pageFormPrev').submit()\">&laquo;</a>
							</form></div>";
	
	if($page < 5){
		for($i = 1; $i < $page; $i++){
			$retuPage = $retuPage."<div class=\"span13\"><form id = \"pageForm".$i."\" method=\"post\" action=\"\"><input type=\"hidden\" value=\"".$i."\" name=\"page\" />
								<a class=\"badge badge-success\" onclick=\"document.getElementById('pageForm".$i."').submit()\">".$i."</a>
							</form></div>";
		}
		
		$retuPage = $retuPage."<div class=\"span13\"><form id = \"pageForm".$page."\" method=\"post\" action=\"\"><input type=\"hidden\" value=\"".$page."\" name=\"page\" />
								<a class=\"badge\" onclick=\"document.getElementById('pageForm".$page."').submit()\">".$page."</a>
							</form></div>";
		$up = 5;
		if($numPage < 5)	$up = $numPage;

		for($i = ($page + 1); $i <= $up; $i++){
			
			$retuPage = $retuPage."<div class=\"span13\"><form id = \"pageForm".$i."\" method=\"post\" action=\"\"><input type=\"hidden\" value=\"".$i."\" name=\"page\" />
								<a class=\"badge badge-success\" onclick=\"document.getElementById('pageForm".$i."').submit()\">".$i."</a>
							</form></div>";
		}
		
	}
	
	if($page >= 5){
			
		$retuPage = $retuPage."<div class=\"span13\"><form id = \"pageForm".$page."\" method=\"post\" action=\"\"><input type=\"hidden\" value=\"".$page."\" name=\"page\" />
								<a onclick=\"document.getElementById('pageForm".$page."').submit()\">".$page."</a>
							</form></div>";
		$up = ($numPage + 4);
		if(($numPage - $page) < 4 ) $up = $numPage;

		for($i = ($page + 1); $i <= $up; $i++){
				
			$retuPage = $retuPage."<div class=\"span13\"><form id = \"pageForm".$i."\" method=\"post\" action=\"\"><input type=\"hidden\" value=\"".$i."\" name=\"page\" />
								<a onclick=\"document.getElementById('pageForm".$i."').submit()\">".$i."</a>
							</form></div>";
		}
	}
	
	$retuPage = $retuPage."<div class=\"span13\"><form id = \"pageFormNext\" method=\"post\" action=\"\"><input type=\"hidden\" value=\"next\" name=\"page\" />
								<a class=\"badge badge-info\" onclick=\"document.getElementById('pageFormNext').submit()\">&raquo;</a>
							</form></div></div>";
	
	
	$length = 10;
	if($page == $numPage)
		$length = ($numEle - (($page - 1)*10));
	
	
	$ta = array();
	for($i = 0; $i < $length; $i++){
		
		$ta['ImageID'][$i] = $imageArray['ImageID'][((($page-1)*10)+$i)];
		$ta['ImageLink'][$i] = $imageArray['ImageLink'][((($page-1)*10)+$i)];
		$ta['AuthorID'][$i] = $imageArray['AuthorID'][((($page-1)*10)+$i)];
		$ta['Likes'][$i] = $imageArray['Likes'][((($page-1)*10)+$i)];
		$ta['ImageName'][$i] = $imageArray['ImageName'][((($page-1)*10)+$i)];
		$ta['Description'][$i] = $imageArray['Description'][((($page-1)*10)+$i)];
	}
	
	$imageArray = array();
	
	for($j = 0; $j < $length; $j++){
		$imageArray['ImageID'][$j] = $ta['ImageID'][$j];
		$imageArray['ImageLink'][$j] = $ta['ImageLink'][$j];
		$imageArray['AuthorID'][$j] = $ta['AuthorID'][$j];
		$imageArray['Likes'][$j] = $ta['Likes'][$j];
		$imageArray['ImageName'][$j] = $ta['ImageName'][$j];
		$imageArray['Description'][$j] = $ta['Description'][$j];
	}
	
	return $retuPage;

}
?>