<?php
class fiananceContr extends fiananceform {
    private $First_Name;
    private $Last_Name;
    private $Bank_Name;
    private $ACno;
    private $Carno;
    private $Adhno;
    private $contact_number;
    

    public function __construct($First_Name, $Last_Name, $Bank_Name, $ACno, $Carno, $Adhno, $contact_number) {
        $this->First_Name = $First_Name;
        $this->Last_Name = $Last_Name;
        $this->Bank_Name = $Bank_Name;
        $this->ACno = $ACno;
        $this->Carno = $Carno;
        $this->Adhno = $Adhno;
        $this->contact_number = $contact_number;
    }

    public function fiananceIns() {
        if (!$this->emptyInputCheck()) {
            header("location: ../views/fiananceform.view.php?error=emptyinput");
            exit();
        }

        $this->fianance($this->First_Name, $this->Last_Name, $this->Bank_Name, $this->ACno, $this->Carno, $this->Adhno, $this->contact_number);
    }

   

    private function emptyInputCheck() {
        return !empty($this->First_Name) &&
               !empty($this->Last_Name) &&
               !empty($this->Bank_Name) &&
               !empty($this->ACno) &&
               !empty($this->Carno) &&
               !empty($this->Adhno) &&
               !empty($this->contact_number);
    }
}
?>
