<?php 
    include '../config.php';
    session_start(); 


   if(isset($_POST['submit'])){
       $name = $_POST['cname'];
       $email =  $_POST['email'];
       $pass = $_POST['cpass'];
       $company =  $_POST['cname'];
       $uen =  $_POST['uen'];
       $intro =  $_POST['intro'];
       $status = 'Pending';
       $sql = "INSERT INTO company (CompanyUEN, CompanyName, CompanyEmail, CompanyPassword, PersonInCharge, CompanyProfile, ApprovalStatus) VALUES ('$uen', '$company', '$email', '$pass', '$name', '$intro', '$status')";
       $result = mysqli_query($conn, $sql);
       if($result){
            echo "<script>alert('You are registered successfully! Please wait for approval in 1-3 working days')</script>";
            header("Location: login.php");
        }else{
            echo "<script>alert('Error 404')</script>";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/css/login.css">
        <link rel="stylesheet" href="/css/employer/register.css">
    <header>
        <title>Registration for MU2WIL</title>
    </header>

    </head>

<body>
    <main>
    <div class="menu">
        <div class="murdoch">
            <a href="login.php"><img width="250px" src="/img/Murdoch_University_extended_logo.png" alt="logo" class="logo"></a>
        </div>
    </div>
        <div class="loginform">
            <h2>MU2WIL Registration Form</h2>
            <form action="" method="post">
            <h4>Register your interest by filling up the form here:</h4>
            <label>Name: <input type="text" name="cname" required></label><br>
            <label>Email: <input type="email" name="email" required></label><br>
            <label>Password: <input type="password" name="cpass" required></label><br>
            <label>License UEN: <input type="text" name="uen" required></label><br>
            <label>Company Name: <input type="text" name="cname" required></label><br>
            <label>Brief Intro:<br><textarea name ="intro" rows="6" cols="50"></textarea></label><br>
            <button name="submit" class="btn">Register</button>
        </form> 
        </div>
    </main>
        <footer>
            <p>Copyright 2022, Team Yuen Yuen</p>
        </footer>
    </body>
</html>