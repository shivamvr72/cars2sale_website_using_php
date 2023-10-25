<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    # grabing the data
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $tuser = $_POST['tuser'];
    // echo $tuser = 'admin';   
    if($tuser == 'admin'){
        header("location: ../views/adminlogin.view.php"); 
        exit();
    }

    # including the file using autoloader
    require "../autoload.php";
    
    // require "../classes/Signup.classes.php";
    $signup = new LoginContr($uid, $pwd);
    
    #running error handlers
    $signup->loginUser();

    
    //if admin sign in 

    # this link will redirect to the home.php
    header("location: ../views/home.view.php?error=none");
}












//legacy code
// <?php

// if($_SERVER['REQUEST_METHOD']=='POST'){
//     # grabing the data
//     $uid = $_POST['uid'];
//     $pwd = $_POST['pwd'];


//     # including the file using autoloader
//     require "../autoload.php";
    
//     // require "../classes/Signup.classes.php";
//     $signup = new LoginContr($uid, $pwd);
    
//     #running error handlers
//     $signup->loginUser();

    
//     //if admin sign in 

//     # this link will redirect to the home.php
//     header("location: ../views/home.view.php?error=none");
// }