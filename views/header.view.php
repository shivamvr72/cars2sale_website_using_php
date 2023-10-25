<!DOCTYPE html>
<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">

    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/carsale.css">
    <title>Cars2Sale</title>
    <script>
        function search(){
           document.getElementById("mdp").classList.toggle("show");
        }
        function filter(){
            var input, filt, li, a, i, ft;
            input = document.getElementById("ip");
            filt = input.value.toUpperCase();
            ft = document.getElementById("mdp");
            a = ft.getElementsByTagName("a");
            for(i=0; i<a.length; i++){
                txtValue = a[i].textContent || a[i].innerText;
                if(txtValue.toUpperCase().indexOf(filt) > -1){
                    a[i].style.display = "";
                }else{
                    a[i].style.display = "none";
                }
            }
        }
    </script>
</head>
<body>
<header>
        <nav class="navbar">
            <a href="home.view.php" class="logo">Cars2Sale</a>
            <ul>
                <li class="nav-item">
                    <a href="cities.view.php">City</a>
                </li>
                <li class="nav-item">
                    <a href="buycar.view.php">Buy Car</a>
                </li>
                <li class="nav-item">
                    <a href="salecar.view.php">Sale Car</a>
                </li>
                <li class="nav-item">
                    <a href="fianance.view.php">Car Finance</a>
                </li>
            </ul>
           
            <div class="dp">
                <img src="images/search.png" onclick="search()" class="right" id="searchimg">
                <div id="mdp" class="dpc">
                    <input type="text" id="ip" placeholder="search" onkeyup="filter()">
                    <a href="profile.view.php">Profile</a>
                    <a href="salecarform.view.php">Sale Car Form</a>
                    <a href="buycarform.view.php">Buy Car Form</a>
                    <a href="fiananceform.view.php">Finance Form</a>
                    <a href="./jaguar_culture.html">classic</a>
                    <a href="./test-drive.html">Book</a>
                </div>
               
                <?php 
                    if(isset($_SESSION['userid'])){
                        // echo "you are logged in ";
                    ?>
                        <button id="btnlogged"><a href="profile.view.php"><?php echo $_SESSION["useruid"];?></a></li>
                        <button id="btnlogout"><a href="../includes/logout.inc.php">Logout</a></button>

                    <?php } else { ?>
                        <div class="login-buttons">
                            <button id="btnsinglogin"><a href="loginfrom.view.php">Singin/Login</a></button>
                        </div>
                    <?php } ?>
            </div>
        </nav>
    </header>