<?php
    include '../config.php';
    session_start();
    if(isset($_SESSION['uid']) && !empty($_SESSION['uid'])){
        //echo $_SESSION['uid']; //check userid captured
        //declare login userid 
        $uid = $_SESSION['uid'];
        //get data from table
        $sql = "SELECT * FROM admin WHERE AdminID = $uid";
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
        <link rel="stylesheet" href="../css/main/navbar.css">
        <link rel="stylesheet" href="../css/admin/sadashboard.css">
    <header>
        <title>Mu2WIL System Admin Dashboard Page</title>
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
                <button class="droplist"><b><?php echo $row['AdminName']; ?></b>
                    <i class="togglelist"></i>
                </button>
                <div class="contentlist">
                    <a href="addaccount.php">Add New Accounts</a>
                    <a href="enquiries.php">View Enquiries</a>
                    <a href="batchupdate.php">Batch Create</a>
                    <a href="../logout.php">Logout</a>
                </div>
            </div>
        </div>

        <div class="dashboard">
        <h2>Welcome, System Admin <?php echo $row["AdminName"] ?></h2><br>
        

        <div class="top">
        <div class="applications">
            <p>Registrations Recieved:</p>
            <img src="../img/apply.png">
            <?php 
                $eapplication = "SELECT count(*) as registration FROM company WHERE ApprovalStatus='Pending'";
                $application = mysqli_query($conn, $eapplication);
                $count = mysqli_fetch_assoc($application);
                echo $count['registration']; 
                echo ' New Registrations';
            ?><br>
            <button class="btn" name="viewApplication"><a href="approvallist.php">VIEW REGISTRATION LIST</a></button>
        </div>

        <div class="enquiries">
            <p>No. of enquiries received:</p>
            <img src="../img/enquiry.png">
            <?php 
                $eapplication = "SELECT count(*) as application FROM application";
                $application = mysqli_query($conn, $eapplication);
                $count = mysqli_fetch_assoc($application);
                echo $count['application']; 
                echo ' New Enquires';
            ?><br>
            <button class="btn" name="viewAccount"><a href="enquiries.php">VIEW ENQUIRIES</a></button>
        </div>
        </div>
        </div>

        <div class="bottom">
            <h3>Recent jobs posted</h3>
            <div class = "jobs">
                
                <table>
                <tr>
                    <th>Job Title</th>
                    <th>Job Type</th>
                    <th>Posted Date</th>
                </tr>
                <?php 
                    $jobs = "SELECT * FROM job ORDER BY JobPostDate DESC LIMIT 5";
                    $joblist = mysqli_query($conn, $jobs);
                    if($joblist){
                        while($row = mysqli_fetch_array($joblist,MYSQLI_ASSOC)){
                            echo "<tr>";
                            echo "<td>".$row['JobTitle']."</td>";
                            echo "<td>".$row['JobType']."</td>";
                            echo "<td>".$row['JobPostDate']."</td>";
                            echo "</tr>";
                        }
                    }else{
                        echo 'No recent jobs are posted';
                    }
                
                ?>
                </table>
            </div>
        </div>
        
        
    </main>

    <footer>
        <p>Copyright 2022, Team Yuen Yuen</p>
    </footer>
    </body>
</html>


