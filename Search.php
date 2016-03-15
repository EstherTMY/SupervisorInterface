<?php 
include ('StudentInterface/Header.html');
?>
<div class="container">
<table class="table table-hover">
   <caption><h2>Project record<h2>
   </caption>

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

	$con = mysqli_connect("localhost:3306","root","","spf");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }
  
$result = mysqli_query($con, "SELECT * FROM projects");//select all tasks


while($row = mysqli_fetch_array($result))
  {
  	
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['title'] . "</td>";
  echo "<td>" . $row['abstract'] . "</td>";
  echo "</tr>";
  
}

mysqli_close($con);

?>

  
</table>
</div>