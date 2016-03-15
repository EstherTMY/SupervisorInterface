<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="style.css">
    <link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" />
    <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
    <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script>
        function to() {
            var getval = document.getElementById("projectName").value;
            document.location.href("projectsView.html?projectName=" + getval);
        }
    </script>
</head>

<body>
    
    
    

    <div id="container">

        <div id="header" class="page-header">
            <h1 align="center">Students' work</h1>
        </div>

        <div id="navigation" class="nav navbar-nav">
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="SupervisorInterface.php">Menu</a>

                </div>
                <div>
                    <ul class="nav navbar-nav menu_bar">
                        <li><a href="Annocements.html">Annocements</a></li>

                        <li class="active"><a href="Studentswork.html">Students' work</a></li>

                        <li><a href="ApplyProjects.html">Apply for new projects</a></li>

                    </ul>
                </div>
            </nav>
        </div>
        <div id="block"></div>

        <div id="content" width="auto">
            <?php
    
    $dbc = @mysqli_connect('127.0.0.1','root','','spf') OR die ('Could not connect to Mysql: '.mysqli_connect_error());
    mysqli_set_charset($dbc,'utf8');
    $resultProjID = mysqli_query($dbc,"SELECT * FROM hosts WHERE profID='0102'");
    while($rowPr = mysqli_fetch_array($resultProjID)) {
        $projID = $rowPr['projID'];
        $resultProjName = mysqli_query($dbc,"SELECT * FROM projects WHERE projectID=$projID");
        while($rowPrN = mysqli_fetch_array($resultProjName)) {
            echo "<div class=\"panel panel-default\" style=\"width:800px;\">
                <div class=\"panel-body\" style=\"font-size:40px\">";
            echo "Project Name: ";
            $projectName = $rowPrN['name'];
            $projectID = $rowPrN['projectID'];
            echo "<a href=projectsView.php?projID=$projectID>$projectName</a>";
            echo "</div>";
            echo " <div class=\"panel-footer\" style=\"width:800px;\" id=\"studentsName\">";
            echo "Student IDs: ";
            $projIDFromRow = $rowPrN['projectID'];
            $resultStID = mysqli_query($dbc,"SELECT * FROM participate WHERE projID=$projIDFromRow");
            while($rowSt = mysqli_fetch_array($resultStID)) {
                echo $rowSt['stID'];
                echo " ";
            }
            echo "</div>";
            echo "</div>";
        }
    }
    
    
    ?>
        </div>

        <div id="footer">Copyright WenZhou-Kean Unvirsity</div>

    </div>

</body>

</html>