

<?php

echo "<head>";
echo "<link rel=\"stylesheet\" href=\"style.css\">";
echo "<link href=\"http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css\" rel=\"stylesheet\"/>";
echo "</head>";


$dbc = @mysqli_connect('127.0.0.1','root','','spf') OR die ('Could not connect to Mysql: '.mysqli_connect_error());
mysqli_set_charset($dbc,'utf8');

$q = 'SELECT * FROM annonces ORDER BY announID DESC';
$r = mysqli_query($dbc,$q);

	while($row = mysqli_fetch_array($r)){

		echo '<div class="panel panel-default"';
		echo '<div class="panel-heading">';
		echo '<h3 class="panel-title" id="title">';
		echo $row['title'];
		echo '</h3>';
		echo '</div>';
		echo '<div class="panel-body">';
		echo '<p id="content">';
		echo $row['content'];
		echo '</p>';
		echo '<br>';
		echo '<p id="content">';
		echo $row['time'];
		echo '</p>';
		echo '</div>';	
		echo '</div>';	
	}
	

?>
