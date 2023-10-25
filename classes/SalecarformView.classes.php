<?php 
class SalecarformView extends Salecarform {
    public function deleteCar($carIdToDelete){
        return parent::deleteCar($carIdToDelete);
    }
    
    public function fetchAllCarsForUser($uid){
        $rowsdata = $this->getCarsInfo();
        return $rowsdata;
    }


}



 