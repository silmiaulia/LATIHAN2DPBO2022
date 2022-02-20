<?php

/* Saya Silmi Aulia Rohmah mengerjakan Latihan 2 DPBO 2022 C1 
dalam mata kuliah DPBO untuk keberkahanNya maka saya tidak melakukan 
kecurangan seperti yang telah dispesifikasikan. Aamiin */


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

        echo "ID Product    : ". $this->getIdProduct()."<br/>";
        echo "Price         : ". $this->getPrice()."<br/>";
        
    } 

	public function __destruct(){ //desktruktor
		
	}
}
