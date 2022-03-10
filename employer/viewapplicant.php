<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="/css/employerdash.css">
    <link rel="stylesheet" href="css/signup.css">
    <header>
        <title>Mu2WIL View Application Page</title>
    </header>

</head>

<body>
    <main>
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

        <div class="applicationform">
            <h2>Application Details</h2>
            <form action="" method="post">
                <button name="submit" class="btn">View Application</button>
            </form>
        </div>
    </main>
    <footer>
        <p>Copyright 2022, Team Yuen Yuen</p>
        <a href="contractus.html">Contact Us</a>
    </footer>
</body>

</html>