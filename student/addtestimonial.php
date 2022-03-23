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

    if(isset($_POST['submit'])){
        $target = '../uploads/testimonials/';
        $target = $target.basename($_FILES['img']['name']);
        $pic = ($_FILES['img']['name']);
        $position = $_POST['position'];
        $comment = $_POST['comment'];
        $companyid = $_POST['companyid'];
        $studentid = $_POST['studentid'];
        $date = date('Y-m-d');
        if(move_uploaded_file($_FILES['img']['tmp_name'], $target)){
            $inserttest = "INSERT INTO testimonial ( TestimonialTitle, TestimonialPhoto, TestimonialComment, CompanyID, StudentID) VALUES ('$position', '$pic', '$comment', '$companyid', '$studentid') ";
            $testimonial = mysqli_query($conn, $inserttest);
            echo '<script>alert("Testimonial has been sent")
            location="'.$_SERVER['HTTP_REFERER'].'"</script>';
        }else{
            echo '<script>alert("Error sending testimonial");</script>';
        }
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
        <?php 
                $cid = $_REQUEST['testimonial'];
                $cname = "SELECT CompanyName FROM company WHERE CompanyID = $cid";
                $getname = mysqli_query($conn, $cname);
                $row = mysqli_fetch_assoc($getname);
            ?>
        <form action="" method="post" enctype="multipart/form-data">
                <h2>Submission of Testimonial for <?php echo $row['CompanyName'];?></h2>
                <label><b>Enter your Job Position:</b> </label><br>
                <input type="text" name="position" placeholder="Job Position"><br>
                <label><b>Comment:</b> </label><br>
                <textarea name="comment" rows="6" placeholder="Comment"></textarea><br>
                <label><b>Upload an image (optional):</b> </label><br>
                <input type="file" name="img"><br>
                <input type ="hidden" name="studentid" value="<?php echo $uid; ?>">
                <input type="hidden" name="companyid" value="<?php echo $cid; ?>">
                <input type="submit" name="submit" value="Submit Testimonial">
            </form>
        </div>
    </main>
        <footer>
            <p>Copyright 2022, Team Yuen Yuen</p>
        </footer>
    </body>
</html>
