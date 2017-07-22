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
        </nav>
        <div id="timer"></div>
        
        <div id="question">
            <form action="Score.php" method="POST">
                <?php
                  session_start();
                  include('Config.php');
                  $sql="SELECT * from questions ORDER BY RAND()";
                  $result=$con->query($sql);
                  $ans=array();
                  if($result->num_rows>0){
                      $i=1;
                      while($row=$result->fetch_assoc()){
                          echo $i.".".$row['Questions']."<br>";
                          $ans[$i]=$row['q_id'];
                          echo '<input type="radio" name="answer'.$i.'" value="A1">'.$row['A1'].'<br>';
                          echo '<input type="radio" name="answer'.$i.'" value="A2">'.$row['A2'].'<br>';
                          echo '<input type="radio" name="answer'.$i.'" value="A3">'.$row['A3'].'<br>';
                          echo '<input type="radio" name="answer'.$i.'" value="A4">'.$row['A4'].'<br>';
                          $i++;
                      }
                   }
                  $_SESSION['question_id']=$ans;
              ?>
            </div>
                <button style="margin-left:500px" class="btn btn-default" name="answersubmit">submit</button>
            </form>
    </body>
</html>


