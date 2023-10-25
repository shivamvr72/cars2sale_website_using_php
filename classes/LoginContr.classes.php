<?php

class LoginContr extends Login{
    private $uid;
    private $pwd;

    public function __construct($uid, $pwd){
        $this->uid = htmlspecialchars($uid);
        $this->pwd = htmlspecialchars($pwd);
    }

    public function loginUser(){
        if(!$this->emptyInputCheck()){
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        $this->getUser($this->uid, $this->pwd);
    }

    protected function emptyInputCheck(){
        if(empty($this->uid) || empty($this->pwd)){
            return false;
        } else {
            return true;
        }
    }

}
