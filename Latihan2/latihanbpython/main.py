from DaftarSepakBola import Sepakbola


#pake setter

tim1 = Sepakbola("Celtic F.C.", "Skotlandia", 1887, "1) Kyogo Furuhashi, 2) Joao Filipe, 3) Reo Hatate", "Brother Walfrid", "Ange Postecoglou")

#ambil nilainya dengan getter
print("Tim-1")
print("Nama Tim : " + str(tim1.getNama()))
print("Negara Asal Tim : " + str(tim1.getNegara()))
print("Tahun Berdiri Tim : " + str(tim1.getTahun()))
print("Pemain Tim : " + str(tim1.getPemain()))
print("Pendiri/Pemilik Tim : " + str(tim1.getPendiri()))
print("Manajer : " + str(tim1.getManajer()))
print("\n")

tim2 = Sepakbola("Olympique de Marseille", "Prancis", 1899, "1) Dimitri Payet, 2) Cengiz Under, 3) Cedric Bakambu", "Frank McCourt", "Jorge Sampaoli")
#ambil nilainya dengan getter
print("Tim-2")
print("Nama Tim : " + str(tim2.getNama()))
print("Negara Asal Tim : " + str(tim2.getNegara()))
print("Tahun Berdiri Tim : " + str(tim2.getTahun()))
print("Pemain Tim : " + str(tim2.getPemain()))
print("Pendiri/Pemilik Tim : " + str(tim2.getPendiri()))
print("Manajer : " + str(tim2.getManajer()))