# Saya Silmi Aulia Rohmah mengerjakan Latihan 2 DPBO 2022 C1 
# dalam mata kuliah DPBO untuk keberkahanNya maka saya tidak melakukan 
# kecurangan seperti yang telah dispesifikasikan. Aamiin 

from Product import Product

class Hardware(Product): # class Hardware turunan dari class Product

    def __init__(self): #Constructor

        # atribut
        self.brand = "";
        self.model = "";


    # metode getter dam setter

    def getBrand(self):
        return self.brand
    
    def setBrand(self, brand):
        self.brand = brand
    
    def getModel(self):
        return self.model
        
    def setModel(self, model):
        self.model = model
    

    # untuk print atribut kelas Hardware
    def getInfoHardware(self):
        print("Brand         : " + self.getBrand())
        print("Model         : " + self.getModel())
