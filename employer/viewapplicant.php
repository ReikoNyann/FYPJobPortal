<?php
    include '../config.php';
    session_start();
    if(isset($_SESSION['uid']) && !empty($_SESSION['uid'])){
        //echo $_SESSION['uid']; //check userid captured
        //declare login userid 
        $uid = $_SESSION['uid'];
        //get data from table
        // $sql = "SELECT * FROM application WHERE CompanyID = $uid";
        $sql = "SELECT * FROM ((application INNER JOIN student ON application.StudentID = student.StudentID) INNER JOIN job ON application.JobID = job.JobID)";
        // $sql = "SELECT * FROM application
        //         INNER JOIN job ON application.JobID = job.JobID INNER JOIN company ON job.CompanyID = company.CompanyID WHERE CompanyID = $uid";
//job.JobTitle, job.JobPostDate, job.JobCloseDate, job.RoleResponsibility, job.JobCriteria, job.JobLocation, job.JobSalary, job.JobDuration
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
    <link rel="stylesheet" href="../css/employer/viewapplicant.css">
    <header>
        <title>Mu2WIL View Application Page</title>
    </header>

</head>

<body>
    <main>
        <div class="logo">
            <a href="dashboard.php"><img width="250px" src="../img/Murdoch_University_extended_logo.png" alt="logo"></a>
        </div>
        <div class="navbar">
            <a href="../jobopportunities.php">Job Opportunities</a>
            <a href="../contact.php">Contact Us</a>
            <div class="dropdown">
                <button class="droplist"><?php echo $row['PersonInCharge']; ?>
                    <i class="togglelist"></i>
                </button>
                <div class="contentlist">
                    <a href="profile.php">View Profile</a>
                    <a href="addNewJob.php">Add New Job</a>
                    <a href="viewapplicant.php">View Applicants</a>
                    <a href="../logout.php">Logout</a>
                </div>
            </div>
        </div>

        <!-- <table>
            <tr>
                <th>Apply Date</th>
                <th>Job Type</th>
                <th>Job Title</th>
                <th>Job Location</th>
                <th>Student Name</th>
                <th>Student Contact tNumber</th>
            </tr>
            <tr>
                <td><?php echo $row['ApplyDate']; ?></td>
                <td><?php echo $row['JobType']; ?></td>
                <td><?php echo $row['JobTitle']; ?></td>
                <td><?php echo $row['JobLocation']; ?></td>
                <td><?php echo $row['StudentName']; ?></td>
                <td><?php echo $row['StudentContactNumber']; ?></td>
            </tr>
        </table> -->

        <table>
	        <tr>
		        <th>Apply Date</th>
		        <th>Job Type</th>
		        <th>Job Title</th>
                <th>Job Location</th>
                <th>Student Name</th>
                <th>Student Contact Number</th>
	        </tr>
	        <?php
            $sql = "SELECT * FROM ((application INNER JOIN student ON application.StudentID = student.StudentID) INNER JOIN job ON application.JobID = job.JobID)";
            $r = mysqli_query($conn,$sql);
	        while($row=mysqli_fetch_assoc($r)){
            ?>
	        <tr>
		        <td><?php echo $row["ApplyDate"]; ?></td>
		        <td><?php echo $row["JobType"]; ?></td>
		        <td><?php echo $row["JobTitle"]; ?></td>
                <td><?php echo $row["JobLocation"]; ?></td>
		        <td><?php echo $row["StudentName"]; ?></td>
		        <td><?php echo $row["StudentContactNumber"]; ?></td>
	        </tr>
	        <?php } ?>
        </table>

    </main>
    <footer>
        <p>Copyright 2022, Team Yuen Yuen</p>
        <a href="../contact.php">Contact Us</a>
    </footer>
</body>

</html>