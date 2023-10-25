<?php 
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
    # grabing the data
    // # we will grab the data on sing in
    $carbrand = htmlspecialchars($_POST['carbrand'], ENT_QUOTES, 'UTF-8');
    $model = htmlspecialchars($_POST['model'], ENT_QUOTES, 'UTF-8');
    $year = htmlspecialchars($_POST['year'], ENT_QUOTES, 'UTF-8');
    $fuel = htmlspecialchars($_POST['fuel_type'], ENT_QUOTES, 'UTF-8');
    $city = htmlspecialchars($_POST['city'], ENT_QUOTES, 'UTF-8');
    $transmission = htmlentities($_POST['transmission']);
    $price = htmlspecialchars($_POST['price'], ENT_QUOTES, 'UTF-8');
    

    # including the file using autoloader
    require "../autoload.php";

    $bcar = new buycarformContr($carbrand, $model, $year, $city, $fuel, $transmission, $price);
    $bcar->bcar();

    
    header("location: ../views/buycar.view.php?error=none");
}
?>