<?php 

include "header.view.php";
include "../autoload.php";
$profileInfo = new ProfileinfoView();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Profile</title>
    <link  rel="stylesheet" href="style/profilestyle.css"/>
</head>
<body>
    <h1>'</h1>
    <h1>'</h1>
    <h1>'</h1>
    <div id="content-container">
        <div class="data-container">
            <h3>Profile</h3>
            <h2><?php echo $_SESSION['useruid']; ?></h2>
        </div>
        <div class="data-container">
            <h3>UserID</h3>
            <h3><?php $profileInfo->fetchTitle($_SESSION['userid']); ?></h3>
        </div>
        <div class="data-container">
            <h3>About</h3>
            <h5><?php $profileInfo->fetchAbout($_SESSION['userid']);?></h5>
        </div>
        <div class="data-container">
            <h3>BIO</h3>
            <p><?php $profileInfo->fetchText($_SESSION['userid']);?></p>
        </div>
        <div class="button-container">
            <a href="./profilesettings.view.php" class="button">Edit</a>
            <a href="home.view.php" class="button">Home</a>
        </div>
    </div>
    <h1>.</h1>
</body>
</html>
