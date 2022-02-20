/* Saya Silmi Aulia Rohmah mengerjakan Latihan 2 DPBO 2022 C1 
dalam mata kuliah DPBO untuk keberkahanNya maka saya tidak melakukan 
kecurangan seperti yang telah dispesifikasikan. Aamiin */


#include <iostream>
#include <string>
#include <bits/stdc++.h>

using namespace std;


#include "Memory.cpp" //import file class Memory


int main(){

    int n =0, i = 0; //variabel untuk jumlah input dan untuk iterasi

    cout << "Masukan jumlah input : "; 
    cin>>n; //meminta jumlah inputan

    Memory produk[n]; //membuat array objek sebanyak n


    for(i=0; i<n; i++){

        int Price = 0;
        string idProduct;
        string brand;
        string model;
        string frequency;
        string MemorySize;
        string supportsCuda;       

        //lakukan input data produk sebanyak n

        cout << "INPUT PRODUK " << i+1 << endl;

        cout << "ID Product : ";
        cin >> idProduct; 
        cout << "Price : ";
        cin >> Price; 
        cout << "Brand : ";
        cin >> brand; 
        cout << "Model : ";
        cin >> model; 
        cout << "Frequency : ";
        cin >> frequency; 
        cout << "Memory Size : ";
        cin >> MemorySize; 
        cout << "Support Cuda : ";
        cin >> supportsCuda; 
        cout << "\n";

        //gunakan prosedur setter dari objek untuk mengisi atribut
        produk[i].setPrice(Price);
        produk[i].setIdProduct(idProduct);
        produk[i].setBrand(brand);
        produk[i].setModel(model);
        produk[i].setFrequency(frequency);
        produk[i].setMemorySize(MemorySize);
        produk[i].setSupportsCuda(supportsCuda);


    }

    //menampilkan data produk
    for(i=0; i<n; i++){

        cout << "============================" << endl;
        cout << "       Data Produk " << i+1 << endl;
        cout << "============================" << endl;

        //memanggil prosedur get info untuk di print
        produk[i].getInfoProduct();
        produk[i].getInfoHardware();
        produk[i].getInfoMemory();

        cout << "\n";
    }

    return 0;
}
