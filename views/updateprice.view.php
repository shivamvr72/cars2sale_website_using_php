<?php
session_start();
include "../autoload.php";
$carInfo = new SalecarformView();

if (!isset($_SESSION['useruid'])) {
    header("Location: home.view.php?message=Login is required");
    exit();
}

$userUid = $_SESSION['useruid'];

if (isset($_POST['update'])) {
    $carIdToUpdate = $_POST['car_id'];
    $newPrice = $_POST['new_price'];

    $result = $carInfo->updateCarPrice($carIdToUpdate, $newPrice);

    if ($result) {
        echo '<script>alert("Car updated successfully.");</script>';
    } else {
        echo '<script>alert("Failed to update the car.");</script>';
    }
    header("location: salecar.view.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style/updateprice.css"/>
</head>
<body>
    <form method="post">
        <input type="hidden" name="car_id" value="<?php echo $car['carid']; ?>">
        <input type="text" name="new_price" placeholder="New Price">
        <button id="btnupdate" type="submit" name="update">Update</button>
    </form>
</body>
</html>
