<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>SignUp</title>
        <!--<link rel="stylesheet" href="css/form.css"/>-->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <!---<link rel="stylesheet" href="css/style.css"/>-->
        <style>
            td{
                padding:6px;
            }
            .error{
                color:red;
            }
        </style>
    </head>
    <body background="images/workspace.jpg">
        <header><h1><center>Welcome to Online Examination System</center></h1></header>
        <?php include('save.php');?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" style="width:450px;margin:20px;margin-left: 300px;margin-top: 100px;">
            <table>
                <tr>
                    <td><input type="text" placeholder="Firstname" name="fname" value="<?php echo htmlspecialchars($fname)?>" required="required"/>
                <td><input type="text"  placeholder="Lastname" name="lname" value="<?php echo htmlspecialchars($lname)?>" required="required"/></td>
                <td><?php echo htmlspecialchars($fnameErr);echo htmlspecialchars($fnameErr);?></td>
                </tr>
                <tr><td><label>Username:</label></td>
                    <td><input type="text" name="user_name" value="<?php echo htmlspecialchars($user_name)?>" placeholder="should be like[A-Z][a-z][0-9]" required="required"/></td>
                </tr>
                <tr><td><label>Password:</label></td>
                    <td><input type="password" name="pass_word" required="required"/></td>
                </tr>
                <tr><td><label>Email:</label></td>
                <td><input type="email" name="email_id" required="required"/></td>
                <tr><td><label>College</label></td>
                    <td><input type="text" name="college" value="<?php echo htmlspecialchars($college)?>" required="required"/></td>
                </tr>
                <tr><td><label>CollegeId:</label></td>
                    <td><input type="text" name="id" value="<?php echo htmlspecialchars($id)?>" required="required"/></td>
                </tr>
                <tr><td><label>MobileNo.</label></td>
                    <td><input type="text" name="phone_number" value="<?php echo htmlspecialchars($phone_number)?>" required="required"/></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit" class="btn btn-default" name="SignUpsubmit-button">Submit</button>
                        <input type="reset" class="btn btn-default" name="">
                    </td>
        </form>
    </body>
</html>
