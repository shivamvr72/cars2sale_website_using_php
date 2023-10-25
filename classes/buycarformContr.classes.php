<?php
class buycarformContr extends buycarform {
    private $carbrand;
    private $model;
    private $year;
    private $city;
    private $fuel;
    private $transmission;
    private $price;
    
    public function __construct($carbrand, $model, $year, $city, $fuel, $transmission, $price) {
        $this->carbrand = $carbrand;
        $this->model = $model;
        $this->year = $year;
        $this->city = $city;
        $this->fuel = $fuel;
        $this->transmission = $transmission;
        $this->price = $price;   
    }

    public function bcar() {
        if (!$this->emptyInputCheck()) {
            header("location: ../views/buycarform.view.php?error=emptyinput");
            exit();
        }
        $this->buycar($this->carbrand, $this->model, $this->year, $this->city, $this->fuel, $this->transmission, $this->price);
    }

    

    private function emptyInputCheck() {
        // Check if any property is empty
        return !empty($this->carbrand) &&
               !empty($this->model) &&
               !empty($this->year) &&
               !empty($this->city) &&
               !empty($this->fuel) &&
               !empty($this->transmission) &&
               !empty($this->price);
    }
}
