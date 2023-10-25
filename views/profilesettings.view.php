<?php 
session_start();
include "../autoload.php";
$profileinfo = new ProfileinfoView();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Settings</title>
    <link  rel="stylesheet" href="style/profilestyle.css"/>
    <link  rel="stylesheet" href="style/profilesetting.css"/>
    
</head>
<body>
    <h1>Profile Settings</h1>
    <form action="../includes/profileinfo.inc.php" method="post">
        <input type="text" name="introtitle" placeholder="Profile Title" value="<?php $profileinfo->fetchTitle($_SESSION['userid']); ?>">
        <textarea name="about" rows="6" placeholder="About You"><?php $profileinfo->fetchAbout($_SESSION['userid']);?></textarea>
        <textarea name="introtext" rows="6" placeholder="Bio"><?php $profileinfo->fetchText($_SESSION['userid']);?></textarea>
        <div class="button-container">
            <button type="submit" name='submit'>Save</button>
            <a href="profile.view.php" class="button">Cancel</a>
        </div>
    </form>
</body>
</html>
