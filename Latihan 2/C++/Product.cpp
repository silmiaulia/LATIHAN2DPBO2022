/* Saya Silmi Aulia Rohmah mengerjakan Latihan 2 DPBO 2022 C1 
dalam mata kuliah DPBO untuk keberkahanNya maka saya tidak melakukan 
kecurangan seperti yang telah dispesifikasikan. Aamiin */


#include <iostream>
#include <string>

using namespace std;

class Product{ 

    private:
        // atribut class Product
        int price;
        string IdProduct;

    
    public:

        Product(){ //konstruktor kosong
        }

        // metode getter dan setter

        int getPrice(){
            return this->price;
        }

        void setPrice(int price){
            this->price = price;
        }

        string getIdProduct(){
            return this->IdProduct;
        }

        void setIdProduct(string IdProduct){
            this->IdProduct = IdProduct;
        }
        
        //untuk print atribut kelas Product
        void getInfoProduct(){
            cout << "ID Product    : " << getIdProduct() << endl;
            cout << "Price         : " << getPrice() << endl;
        }

        ~Product(){ //destruktor
        }
};

