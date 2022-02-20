<?php
include ("Product.php"); //include file class 
include ("Hardware.php"); //include file class 
include ("Memory.php"); //include file class 

$produk1 = new Memory(); //membuat objek untuk produk 1

$produk1->setIdProduct("AAA");
$produk1->setPrice(120000);
$produk1->setBrand("ds");
$produk1->setModel("");
$produk1->setFrequency("12 ");
$produk1->setMemorySize("sfs");
$produk1->setSupportsCuda("sf");

//meanmpilkan data produk

$produk1->getInfoProduct();
$produk1->getInfoHardware();
$produk1->getInfoMemory();