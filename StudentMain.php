<?php 
include ('StudentInterface/Header.html');
?>
<body data-spy="scroll" data-target="#myScrollspy">
<div class="container">
  <h2><p class="text-center">Student Manager</p></h2>
  <a href="login.html">Log Out</a>
    <div class="row">
        <div class="col-xs-3" id="myScrollspy">
            <ul class="nav nav-tabs nav-stacked" data-spy="affix" data-offset-top="125">
                <li class="active"><a href="#Announce">Announce</a></li>
                
            </ul>
        </div>
        <div class="col-xs-9">
            <h2 id="Announce">Announce</h2>
            <p>

            





<?php  

$AnnounceID=NULL;
$AnnounceResult=NULL;
$con = mysqli_connect('127.0.0.1','root','','spf');

if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }

  $result = mysqli_query($con, "SELECT * FROM checkannounce
    WHERE stID='$studentID'");
  while($row = mysqli_fetch_array($result))
  {
    $AnnounceID=$row['announID'];
    $AnnounceResult = mysqli_query($con, "SELECT * FROM annonces
    WHERE announID='$AnnounceID'");
    while($row = mysqli_fetch_array($AnnounceResult)){
      echo "<td>" . "Title:    ". $row['title'] . "</td>";
      echo "<br>";
      echo "<td>" . "Content:    ". $row['content'] . "</td>";
      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "<td>" . "PostTime:    ". $row['time'] . "</td>";
      echo "<br>";

    }
}






mysqli_close($con);
            ?>
            <hr>
           
            
             </div>
    </div>
</div>
</body>
