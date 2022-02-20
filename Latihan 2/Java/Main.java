/* Saya Silmi Aulia Rohmah mengerjakan Latihan 2 DPBO 2022 C1 
dalam mata kuliah DPBO untuk keberkahanNya maka saya tidak melakukan 
kecurangan seperti yang telah dispesifikasikan. Aamiin */

import java.util.*;

public class Main{

    public static void main(String[] args){


        int n =0, i = 0; //inisialisasi variabel untuk jumlah input dan iterasi

        System.out.print("Masukan jumlah input : "); 
        
        Scanner sc = new Scanner(System.in); //untuk scanner

        //meminta jumlah input produk
        try{

            n = Integer.parseInt(sc.nextLine());

        }catch(Exception e){}

    
        Memory[] produk = new Memory[n]; //membuat array objek 

        for(i=0; i<n; i++){

            //melakukan input data produk sebanyak n

            int Price = 0;
            String idProduct = "";
            String brand = "";
            String model = "";
            String frequency = "";
            String MemorySize = "";
            String supportsCuda = "";

            System.out.println("INPUT PRODUK " + (i+1));
            
            System.out.print("ID Product : ");
            try{

                idProduct = sc.nextLine();

            }catch(Exception e){}

            System.out.print("Price : ");
            try{

                Price = Integer.parseInt(sc.nextLine());

            }catch(Exception e){}

            System.out.print("Brand : ");
            try{

                brand = sc.nextLine();

            }catch(Exception e){}

            System.out.print("Model : ");
            try{

                model = sc.nextLine();

            }catch(Exception e){}

            System.out.print("Frequency : ");
            try{

                frequency = sc.nextLine();

            }catch(Exception e){}

            System.out.print("Memory Size : ");
            try{

                MemorySize = sc.nextLine();

            }catch(Exception e){}

            System.out.print("Support Cuda : ");
            try{

                supportsCuda = sc.nextLine();

            }catch(Exception e){}

            System.out.println();
            
            produk[i] = new Memory(); //instantiation

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

            System.out.println("============================");
            System.out.println("       Data Produk " + (i+1));
            System.out.println("============================");

            //memanggil prosedur get info untuk di print
            produk[i].getInfoProduct();
            produk[i].getInfoHardware();
            produk[i].getInfoMemory();

            System.out.println();
        }
        
    }
}