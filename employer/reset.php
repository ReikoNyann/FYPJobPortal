<?php 
    include '../config.php';
    session_start(); 

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        
        $checkemail = "SELECT * FROM company WHERE CompanyEmail = '$email'";
        $emailresult = mysqli_query($conn, $checkemail);
        
        if(mysqli_num_rows($emailresult)){
            if($password != $cpassword){
                echo "<script>alert('Password does not match')</script>";
            }else{
                $sql = "UPDATE company SET CompanyPassword = '$password' WHERE CompanyEmail = '$email'";
                $result = mysqli_query($conn, $sql);
                if($result){
                    echo "<script>
                    alert('Password changed successfully. Please login with a new password');
                    window.location.href='login.php';
                    </script>";
                }else{
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    echo "<script>alert('Error 404')</script>";
                }
            }
        }else{
            echo "<script>alert('The email: $email, does not exist. Please proceed to sign up. Redirecting you to the registration page.');
            window.location.href='register.php';</script>";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/css/login.css">
        <link rel="stylesheet" href="/css/register.css">
    <header>
        <title>Registration for MU2WIL</title>
    </header>

    </head>

<body>
    <main>
    <div class="menu">
        <div class="murdoch">
            <a href="#"><img width="250px" src="/img/Murdoch_University_extended_logo.png" alt="logo" class="logo"></a>
        </div>
    </div>
        <div class="resetform">
            <h2>MU2WIL Reset Password</h2>
            <form action="" method="post">
            <label>Email: <input type="email" name="email"></label><br>
            <label>New Password: <input type="password" name="password"></label><br>
            <label>Re-enter New Password: <input type="password" name="cpassword"></label>
            <button name="submit" class="btn">Reset Password</button>
        </form> 
        </div>
    </main>
        <footer>
            <p>Copyright 2022, Team Yuen Yuen</p>
        </footer>
    </body>
</html>