# Saya Silmi Aulia Rohmah mengerjakan Latihan 2 DPBO 2022 C1 
# dalam mata kuliah DPBO untuk keberkahanNya maka saya tidak melakukan 
# kecurangan seperti yang telah dispesifikasikan. Aamiin 


from Memory import Memory #melakukan import class

n = 0 # untuk menyimpan jumlah input
i = 0 # untuk iterasi

n = int(input("Masukan jumlah input : ")) # meminta banyak jumlah input


produk = [Memory() for i in range(n)] # membuat array objek 

for i in range(n):

    print("INPUT PRODUK " + str(i+1));

    # melakukan input data produk sebanyak n

    print("ID Product : ", end ="")
    idProduct = str(input())

    print("Price : ", end ="")
    Price = int(input())

    print("Brand : ", end ="")
    brand = str(input())

    print("Model : ", end ="")
    model = str(input())

    print("Frequency : ", end ="")
    frequency = str(input())

    print("Memory Size : ", end ="")
    MemorySize = str(input())

    print("Support Cuda : ", end ="")
    supportsCuda = str(input())
    print()

    # gunakan prosedur setter dari objek untuk mengisi atribut
    produk[i].setPrice(Price)
    produk[i].setIdProduct(idProduct)
    produk[i].setBrand(brand)
    produk[i].setModel(model)
    produk[i].setFrequency(frequency)
    produk[i].setMemorySize(MemorySize)
    produk[i].setSupportsCuda(supportsCuda)



for i in range(n):
    # menampilkan data produk
    print("============================")
    print("        Data Produk " + str(i+1))
    print("============================")

    # memanggil prosedur get info untuk di print
    produk[i].getInfoProduct()
    produk[i].getInfoHardware()
    produk[i].getInfoMemory()

    print()

