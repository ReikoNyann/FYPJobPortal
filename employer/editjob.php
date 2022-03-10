<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/addNewJob.css">
    <header>
        <title>Mu2WIL Edit Job Offer Page</title>
    </header>

</head>

<body>
    <main>
        <div class="logo">
            <a href="../login.php"><img width="250px" src="../img/Murdoch_University_extended_logo.png" alt="logo"></a>
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
                    <a href="addNewJob.php">View Applications</a>
                    <a href="../logout.php">Logout</a>
                </div>
            </div>
        </div>

        <div class="edit_job_form">
            <h1>Add New Job Offer</h1>
            <form action="" method="post">
                <input type="text" name="title" placeholder="Enter Job Title"><br>
                <input type="text" name="publisher" placeholder="Enter Publisher"><br>
                <input type="text" name="location" placeholder="Enter Job Location"><br>
                <input type="text" name="post_date" placeholder="Post Date"><br>
                <input type="text" name="close_date" placeholder="Close Date"><br>
                <input type="text" name="type" placeholder="Enter Job Type"><br>
                <input type="text" name="salary_range" placeholder="Salary Range"><br>
                <input type="text" name="roles_and_responsibility" placeholder="Enter Roles and Responsibility"><br>
                <input type="text" name="eligible_criteria" placeholder="Enter Eligible Criteria"><br>
                <button name="submit" class="btn">Edit offer</button>
            </form>
        </div>
    </main>
    <footer>
        <p>Copyright 2022, Team Yuen Yuen</p>
        <a href="../contact.php">Contact Us</a>
    </footer>
</body>

</html>