<?php 
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
    # grabing the data
    // # we will grab the data on sing in
    $sellerName = htmlspecialchars($_POST['seller_name'], ENT_QUOTES, 'UTF-8');
    $brand = htmlspecialchars($_POST['brand'], ENT_QUOTES, 'UTF-8');
    $model = htmlspecialchars($_POST['model'], ENT_QUOTES, 'UTF-8');
    $year = htmlspecialchars($_POST['year'], ENT_QUOTES, 'UTF-8');
    $fuel = htmlspecialchars($_POST['fuel_type'], ENT_QUOTES, 'UTF-8');
    $city = htmlspecialchars($_POST['city'], ENT_QUOTES, 'UTF-8');
    $transmission = htmlentities($_POST['transmission']);
    $price = htmlspecialchars($_POST['price'], ENT_QUOTES, 'UTF-8');
    $contact = htmlspecialchars($_POST['contact_number'], ENT_QUOTES, 'UTF-8');
    $carimage = $_FILES['car_images'];

    # including the file using autoloader
    require "../autoload.php";

    $addcar = new SalecarformContr($sellerName, $brand, $model, $year, $city, $fuel, $transmission, $price, $contact, $carimage);
    $addcar->addcar();

    // require "../classes/Signup.classes.php";
    // $signup = new SingupContr($uid, $pwd, $pwdrepeat, $email);


    #running error handlers
    // $signup->singupUser();
    // $userId = $signup->fetchUserId($uid);

    # instantiate profileinfoContr class
    // $profileinfo  = new ProfileinfoContr($userId, $uid);
    // $profileinfo->defaultProfileInfo();

    #going back to front page
    // header("location: ../index.php?error=none");
    header("location: ../views/salecar.view.php?error=none");
}