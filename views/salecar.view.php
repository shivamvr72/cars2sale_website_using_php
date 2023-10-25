<?php 

include "header.view.php";
include "../autoload.php";

$carInfo = new SalecarformView();

if (!isset($_SESSION['useruid'])) {
    header("Location: home.view.php?message=Login is required");
    exit();
}


$userUid = $_SESSION['useruid'];

$cars = $carInfo->fetchAllCarsForUser($userUid);

// Handles the delete operation
if (isset($_POST['delete'])) {
    $carIdToDelete = $_POST['car_id'];
    $result = $carInfo->deleteCar($carIdToDelete);
    if ($result) {
        echo '<script>alert("Car removed successfully.");</script>';
    } else {
        echo '<script>alert("Failed to delete the car.");</script>';
    }
}


if($cars == false){ //if no result found and returns false then this will be applied
    $cars = array();
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style/salecar.css"/>
</head>
<body>
    
    <div id="content-container">
        <div class="data-container">
            <h1>Your Cars On Sale: <?php echo $userUid; ?></h1>
            <button id="btnaddcar"><a href="salecarform.view.php">Sale Car</a></button>
        </div>
        <table>
            <tr>
                <th>Image</th>
                <th>Seller</th>
                <th>Brand</th>
                <th>Model</th>
                <th>Year</th>
                <th>Transmission</th>
                <th>Price</th>
                <th>Fuel</th>
                <th>Contact</th>
                <th>City</th>
                <th colspan="2">Action</th>
            </tr>

            <?php foreach ($cars as $car) : ?>
                <tr>
                    <td><img src="<?php echo $car['image']; ?>" alt="car"></td>
                    <td><?php echo $car['seller']; ?></td>
                    <td><?php echo $car['brand']; ?></td>
                    <td><?php echo $car['model']; ?></td>
                    <td><?php echo $car['year']; ?></td>
                    <td><?php echo $car['transmission']; ?></td>
                    <td><?php echo $car['price']; ?></td>
                    <td><?php echo $car['fuel']; ?></td>
                    <td><?php echo $car['contact']; ?></td>
                    <td><?php echo $car['city']; ?></td>
                    
                    <!-- <td> -->
                    <!-- Form for update operation -->
                    <!-- <form method="post">
                        <input type="hidden" name="car_id" value="<?php echo $car['carid']; ?>">
                        <button id="btnupdate" type="submit" name="update"><a href="updateprice.view.php">Update</a></button>
                    </form> -->
                    <!-- </td> -->
                    <td>
                    <!-- form delete opeation -->
                    <form method="post">
                        <input type="hidden" name="car_id" value="<?php echo $car['carid']; ?>">
                        <button id="btndelete" type="submit" name="delete">Delete</button>
                    </form>
                    </td>
                
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>
