<?php
$user_name = "yangli7_admin";
$user_password = "qwer1234";
$database_name = "yangli7_cs242Final";
$host = "mysql:host=engr-cpanel-mysql.engr.illinois.edu;dbname=yangli7_cs242Final";
$db = new PDO($host, $user_name, $user_password);

$image_name = $_POST['image_name'];
$image_link = $_POST['image_link'];


$stmt = $db->prepare("UPDATE Images SET ImageName = :ImageName WHERE
				ImageLink = :ImageLink");
$stmt->bindParam(':ImageName', $t);
$stmt->bindParam(':ImageLink', $i);
	
$t = $image_name;
$i = $image_link;
	
$stmt->execute();
echo $image_name;
?>