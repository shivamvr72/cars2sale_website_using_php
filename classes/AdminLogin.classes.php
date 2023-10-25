<?php
class AdminLogin extends Dbh{

    protected function getAdmin($aid, $uid, $pwd){
        $stmt = $this->connect()->prepare("SELECT admin_password, admin_aid from useradmin where admin_uid = ? or admin_email = ?;");

        if(!$stmt->execute(array($uid, $uid))){
            $stmt = null;
            header("location: ../views/home.view.php?error=stmtfailed");
            exit();
        }


        if($stmt->rowCount() == 0){
            $stmt = null;
            header("location: ../views/home.view.php?error=stmtfailed");
            exit();
        }

        $creadentials = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkpwd = password_verify($pwd, $creadentials[0]["admin_password"]);
        $admin_aid = $creadentials[0]['admin_aid'];

        if(!$checkpwd and !$admin_aid){
            $stmt = null;
            header("location: ../views/home.view.php?error=stmtfailed");
            exit();
        } elseif($checkpwd and $admin_aid){
            $stmt = $this->connect()->prepare("SELECT * from useradmin where admin_uid = ? or admin_email = ? and admin_password = ?;");
            if(!$stmt->execute(array($uid, $uid, $pwd))){
                $stmt = null;
                header("location: ../views/home.view.php?error=stmtfailed");
                exit();
            }
            if($stmt->rowCount() == 0){
                $stmt = null;
                header("location: ../views/home.view.php?error=stmtfailed");
                exit();
            }
            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
            session_start();
            // ini_set('session.gc_maxlifetime', 43200); // Set session lifetime to 12 hours (12 hours * 3600 seconds per hour)
            // ini_set('session.cookie_lifetime', 0); // The cookie should expire when the browser is closed

            $_SESSION["userid"] = $user[0]['admin_aid'];
            $_SESSION["useruid"] = $user[0]['admin_uid'];
            $stmt=null;
        }  



        $stmt = null;
    }

   
}