<?php 
    include'../config.php';
    session_start();
    error_reporting(0);

    if(isset($_SESSION['email'])){
        header("Location: studentdash.php");
    }

    if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM student WHERE StudentEmail ='$email' AND StudentPassword = '$password'";
    $result = mysqli_query($conn, $sql);
    if($result-> num_rows > 0){
        echo "<script>alert('Please wait for 5 secs')</script>";
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: studentdash.php");
    } else {
        echo "<script>alert('Email or Password is wrong!')</script>";
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/css/login.css">
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
            <p><a href="/reset.php">Forget Password?</a></p>
            <label><input type="checkbox" name="remember" id="remember">Remember Me</label>
            <button name="submit" class="btn">Login</button>
        </form> 
        </div>
    </main>
        <footer>
            <p>Copyright 2022, Team Yuen Yuen</p>
        </footer>
    </body>
</html>