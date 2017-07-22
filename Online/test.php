<?php
session_start();
?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!--<link rel="stylesheet" href="css/Form.css"/>-->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/body.css"/>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">CSEngineerTest</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Home</a></li>
                </ul>
            </div>
        </nav>
            <div style="margin-left:850px;margin-top:100px;width:200px;padding:2px"> 
                <p><center><span class="glyphicon glyphicon-user"></span>Enter Login Details</center></p><hr>
                <?php include 'check.php';?>
                <form role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" name="studentid" required="required" placeholder="Username"></br>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="spassword" required="required" placeholder="Password"></br>
                    </div>
                    <div>
                        <select style="width:100%;padding:8px 10px;border:none;border-radius: 4px;" name="logintype">
                            <option value="facultylogin">Faculty</option>
                            <option value="studentlogin">Student</option>
                        </select>
                    </div>
                    <hr>
                        <button class="btn btn-default" name="studentlogin">Submit</button>
                        <button class="btn btn-default"><a href="signUp.php" style="text-decoration:none;color:black">Register</a></button>
                    </p> 
                </form>
            </div>
            <div style="text-align: center; color: red;font-size: 20px;margin-left: 550px;">
                <span><?php echo $message;?></span>
            </div>
    </body>
</html>
