<?php
        $user_name=$pass_word=$fname=$lname=$email_id=$college=$id=$phone_number="";
        $usernameErr=$fnameErr=$lnameErr=$nameErr=$phonenumberErr="";
        $count=0;
            if($_SERVER['REQUEST_METHOD']=="POST"){
                $fname=test($_POST["fname"]);
                if(!preg_match("/^[a-zA-Z]*$/",$fname)){
                    $fnameErr="Only letters allowed";
                    $count++;
                }
                $lname=test($_POST["lname"]);
                if(!preg_match("/^[a-zA-Z]*$/",$lname)){
                    $lnameErr="Only letters allowed";
                    $count++;
                }
                $email_id=test($_POST["email_id"]);
                $college=test($_POST["college"]);
                $id=test($_POST["id"]);
                $phone_number=test($_POST["phone_number"]);
                $uname=test($_POST['user_name']);
                $pword=test($_POST['pass_word']);
                $pword1=md5($pword);
            }
        function test($data){
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;
        }
        include('Config.php');
        if(isset($_POST['SignUpsubmit-button'])){
            echo $fname;
            $sql="INSERT INTO student (FirstName,LastName,EmailID,College,CollegeID,MobileNO) VALUES('$fname','$lname','$email_id','$college','$id','$phone_number')";
            if($con->query($sql)===true)
            {
                $con->query("INSERT INTO studentlogin (Username,Password) values('$uname','$pword1')");
                echo "You have been Successfully Registered";
                //header("Refresh:2,URL=index.php");
            }
            $con->close();
        }
        ?>
