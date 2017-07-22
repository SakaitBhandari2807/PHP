<?php
session_start();
if(!isset($_SESSION['Currentuser'])){
    header('location:index.php');
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
                <style>
            table{
                border-collapse: collapse;
                width:100%;
            }
            tr:hover{
                background-color: #f5f5f5;
            }
            tr:nth-child(even){
              background-color: #f2f2f2;  
            }
            th{
                background-color: #4CAF50;
                color:white;
            }
            th,td{
                text-align: left;
                padding: 8px;
            }
            #error{
                margin-left: 550px;color:red;font-size: 16px;
            }
        </style>
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
                                echo "&nbsp;&nbsp;Welcome&nbsp;".$_SESSION['Currentuser'];
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
        <form action="facultyprofile.php" method="POST" style="margin-top:100px;margin-left:600px">
               <label for="search">Search</label>
               <input type="text" name="search">
               <input type="submit" name="searchbutton">
        </form>
        <div style="overflow-x: auto;overflow-y: auto;width:600px">
        <table>
            <tr>
                <th>Name</th>
                <th>Score</th>
                
            </tr>
        <?php
        $message="";
        include 'Config.php';
        $result=$con->query("SELECT * FROM score");
        while($row1=$result->fetch_assoc()){
            echo"<tr>";echo "<td>";echo $row1['Name'];echo "</td>";
                       echo "<td>";echo $row1['Score'];echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "</div>";
        if(isset($_POST['searchbutton'])){
            $searchelement=$_POST['search'];
            $sql="SELECT Name,Score FROM score WHERE Name='$searchelement'";
            $result=$con->query($sql);
            if($result->num_rows>0){
                $row=$result->fetch_assoc();
                echo "<table>";
                echo "<tr>";
                echo "<th>";echo "Name";echo "</th>";
                echo "<th>";echo "Score";echo "</th>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>".$row['Name']."</td>";
                echo "<td>".$row['Score']."</td>";
                echo "</tr>";
                echo "</table>";
            }
            else{
               $message="User Doesn't exist";
            }
        }
       ?>
        <div id="error">
            <?php echo $GLOBALS['message'];?>
        </div>
    </body>
    </html>