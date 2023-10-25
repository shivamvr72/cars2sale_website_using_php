<?php
include "header.view.php";
include "../autoload.php";
$carInfo = new SalecarformView();

$selectedCity = isset($_GET['city']) ? $_GET['city'] : '';
$searchCity = isset($_POST['search_city']) ? $_POST['search_city'] : '';

// fetch cars based on the selected city or the searchCity input
if (!empty($searchCity)) {
    $cars = $carInfo->getCarsByCity($searchCity);
} elseif (!empty($selectedCity)) {
    $cars = $carInfo->getCarsByCity($selectedCity);
} else {
    $cars = $carInfo->getAllCars();
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style/buycar.css">
</head>
<body>
<h1>.</h1>
<h1>.</h1>
<div id="content-container">
    <div class="data-container">
        <h1>Buy Cars by City</h1>
    </div>
    <h2><?php echo !empty($selectedCity) ? "Cars in $selectedCity" : "All Cars"; ?></h2>

    <form method="post" id="search-form">
        <input type="text" name="search_city" placeholder="Search by City" value="<?php echo $searchCity; ?>">
        <button type="submit">Search</button>
    </form>

    <table>
        <!-- display cars based on the $cars array -->
        <?php foreach ($cars as $car) : ?>
            <tr>
                <td><img src="<?php echo $car['image']; ?>" alt="car" width="100vw" height="100vh"></td>
                <td><?php echo $car['seller']; ?></td>
                <td><?php echo $car['brand']; ?></td>
                <td><?php echo $car['model']; ?></td>
                <td><?php echo $car['year']; ?></td>
                <td><?php echo $car['transmission']; ?></td>
                <td><?php echo $car['price']; ?></td>
                <td><?php echo $car['fuel']; ?></td>
                <td><?php echo $car['contact']; ?></td>
                <td><?php echo $car['city']; ?></td>
                <td>
                    <button class="purchase-button">Purchase</button>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
</body>
</html>
