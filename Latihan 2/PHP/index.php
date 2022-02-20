<?php

/* Saya Silmi Aulia Rohmah mengerjakan Latihan 2 DPBO 2022 C1 
dalam mata kuliah DPBO untuk keberkahanNya maka saya tidak melakukan 
kecurangan seperti yang telah dispesifikasikan. Aamiin */

include "Memory.php"; //include file class Memory 

$produk1 = new Memory(); //membuat objek untuk produk 1

//menggunakan metode setter untuk mengksi atribut
$produk1->setIdProduct("A16000");
$produk1->setPrice(4318000);
$produk1->setBrand("ASUS");
$produk1->setModel("Phoenix GeForce GTX 1050");
$produk1->setFrequency("1354 MHz");
$produk1->setMemorySize("2 GB");
$produk1->setSupportsCuda("Yes");

//meanmpilkan data produk
echo "===============". "<br/>";
echo "Data Produk". "<br/>";
echo "===============". "<br/>";
$produk1->getInfoProduct();
$produk1->getInfoHardware();
$produk1->getInfoMemory();