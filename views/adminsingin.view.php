<?php 
include "signinheader.view.php";
?>
<h3>Admin Sign Up</h3>
        <form action="../includes/adminsignup.inc.php" method="post">
            <input type="text" style="width: 20vw;" name="uid" require placeholder="User Admin"><br>
            <input type="text" style="width: 20vw;" name="aid" require placeholder="User Admin Key"><br>
            <input type="password" name="pwd" placeholder="Password" require><br>
            <input type="password" name="pwdrepeat" placeholder="Re-enter Password" require><br>
            <input type="email" name="email" placeholder="Email" require><br>
            <button type="submit" name="submit">Sign Up</button>
            <button><a href="home.view.php">cancel</a></button>
        </form>
    </section>
    
</body>
</html>