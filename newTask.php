<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="style.css">
    <link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" />
    <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
    <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

</head>

<body onload="showvalf()">

    <div id="container">

        <div id="header" class="page-header">
            <h1 align="center" id="projectName">Project Name</h1>
        </div>

        <div id="navigation" class="nav navbar-nav">
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="SupervisorInterface.php">Menu</a>

                </div>
                <div>
                    <ul class="nav navbar-nav menu_bar">
                        <li class="active"><a href="newTask.php">New Task</a></li>

                        <li><a href="projectProcess.html">Project Process</a></li>

                        <li><a href="studentInformation.php">Student information</a></li>

                    </ul>
                </div>
            </nav>
        </div>
        <div id="block"></div>

        <div id="content" width="auto">
             <h4>Task name:<h4>
            
                 <form action="newTaskSend.php" method="post">
                     <table border="0">
                         <tr>                         
                             <td>Project ID: </td>
                             <td><input type="text" name="projID"></td>
                         </tr>
                         <tr>                         
                             <td>Task ID: </td>
                             <td><input type="text" name="taskID"></td>
                         </tr>
                         <tr>
                             <td>Professor ID: </td>
                             <td><input type="text" name="prof"></td>
                         </tr>
                         <tr>
                             <td>Task Name: </td>
                             <td><input type="text" name="taskName"></td>
                         </tr>
                         <tr>
                             <td>Task Description: </td>
                             <td><input type="text" name="descrip"></td>
                         </tr>
                         <tr>
                             <td>Student ID: </td>
                             <td><input type="text" name="stID"></td>
                         </tr>
                         <tr>
                             <td><input type="submit" name="submit"></td>
                         </tr>
                         
                     </table>
                 </form>
        </div>

        <div id="footer">Copyright WenZhou-Kean Unvirsity</div>

    </div>

</body>

</html>