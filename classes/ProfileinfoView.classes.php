<?php 
class ProfileinfoView extends Profileinfo{
    public function fetchAbout($userid){
        $profileInfo = $this->getProfileInfo($userid);
        echo $profileInfo[0]['profile_about'];
    }
    public function fetchTitle($userid){
        $profileInfo = $this->getProfileInfo($userid);
        echo $profileInfo[0]['profile_introtitle'];
    }
    public function fetchText($userid){
        $profileInfo = $this->getProfileInfo($userid);
        echo $profileInfo[0]['profile_introtext'];
    }
}