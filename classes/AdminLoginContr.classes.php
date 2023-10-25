<?php 
class AdminLoginContr extends AdminLogin {
    private $uid;
    private $pwd;
    private $aid;

    public function __construct($aid, $uid, $pwd){
        $this->uid = htmlspecialchars($uid);
        $this->pwd = htmlspecialchars($pwd);
        $this->aid = htmlspecialchars($aid);
    }

    public function loginUser(){
        if(!$this->emptyInputCheck()){
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        $this->getAdmin($this->aid, $this->uid, $this->pwd);
    }

    protected function emptyInputCheck(){
        if(empty($this->uid) || empty($this->pwd) || empty($this->aid)){
            return false;
        } else {
            return true;
        }
    }
}