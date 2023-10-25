<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    # grabing the data
    $aid = $_POST['aid'];
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

    # including the file using autoloader
    require "../autoload.php";
    
    // require "../classes/Signup.classes.php";
    $signup = new AdminLoginContr($aid, $uid, $pwd);
    
    #running error handlers
    $signup->loginUser();

    
    //if admin sign in 

    # this link will redirect to the home.php
    header("location: ../views/adminpanel.view.php?error=none");
}