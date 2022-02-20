/* Saya Silmi Aulia Rohmah mengerjakan Latihan 2 DPBO 2022 C1 
dalam mata kuliah DPBO untuk keberkahanNya maka saya tidak melakukan 
kecurangan seperti yang telah dispesifikasikan. Aamiin */

class Memory extends Hardware{ //kelas Memory turunan dari kelas Hardware

    //atribut private kelas Memory
    private String frequency = "";
    private String MemorySize = "";
    private String supportsCuda = "";


    public Memory(){ //konstruktor kosong

    }

    //metode getter dan setter

    public String getFrequency() {
		return this.frequency;
	}

	public void setFrequency(String frequency) {
		this.frequency = frequency;
	}

	public String getMemorySize() {
		return this.MemorySize;
	}

	public void setMemorySize(String MemorySize) {
		this.MemorySize = MemorySize;
	}

	public String getSupportsCuda() {
		return this.supportsCuda;
	}

	public void setSupportsCuda(String supportsCuda) {
		this.supportsCuda = supportsCuda;
	}

    //untuk print atribut kelas Memory turunan kelas Hardware
    public void getInfoMemory(){
            
        System.out.println("Frequency     : " + getFrequency());
        System.out.println("Memory Size   : " + getMemorySize());
        System.out.println("Support Cude  : " + getSupportsCuda());

    } 

    
}