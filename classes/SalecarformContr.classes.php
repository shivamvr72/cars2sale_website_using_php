<?php
class SalecarformContr extends Salecarform {
    private $sellername;
    private $brand;
    private $model;
    private $year;
    private $city;
    private $fuel;
    private $transmission;
    private $price;
    private $contact;
    private $image;

    public function __construct($sellername, $brand, $model, $year, $city, $fuel, $transmission, $price, $contact, $image) {
        $this->sellername = $sellername;
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->city = $city;
        $this->fuel = $fuel;
        $this->transmission = $transmission;
        $this->price = $price;
        $this->contact = $contact;
        $this->image = $image;
    }

    public function addcar() {
        if (!$this->emptyInputCheck()) {
            header("location: ../views/salecarform.view.php?error=emptyinput");
            exit();
        }
        $imagePath = $this->validateAndMoveImage();
        if ($imagePath === false) {
            header("location: ../views/salecarform.view.php?error=imageuploadfailed");
            exit();
        }
        $this->salecar($this->sellername, $this->brand, $this->model, $this->year, $this->city, $this->fuel, $this->transmission, $this->price, $this->contact, $imagePath);
    }

    private function validateAndMoveImage() {
        if ($this->image["error"] === UPLOAD_ERR_OK) {
            $maxFileSize = 10 * 1024 * 2048;  // 20MB

            if ($this->image["size"] <= $maxFileSize) {
                $originalFileName = $this->image["name"];
                $extension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                $newFileName = uniqid() . '_' . time() . '.' . $extension;
                $targetFile =  "../classes/uploaded_cars/".$newFileName;

                $allowedExtensions = ["jpg", "jpeg", "png", "gif"];
                if (in_array($extension, $allowedExtensions)) {
                    if (move_uploaded_file($this->image["tmp_name"], $targetFile)) {
                        return $targetFile;
                    }
                }
            }
        }
        return false; // Upload failed
    }

    private function emptyInputCheck() {
        // Checking if any property is empty
        return !empty($this->sellername) &&
               !empty($this->brand) &&
               !empty($this->model) &&
               !empty($this->year) &&
               !empty($this->city) &&
               !empty($this->fuel) &&
               !empty($this->transmission) &&
               !empty($this->price) &&
               !empty($this->contact) &&
               !empty($this->image);
    }
}
