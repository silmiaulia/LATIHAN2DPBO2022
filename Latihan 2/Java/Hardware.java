/* Saya Silmi Aulia Rohmah mengerjakan Latihan 2 DPBO 2022 C1 
dalam mata kuliah DPBO untuk keberkahanNya maka saya tidak melakukan 
kecurangan seperti yang telah dispesifikasikan. Aamiin */

class Hardware extends Product{ //class Hardware turunan dari class Product

    //atribut private kelas hardware
    private String brand = "";
    private String model = "";


    public Hardware(){ //kontruktor kosong

    }

    //metode getter dan setter

	public String getBrand() {
		return this.brand;
	}

	public void setBrand(String brand) {
		this.brand = brand;
	}

	public String getModel() {
		return this.model;
	}

	public void setModel(String model) {
		this.model = model;
	}

    //untuk print atribut kelas Hardware turunan kelas Product
    public void getInfoHardware(){

        System.out.println("Brand         : " + getBrand());
        System.out.println("Model         : " + getModel());
        
    } 


}