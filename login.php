<?php
$dbc = @mysqli_connect('127.0.0.1','root','','spf') OR die ('Could not connect to Mysql: '.mysqli_connect_error());
mysqli_set_charset($dbc,'utf8');
$resultStID = null;
$resultProfID = null;
$resultManngerID = null;

if (isset($_POST["submit"])){
	$id = $_POST['ID'];
	$password = $_POST['password'];

	$resultStID = mysqli_query($dbc,"SELECT * FROM students WHERE stID='$id'");
	while ($row = mysqli_fetch_array($resultStID)) {
		# code...
		if($row['stID']!=null){
		// mysqli_close($dbc);
		header("location:studentMain.php");
		
		}
	}
	
	$resultProfID = mysqli_query($dbc,"SELECT * FROM professors WHERE profID='$id'");
	while ($row = mysqli_fetch_array($resultProfID)) {
		# code...
		if($row['profID']!=null){
		// mysqli_close($dbc);
		header("location:SupervisorInterface.html");
		
		}
	}
	$resultManngerID = mysqli_query($dbc,"SELECT * FROM manager WHERE manaID='$id'");
	while ($row = mysqli_fetch_array($resultManngerID)) {
		# code...
		if($row['manaID']!=null){
		// mysqli_close($dbc);
		header("location:student_result.html");
		
		}
	}
	
}
?>