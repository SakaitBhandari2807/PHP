<?php 
session_start();
?>
<html>
    <head>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
        <link rel="stylesheet" href="css/questions.css">
    </head>
    <body>
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
                        <a href="logout.php?logout='1'"><span class="glyphicon glyphicon-log-out"></span>Logout
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div id="main">
            <div id="text">Total Score:</div>
            <div id="score">
            <?php
            
            include('Config.php');
                if(isset($_POST['answersubmit'])){
                        $i=1;
                    $score=0;
                    for($i=1;$i<6;$i++){
                        $answer=$_POST['answer'.$i];
                        $a=$_SESSION['question_id'][$i];
                        $result=$con->query("SELECT Correct from questions where q_id='$a'");
                        if($result->num_rows>0){
                            while($row=$result->fetch_assoc()){
                                if($row['Correct']==$answer){
                                    $score++;
                                }
                            }
                        }
                    }
                    $name=$_SESSION['Currentuser'];
                    $con->query("INSERT INTO score (Name,Score) values('$name','$score')");
                  echo $score;
                }
            ?>
            </div>
        </div>
    </body>
</html>


