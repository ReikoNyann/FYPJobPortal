<?php
    include '../config.php';
    session_start();

    if (isset($_SESSION['uid']) && !empty($_SESSION['uid'])){
        //declare login userID
        $uid = $_SESSION['uid'];
        //get data from table
        $sql = "SELECT * FROM student WHERE StudentID = $uid";
        //connect DB and sql query
        $result = mysqli_query($conn, $sql);
        //fetch results
        $row = mysqli_fetch_assoc($result);
    } else {
        echo 'Failed connecting to database';
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/css/main/navbar.css">
        <link rel="stylesheet" href="/css/student/studentdash.css">
    <header>
        <title>Welcome to Mu2WIL</title>
    </header>
    </head>
<body>
    <main>
        <div class="logo">
            <a href="/student/studentdash.php"><img width="250px" src="/img/Murdoch_University_extended_logo.png" alt="logo"></a>
        </div>
        <div class="navbar">
            <a href="/jobopportunities.php">Job Opportunities</a>
            <a href="/contact.php">Contact Us</a>
            <div class="dropdown">
                <button class="droplist"><?php echo '<span style="font-size:15px; font-family:Segoe UI; font-weight:bold;">' . $row['StudentName'] . '</span>'; ?>
                    <i class="togglelist"></i>
                </button>
                <div class="contentlist">
                    <a href="/student/profile.php">View Profile</a>
                    <a href="/student//application.php">View Applications</a>
                    <a href="/logout.php">Logout</a>
                </div>
            </div>
        </div>
        
        <div class="dash">
            Insert dashboard stuff here, things needed: <br>
            1) Welcome user<br>
            2) recent jobs posted
        </div>
    </main>
        <footer>
            <p>Copyright 2022, Team Yuen Yuen</p>
        </footer>
    </body>
</html>