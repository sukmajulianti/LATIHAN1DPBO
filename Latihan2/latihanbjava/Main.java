class Main{
	
	//instansiasi
	public static void main(String[] args){
	SepakBola tim1;
	SepakBola tim2;
	SepakBola tim3;
	SepakBola tim4;
	SepakBola tim5;
	
	//tim pertama
	tim1 = new SepakBola();
	System.out.println("Tim-1");
	tim1.setNama("Nama Tim : Celtic F.C.");
	tim1.setNegara("Negara Asal Tim : Skotlandia");
	tim1.setTahun("Tahun Berdiri Tim : 1887");
	tim1.setPemain("Pemain Tim : 1) Kyogo Furuhashi, 2) Joao Filipe, 3) Reo Hatate");
	tim1.setPendiri("Pendiri/Pemilik Tim : Brother Walfrid");
	tim1.setManajer("Manajer : Ange Postecoglou");
	
	System.out.println(tim1.getNama());
	System.out.println(tim1.getNegara());
	System.out.println(tim1.getTahun());
	System.out.println(tim1.getPemain());
	System.out.println(tim1.getPendiri());
	System.out.println(tim1.getManajer());
	System.out.println();
	
	//tim kedua
	tim2 = new SepakBola();
	System.out.println("Tim-2");
	tim2.setNama("Nama Tim : Olympique de Marseille");
	tim2.setNegara("Negara Asal Tim : Prancis");
	tim2.setTahun("Tahun Berdiri Tim : 1899");
	tim2.setPemain("Pemain Tim : 1) Dimitri Payet, 2) Cengiz Ünder, 3) Cédric Bakambu");
	tim2.setPendiri("Pendiri/Pemilik Tim : Frank McCourt");
	tim2.setManajer("Manajer :  Jorge Sampaoli");
	
	System.out.println(tim2.getNama());
	System.out.println(tim2.getNegara());
	System.out.println(tim2.getTahun());
	System.out.println(tim2.getPemain());
	System.out.println(tim2.getPendiri());
	System.out.println(tim2.getManajer());
	System.out.println();
	
	//tim ketiga
	tim3 = new SepakBola();
	System.out.println("Tim-3");
	tim3.setNama("Nama Tim : Manchester United Football Club");
	tim3.setNegara("Negara Asal Tim : Inggris");
	tim3.setTahun("Tahun Berdiri Tim : 1878");
	tim3.setPemain("Pemain Tim : 1) Cristiano Ronaldo, 2) Mason Greenwood, 3) Paul Pogba");
	tim3.setPendiri("Pendiri/Pemilik Tim :  Lancashire dan Yorkshire Railway");
	tim3.setManajer("Manajer : Ralf Rangnick");
	
	System.out.println(tim3.getNama());
	System.out.println(tim3.getNegara());
	System.out.println(tim3.getTahun());
	System.out.println(tim3.getPemain());
	System.out.println(tim3.getPendiri());
	System.out.println(tim3.getManajer());
	System.out.println();
	
	//tim keempat
	tim4 = new SepakBola();
	System.out.println("Tim-4");
	tim4.setNama("Nama Tim : Chelsea Football Club");
	tim4.setNegara("Negara Asal Tim : Inggris");
	tim4.setTahun("Tahun Berdiri Tim : 1905");
	tim4.setPemain("Pemain Tim : 1) Romelu Lukaku, 2) Edouard Mendy, 3) Mason Mount");
	tim4.setPendiri("Pendiri/Pemilik Tim : Gus Mears dan Joseph Mears");
	tim4.setManajer("Manajer : Thomas Tuchel");
	
	System.out.println(tim4.getNama());
	System.out.println(tim4.getNegara());
	System.out.println(tim4.getTahun());
	System.out.println(tim4.getPemain());
	System.out.println(tim4.getPendiri());
	System.out.println(tim4.getManajer());
	System.out.println();
	
	//tim kelima
	tim5 = new SepakBola();
	System.out.println("Tim-5");
	tim5.setNama("Nama Tim : Arsenal Football Club");
	tim5.setNegara("Negara Asal Tim : Inggris");
	tim5.setTahun("Tahun Berdiri Tim : 1886");
	tim5.setPemain("Pemain Tim : 1) Bukayo Saka, 2) Gabriel Martinelli, 3) Takehiro Tomiyasu");
	tim5.setPendiri("Pendiri/Pemilik Tim : Kroenke Sports & Entertainment");
	tim5.setManajer("Manajer : Mikel Arteta");
	
	System.out.println(tim5.getNama());
	System.out.println(tim5.getNegara());
	System.out.println(tim5.getTahun());
	System.out.println(tim5.getPemain());
	System.out.println(tim5.getPendiri());
	System.out.println(tim5.getManajer());
	System.out.println();

	}
}
