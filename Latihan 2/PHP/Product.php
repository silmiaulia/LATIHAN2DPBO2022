<?php

class Product{

    //atribut private kelas product
    private $price;
    private $idProduct;

    public function __construct(){ //konstruktor kosong

    }

    //metode getter dam setter
	public function getPrice() {
		return $this->price;
	}

	public function setPrice($price) {
		$this->price = $price;
	}

	public function getIdProduct() {
		return $this->idProduct;
	}

	public function setIdProduct($idProduct) {
		$this->idProduct = $idProduct;
	}

    //untuk print atribut kelas Product
    public function getInfoProduct(){

        echo "ID Product    : ". getIdProduct()."<br/>";
        echo "Price         : ". getPrice()."<br/>";
        
    } 
}