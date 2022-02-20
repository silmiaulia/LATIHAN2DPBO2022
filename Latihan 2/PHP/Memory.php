<?php
include ("Hardware.php"); //include file class 

class Memory extends Hardware{

    //atribut private kelas product
    private $frequency;
    private $MemorySize;
    private $supportsCuda;

    public function __construct(){ //konstruktor kosong

    }

    //metode getter dam setter
	public function getFrequency() {
		return $this->frequency;
	}

	public function setFrequency($frequency) {
		$this->frequency = $frequency;
	}

	public function getMemorySize() {
		return $this->MemorySize;
	}

	public function setMemorySize($MemorySize) {
		$this->MemorySize = $MemorySize;
	}

    public function getSupportsCuda() {
		return $this->supportsCuda;
	}

	public function setSupportsCuda($supportsCuda) {
		$this->supportsCuda = $supportsCuda;
	}

    //untuk print atribut kelas Product
    public function getInfoMemory(){

        echo "Frequency     : ". getBrand()."<br/>";
        echo "Memory Size   : ". getModel()."<br/>";
        echo "Support Cude  : ". getModel()."<br/>";
    } 
}