
# Saya Silmi Aulia Rohmah mengerjakan Latihan 2 DPBO 2022 C1 
# dalam mata kuliah DPBO untuk keberkahanNya maka saya tidak melakukan 
# kecurangan seperti yang telah dispesifikasikan. Aamiin 

class Product:


    def __init__(self): #Constructor

        # atribut
        self.price = 0
        self.idProduct = ""


    # metode getter dam setter

    def getPrice(self):
        return self.price
    
    def setPrice(self, price):
        self.price = price
    
    def getIdProduct(self):
        return self.idProduct
    
    def setIdProduct(self, idProduct):
        self.idProduct = idProduct
    

    # untuk print atribut kelas Product
    def getInfoProduct(self):
        print("ID Product    : " + self.getIdProduct())
        print("Price         : " + str(self.getPrice()))
    
