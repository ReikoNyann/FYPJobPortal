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
        $type = $_POST['enquirytype'];
        $detail = $_POST['details'];
        $date = date('Y-m-d');
        $sendenquiry = "INSERT INTO enquiry (CaseType, CaseDescription, CasePostDate, CaseStatus, StudentID) VALUES ('$type','$detail','$date', 'Pending', '$uid')";
        $insertsql = mysqli_query($conn,$sendenquiry);
        if($insertsql){
            echo'<script>alert("Your enquiry is sent!")</script>';
        }else{
            echo'<script>alert("An error has occurred")</script>';
        }
    }

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="/css/main/navbar.css">
    <link rel="stylesheet" href="/css/main/contact.css".
    <header>
        <title>Mu2WIL Contact Us Page</title>
    </header>

</head>

<body>
    <main>
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

        

        <div class="contactusform">
        <h2>CONTACT US</h2><br>
        <h3>Enquiries will take 1-3 working days to be answered. Kindly select the right category for the
            enquiry that you are looking to make. Responds will be email linked to the account.
        </h3>
            <form action="" method="post">
                <h3>ENQUIRIES FORM</h3>
                <label><b>What are you enquiring about?</b></label><br>
                <select name="enquirytype" id="enquirytype">
                    <option value="">--Select type of enquiry--</option>
                    <option value="General">General</option>
                    <option value="Technical">Technical</option>
                </select><br><br>
                <label><b>Type in your enquiries here:</b></label><br>
                <textarea name="details" rows ="6" ></textarea><br>
                <input type="hidden" name="date" value="<?php echo date('Y-m-d'); ?>" disabled>
                <input type="hidden" name="studentid" value="<?php echo $row['StudentID']; ?>"><br>
                <input type="submit" name="submit" value="Submit Enquiries">
            </form>
        </div>
    </main>
    <footer>
        <p>Copyright 2022, Team Yuen Yuen</p>
    </footer>
</body>

</html>