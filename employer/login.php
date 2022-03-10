<?php 
    include'../config.php';
    session_start();
    error_reporting(0);

    if(isset($_SESSION['email'])){
        header("Location: dashboard.php");
    }

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

    $sql = "SELECT * FROM company WHERE CompanyEmail ='$email' AND CompanyPassword = '$password'";
    $result = mysqli_query($conn, $sql);
    if($result-> num_rows > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['email'] = $row['email'];
        header("Location: dashboard.php");
    } else {
        echo "<script>alert('Email or Password is wrong! If you do not have an account, register an account.')</script>";
    }
}


?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/css/login.css">
        <link rel="stylesheet" href="/css/employer.css">
    <header>
        <title>Welcome to Mu2WIL</title>
    </header>

    </head>

<body>
    <main>
    <div class="menu">
        <div class="murdoch">
            <a href="#"><img width="250px" src="/img/Murdoch_University_extended_logo.png" alt="logo" class="logo"></a>
        </div>
    </div>

        <div class="loginform">
            <h2>MU2WIL LOGIN</h2>

            <form action="" method="post">
            <label>Email: <input type="email" name="email"></label><br>
            <label>Password: <input type="password" name="password"></label><br>
            <label class="remember"><input type="checkbox" name="remember" id="remember" >Remember Me</label>
            <p><a href="/reset.php" class="forget">Forget Password?</a></p>
            <p class="new">Are you a new employer looking to offer WIL offers? <a href="/register.php">Sign Up</a></p>
            <button name="submit" class="btn">Login</button>
        </form> 
        </div>
    </main>
        <footer>
            <p>Copyright 2022, Team Yuen Yuen</p>
            <a href="#">Contact Us</a>
        </footer>
    </body>
</html>