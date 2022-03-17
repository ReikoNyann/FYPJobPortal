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
    <link rel="stylesheet" href="/css/student/studentprofile.css">
    <header>
        <title>Job Opportunities</title>
    </header>
</head>

<body>
    <div class="logo">
  
    <a href="#"><img width="250px" src="../img/Murdoch_University_extended_logo.png" alt="logo"></a>
    </div>
    <div class="navbar">
        <a href="job.php">Job Opportunities</a>
        <a href="../contact.php">Contact Us</a>
        <div class="dropdown">
            <button class="droplist"><?php echo '<span style="font-size:15px; font-family:Segoe UI; font-weight:bold;">' . $row['StudentName'] . '</span>'; ?>
                <i class="togglelist"></i>
            </button>
            <div class="contentlist">
                <a href="profile.php">View Profile</a>
                <a href="application.php">View Applications</a>
                <a href="../logout.php">Logout</a>
            </div>
        </div>
    </div>

        <br>

        <div class="jobcontent">
            <form action="" method="post">
                <h2>Search jobs that you are interested in</h2><br>
                 <input type="text" placeholder="Search" />
                <button>Search</button>
            </form>
        </div>
    </main>

    <footer>
        <p>Copyright 2022, Team Yuen Yuen</p>
    </footer>
</body>

</html>