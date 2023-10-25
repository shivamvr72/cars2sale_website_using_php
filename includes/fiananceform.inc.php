<?php 
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
    # grabing the data
    // # we will grab the data on sing in
    $First_Name = htmlspecialchars($_POST['First_Name'], ENT_QUOTES, 'UTF-8');
    $Last_Name = htmlspecialchars($_POST['Last_Name'], ENT_QUOTES, 'UTF-8');
    $Bank_Name = htmlspecialchars($_POST['Bank_Name'], ENT_QUOTES, 'UTF-8');
    $ACno = htmlspecialchars($_POST['ACno'], ENT_QUOTES, 'UTF-8');
    $Carno = htmlspecialchars($_POST['Carno'], ENT_QUOTES, 'UTF-8');
    $Adhno = htmlspecialchars($_POST['Adhno'], ENT_QUOTES, 'UTF-8');
    $contact_number = htmlspecialchars($_POST['contact_number'], ENT_QUOTES, 'UTF-8');
    

    # including the file using autoloader
    require "../autoload.php";

    $fianance = new fiananceContr($First_Name, $Last_Name, $Bank_Name, $ACno, $Carno, $Adhno, $contact_number);
    $fianance->fiananceIns();

    
    header("location: ../views/fianance.view.php?error=none");
}
?>