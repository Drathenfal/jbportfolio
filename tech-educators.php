<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jake Bignell Portfolio</title>
    <link rel="stylesheet" href="css/application.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b1ba3c938d.js" crossorigin="anonymous"></script>
</head>


<body>
<?php
$filename = 'php/preheader.php';
if (file_exists($filename)) {
    include $filename;
} else {
    // Handle error (e.g., log or display an error message)
    echo "Error: '$filename' could not be found please hang tight site may be undergoing maintenance";
}
?>
<header class="container">
    <div class="banner" id="banner-scsscheme">
        <div class="hamburger-menu">
            <div class="ham-bar bar-top"></div>
            <div class="ham-bar bar-mid"></div>
            <div class="ham-bar bar-bottom"></div>
        </div>
        <h1><span class="text-container">SCS Scheme</span></h1>
        <a href="#introduction-scs"><em>To Introduction to SCS</em><small><i class="fa-solid fa-angle-down" style="color: #ffffff;"></i></small></a>
    </div>
</header>


<main id="introduction-scs">
    <div  class="light-bg">
    <div class="container">
        <h2>Introduction to the Scion Coalition Scheme</h2>
            <p>The Scion Coalition Scheme is an intensive, specially tailored training program run by Netmatters in order to give willing candidates the opportunity to enter the industry as web developers. 
                Under the supervision of senior web developers, scions generally aim to complete training within six to nine months. 
                The course is intensive and therefore the level of learning achieved is extensive in a short space of time.</p>
    </div>
    </div>
    <div class="container">
        <h2>Treehouse</h2>
            <p>Treehouse is an online learning community, featuring videos covering a number of topics from basic HTML to C# programming, 
                iOS development, data analysis, and more. By completing courses users can earn points, 
                allowing them to track their progress and see how much they've covered in certain areas.</p>
                <bold>Total Score: </bold>
                <a href="https://teamtreehouse.com/profiles/jakebignell2" target="_blank"><p>My Treehouse Profile</p></a>
    </div>
    <div  class="light-bg">
    <div class="container">
    <h2>About Netmatters</h2>
        <ul>
            <li>Established in 2008</li>
            <li>Norfolk's leading technology company</li>
            <li>Winner of the Princess Royal Training Award</li>
            <li>Winner of EDP Skills of Tomorrow Award</li>
            <li>80+ staff, 2 locations across Norfolk</li>
            <li>Digital Marketing, Website & Software development & IT Support</li>
            <li>Broad spectrum of clients, working nationwide</li>
            <li>Operate to strict company values</li>
        </ul>
    </div>
    </div>
    
</main>
<?php
$filename = 'php/footer.php';
if (file_exists($filename)) {
    include $filename;
} else {
    // Handle error (e.g., log or display an error message)
    echo "Error: '$filename' could not be found please hang tight site may be undergoing maintenance";
}
?>
    </div>
    <script src="javascript/hamburger.js"></script>
    <script src="javascript/banner-animation-scs.js"></script>
</body>
</html>