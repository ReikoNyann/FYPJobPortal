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

    $sql = "SELECT "
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/main/navbar.css">
    <link rel="stylesheet" href="../css/student/viewapplication.css">
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

    
    <div class="applicationsent">
        <h2>Application sent:</h2>
        <table>
            <tr>
                <th>Company Name</th>
                <th>Job Title</th>
                <th>Job Type</th>
                <th>Applied On</th>
                <th>Status</th>
            </tr>
            <?php 
                    $sent = "SELECT job.JobTitle, job.JobType, job.JobType, application.*, company.CompanyName FROM ((job INNER JOIN application on job.JobID = application.JobID) INNER JOIN company on job.CompanyID = company.CompanyID) WHERE application.StudentID = '$uid'";
                    $sentlist = mysqli_query($conn, $sent);
                    if($sentlist){
                        while($row = mysqli_fetch_array($sentlist,MYSQLI_ASSOC)){
                            echo "<tr>";
                            echo "<td>".$row['CompanyName']."</td>";
                            echo "<td>".$row['JobTitle']."</td>";
                            echo "<td>".$row['JobType']."</td>";
                            echo "<td>".$row['ApplyDate']."</td>";
                            echo "<td>".$row['ApplyStatus']."</td>";
                            echo "<td>";
                            echo '<form action="viewjob.php?id=">';
                            echo '<input type="hidden" name="view" value="'.$row['JobID'].'">';
                            echo '<input type="submit" value="VIEW JOB" >';
                            echo "</form></td>";
                            echo "</tr>";
                        }
                    }else{
                        echo 'You have no applied for any job yet.';
                    }
                
                ?>
        </table>
        </form>
    </div>

    <footer>
        <p>Copyright 2022, Team Yuen Yuen</p>
    </footer>

</body>

</html>