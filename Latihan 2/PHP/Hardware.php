<?php
include ("Product.php"); //include file class 

class Hardware extends Product{

    //atribut private kelas product
    private $brand;
    private $model;

    public function __construct(){ //konstruktor kosong

    }

    //metode getter dam setter
	public function getBrand() {
		return $this->price;
	}

	public function setBrand($price) {
		$this->price = $price;
	}

	public function getModel() {
		return $this->model;
	}

	public function setModel($idProduct) {
		$this->model = $model;
	}

    //untuk print atribut kelas Product
    public function getInfoHardware(){

        echo "Brand         : ". getBrand()."<br/>";
        echo "Model         : ". getModel()."<br/>";
        
    } 
}