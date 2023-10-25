<?php
class AdminSignup extends Dbh{

    protected function setUser($aid, $uid, $email, $pwd){
        $stmt = $this->connect()->prepare("INSERT INTO useradmin (admin_aid, admin_uid, admin_password, admin_email) VALUES (?,?,?,?);");

        $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($aid, $uid, $hashedpwd, $email))){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $stmt = null;
    }

    protected function checkUser($uid, $email){
        $sql = "SELECT admin_uid FROM useradmin WHERE admin_uid = ? OR admin_email = ?;";
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
        // $stmt = $this->connect()->prepare("SELECT admin_aid FROM useradmin WHERE admin_uid = ?;");
        // if(!$stmt->execute(array($uid))){
        //     $stmt = null;
        //     header("location: ../views/profile.view.php?error=stmtfailed");
        //     exit();
        // } 
        // if(!$stmt->rowCount()){
        //     $stmt = null;
        //     header("location: ../views/profile.view.php?error=stmtfailed");
        //     exit();
        // }
        // $profileData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // return $profileData;
    }
}