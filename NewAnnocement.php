<?php 
include "conn.php";
$profID = '0103';
if (isset($_POST["submit"])){
	$time = date("Y-m-d h:i:s", time());
	$q = 'SELECT announID FROM annonces ORDER BY announID DESC';
	$r = mysqli_query($dbc,$q);
	$row = mysqli_fetch_array($r);
	$announID = $row['announID'] + 1;
	$title = $_POST['title'];
	$content = $_POST['content'];
	$q = "INSERT IGNORE INTO gives (profID, annonID) values('$profID', $announID);";
	mysqli_query($dbc,$q);
	$q = "INSERT IGNORE INTO annonces (announID, title, content,time) values($announID, '$title' , '$content', '$time');";
	mysqli_query($dbc,$q);
	echo "<p>Submit sucessful, please click <a href=SupervisorInterface.html>here</a> to return.</p>";
	}
?>
