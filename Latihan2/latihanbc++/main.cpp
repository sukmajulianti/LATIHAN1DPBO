#include <iostream>
#include <string>

using namespace std;
#include "SepakBola.cpp"

int main(){
	
	//instansi objek tim sepak bola menggunakan setter dari objek
	SepakBola tim1;
	SepakBola tim2;
	SepakBola tim3;
	SepakBola tim4;
	SepakBola tim5;
	
	//tim pertama
	cout << ("Tim-1") << endl;
	tim1.setNama("Nama Tim : Celtic F.C.");
	tim1.setNegara("Negara Asal Tim : Skotlandia");
	tim1.setTahun("Tahun Berdiri Tim : 1887");
	tim1.setPemain("Pemain Tim : 1) Kyogo Furuhashi, 2) Joao Filipe, 3) Reo Hatate");
	tim1.setPendiri("Pendiri/Pemilik Tim : Brother Walfrid");
	tim1.setManajer("Manajer : Ange Postecoglou");
	
	cout << tim1.getNama() << endl;
	cout << tim1.getNegara() << endl;
	cout << tim1.getTahun() << endl;
	cout << tim1.getPemain() << endl;
	cout << tim1.getPendiri() << endl;
	cout << tim1.getManajer() << endl;
	cout << (" ") << endl;
	
	//tim kedua
	cout << ("Tim-2") << endl;
	tim2.setNama("Nama Tim : Olympique de Marseille");
	tim2.setNegara("Negara Asal Tim : Prancis");
	tim2.setTahun("Tahun Berdiri Tim : 1899");
	tim2.setPemain("Pemain Tim : 1) Dimitri Payet, 2) Cengiz Under, 3) Cedric Bakambu");
	tim2.setPendiri("Pendiri/Pemilik Tim : Frank McCourt");
	tim2.setManajer("Manajer :  Jorge Sampaoli");
	
	cout << tim2.getNama() << endl;
	cout << tim2.getNegara() << endl;
	cout << tim2.getTahun() << endl;
	cout << tim2.getPemain() << endl;
	cout << tim2.getPendiri() << endl;
	cout << tim2.getManajer() << endl;
	cout << (" ") << endl;
	
	//tim ketiga
	cout << ("Tim-3") << endl;
	tim3.setNama("Nama Tim : Manchester United Football Club");
	tim3.setNegara("Negara Asal Tim : Inggris");
	tim3.setTahun("Tahun Berdiri Tim : 1878");
	tim3.setPemain("Pemain Tim : 1) Cristiano Ronaldo, 2) Mason Greenwood, 3) Paul Pogba");
	tim3.setPendiri("Pendiri/Pemilik Tim :  Lancashire dan Yorkshire Railway");
	tim3.setManajer("Manajer : Ralf Rangnick");
	
	cout << tim3.getNama() << endl;
	cout << tim3.getNegara() << endl;
	cout << tim3.getTahun() << endl;
	cout << tim3.getPemain() << endl;
	cout << tim3.getPendiri() << endl;
	cout << tim3.getManajer() << endl;
	cout << (" ") << endl;
	
	//tim keempat
	cout << ("Tim-4") << endl;
	tim4.setNama("Nama Tim : Chelsea Football Club");
	tim4.setNegara("Negara Asal Tim : Inggris");
	tim4.setTahun("Tahun Berdiri Tim : 1905");
	tim4.setPemain("Pemain Tim : 1) Romelu Lukaku, 2) Edouard Mendy, 3) Mason Mount");
	tim4.setPendiri("Pendiri/Pemilik Tim : Gus Mears dan Joseph Mears");
	tim4.setManajer("Manajer : Thomas Tuchel");
	
	cout << tim4.getNama() << endl;
	cout << tim4.getNegara() << endl;
	cout << tim4.getTahun() << endl;
	cout << tim4.getPemain() << endl;
	cout << tim4.getPendiri() << endl;
	cout << tim4.getManajer() << endl;
	cout << (" ") << endl;
	
	//tim kelima
	cout << ("Tim-5") << endl;
	tim5.setNama("Nama Tim : Arsenal Football Club");
	tim5.setNegara("Negara Asal Tim : Inggris");
	tim5.setTahun("Tahun Berdiri Tim : 1886");
	tim5.setPemain("Pemain Tim : 1) Bukayo Saka, 2) Gabriel Martinelli, 3) Takehiro Tomiyasu");
	tim5.setPendiri("Pendiri/Pemilik Tim : Kroenke Sports & Entertainment");
	tim5.setManajer("Manajer : Mikel Arteta");
	
	cout << tim5.getNama() << endl;
	cout << tim5.getNegara() << endl;
	cout << tim5.getTahun() << endl;
	cout << tim5.getPemain() << endl;
	cout << tim5.getPendiri() << endl;
	cout << tim5.getManajer() << endl;
	cout << (" ") << endl;
	
	
	return 0;
}
