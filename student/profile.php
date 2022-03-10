<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/studentprofile.css">
    <header>
        <title>Student Profile Page</title>
    </header>
</head>

<body>
    <div class="navbar">
        <nav>
            <ul>
                <li><a href="profile.php"><img src="../img/Murdoch_University_extended_logo.png" alt="logo" class="logo"></a>
                </li>
            </ul>
        </nav>
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