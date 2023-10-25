<?php
class Login extends Dbh{

    protected function getUser($uid, $pwd){
        $stmt = $this->connect()->prepare("SELECT user_password from users where user_uid = ? or user_email = ?;");

        if(!$stmt->execute(array($uid, $pwd))){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }


        if($stmt->rowCount() == 0){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $pwdhashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkpwd = password_verify($pwd, $pwdhashed[0]["user_password"]);

        if(!$checkpwd){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        } elseif($checkpwd){
            $stmt = $this->connect()->prepare("SELECT * from users where user_uid = ? or user_email = ? and user_password = ?;");
            if(!$stmt->execute(array($uid, $uid, $pwd))){
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }
            if($stmt->rowCount() == 0){
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }
            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
            session_start();
            ini_set('session.gc_maxlifetime', 43200); // Set session lifetime to 12 hours (12 hours * 3600 seconds per hour)
            ini_set('session.cookie_lifetime', 0); // The cookie should expire when the browser is closed
            $_SESSION["userid"] = $user[0]['user_id'];
            $_SESSION["useruid"] = $user[0]['user_uid'];
            $stmt=null;
        }  



        $stmt = null;
    }

   
}