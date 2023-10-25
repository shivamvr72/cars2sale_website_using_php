<?php 
class buycarform extends Dbh{
    protected function buycar($carbrand, $model, $year, $city, $fuel, $transmission, $price){
        if (isset($_SESSION["userid"])) { // checking if the user_id is set in the session
            $user_id = $_SESSION["userid"];
        } else {
            // handling the case where user_id is not set in the session
            header("location: ../buycar.view.php?error=sessionnotcreated");
        }

        $sql = "INSERT INTO buycar (carbrand, model, city, year, fuel, transmission, price, user_id) VALUES (:carbrand, :model, :city, :year, :fuel, :transmission, :price,  :user_id)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(':carbrand', $carbrand);
        $stmt->bindParam(':model', $model);
        $stmt->bindParam(':city', $city);
        $stmt->bindParam(':year', $year);
        $stmt->bindParam(':fuel', $fuel); 
        $stmt->bindParam(':transmission', $transmission);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':user_id', $user_id);

        if(!$stmt->execute()){
            $stmt = null;
            header("location: ../views/buycarform.view.php?error=stmtfailed");
            exit();
        }
        $stmt = null;
    }
}