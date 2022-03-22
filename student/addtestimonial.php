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
        <link rel="stylesheet" href="/css/student/testimonial.css">
    <header>
        <title>Submission of Testimonial</title>
    </header>
    </head>
<body>
    <main>
        <div class="logo">
            <a href="/student/studentdash.php"><img width="250px" src="/img/Murdoch_University_extended_logo.png" alt="logo"></a>
        </div>
        <div class="navbar">
            <a href="job.php">Job Opportunities</a>
            <a href="contact.php">Contact Us</a>
            <div class="dropdown">
                <button class="droplist"><?php echo '<span style="font-size:15px; font-family:Segoe UI; font-weight:bold;">' . $row['StudentName'] . '</span>'; ?>
                    <i class="togglelist"></i>
                </button>
                <div class="contentlist">
                    <a href="profile.php">View Profile</a>
                    <a href="viewapplication.php">View Applications</a>
                    <a href="logout.php">Logout</a>
                </div>
            </div>
        </div>
        
        <div class="addform">
        <form action="" method="post">
            <?php 
                $cid = $_REQUEST['testimonial'];
                $cname = "SELECT CompanyName FROM company WHERE CompanyID = $cid";
                $getname = mysqli_query($conn, $cname);
                $row = mysqli_fetch_assoc($getname);
            ?>
                <h2>Submission of Testimonial for <?php echo $row['CompanyName'];?></h2>
                <label>Enter your Job Position: </label><br>
                <input type="text" name="position" placeholder="Job Position"><br>
                <label>Comment: </label><br>
                <input type="text" name="comment" placeholder="Comment"><br>
                <label>Upload an image (optional): </label><br>
                <input type="file" name="file"><br>
                <button name="submit" name="submit">Submit</button>
            </form>
        </div>
    </main>
        <footer>
            <p>Copyright 2022, Team Yuen Yuen</p>
        </footer>
    </body>
</html>
