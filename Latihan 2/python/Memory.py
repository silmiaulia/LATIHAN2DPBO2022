# Saya Silmi Aulia Rohmah mengerjakan Latihan 2 DPBO 2022 C1 
# dalam mata kuliah DPBO untuk keberkahanNya maka saya tidak melakukan 
# kecurangan seperti yang telah dispesifikasikan. Aamiin 

from Hardware import Hardware

class Memory(Hardware): # kelas Memory turunan dari kelas Hardware

    def __init__(self): #Constructor

        # atribut
        self.frequency = "";
        self.MemorySize = "";
        self.supportsCuda = "";


    # metode getter dam setter
    def getFrequency(self):
        return self.frequency
    
    def setFrequency(self, frequency):
        self.frequency = frequency
    
    def getMemorySize(self):
        return self.MemorySize
        
    def setMemorySize(self, MemorySize):
        self.MemorySize = MemorySize

    def getSupportsCuda(self):
        return self.supportsCuda
        
    def setSupportsCuda(self, supportsCuda):
        self.supportsCuda = supportsCuda
      

    # untuk print atribut kelas Memory
    def getInfoMemory(self):
        print("Frequency     : " + self.getFrequency())
        print("Memory Size   : " + self.getMemorySize())
        print("Support Cude  : " + self.getSupportsCuda())
