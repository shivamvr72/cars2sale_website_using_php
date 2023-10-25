<head>
    <link rel="stylesheet" href="style/singloginstyle.css"/>
    <style>
        .logo-header:hover{
            opacity: 0.6;
        }
        .ss{
            width: 20vw;
        }
    </style>
</head>
<body>
    <section class="index-login-signup">
        <div class="logo-header">
            <a href="home.view.php" class="logo" id="ll">Car2Sale</a>
        </div>
        <div id="index-login-login">
            <!-- direction from index.php on press of login button -->
            <h3>welcome to admin Log in</h3>
            <form action="../includes/adminlogin.inc.php" method="post">
                <input class="ss" type="text" name="aid" require placeholder="Admin Login Key"><br><br>
                <input class="ss" type="text" name="uid" require placeholder="Username"><br><br>
                <input class="ss" type="password" name="pwd" require placeholder="Password"><br><br>
                
                <button type="submit" name="submit">login</button>
                <button type="submit" name="cancel"><a href="adminsingin.view.php">signin</a></button>
            </form>
        </div>    
    </section>
</body>