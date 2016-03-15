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
  if ($Task1!=NULL){
	$Task2=$row['name'];
  }
  else{
  	$Task1=$row['name'];
  }
  if($Task2!=NULL){
  	echo "<tr>";
<<<<<<< HEAD
  	echo "<td>" . $row['name'] . "</td>";
  	echo "<td>" . $row['title'] . "</td>";
  	echo "<td>" . $row['abstract'] . "</td>";
  	echo "</tr>";
=======
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['title'] . "</td>";
  echo "<td>" . $row['abstract'] . "</td>";
  echo "</tr>";
>>>>>>> origin/master
  }
}

}

mysqli_close($con);

?>

  
</table>
</div>
</p>


<p>
<div class="container">
<h2>Task</h2>
</p>
<div class="col-xs-9">
            <p>
            	<?php 
$con = mysqli_connect("127.0.0.1","root","","spf");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }

  $result = mysqli_query($con, "SELECT * FROM projects
	WHERE name='$Task2'");//select for tasks
while($row = mysqli_fetch_array($result))
  {
  	$ProjectID=$row['projectID'];
  	$result = mysqli_query($con, "SELECT * FROM doing
	WHERE stID='$studentID'");//select for tasks
	while($row = mysqli_fetch_array($result))
  {
  	$TaskID=$row['taskID'];
  	$result = mysqli_query($con, "SELECT * FROM consists
	WHERE (taskID='$TaskID' && projID='$ProjectID')");
	while($row = mysqli_fetch_array($result))
  {
  	$result = mysqli_query($con, "SELECT * FROM tasks 
	WHERE taskID='$TaskID'");
while($row = mysqli_fetch_array($result))
  {
  
  echo "<tr>";
  echo "<td>" . "Title:   ". $row['title'] . "</td>";
  echo "<br>";
  echo "<td>" . "Discripe:   ". $row['discrip'] . "</td>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<td>" . "DeadLine:   ". $row['deadline'] . "</td>";
  echo "</tr>";
  }
}
  }
  }





mysqli_close($con);
 ?>
            </p>
            
        </div>
 </div>




<p>
	<div class="col-lg-1"></div>
   

   <!-- 按钮触发模态框 -->
<button class="btn btn-primary btn-lg" data-toggle="modal" 
   data-target="#myModal">
   Turn on your works
</button>

<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" 
               data-dismiss="modal" aria-hidden="true">
                  &times;
            </button>
            <h4 class="modal-title" id="myModalLabel">
               Turn on works
            </h4>
         </div>
<<<<<<< HEAD

=======
>>>>>>> origin/master
         <div class="modal-body">
            <form class="form-inline" role="form">
   <div class="form-group">
      <label class="sr-only" for="name">Name</label>
      <input type="text" class="form-control" id="name" 
         placeholder="Input the name">
   </div>
<<<<<<< HEAD
   <form action="upload.php" method="post" enctype="multipart/form-data">
   <div class="form-group">
      <label class="sr-only" for="inputfile">Find in this computer</label>
      <input type="file" id="inputfile" name = "file">
=======
   <div class="form-group">
      <label class="sr-only" for="inputfile">Find in this computer</label>
      <input type="file" id="inputfile">
>>>>>>> origin/master
   </div>
   
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" 
               data-dismiss="modal">close
            </button>
<<<<<<< HEAD
            <button type="submit" class="btn btn-primary" name="submit">
               submit
            </button>
         </div>
    </form>
=======
            <button type="button" class="btn btn-primary">
               submit
            </button>
         </div>
>>>>>>> origin/master
      </div><!-- /.modal-content -->
</div><!-- /.modal -->
</div>
</p>