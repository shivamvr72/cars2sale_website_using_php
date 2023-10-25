<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuyCar Form</title>
    <link rel="stylesheet" href="style/fianance.css" />
</head>

<body>
    <div class="container">
        <h2>Buy Car Form</h2>
        
        <form  action="../includes/buycarform.inc.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="carbrand">Car Brand Name:</label>
                <input type="text" id="carbrand" name="carbrand" required>
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
                <label for="price_range">Offer Price In Rs</label>
                <input type="number" name="price" id="price">
                <!-- <input type="range" id="price_range" name="price_range" min="100000" max="5000000" value="100000"
                    oninput="updatePriceRangeValue(this.value)" required> -->
            </div>
            <div class="form-group">
                <input type="submit" value="Submit">
                <button id="cnl"><a href="buycar.view.php">Cancel</a></button>
            </div>
        </form>
    </div>

   
</body>

</html>