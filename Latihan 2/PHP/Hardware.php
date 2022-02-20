<?php

/* Saya Silmi Aulia Rohmah mengerjakan Latihan 2 DPBO 2022 C1 
dalam mata kuliah DPBO untuk keberkahanNya maka saya tidak melakukan 
kecurangan seperti yang telah dispesifikasikan. Aamiin */


include "Product.php"; //import class product

class Hardware extends Product{ //class Hardware turunan dari class Product

    //atribut private kelas product
    private $brand;
    private $model;

    public function __construct(){ //konstruktor kosong

    }

    //metode getter dam setter
	public function getBrand() {
		return $this->brand;
	}

	public function setBrand($brand) {
		$this->brand = $brand;
	}

	public function getModel() {
		return $this->model;
	}

	public function setModel($model){
		$this->model = $model;
	}

    //untuk print atribut kelas Product
    public function getInfoHardware(){

        echo "Brand         : ". $this->getBrand()."<br/>";
        echo "Model         : ". $this->getModel()."<br/>";
        
    } 

	public function __destruct(){ //dektruktor
		
	}
}