<?php 
session_start();
include "signinheader.view.php";
?>
        <h3>Sign Up</h3>
        <p>Don't Have an Account Yet? Sign Up Here!</p>
        <form action="../includes/signup.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username" require><br>
            <input type="password" name="pwd" placeholder="Password" require><br>
            <input type="password" name="pwdrepeat" placeholder="Re-enter Password" require><br>
            <input type="email" name="email" placeholder="Email" require><br>
            <button type="submit" name="submit">Sign Up</button>
            <button><a href="home.view.php">cancel</a></button>
        </form>
    </section>
    
</body>
</html>