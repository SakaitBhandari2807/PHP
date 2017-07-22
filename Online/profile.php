<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">CSEngineerTest</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span>Home</a></li>
                    <div class="navbar-brand">
                        <?php
                            if(isset($_SESSION['Currentuser'])){
                                echo "Welcome".$_SESSION['Currentuser'];
                            }
                            else{
                              echo "You must be logged in to see this";
                            }
                        ?>
                    </div>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="logout.php?logout='1'"><span class="glyphicon glyphicon-log-out"></span>Logout
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div>
            <div style="margin-top: 100px">
                <a href="instructions.html" target="_blank">Read Instructions</a>
            </div>
            <div>
                <a href="Questions.php">Start Test</a>
            </div>
        </div>
    </body>
</html>
