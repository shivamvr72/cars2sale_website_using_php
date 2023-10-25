<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell Car Form</title>
    <link rel="stylesheet" href="style/salecarform.css" />
</head>

<body>
    <div class="container">
        <h2>Sell Car Form</h2>
        
        <form  action="../includes/salecarform.inc.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="seller_name">Seller Name:</label>
                <input type="text" id="seller_name" name="seller_name" required>
            </div>
            <div class="form-group">
                <label for="brand">Car Brand Name:</label>
                <input type="text" id="brand" name="brand" required>
            </div>
            <div class="form-group">
                <label for="model">Model Name:</label>
                <input type="text" id="model" name="model" required>
            </div>
            <div class="form-group">
                <label for="year">Year:</label>
                <input type="text" id="year" name="year" required>
            </div>
            <div class="form-group">
                <label>Fuel Type:</label>
                <input type="radio" id="petrol" name="fuel_type" value="petrol" required>
                <label for="petrol">Petrol</label>
                <input type="radio" id="diesel" name="fuel_type" value="diesel" required>
                <label for="diesel">Diesel</label>
            </div>
            <div class="form-group">
                <label>Transmission:</label>
                <input type="radio" id="automatic" name="transmission" value="automatic" required>
                <label for="automatic">Automatic</label>
                <input type="radio" id="manual" name="transmission" value="manual" required>
                <label for="manual">Manual</label>
            </div>
            <div class="form-group">
                <label for="city">City:</label>
                <input type="text" id="city" name="city" required>
            </div>
            <div class="form-group">
                <label for="price_range">Selling Price In Rs</label>
                <input type="number" name="price" id="price">
            </div>
            <div class="form-group">
                <label for="car_images">Upload Car Images:</label>
                <input type="file" id="car_images" name="car_images" accept="image/*" required>
            </div>
            <div class="form-group">
                <label for="contact_number">Contact Number:</label>
                <input type="text" id="contact_number" name="contact_number" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit">
                <button id="cnl"><a href="salecar.view.php">Cancel</a></button>
            </div>
        </form>
    </div>
</body>

</html>