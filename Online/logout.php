<?php
session_start();
if(isset($_GET['logout'])){
    session_unset();
    session_destroy();
 }
echo "You have successfully logged out";
header("Refresh:1,URL=index.php");
?>
