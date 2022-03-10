<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/studentprofile.css">
    <header>
        <title>Student Profile Page</title>
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

    <div class="imgArea">
        <h2>Student Profile</h2>
        <a href="../student/editprofile.php"><button>Edit profile</button></a> 
    </div>

    <div class="StudentProfileForm">
        <form action="" method="post">
            <h3>Education</h3><br>
            <input type="text" name="education" placeholder="Education" /><br>
            <h3>Work experience</h3><br>
            <input type="text" name="Work experience" placeholder="Work experience" /><br>
            <h3>Skills/Knowledge</h3><br>
            <input type="text" name="Skills/Knowledge" placeholder="Skills/Knowledge" /><br>
        </form>      
    </div>

    <footer>
        <p>Copyright 2022, Team Yuen Yuen</p>
        <a href="../contact.php">Contact Us</a>
    </footer>

</body>

</html>