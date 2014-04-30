<?php

// Connect to the database
$user_name = "yangli7_admin";
$user_password = "qwer1234";
$database_name = "yangli7_cs242Final";
$host = "mysql:host=engr-cpanel-mysql.engr.illinois.edu;dbname=yangli7_cs242Final";
$db = new PDO($host, $user_name, $user_password);

// Fetch the accountTable
$accountTable = $db->prepare("SELECT * FROM Users");
$accountArray = array();
$counter = 0;
if ($accountTable->execute(array($_GET['name']))) {
	while($row = $accountTable->fetch())
	{
		$accountArray['username'][$counter] = $row['username'];
		$accountArray['password'][$counter] = $row['password'];
		$accountArray['email'][$counter] = $row['email'];
		$accountArray['infoID'][$counter] = $row['infoID'];	
		$accountArray['ip'][$counter] = $row['ip'];
		$accountArray['connection'][$counter] = $row['connection'];
		$counter++;
	}
}

// Global Data Store the Log in information.

// Function that checks whether a given $user_name has already been used.
// Return true if the account already exist. False otherwise.
function AccountExist($user_name){
	global $accountArray;
	$retu = false;
	for($i = 0; $i < count($accountArray['username']); $i++){
		if(strcmp($accountArray['username'][$i], $user_name) == 0){
			$retu = true;
			break;
		}
			
		
	}
	return $retu;
	
}

