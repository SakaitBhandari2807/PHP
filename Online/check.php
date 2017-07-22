<?php
                $message="";
                if(isset($_POST['studentlogin'])){
                    $type=$_POST['logintype'];
                    $username1=$_POST['studentid'];
                    $password1=$_POST['spassword'];
                    $password1=md5($password1);
                    include ('Config.php');
                    $sql="SELECT * FROM $type WHERE Username='$username1' AND Password='$password1'";
                    $result=$con->query($sql);
                    if($result->num_rows>0)
                    {
                        $row=$result->fetch_assoc();
                        if($row['Username']===$username1)
                        {
                           if($row['Password']===$password1){
                              $_SESSION['Currentuser']=$username1;
                              if($type=='studentlogin')
                              {
                                  header("location:Profile.php");
                              }
                              else{
                                  header("location:facultyprofile.php");
                              }
                           }
                           else{
                               showForm("password is incorrect");
                           }
                        }
                    }
                    else
                        {  //echo "Incorrect Details";
                           showForm("Enter a Valid Username and Password");
                        }
                }
                function showForm($message){
                    $GLOBALS['message']=$message;
                }
            ?>
