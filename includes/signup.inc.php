<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    # grabing the data
    // # we will grab the data on sing in
    $uid = htmlspecialchars($_POST['uid'], ENT_QUOTES, 'UTF-8');
    $pwd = htmlspecialchars($_POST['pwd'], ENT_QUOTES, 'UTF-8');
    $pwdrepeat= htmlspecialchars($_POST['pwdrepeat'], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');

    # including the file using autoloader
    //  check the autoloader for more which will load the required classes from classes/required classes
    require "../autoload.php";

    // require "../classes/Signup.classes.php";
    $signup = new SingupContr($uid, $pwd, $pwdrepeat, $email);


    #running error handlers
    $signup->singupUser();
    $userId = $signup->fetchUserId($uid);

    # instantiate profileinfoContr class
    $profileinfo  = new ProfileinfoContr($userId, $uid);
    $profileinfo->defaultProfileInfo();

    #going back to front page
    // header("location: ../index.php?error=none");
    header("location: ../views/loginfrom.view.php?error=none");
}