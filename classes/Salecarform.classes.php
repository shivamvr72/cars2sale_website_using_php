<?php 
class Salecarform extends Dbh{
    public function get_session_id(){
        if (isset($_SESSION["userid"])) {
            return $_SESSION["userid"];
        } else {
            header("location: ../salecar.view.php?error=session_Not_Created");
        }
    }

    protected function salecar($sellername, $brand, $model, $year, $city, $fuel, $transmission, $price, $contact, $imagepath){
        $user_id = $this->get_session_id();

        $sql = "INSERT INTO cars (seller, brand, model, city, year, fuel, transmission, price, contact, image, user_id) VALUES (:seller, :brand, :model, :city, :year, :fuel, :transmission, :price, :contact, :image, :user_id)";

        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(':seller', $sellername);
        $stmt->bindParam(':brand', $brand);
        $stmt->bindParam(':model', $model);
        $stmt->bindParam(':city', $city);
        $stmt->bindParam(':year', $year);
        $stmt->bindParam(':fuel', $fuel);
        $stmt->bindParam(':transmission', $transmission);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':contact', $contact);
        $stmt->bindParam(':image', $imagepath);
        $stmt->bindParam(':user_id', $user_id);

        if(!$stmt->execute()){
            $stmt = null;
            header("location: ../views/salecarform.view.php?error=stmtfailed");
            exit();
        }
        $stmt = null;
    }

    // Inside SalecarformView class
    public function fetchAllCarsForUser($userUid) {
        $sql = "SELECT * FROM cars WHERE user_id = (SELECT user_id FROM users WHERE user_uid = :userUid)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(':userUid', $userUid);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    protected function getCarsInfo(){
        $user_id = $this->get_session_id();
        $stmt = $this->connect()->prepare("SELECT * FROM cars WHERE user_id = ?;");
        if(!$stmt->execute(array($user_id))){
            $stmt = null;
            header("location: ../views/salecar.view.php?error=stmtfailed");
            exit();
        } 
        if(!$stmt->rowCount()){
            $stmt = null;
            return false;
            header("location: ../views/salecar.view.php?error=carnotfound");
            exit();
        }

        $carsData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $carsData;
    }

    // to delete car from sale
    public function deleteCar($carId) {
        $sql = "DELETE FROM cars WHERE carid = :carid";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(':carid', $carId, PDO::PARAM_INT);
        if ($stmt->execute()) {
            return true; //succeed
        } else {
            return false; //error
        }
    }


    public function getCarsByCompany($company) {
        $sql = "SELECT * FROM cars WHERE brand = :company";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(':company', $company, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllCars(){
        $sql = "SELECT * from cars";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getCarsByCity($searchCity){
        $sql = "SELECT * FROM cars WHERE city = :city";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(':city', $searchCity, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    

    public function fetchUsers() {
        session_start(); 
            $sql = "SELECT * FROM users";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteUser($userId) {
        $sql = "DELETE FROM users WHERE user_id = :user_id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(':user_id', $userId, PDO::PARAM_INT);
        
        if ($stmt->execute()) {
            return true; 
        } else {
            return false;
        }
    }
    
    public function updateCarPrice($carId, $newPrice) {
        $sql = "UPDATE cars SET price = :newPrice WHERE carid = :carid";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(':newPrice', $newPrice, PDO::PARAM_INT);
        $stmt->bindParam(':carid', $carId, PDO::PARAM_INT);
        
        if ($stmt->execute()) {
            return true; // Succeed
        } else {
            return false; // Error
        }
    }
    
}