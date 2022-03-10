<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/studentprofile.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
        <input id="upload-input" type="file" accept="image/gif, image/jpg, image/png" onchange="showImg(this)" multiple />
            <div style="text-align: top">
                <label>Upload：</label>
            </div>
        <button>Save Edit</button></a> 
    </div>

    <div class="StudentProfileForm">
        <form action="" method="post">
            <input type="text" name="description" placeholder="Profile Description" /><br>
            <label>Contact Details</label>
            <input type="text" name="contact" placeholder="Contact Number" /><br>
            <label>Education</label><br>
            <input type="text" name="education" placeholder="Education" /><br>
            <label>Work experience</label><br>
            <input type="text" name="Work experience" placeholder="Work experience" /><br>
            <label>Skills/Knowledge</label><br>
            <input type="text" name="Skills/Knowledge" placeholder="Skills/Knowledge" /><br>
            <label>Resume</label><br>
            <input type="file" name="fileToUpload" id="fileToUpload"><br>
            <button type="submit" class="btn">Upload</button><br>
            <button type="submit" class="btn">Submit</button>
        </form>      
    </div>

    <footer>
        <p>Copyright 2022, Team Yuen Yuen</p>
        <a href="contact.php">Contact Us</a>
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