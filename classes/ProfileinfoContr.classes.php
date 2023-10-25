<?php
class ProfileinfoContr extends Profileinfo{
    private $userid;
    private $useruid;

    public function __construct($userid, $useruid){
        $this->userid = $userid;
        $this->useruid = $useruid;
    }

    public function defaultProfileInfo(){
        $profileAbout = "Something About Yourself";
        $profileTitle = "User Name : " . $this->useruid;
        $profileText = "Profide Your Bio" ;
        $this->setProfileInfo($profileAbout, $profileTitle, $profileText, $this->userid);
    }

    public function updateProfileInfo($about, $introTitle, $introText){
        # error handlers 
        if($this->emptyInputCheck($about, $introTitle, $introText)){
            header("location: ../views/profilesettings.view.php");
            exit();
        }

        # update profileinfo
        $this->setNewProfileInfo($about, $introTitle, $introText, $this->userid);
    }

    private function emptyInputCheck($about, $introTitle, $introText){
        if(empty($about) || empty($introText) || empty($introTitle)){
            return true;
        } else {
            return false;
        }
    }

} 