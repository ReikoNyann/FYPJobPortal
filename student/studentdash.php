<?php
    include '../config.php';
    session_start();
    if(isset($_SESSION['uid']) && !empty($_SESSION['uid'])){
        //echo $_SESSION['uid']; //check userid captured
        //declare login userid 
        $uid = $_SESSION['uid'];
        //get data from table
        $sql = "SELECT * FROM student WHERE StudentID = $uid";
        //connect DB and sql query
        $result = mysqli_query($conn,$sql);
        //fetch results 
        $row = mysqli_fetch_assoc($result);
    } else{
        echo 'Failed connecting to database';
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../css/navbar.css">
        <link rel="stylesheet" href="../css/studentdash.css">
    <header>
        <title>Mu2WIL Student Dashboard Page</title>
    </header>
    </head>
<body>
    <main>
        <div class="logo">
            <a href="../index.php"><img width="250px" src="../img/Murdoch_University_extended_logo.png" alt="logo"></a>
        </div>
        <div class="navbar">
            <a href="../jobopportunities.php">Job Opportunities</a>
            <a href="../contact.php">Contact Us</a>
            <div class="dropdown">
                <button class="droplist"><?php echo $row['StudentName']; ?>
                    <i class="togglelist"></i>
                </button>
                <div class="contentlist">
                    <a href="profile.php">View Profile</a>
                    <a href="application.php">View Applications</a>
                    <a href="../logout.php">Logout</a>
                </div>
            </div>
        </div>

        <h2>Welcome, <?php echo $row["StudentName"] ?></h2><br>
        
    </main>
    <footer>
        <p>Copyright 2022, Team Yuen Yuen</p>
        <a href="../contact.php">Contact Us</a>
    </footer>
    </body>
</html>