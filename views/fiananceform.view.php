<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fianance Form</title>
    <link rel="stylesheet" href="style/fianance.css" />
</head>

<body>
    <div class="container">
        <h2>Take Your Car With Easy EMI</h2>
        
        <h2>Finance The Car</h2>
        <form  action="../includes/fiananceform.inc.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="First_Name">First Name:</label>
                <input type="text" id="First_Name" name="First_Name" required>
            </div>
            <div class="form-group">
                <label for="Last_Name">Last Name:</label>
                <input type="text" id="Last_Name" name="Last_Name" required>
            </div>
            <div class="form-group">
                <label for="Bank_Name">Bank Name:</label>
                <input type="text" id="Bank_Name" name="Bank_Name" required>
            </div>
            <div class="form-group">
                <label for="ACno">Account Number:</label>
                <input type="number" id="ACno" name="ACno" required>
            </div>
            
            <div class="form-group">
                <label for="Carno">Car Number:</label>
                <input type="text" id="Carno" name="Carno" required>
            </div>

            <div class="form-group">
                <label for="Adhno">Aadhar Number:</label>
                <input type="text" id="Adhno" name="Adhno" required>
            </div>
    
            <div class="form-group">
                <label for="contact_number">Contact Number:</label>
                <input type="text" id="contact_number" name="contact_number" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit">
                <button id="cnl"><a href="fianance.view.php">Cancel</a></button>
            </div>
        </form>
    </div>

   
</body>

</html>