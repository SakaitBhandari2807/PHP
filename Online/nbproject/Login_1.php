<?php
include("config.php");
session_start();
if($_SERVER['REQUEST_METHOD']=="POST"){
    $myusername = mysqli_real_escape_string($conn,$_POST['username']);
    $mypassword=  mysqli_real_escape_string($conn,$_POST['password']);
    $sql="select id FROM user where username='.$myusername.' and password='.$mypassword.'";
    $result=mysqli_query($conn,$sql);
    $row=  mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count=  mysqli_num_rows($result);
    if($count==1){
        //session_register("$myusername");
        $_SESSION['login_user']=$myusername;
        header("location:welcome.php");
    }
    else
        $error="Your Login Name or password is invalid";
}
?>
<html>
    <head>
        <title>
            Login Page
        </title>
        <style type="text/css">
            body{
                font-family: Arial,Helvetica,sans-serif;font-size: 14px;width:100px;font-weight: bold;border:#666666
            }
            .box{border:#666666 solid 1px;}
        </style>
    </head>
    <body bgcolor="#FFFFFF">
        <div align="center">
        <div style="width:300px;border:solid 1px #333333">
            <div style="background-color: #333333;color:#FFFFFF;padding:3px">
            <b>Login</b>
            </div>
        <div style="margin:30px"><form action="" method="POST"><label>UserName</label>
                <input type="text" name="username" class="box"/></br><br><label>Password</label>
                <input type="password" name="password" class="box"><br><br><input type="submit" value="submit">
                <br><br></form>
        </div>
        </div>
        </div>
        </body>
        
</html>

