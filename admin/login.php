<?php 
    include'../config.php';
    session_start();
    error_reporting(0);

    if(isset($_SESSION['username'])){
        header("Location: studentdash.php");
    }

    if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email ='$email' AND password = '$password'";
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
        <div class="navbar">
            <nav>
                <ul>
                    <li><a href="#"><img src="/img/Murdoch_University_extended_logo.png" alt="logo" class="logo"></a></li>
                </ul>
            </nav>
        </div>

        <div class="loginform">
            <h2>MU2WIL LOGIN</h2>
            <form action="" method="post">
            <label>Email: <input type="email" name="email"></label><br>
            <label>Password: <input type="password" name="password"></label><br>
            <input type="checkbox" name="remember" id="remember">
            <label for="remember-me">Keep me signed in</label>
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