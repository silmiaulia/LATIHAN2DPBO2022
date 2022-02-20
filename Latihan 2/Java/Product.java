/* Saya Silmi Aulia Rohmah mengerjakan Latihan 2 DPBO 2022 C1 
dalam mata kuliah DPBO untuk keberkahanNya maka saya tidak melakukan 
kecurangan seperti yang telah dispesifikasikan. Aamiin */

public class Product{

    //atribut private kelas product
    private int price = 0;
    private String idProduct = "";

    
    public Product(){ //konstruktor kosong

    }

    //metode getter dan setter
	public int getPrice() {
		return this.price;
	}

	public void setPrice(int price) {
		this.price = price;
	}

	public String getIdProduct() {
		return this.idProduct;
	}

	public void setIdProduct(String idProduct) {
		this.idProduct = idProduct;
	}

    //untuk print atribut kelas Product
    public void getInfoProduct(){

        System.out.println("ID Product    : " + getIdProduct());
        System.out.println("Price         : " + getPrice());
        
    } 

}