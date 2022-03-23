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


    $cid = $_GET['testimonial'];
    $testimonial = "SELECT testimonial.*, company.CompanyName, student.StudentName FROM ((testimonial INNER JOIN company ON testimonial.CompanyID = company.CompanyID) INNER JOIN student on student.StudentID = testimonial.StudentID) WHERE testimonial.CompanyID = '$cid' ";
    $testlist = mysqli_query($conn, $testimonial);
    $row = mysqli_fetch_assoc($testlist);


?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="/css/main/navbar.css">
    <link rel="stylesheet" href="/css/student/testimonial.css">
    <header>
        <title><?php echo $row['CompanyName']?>'s Testimonial Page</title>
    </header>

</head>

<body>
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

        <div class="testimoniallist">
            
            <h2><?php echo $row['CompanyName']; ?>'s Testimonial Page</h2>
            <div class="tleft">
                <?php 
                    $testlist = mysqli_query($conn, $testimonial);
                    while($row = mysqli_fetch_array($testlist,MYSQLI_ASSOC)){
                    if($row['TestimonialPhoto'] == NULL){
                        echo "no photo";
                    }else{
                        echo "yes photo";
                    }
                        echo "<h4>".$row['TestimonialTitle']."</h4>";
                        echo "<h5>".$row['StudentName']."</h5>";
                        echo "<p>".$row['TestimonialComment']."</p>";
                    }
                ?>
            </div>
            <div class="tright">
            
            <?php 
                echo '<form action="addtestimonial.php?id=">';
                echo '<input type="hidden" name="testimonial" value="'.$cid.'">';
                echo '<input type="submit" class="add" value="Submit Your Testimonial Here">';
                echo '</form>';
            ?>
            
            </div>
        </div>
    <footer>
        <p>Copyright 2022, Team Yuen Yuen</p>
    </footer>
</body>

</html>