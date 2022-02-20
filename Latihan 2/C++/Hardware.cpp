/* Saya Silmi Aulia Rohmah mengerjakan Latihan 2 DPBO 2022 C1 
dalam mata kuliah DPBO untuk keberkahanNya maka saya tidak melakukan 
kecurangan seperti yang telah dispesifikasikan. Aamiin */

#include <iostream>
#include <string>
#include "Product.cpp"

using namespace std;

class Hardware : public Product{  //class Hardware turunan dari class Product

    private:

        // atribut kelas Hardware
        string brand;
        string model;


    public:

        Hardware(){ //kontruktor kosong
        }

        //metode getter dan setter

        string getBrand(){
            return this->brand;
        }

        void setBrand(string brand){
            this->brand = brand;
        }

        string getModel(){
            return this->model;
        }

        void setModel(string model){
            this->model = model;
        }

        //untuk print atribut kelas Hardware turunan kelas Product
        void getInfoHardware(){
            cout << "Brand         : " << getBrand() << endl;
            cout << "Model         : " << getModel() << endl;
        }

        ~Hardware(){ //destruktor
        }
};

