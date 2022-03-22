<?php 
    include'../config.php';
    session_start();
    error_reporting(0);

    if(isset($_SESSION['id'])){
        header("Location: dashboard.php");
    }

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE AdminEmail ='$email' AND AdminPassword = '$password'";
    $result = mysqli_query($conn, $sql);
    if($result-> num_rows > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['uid'] = $row['AdminID'];
        header("Location: dashboard.php");
    } else {
        echo "<script>alert('Email or Password is wrong! If you do not have an account, register an account.')</script>";
    }
}


?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../css/admin/salogin.css">
            <header>
                <title>Mu2WIL System Admin Login Page</title>
            </header>
    </head>
<body>
    <main>
    <div class="menu">
        <div class="murdoch">
            <a href="../index.php"><img width="250px" src="/img/Murdoch_University_extended_logo.png" alt="logo" class="logo"></a>
        </div>
    </div>
    <div class="loginform">
            <h2>MU2WIL ADMINISTRATION LOGIN</h2>
            <form action="" method="post">
            <label>Email: <br><input type="email" name="email"></label><br>
            <label>Password: <br><input type="password" name="password"></label><br>
            <label><input type="checkbox" name="remember" id="remember">Remember Me</label>
            <p><a href="/reset.php">Forget Password?</a></p>
            <button name="submit" class="btn">Login</button>
        </form> 
        </div>
    </main>
        <footer>
            <p>Copyright 2022, Team Yuen Yuen</p>
        </footer>
    </body>
</html>