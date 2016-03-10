
<?php 
include ('StudentInterface/Header.html');
?>
<p>
	<div class="container">
<table class="table table-hover">
   <caption><h2>Project record<h2></caption>

   <thead>
      <tr>
        <th>Name</th>
         <th>Title</th>
         <th>Abstract</th>
      </tr>
   </thead>
   <tbody>
      <tr>
   <?php

$Task1=NULL;
$Task2=NULL;
$ProjectID=NULL;
//user name
$con = mysqli_connect('127.0.0.1','root','','spf');
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }
$result = mysqli_query($con, "SELECT * FROM participate 
	WHERE stID='$studentID'");//select for tasks

while($row = mysqli_fetch_array($result))
  {
  	$ProjectID=$row['projID'];
  	$result = mysqli_query($con, "SELECT * FROM projects 
	WHERE projectID='$ProjectID'");
while($row = mysqli_fetch_array($result))
  {
  	echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['title'] . "</td>";
  echo "<td>" . $row['abstract'] . "</td>";
  echo "</tr>";
  if ($Task1!=NULL){
	$Task2=$row['name'];
  }
  else{
  	$Task1=$row['name'];
  }
}

}

  
//select for tasks


mysqli_close($con);

  		

?>
  
</table>
</p>

<p>
	<a href="Task1.php">
   <button type="button" class="btn btn-default btn-lg">
   <?php 

   if ($Task1!=NULL){
   	echo $Task1;

    } 
   else{
		echo "empty";
	}
   ?>
   </button>
	</a>

   <a href="Task2.php">
   <button type="button" class="btn btn-default btn-lg">
   <?php 
   if ($Task2!=NULL){
   echo $Task2;
   } 
   else{
   	 	echo "empty";
   }
   ?>
   </button>
  </a>
	
</p>


