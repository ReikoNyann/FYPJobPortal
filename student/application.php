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
        $target = '../uploads/student/resume/';
        $target = $target.basename($_FILES['file']['name']);
        $studentid = $_POST['studentid'];
        $jobid = $_POST['jobid'];
        $resume = ($_FILES['file']['name']);
        $date = date('Y-m-d');
        if(move_uploaded_file($_FILES['file']['tmp_name'], $target)){
            $insertdata = "INSERT INTO application ( ApplyDate, ApplyStatus, AttachResume, JobID, StudentID) VALUES ('$date','Pending','$resume','$jobid', '$studentid') ";
            $applicationdata = mysqli_query($conn, $insertdata);
            echo '<script>alert("Resume have been sent. Please wait to be contacted by the employer.")
            location="viewapplication.php"</script>';
        }else{
            echo '<script>alert("Error sending resume");</script>';
        }
    }
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/main/navbar.css">
    <link rel="stylesheet" href="../css/student/apply.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <header>
        <title>Student View Application Status Page</title>
    </header>
</head>

<body>
    <div class="logo">
        <a href="../index.php"><img width="250px" src="../img/Murdoch_University_extended_logo.png" alt="logo"></a>
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
                <a href="../logout.php">Logout</a>
            </div>
        </div>
    </div>

    
    <div class="applyform">
        <form action="" method="post" enctype="multipart/form-data">
        <h2>Application Form</h2>
        <label><b>Upload Resume</b></label><br>
        <input type="file" name="file"><br>
        <label><b>Apply Date:</b></label><br>
        <input type="date" name="adate" value="<?php echo date('Y-m-d'); ?>" disabled><br><br>
        <input type="hidden" name="studentid" value="<?php echo $row['StudentID']; ?>">
        <input type="hidden" name="jobid" value="<?php echo $_REQUEST['apply']; ?>">
        <input type="submit" name="submit" value="Submit Resume">
        </form>
    </div>

    <footer>
        <p>Copyright 2022, Team Yuen Yuen</p>
    </footer>

</body>

</html>