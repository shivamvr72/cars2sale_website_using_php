<?php

class AdminSingupContr extends AdminSignup{
    private $aid;
    private $uid;
    private $pwd;
    private $pwdrepeat;
    private $email;

    public function __construct($aid, $uid, $pwd, $pwdrepeat, $email){
        $this->aid = htmlspecialchars($aid);
        $this->uid = htmlspecialchars($uid);
        $this->pwd = htmlspecialchars($pwd);
        $this->pwdrepeat = htmlspecialchars($pwdrepeat);
        $this->email = htmlspecialchars($email);
    }

    public function singupUser(){
        if(!$this->emptyInputCheck()){
            header("location: ../index.php?error=emptyinput");
            exit();
        }

        if(!$this->invalidUid()){
            header("location: ../index.php?error=invaliduserid");
            exit();
        }

        if(!$this->invalidEmail()){
            header("location: ../index.php?error=invalidemail");
            exit();
        }

        if(!$this->passwordMatch()){
            header("location: ../index.php?error=invalidpassword");
            exit();
        }

        if(!$this->uidTakenCheck()){
            header("location: ../index.php?error=uidTakenCheck");
            exit();
        }

        if(!$this->password_len()){
            header("location: ../index.php?error=passwordTooShort");
            exit();
        }
        
        $this->setUser($this->aid, $this->uid, $this->email, $this->pwd);
    }

    private function emptyInputCheck(){
        if(empty($this->aid) || empty($this->uid) || empty($this->pwd) || empty($this->pwdrepeat) || empty($this->email)){
            return false;
        } else {
            return true;
        }
    }

    private function invalidUid(){
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)){
            return false;
        } else {
            return true;
        }
    }
    
    private function invalidEmail(){
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            return false;
        } else {
            return true;
        }
    }


    private function passwordMatch(){
        if($this->pwd === $this->pwdrepeat){
            return true;
        } else {
            return false;
        }
    }

    private function uidTakenCheck(){
        if(!$this->checkUser($this->uid, $this->email)){
            return false;
        } else {
            return true;
        }
    }

    private function password_len(){
        if(strlen($this->pwd) < 8 ){
            return false;
        } else {
            return true;
        }
    }
    public function fetchUserId($aid){
        $userId = $this->getUserId($aid);
        return $userId[0]["admin_id"];
    }
}