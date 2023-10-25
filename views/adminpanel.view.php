<?php
include "header.view.php";
include "../autoload.php";

$carInfo = new SalecarformView();

$selectedCompany = isset($_GET['company']) ? $_GET['company'] : '';
$searchCompany = isset($_POST['search_company']) ? $_POST['search_company'] : '';

if (!empty($searchCompany)) {
    $cars = $carInfo->getCarsByCompany($searchCompany);
} elseif (!empty($selectedCompany)) {
    $cars = $carInfo->getCarsByCompany($selectedCompany);
} else {
    $cars = $carInfo->getAllCars();
}

if (isset($_POST['delete'])) {
    $carIdToDelete = $_POST['car_id'];
    $result = $carInfo->deleteCar($carIdToDelete);
    if ($result) {
        echo '<script>alert("Car removed successfully.");</script>';
    } else {
        echo '<script>alert("Failed to delete the car.");</script>';
    }
}
?>
<head>
    <link rel="stylesheet" href="style/buycar.css">
</head>

<body>
<h1>`</h1>
<div id="content-container">
    <div class="data-container">
        <h1>Admin Panel</h1>
    </div>
    <h2><?php echo !empty($selectedCompany) ? "Cars from $selectedCompany" : "All Cars"; ?></h2>

    <form method="post" id="search-form">
        <input type="text" name="search_company" placeholder="Search by Company" value="<?php echo $searchCompany; ?>">
        <button type="submit">Search</button>
    </form>

    <table>
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
                    <form method="post">
                        <input type="hidden" name="car_id" value="<?php echo $car['carid']; ?>">
                        <button name="admin" style="background-color: blue;"><a href="adminpanel.view.php" style="color: white; text-decoration:none; ">cancel</a></button>
                        <button class="delete-button"  style="background-color: red; color:blanchedalmond" type="submit" name="delete">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <button><a href="adminusersdata.view.php">users</a></button>
</div>
</body>
