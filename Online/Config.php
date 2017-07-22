<?php
    $dbname="mydb";
    $username="root";
    $servername="localhost";
    $password="";
    $con=new mysqli($servername,$username,$password, $dbname);
    if($con->connect_error)
        {
          die("Connection Failed".$con->connect_error);
          
        }
?>