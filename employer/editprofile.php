<?php
    include'../config.php';
    session_start();
    if

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/employer_edit.css" type="text/css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <header>
        <title>Employer edit profile Page</title>
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
                <a href="editprofile.php">Edit Profile</a>
                <a href="addNewJob.php">Add Job Offer</a>
                <a href="../logout.php">Logout</a>
            </div>
        </div>
    </div>

    <div class="imgArea">
        <h2>Employer Profile</h2>
        <input id="upload-input" type="file" accept="image/gif, image/jpg, image/png" onchange="showImg(this)" multiple />
            <div style="text-align: top">
                <label>Upload：</label>
                <img class="upload" src="img/uploadBtn.jpg" />
            </div>
    </div>

    <div id="imgContainer"></div>

    <div class="EmployerEditForm">
        <form action="" method="post">
            <h2>Enter profile:</h2>
            <textarea></textarea>
            <h3>Company History</h3>
            <textarea></textarea>
            <h3>Company Achievements</h3>
            <textarea></textarea>
            <h3>Company Vision</h3>
            <textarea></textarea>
            <h3>Company Goals</h3>
            <textarea></textarea>
            <button class="btn">Submit</button>
        </form>      
    </div>

    <footer>
        <p>Copyright 2022, Team Yuen Yuen</p>
        <a href="../contact.php">Contact Us</a>
    </footer>

</body>
<script type="text/javascript">
    function showImg(obj) {
        var files = obj.files
        getImgsByFileReader(document.getElementById("imgContainer"), files)
    }

    function getImgsByUrl(files) {
        var elements = ''
        for (var i = 0; i < files.length; i++) {
            var url = window.URL.createObjectURL(files[i])
            elements += "<img src='" + url + "' style='width: 40px; height: 40px; vertical-align: middle; margin-right: 5px;' />"
        }
        return elements
    }
    // use fileReader to upload file
    function getImgsByFileReader(el, files) {
        for (var i = 0; i < files.length; i++) {
            let img = document.createElement('img')
            img.setAttribute('style', 'width: 40px; height: 40px; vertical-align: middle; margin-right: 5px;')
            el.appendChild(img)
            var reader = new FileReader()
            reader.onload = function (e) {
                img.src = e.target.result
            }
            reader.readAsDataURL(files[i])
        }
    }
</script>

</html>