<?php
include "header.view.php";
include "../autoload.php";
$carInfo = new SalecarformView();

$selectedCompany = isset($_GET['company']) ? $_GET['company'] : '';
$searchCompany = isset($_POST['search_company']) ? $_POST['search_company'] : '';

// fetches cars based on the selected car company or the searchCompany input
if (!empty($searchCompany)) {
    $cars = $carInfo->getCarsByCompany($searchCompany);
} elseif (!empty($selectedCompany)) {
    $cars = $carInfo->getCarsByCompany($selectedCompany);
} else {
    $cars = $carInfo->getAllCars();
}
?>
<head>
    <link rel="stylesheet" href="style/buycar.css">
</head>

<body>
    

<h1>`</h1>
<div id="content-container">
    <div class="data-container">
        <h1>Buy Cars</h1>
    </div>
    <h2><?php echo !empty($selectedCompany) ? "Cars from $selectedCompany" : "All Cars"; ?></h2>

    <!-- adds the input field for specifying the company and filters -->
    <form method="post" id="search-form">
        <input type="text" name="search_company" placeholder="Search by Company" value="<?php echo $searchCompany; ?>">
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
                    <button class="purchase-button"><a style="text-decoration: none; color:aliceblue;" href="buycarform.view.php">Purchase</a></button>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
</body>