<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="style.css">
    <link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" />
    <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
    <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

</head>

<body >

    <?php
    $projectID = $_GET["projID"];
    ?>
    
    <div id="container">

        <div id="header" class="page-header">
            <?php 
            include "conn.php";
            $resultPrN = mysqli_query($dbc,"SELECT  * FROM projects WHERE projectID=$projectID");
            while($rowPrN=mysqli_fetch_array($resultPrN)) {
                $projectName = $rowPrN['name'];
                echo "<h1>$projectName</h1>";
            }
            ?>
        </div>

        <div id="navigation" class="nav navbar-nav">
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="SupervisorInterface.html">Menu</a>

                </div>
                <div>
                    <ul class="nav navbar-nav menu_bar">
                        <li><a href="newTask.php">New Task</a></li>

                        <li><a href="projectProcess.php">Project Process</a></li>

<<<<<<< HEAD
                        <li><a href="studentInformation.php">Student information</a></li>
=======
                        <li><a href="studentInformation.html">Student information</a></li>
>>>>>>> origin/master

                    </ul>
                </div>
            </nav>
        </div>
        <div id="block"></div>

        <div id="content" width="auto">
            <h2>Tasks</h2>
            <?php
        
    include "conn.php";
    $resultTaID = mysqli_query($dbc,"SELECT * FROM consists WHERE projID=$projectID");
    while($rowTaID = mysqli_fetch_array($resultTaID)) {
        $taskID = $rowTaID['taskID'];
        $resultTaInfo = mysqli_query($dbc,"SELECT * FROM tasks WHERE taskID=$taskID");
        while($rowTaInfo = mysqli_fetch_array($resultTaInfo)) {
            if ($rowTaInfo['progress']==0) {
                $progress = "Unfinished";
            } else {
                $progress = "Finished";
            }
            echo "<ul class=\"list-group\" style=\"width: 600px\">";
            echo "<li class=\"list-group-item\">";
            echo "Task: ". $rowTaInfo['title']. "<span class=\"badge\">$progress</span> <br>" ."<p>".$rowTaInfo['discrip']."</p>";
            echo "</li>";
            echo "</ul>";
            
        }
    }
    ?>
        </div>

        <div id="footer">Copyright WenZhou-Kean Unvirsity</div>

    </div>

</body>

</html>