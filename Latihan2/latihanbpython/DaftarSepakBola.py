class Sepakbola():
    #private atribut 
    __nama = ""
    __negara = ""
    __tahun = 0
    __pemain = ""
    __pendiri = ""
    __manajer = ""

    #constructor
    def __init__(self, nama = "", negara = "", tahun = 0, pemain = "", pendiri = "", manajer = ""):
        self.__nama = nama
        self.__negara = negara
        self.__tahun = tahun
        self.__pemain = pemain
        self.__pendiri = pendiri
        self.__manajer = manajer
    
    def setNama(self, nama):
        self.__nama = nama
    
    def getNama(self):
        return self.__nama
    
    def setNegara(self, negara):
        self.__negara = negara
    
    def getNegara(self):
        return self.__negara

    def setTahun(self, tahun):
        self.__tahun = tahun
    
    def getTahun(self):
        return self.__tahun
    
    def setPemain(self, pemain):
        self.__pemain = pemain
    
    def getPemain(self):
        return self.__pemain

    def setPendiri(self, pendiri):
        self.__pendiri = pendiri
    
    def getPendiri(self):
        return self.__pendiri
    
    def setManajer(self, manajer):
        self.__manajer = manajer
    
    def getManajer(self):
        return self.__manajer