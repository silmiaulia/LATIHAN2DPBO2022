/* Saya Silmi Aulia Rohmah mengerjakan Latihan 2 DPBO 2022 C1 
dalam mata kuliah DPBO untuk keberkahanNya maka saya tidak melakukan 
kecurangan seperti yang telah dispesifikasikan. Aamiin */

#include <iostream>
#include <string>
#include "Hardware.cpp"

using namespace std; 

class Memory : public Hardware{ //kelas Memory turunan dari kelas Hardware

    private:
        // atribut class Memory
        string frequency;
        string MemorySize;
        string supportsCuda;


    public:

        Memory(){ //konstruktor kosong
        }

        //metode getter dan setter
        string getFrequency() {
            return this->frequency;
        }

        void setFrequency(string frequency){
            this->frequency = frequency;
        }

        string getMemorySize(){
            return this->MemorySize;
        }

        void setMemorySize(string MemorySize){
            this->MemorySize = MemorySize;
        }

        string getSupportsCuda(){
            return this->supportsCuda;
        }

        void setSupportsCuda(string supportsCuda){
            this->supportsCuda = supportsCuda;
        }

        //untuk print atribut kelas Memory turunan kelas Hardware
        void getInfoMemory(){
            cout << "Frequency     : " << getFrequency() << endl;
            cout << "Memory Size   : " << getMemorySize() << endl;
            cout << "Support Cude  : " << getSupportsCuda() << endl;
            
        }

        ~Memory(){ //destruktor
        }
};

