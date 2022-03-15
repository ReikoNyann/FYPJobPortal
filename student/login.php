<?php 
    include '../config.php';
    session_start();
    error_reporting(0);

    // if(isset($_SESSION['username'])){
    //     header("Location: studentdash.php");
    // }
    if(isset($_SESSION['email'])){
        header("Location: studentdash.php");
    }

    if(isset($_POST['submit'])){
        //get email and password
        $email = $_POST['email'];
        $password = $_POST['password'];
        // get data from database
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
        <link rel="stylesheet" href="../css/main.css">
    <header>
        <title>Welcome to Mu2WIL</title>
    </header>

    </head>

    

<body>
    <main>
        <div class="navbar">
            <nav>
                <ul>
                    <li><a href="../index.php"><img src="../img/Murdoch_University_extended_logo.png" alt="logo" class="logo"></a></li>
                </ul>
            </nav>
        </div>

        <div class="loginform">
            <h2>MU2WIL STUDENT LOGIN</h2>
            <form action="" method="post">
                <label>Email: </label>
                <input type="email" name="email"><br>
                <label>Password: </label>
                <input type="password" name="password"><br>
                <p><a href="../resetpassword.php">Forget Password?</a></p>
                <label><input type="checkbox" name="remember" id="remember">Remember Me</label>
                <button name="submit" class="btn">Login</button>
            </form> 
        </div>
    </main>
        <footer>
            <p>Copyright 2022, Team Yuen Yuen</p>
            <a href="../contact.php">Contact Us</a>
        </footer>
    </body>
</html>