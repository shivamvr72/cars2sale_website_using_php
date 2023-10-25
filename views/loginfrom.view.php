
<head>
    <link rel="stylesheet" href="style/singloginstyle.css"/>
    <style>
        .logo-header:hover{
            opacity: 0.6;
        }
        #tuser{
            width: 17vw;
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
            <h3>Log in</h3>
            <form action="../includes/login.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username"><br><br>
                <input type="password" name="pwd" placeholder="Password"><br><br>
                <select name="tuser" id="tuser">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
                <br><br>
                <button type="submit" name="submit">login</button>
                <button type="submit" name="cancel"><a href="singin.view.php">signin</a></button>
            </form>
        </div>    
    </section>
</body>
