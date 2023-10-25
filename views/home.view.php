<!DOCTYPE html>
<?php
    // session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">

    <link rel="stylesheet" href="style/style.css">
    <title>Car2Sale</title>
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
    <?php 
        include_once "header.view.php";
    ?>

    <div class="slideshow">
    <div class="slider">
        <div class="slides">
            <!-- radio button start -->
            <input type="radio" name="radio_btn" id="rd1">
            <input type="radio" name="radio_btn" id="rd2">
            <input type="radio" name="radio_btn" id="rd3">
            <input type="radio" name="radio_btn" id="rd4">
            <!-- radio button end -->
            <!-- slide image start -->
            <div class="slide f">
                <a href="#"><img src="images/jag.jpg" alt=""></a>
            </div>
            <div class="slide">
                <a href="#"><img src="images/Car2sale.png" alt=""></a>
            </div>
            <div class="slide">
                <a href="#"><img src="images/cars.png" alt="cars"></a>
            </div>
            <div class="slide">
                <a href=""><img src="images/finance.png" alt="finance"></a>
            </div>
    
            <div class="navigation_manual">
                <label for="rd1" class="manual_btn"></label>
                <label for="rd2" class="manual_btn"></label>
                <label for="rd3" class="manual_btn"></label>
                <label for="rd4" class="manual_btn"></label>
            </div>
            <!-- manaual navigation end -->
        </div>
    </div>
    <script type="text/javascript">
        var counter = 1;
        setInterval(
            function(){
                document.getElementById('rd'+counter).checked = true;
                counter++;
                if(counter>4){
                    counter=1;
                }
            }
            ,5000
        );
    </script>
    </div>


    <div class="scrollable-images">
    </div>

    <p id="lx"></p>
    <div>
        <h1 id="v" style="padding-left: 2%;">VEHICLES</h1>
    </div>
   
    <div class="responsive-container">
        <div class="item">
            <h1>Jaguar F-Pace</h1>
                <a href="#"><img src="images/harrier.jpeg" alt="XJ" width="300px" height="180px" class="m_img"></a>
                <p>Ultimate Luxury SUV</p>
            <p>Comfort with rougidness</p>
        </div>
        <div class="item">
            <h1>Jaguar F-Pace</h1>
                <a href="#"><img src="images/brezza.jpeg" alt="XJ" width="300px" height="180px" class="m_img"></a>
                <p>Ultimate Luxury SUV</p>
            <p>Comfort with rougidness</p>
        </div>
        <div class="item">
            <h1>Jaguar F-Pace</h1>
                <a href="#"><img src="images/octavia.jpeg" alt="XJ" width="300px" height="180px" class="m_img"></a>
                <p>Ultimate Luxury SUV</p>
            <p>Comfort with rougidness</p>
        </div>
        <div class="item">
            <h1>Jaguar F-Pace</h1>
                <a href="#"><img src="images/swift.jpeg" alt="XJ" width="300px" height="180px" class="m_img"></a>
                <p>Ultimate Luxury SUV</p>
            <p>Comfort with rougidness</p>
        </div>
        <div class="item">
            <h1>Jaguar F-Pace</h1>
                <a href="#"><img src="images/superb.jpeg" alt="XJ" width="300px" height="180px" class="m_img"></a>
                <p>Ultimate Luxury SUV</p>
            <p>Comfort with rougidness</p>
        </div>
        <div class="item">
            <h1>Jaguar F-Pace</h1>
                <a href="#"><img src="images/thar.jpeg" alt="XJ" width="300px" height="180px" class="m_img"></a>
                <p>Ultimate Luxury SUV</p>
            <p>Comfort with rougidness</p>
        </div>
        
        
        <!-- Add more items as needed -->
    </div>


    <footer style="margin: 10px;">
        <div class="footer-section">
            <div class="keep-in-touch">
                <ul>
                    <li><a href="#"><img src="images/instagram.png" alt="Instagram"> Instagram</a></li>
                    <li><a href="#"><img src="images/facebook.png" alt="Facebook"> Facebook</a></li>
                    <li><a href="#"><img src="images/download.png" alt="Twitter"> X (Twitter)</a></li>
                    <li><a href="#"><img src="images/linkedin.png" alt="LinkedIn"> Linked In</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-section">
            <ul class="useful-links">
                <li><a href="#">Buy Car</a></li>
                <li><a href="#">Sale Car</a></li>
                <li><a href="#">Finance</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <ul class="other-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </div>
    </footer>
    <h6 id='copyrights'>
        <p>&copy; 2023 Car2Sale. All rights reserved.</p>
    </h6>
</body>
</html>






















<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Welcome to Home Page</h1>
    <p>This will be out landing page</p>
    <p>So customize occurding to the requirements</p> -->


<!-- </body>
</html> -->