<?php
class Signup extends Dbh{

    protected function setUser($uid, $email, $pwd){
        $stmt = $this->connect()->prepare("INSERT INTO users (user_uid, user_password, user_email) VALUES (?,?,?);");

        $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($uid, $hashedpwd, $email))){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $stmt = null;
    }

    protected function checkUser($uid, $email){
        $sql = "SELECT user_uid FROM users WHERE user_uid = ? OR user_email = ?;";
        $stmt = $this->connect()->prepare($sql);


        if(!$stmt->execute(array($uid,$email))){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        
        
        if($stmt->rowCount() > 0){
            return false;
        } else {
            return true;
        }

    }
    protected function getUserId($uid){
        $stmt = $this->connect()->prepare("SELECT user_id FROM users WHERE user_uid = ?;");
        if(!$stmt->execute(array($uid))){
            $stmt = null;
            header("location: ../views/profile.view.php?error=stmtfailed");
            exit();
        } 
        if(!$stmt->rowCount()){
            $stmt = null;
            header("location: ../views/profile.view.php?error=stmtfailed");
            exit();
        }
        $profileData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $profileData;
    }
}