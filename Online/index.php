<?php
    session_start();
if(isset($_SESSION['Currentuser'])){
     header("location:Profile.php");
}
?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en-US">
    <head>
        <title>Online Examination System</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="C:/xampp/htdocs/Online/bootstrap.min.css">
        <script src="C:/xampp/htdocs/Online/jquery.min.js"></script>
        <script src="C:/xampp/htdocs/Online/bootstrap.min.js"></script>
        <style>
          footer {
            background-color: #2d2d30;
            color: #f5f5f5;
            padding: 32px;
          }
          .container{
                padding: 80px 120px;
                position: relative;
                background-image: url('../images/onlineExamImage.jpg');
                width:100%;
                height:100%;
                overflow:hidden;
                display:compact;
                background-repeat: no-repeat;
            }
            #header{
                background-color: #2d2d30;
                margin-bottom: 0px;
            }
            #whole{
                margin-top: 0px;
                margin-bottom: 0px;
            }
            #picture{
                width: 1000px;
                margin-left: 120px;
                margin-bottom: 0px;
                margin-top: 0px;
            }
            #picture1{
                float: left;
            }
       </style>
    </head>
    <body>
        <header id="header">
            <div id="whole">
                <div id="picture1">
                    <img src="images/favicon.png" height="120px" width="100px">
                </div>
                <div id="picture">
                    <img src="images/online-exam (1).jpg" height="120" width="1240px">
                </div>
            </div>
        </header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">CSEngineerTest</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="#" >Home</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="developer.html">About Us</a>
                    </li>
                    <li>
                        <a href="test.php"><span class="glyphicon glyphicon-log-in"></span>Login
                        </a>
                    </li>
                    <li>
                        <a href="signUp.php"><span class="glyphicon glyphicon-user"></span>SignUp</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container text-center">
            <h3>G.B.PANT ENGINEERING COLLEGE</h3>
            <p><em><h4>CSE 3 year</h4></em></p>
            <p><img src="images/b.jpg" alt="ava" height="100%" width="100%"></p>
        </div>
        <footer class="text-center">
            <p>Site Designed &amp; Developed by <i><a href="Developer.html">Sakait Bhandari</a></i></p>
            <p>Copyright &COPY;<?php echo date('Y')?></p>
        </footer>
    </body>
</html>
