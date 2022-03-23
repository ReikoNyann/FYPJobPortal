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

    if (isset($_POST['submit'])){
        $jid = $_POST['JobID'];
    }



?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="/css/main/navbar.css">
    <link rel="stylesheet" href="/css/student/job.css">
    <header>
        <title>Job Opportunities</title>
    </header>
</head>

<body>
    <div class="logo">
  
    <a href="/student/studentdash.php"><img width="250px" src="../img/Murdoch_University_extended_logo.png" alt="logo"></a>
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

        <br>

        <div class="jobcontent">
            <div class="searchjobs">
                <h2>Search Based on Job Industry:</h2>
                <form method="post" action="">
                <select id="IndustryID" name="IndustryID" >
                <option value="" disabled selected hidden>Select Industry from this list...</option>
                <option value="1">Agriculture; plantations;other rural sectors</option>
						<option value="2">Basic Metal Production</option>						
						<option value="3">Chemical industries</option>
						<option value="4">Commerce</option>
						<option value="5">Construction</option>
						<option value="6">Education</option>
						<option value="7">Financial services; professional services</option>
						<option value="8">Food; drink; tobacco</option>
						<option value="9">Forestry; wood; pulp and paper</option>
						<option value="10">Health services</option>
						<option value="11">Hotels; tourism; catering</option>
						<option value="12">Mining (coal; other mining)</option>
						<option value="13">Mechanical and electrical engineering</option>
						<option value="14">Media; culture; graphical</option>
						<option value="15">Oil and gas production; oil refining</option>
						<option value="16">Postal and telecommunications services</option>
						<option value="17">Public service</option>
						<option value="18">Shipping; ports; fisheries; inland waterways</option>
						<option value="19">Textiles; clothing; leather; footwear</option>
						<option value="20">Transport (including civil aviation; railways; roa...</option>
						<option value="21">Transport equipment manufacturing</option>
						<option value="22">Utilities (water; gas; electricity)</option>
                </select>
                <button class="filter" name="filter">Search</button>
				<button class="clear" name="reset">Reset</button>    
            </form>
                
            </div>
            <div class="display">
                <div class="filterlist">
                    <h3>List of Avaliable Jobs:</h3>
                    <div class="avaliable">
                    <table>
                    <?php 
                        if(isset($_POST['filter'])){
                            $industryID = $_POST['IndustryID'];
                            $industry = "SELECT * FROM job WHERE IndustryID = $industryID";
                            $search = mysqli_query($conn, $industry);
                            while($row = mysqli_fetch_array($search,MYSQLI_ASSOC)){
                                $jid = $row['JobID'];
                                echo '<tr><td>';
                                echo "<b>".$row['JobTitle']."</b><br>";
                                echo $row['JobType']."<br>";
                                echo "Job Posted on: ".$row['JobPostDate']."<br>";
                                echo "Close Date: ".$row['JobCloseDate']."<br>";
                                echo '<form action="viewjob.php?id=">';
                                echo '<input type="hidden" name="view" value="'.$row['JobID'].'">';
                                echo '<input type="submit" value="VIEW JOB" >';
                                echo '</form></td></tr>';
                            }
                        }else{
                            $industry = "SELECT * FROM job LIMIT 10";
                            $search = mysqli_query($conn, $industry);
                            while($row = mysqli_fetch_array($search,MYSQLI_ASSOC)){
                                echo '<tr><td>';
                                echo "<b>".$row['JobTitle']."</b><br>";
                                echo $row['JobType']."<br>";
                                echo "Job Posted on: ".$row['JobPostDate']."<br>";
                                echo "Close Date: ".$row['JobCloseDate']."<br>";
                                echo '<form action="viewjob.php?id=">';
                                echo '<input type="hidden" name="view" value="'.$row['JobID'].'">';
                                echo '<input type="submit" value="VIEW JOB" >';
                                echo '</form></td></tr>';
                                
                            }   
                        }
                    ?>
                    </table>
                    <div class="pagination">
                        
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <p>Copyright 2022, Team Yuen Yuen</p>
    </footer>
</body>
</html>