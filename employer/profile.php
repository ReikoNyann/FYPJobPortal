<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="/css/employerdash.css">
    <link rel="stylesheet" href="css/employer_edit.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <header>
        <title>Employer Profile Page</title>
    </header>
</head>

<body>
    <div class="logo">
            <a href="/student/studentdash.php"><img width="250px" src="/img/Murdoch_University_extended_logo.png" alt="logo"></a>
        </div>
        <div class="navbar">
            <a href="/jobopportunities.php">Job Opportunities</a>
            <a href="/contact.php">Contact Us</a>
            <div class="dropdown">
                <button class="droplist">USER
                    <i class="togglelist"></i>
                </button>
                <div class="contentlist">
                    <a href="/employer/profile.php">View Profile</a>
                    <a href="/employer/viewapplicant.php">View Applicants</a>
                    <a href="/logout.php">Logout</a>
                </div>
            </div>
        </div>
    <div class="imgArea">
        <h2>Employer Profile</h2>
        <button type="button" class="btn">Edit Profile</button>
        
    </div>

    <div class="EmployerEditForm">
        <form action="" method="post">
            <h3>Company History</h3><br>
            <h3>Company Achievements</h3><br>
            <h3>Company Vision</h3><br>
            <h3>Company Goals</h3><br>
        </form>      
    </div>

    <footer>
        <p>Copyright 2022, Team Yuen Yuen</p>
        <a href="contractus.html">Contact Us</a>
    </footer>

</body>

</html>