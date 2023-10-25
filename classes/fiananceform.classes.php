<?php 
class fiananceform extends Dbh{
    protected function fianance($First_Name, $Last_Name, $Bank_Name, $ACno, $Carno, $Adhno, $contact_number){
        if (isset($_SESSION["userid"])) {
            $user_id = $_SESSION["userid"];
        } else {
            header("location: ../fianance.view.php?error=sessionnotcreated");
        }

        $sql = "INSERT INTO fianance (first_name, last_name, bank_name, acno, carno, adhno, contact_number, user_id) VALUES (:First_Name, :Last_Name, :Bank_Name, :ACno, :Carno, :Adhno, :contact_number, :user_id)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(':First_Name', $First_Name);
        $stmt->bindParam(':Last_Name', $Last_Name);
        $stmt->bindParam(':Bank_Name', $Bank_Name);
        $stmt->bindParam(':ACno', $ACno);
        $stmt->bindParam(':Carno', $Carno);
        $stmt->bindParam(':Adhno', $Adhno);
        $stmt->bindParam(':contact_number', $contact_number);
        $stmt->bindParam(':user_id', $user_id);
        if(!$stmt->execute()){
            $stmt = null;
            header("location: ../views/fiananceform.view.php?error=stmtfailed");
            exit();
        }
        $stmt = null;
    }
}
?>