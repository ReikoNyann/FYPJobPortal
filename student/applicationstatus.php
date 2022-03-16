<?php
    include '../config.php';
    session_start();
    error_reporting(0);
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/studentprofile.css">
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
        <a href="../jobopportunities.php">Job Opportunities</a>
        <a href="../contact.php">Contact Us</a>
        <div class="dropdown">
            <button class="droplist">USER
                <i class="togglelist"></i>
            </button>
            <div class="contentlist">
                <a href="profile.php">View Profile</a>
                <a href="application.php">View Applications</a>
                <a href="../logout.php">Logout</a>
            </div>
        </div>
    </div>

    <h1>Application Sent</h1>

    <?php
$status=$_GET['status'];
$userid=$_SESSION['userid'];
$sql = "SELECT * FROM StudentStatsOnApplicant WHERE UserID = $userid";
$result = mysqli_query($conn, $sql);

if($result == null){
 
    $total = 0;
    $pending =0;
    $accept = 0;
    $reject = 0;

}

if($result-> num_rows > 0){
    $row = mysqli_fetch_assoc($result);
    $total = $row["TotalApplication"];
    $pending = $row["Pending"];
    $accept = $row["Accepted"];
    $reject = $row["Rejected"];

}


$sql = "SELECT * FROM ApplicantDetails_FastResponse WHERE StudentUserID = '$userid' AND ApplyStatus = '$status' ORDER BY ApplicantID";
$result = mysqli_query($conn, $sql);

if($status=='' ){
    $sql = "SELECT * FROM ApplicantDetails_FastResponse WHERE StudentUserID= '$userid' ORDER BY ApplicantID DESC";
$result = mysqli_query($conn, $sql);
}
    
 ;?>
    <!--MAIN START-->


        <a href='applicationstatus.php?status=0'><button onclick='location.href = ''; name=' submit'
                class='submit-button'>
                <?php echo $pending ;?> Pending from Employer</button></a>&nbsp;&nbsp;
        <a href='applicationstatus.php?status=1'><button onclick='location.href = ''; name=' submit'
                class='submit-button'>
                <?php echo $accept ;?> Applicant Accepeted</button></a>&nbsp;&nbsp;
        <a href='applicationstatus.php?status=2'><button onclick='location.href = ''; name=' submit'
                class='submit-button'>
                <?php echo $reject ;?> Applicant Rejected</button></a>&nbsp;&nbsp;
        <br><br>
        <?php 
    if($result-> num_rows > 0){ 
        
        while($row = $result->fetch_assoc()) {
  ;?>

        <table align="center" border="1" cellpadding="1" cellspacing="1" style="width:90%;">
            <tbody>
                <tr>
                    <td style="text-align: center; vertical-align: middle; height: 100px; width: 50%;"><a
                            href="../employer/profile.php?employerid=<?php echo $row["JobPublisher"]?>"><?php echo $row["EmployerName"]?></a><br>
                        <?php echo $row["JobTitle"]?><br><?php echo $row["JobLocation"]?>
                    </td>
                    <td style="text-align: center; vertical-align: middle; height: 100px; width: 30%;">Application
                        Status:<br>
                        <?php echo $row["Status"]?></td>
                    <td style="text-align: center; vertical-align: middle; height: 100px; width: 20%;">Application sent
                        on:<br><?php echo $row["ApplyDate"]?><br><a
                            href='../jobdetails.php?jobid=<?php echo $row["JobID"]?>'><button
                                onclick='location.href = ''; name=' submit' class='submit-button'>View Job</button></a>
                    </td>
                </tr>
            </tbody>
        </table>

        <p>&nbsp;</p>



        <?php } ; } else echo "You did not apply job yet.";?>

    <footer>
        <p>Copyright 2022, Team Yuen Yuen</p>
        <a href="../contact.php">Contact Us</a>
    </footer>

</body>

</html>