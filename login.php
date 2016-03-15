<?php
$dbc = @mysqli_connect('127.0.0.1','root','','spf') OR die ('Could not connect to Mysql: '.mysqli_connect_error());
mysqli_set_charset($dbc,'utf8');
$resultStID = null;
$resultProfID = null;
$resultManngerID = null;

if (isset($_POST["submit"])){
	$id = $_POST['ID'];
	$password = $_POST['password'];
<<<<<<< HEAD
	setcookie('idcookie',$id);
=======
>>>>>>> origin/master

	$resultStID = mysqli_query($dbc,"SELECT * FROM students WHERE stID='$id'");
	while ($row = mysqli_fetch_array($resultStID)) {
		# code...
<<<<<<< HEAD
		if($row['stID']!=null&&$password == $row['password']){
		// mysqli_close($dbc);
		header("location:studentMain.php");		
		}else if($row['stID']!=null&&$password != $row['password']){
			 echo "<script>alert('Wrong Password!');window.location.href='./login.html';</script>";
			 //header("location:login.html");
=======
		if($row['stID']!=null){
		// mysqli_close($dbc);
		header("location:studentMain.php");
		
>>>>>>> origin/master
		}
	}
	
	$resultProfID = mysqli_query($dbc,"SELECT * FROM professors WHERE profID='$id'");
	while ($row = mysqli_fetch_array($resultProfID)) {
		# code...
<<<<<<< HEAD
		if($row['profID']!=null&&$password == $row['password']){
=======
		if($row['profID']!=null){
>>>>>>> origin/master
		// mysqli_close($dbc);
		header("location:SupervisorInterface.html");
		
		}
<<<<<<< HEAD
		else if($row['profID']!=null&&$password != $row['password']){
			 echo "<script>alert('Wrong Password!');window.location.href='./login.html';</script>";
			 //header("location:login.html");
		}
=======
>>>>>>> origin/master
	}
	$resultManngerID = mysqli_query($dbc,"SELECT * FROM manager WHERE manaID='$id'");
	while ($row = mysqli_fetch_array($resultManngerID)) {
		# code...
<<<<<<< HEAD
		if($row['manaID']!=null&&$password == $row['password']){
		// mysqli_close($dbc);
		header("location:student_result.html");
		
		}else if($row['manaID']!=null&&$password != $row['password']){
			 echo "<script>alert('Wrong Password!');window.location.href='./login.html';</script>";
			 // header("location:login.html");
		}
	}
	echo "<script>alert('Wrong User ID');window.location.href='./login.html';</script>";
=======
		if($row['manaID']!=null){
		// mysqli_close($dbc);
		header("location:student_result.html");
		
		}
	}
>>>>>>> origin/master
	
}
?>