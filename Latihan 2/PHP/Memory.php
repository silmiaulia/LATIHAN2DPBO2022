<?php

/* Saya Silmi Aulia Rohmah mengerjakan Latihan 2 DPBO 2022 C1 
dalam mata kuliah DPBO untuk keberkahanNya maka saya tidak melakukan 
kecurangan seperti yang telah dispesifikasikan. Aamiin */

include "Hardware.php"; //import class Hardware

class Memory extends Hardware{ //kelas Memory turunan dari kelas Hardware

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

        echo "Frequency     : ". $this->getFrequency()."<br/>";
        echo "Memory Size   : ". $this->getMemorySize()."<br/>";
        echo "Support Cude  : ". $this->getSupportsCuda()."<br/>";
    } 

	public function __destruct(){ //desktruktor

	}
}