// Function that given the user_names, emails, password to register a account.
// Return True indicating register successful, False otherwise.
function AccountRegister($user_name, $email, $password){
	global $db;
	
	if(AccountExist($user_name))
		return false;
	
	echo $user_name."<br>";
	echo $email."<br>";
	echo $password;
	
	// prevent SQL Injection attact.
	$stmt = $db->prepare("INSERT INTO Users (username, password, infoID, email, ip, connection)
				VALUES(:username, :password, :infoID, :email, :ip, :connection)");
	$stmt->bindParam(':username', $t);
	$stmt->bindParam(':password', $a);
	$stmt->bindParam(':infoID', $null);
	$stmt->bindParam(':email', $e);
	$stmt->bindParam(':ip', $i);
	$stmt->bindParam(':connection', $c);
	
	$t = htmlspecialchars($user_name);
	$a = htmlspecialchars($password);
	$e = htmlspecialchars($email);
	$null = NULL;
	$i = 1;
	$c = 0;
	
	$stmt->execute();
	
	return true;
}


// Function that given the input of a pair of username and password to sign in the 
// Website. Return the ID if the $user_name matches the $password, -1 otherwise.
function AccountSignIn($user_name, $password){
	global $accountArray;
	global $db;
	
	$clientIP = $_SERVER['REMOTE_ADDR'];
	
	
	
	$retu = false;
	for($i = 0; $i < count($accountArray['username']); $i++){
		if(strcmp($user_name, $accountArray['username'][$i]) == 0){
			if(strcmp($password, $accountArray['password'][$i]) == 0){
				$retu = true;
				
				$stmt = $db->prepare("UPDATE Users SET ip = :ip, connection = :connection WHERE
				username = :username");
				$stmt->bindParam(':username', $t);
				$stmt->bindParam(':ip', $i);
				$stmt->bindParam(':connection', $c);
				
				$t = htmlspecialchars($user_name);
				$i = $clientIP;
				$c = 1;
				
				$stmt->execute();
				
			}
			break;
		}
	}
	
	return $retu;	
}


// Function that checks whether there is a connection between the client and the User.
// Return the username indicationg there is, null otherwise

function checkLogInStatus(){
	global $accountArray;
	
	$retu = NULL;
	$clientIP = $_SERVER['REMOTE_ADDR'];
	for($i = 0; $i < count($accountArray['ip']); $i++){
		$currentIP = $accountArray['ip'][$i];
		$currentConnection = $accountArray['connection'][$i];
		if($clientIP == $currentIP && $currentConnection == 1){
			$retu = $accountArray['username'][$i];
			break;
		}
	}
	
	return $retu;
	
}

// function that return the author's name given its id.
function GetAuthorNamebyID($id){
	global $accountArray;
	$retu = NULL;
	
	for($i = 0 ; $i < count($accountArray['username']); $i++){
		if($id == $accountArray['infoID'][$i])
		{
			$retu = $accountArray['username'][$i];
			break;
		}
	
	}
	return $retu;
	
}

// function that return the author's id give the name.
function GetAuthorIDbyName($name){
	global $accountArray;
	$retu = NULL;
	
	for($i = 0 ; $i < count($accountArray['username']); $i++){
		if($name == $accountArray['username'][$i])
		{
			$retu = $accountArray['infoID'][$i];
			break;
		}
	
	}
	return $retu;
}

// Function that logout the user.
function AccountLogOut(){
	global $accountArray;
	global $db;
	
	$retu = false;
	$clientIP = $_SERVER['REMOTE_ADDR'];
	for($i = 0; $i < count($accountArray['ip']); $i++){
		$currentIP = $accountArray['ip'][$i];
		$currentConnection = $accountArray['connection'][$i];
		if($clientIP == $currentIP && $currentConnection == 1){
			$user_name = $accountArray['username'][$i];
			
			$retu = true;
			
			$stmt = $db->prepare("UPDATE Users SET ip = :ip, connection = :connection WHERE
				username = :username");
			$stmt->bindParam(':username', $t);
			$stmt->bindParam(':ip', $i);
			$stmt->bindParam(':connection', $c);
			
			$t = htmlspecialchars($user_name);
			$i = NULL;
			$c = 0;
			
			$stmt->execute();
			
		}
	}
	
	return retu;
	
	
}




//echoing the successful register Message
	
	$AccountRegisterSucc = "<div class=\"page-header\">
    <h1>Success!</h1>
  </div><div class=\"span6\">
      <div class=\"alert alert-success\">
        <strong>Success</strong> You successfully registered your account.
      </div>
    </div>";
	


// echoing the failed register Message

	$AccountRegisterFail = "<div class=\"page-header\">
    <h1>Failure</h1>
  </div><div class=\"span6\">
      <div class=\"alert alert-error\">
        <strong>Failed</strong> You Failed to register your account. Please try it again. Thank you.
      </div>
    </div>";
	

// echoing the successful signIn Message
	
	$AccountSignInSucc = "<div class=\"page-header\">
    <h1>Success!</h1>
  </div><div class=\"span6\">
      <div class=\"alert alert-success\">
        <strong>Success</strong> You successfully Signed In your account.
      </div>
    </div>";
	
	
	
// echoing the failed register Message
	
	$AccountSignInFail = "<div class=\"page-header\">
    <h1>Failure</h1>
  </div><div class=\"span6\">
      <div class=\"alert alert-error\">
        <strong>Failed</strong> You Failed to Signed In your account. Please try it again. Thank you.
      </div>
    </div>";	
	
	
// echoing the successful Logout Message
	
	$AccountSignInSucc = "<div class=\"page-header\">
    <h1>Success!</h1>
  </div><div class=\"span6\">
      <div class=\"alert alert-success\">
        <strong>Success</strong> You successfully Sign In your account.
      </div>
    </div>";
	
	
	
// echoing the failed Logout Message
	
	$AccountSignInFail = "<div class=\"page-header\">
    <h1>Failure</h1>
  </div><div class=\"span6\">
      <div class=\"alert alert-error\">
        <strong>Failed</strong> You Failed to Sign In.Please Try it again.
      </div>
			
		<div class=\"row\"><form class=\"form-inline\" method=\"post\" action=\"../account/signIn.php\">
  <input type=\"text\" class=\"input-small\" placeholder=\"Username\" name=\"username\">
  <input type=\"password\" class=\"input-small\" placeholder=\"Password\" name=\"password\">
  <button type=\"submit\" class=\"btn btn-mini btn-warning\">Sign in</button>
</form></div>
    </div>";
	
	
// echoing the please Sign in Message
	
	$AccountPleaseSignIn = "<div class=\"page-header\">
    <h1>Sign In here</h1>
  </div><div class=\"span6\">
   
		
		<div class=\"row\"><form class=\"form-inline\" method=\"post\" action=\"../account/signIn.php\">
  <input type=\"text\" class=\"input-small\" placeholder=\"Username\" name=\"username\">
  <input type=\"password\" class=\"input-small\" placeholder=\"Password\" name=\"password\">
  <button type=\"submit\" class=\"btn btn-mini btn-warning\">Sign in</button>
</form></div>
    </div>";
	

// echoing the header indicating if the user is not logged in

	$LogOutHeader = "<ul class=\"nav pull-right\" id=\"main-menu-right
			\">                <a href=\"#SignIn\" role=\"button\" class=\"btn btn-danger btn-large\" data-toggle=\"modal\"><i class=\"icon-check\"></i>&nbspLog In Here</a>
			</ul>
			
			";

	
	



?>