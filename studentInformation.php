<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="style.css">
    <link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" />
    <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
    <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

</head>

<body >

    <div id="container">

        <div id="header" class="page-header">
            <h1 align="center" id="projectName">Project Name</h1>
        </div>

        <div id="navigation" class="nav navbar-nav">
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="SupervisorInterface.html">Menu</a>

                </div>
                <div>
                    <ul class="nav navbar-nav menu_bar">
                        <li><a href="newTask.html">New Task</a></li>

                        <li><a href="projectProcess.html">Project Process</a></li>

                        <li class="active"> <a href="studentInformation.php" >Student information</a></li>

                    </ul>
                </div>
            </nav>
        </div>
        <div id="block"></div>

        <div id="content" width="auto">
            <?php
    
    $conn = @mysqli_connect("127.0.0.1","root","","spf");
    mysqli_set_charset($conn,'utf8');
    $projectID = '20160001';
    // $resultProjID = mysqli_query($conn,"SELECT * FROM hosts WHERE profID='0102'");
    // while($rowPr = mysqli_fetch_array($resultProjID)) {
    //     $projID = $rowPr['projID'];
    //     $resultProjName = mysqli_query($conn,"SELECT * FROM projects WHERE projectID=$projID");
    //     while($rowPrN = mysqli_fetch_array($resultProjName)) {
    //         echo $rowPrN['name'];
    //         echo " ";
    //         $projIDFromRow = $rowPrN['projectID'];
        $resultStID = mysqli_query($conn,"SELECT * FROM participate WHERE projID='$projectID'");
            while($rowSt = mysqli_fetch_array($resultStID)) {
                $studentID = $rowSt['stID'];
                $resultStudentInfo = mysqli_query($conn,"SELECT * FROM students WHERE stID=$studentID");
                    while($rowStInfo = mysqli_fetch_array($resultStudentInfo)){
                        // echo $rowStInfo['email'];
                        // echo "      ";
                        // echo $rowStInfo['total_hrs'];

                        echo "<table border='1' class = 'bordered'>";
                        echo "<tr>";
                        echo "<th>";
                        echo "Student email:";
                        echo "</th>";
                        echo "<th>";
                        echo "Student Work hour:";
                        echo "</th>";
                        echo "</tr>";

                        echo "<tr>";
                        echo "<td>";
                        echo $rowStInfo['email'];
                        echo "</td>";
                        echo "<td algin = 'center'>";
                        echo $rowStInfo['total_hrs'];
                        echo "</td>";
                        echo "</tr>";

                        echo "<br/>";


                    }
            }
            
        // }
    // }
    
    
    ?>
        </div>

       <!--  <div id="footer">Copyright WenZhou-Kean Unvirsity</div>
 -->
    </div>

</body>

</html>