<?php

	/* Buat program untuk membuat daftar tim sepakbola yang memiliki atribut
	nama tim, negara asal tim, tahun berdiri tim, serta pemain, menggunakan
	setiap bahasa (C++, PHP, Python dan Java)! */

	include "SepakBola.php";
	
	echo "<h2> TIM SEPAKBOLA </h2>";
	
	//tim pertama
	$tim1 = new SepakBola();
	echo "Tim-1 <br/>";
	$tim1->setNama("Nama Tim : Celtic F.C.");
	$tim1->setNegara("Negara Asal Tim : Skotlandia");
	$tim1->setTahun("Tahun Berdiri Tim : 1887");
	$tim1->setPemain ("Pemain Tim : 1) Kyogo Furuhashi, 2) Joao Filipe, 3) Reo Hatate");
	$tim1->setPendiri("Pendiri/Pemilik Tim : Brother Walfrid");
	$tim1->setManajer("Manajer : Ange Postecoglou");
	
	echo $tim1->getNama()."<br/>";
	echo $tim1->getNegara()."<br/>";
	echo $tim1->getTahun()."<br/>";
	echo $tim1->getPemain()."<br/>";
	echo $tim1->getPendiri()."<br/>";
	echo $tim1->getManajer()."<br/>";
	
	//tim kedua
	$tim2 = new SepakBola();
	echo "<br/>";
	echo "Tim-2 <br/>";
	$tim2->setNama("Nama Tim : Olympique de Marseille");
	$tim2->setNegara("Negara Asal Tim : Prancis");
	$tim2->setTahun("Tahun Berdiri Tim : 1899");
	$tim2->setPemain("Pemain Tim : 1) Dimitri Payet, 2) Cengiz Ünder, 3) Cédric Bakambu");
	$tim2->setPendiri("Pendiri/Pemilik Tim : Frank McCourt");
	$tim2->setManajer("Manajer :  Jorge Sampaoli");
	
	echo $tim2->getNama()."<br/>";
	echo $tim2->getNegara()."<br/>";
	echo $tim2->getTahun()."<br/>";
	echo $tim2->getPemain()."<br/>";
	echo $tim2->getPendiri()."<br/>";
	echo $tim2->getManajer()."<br/>";
	
	//tim ketiga
	$tim3 = new SepakBola();
	echo "<br/>";
	echo "Tim-3 <br/>";
	$tim3->setNama("Nama Tim : Manchester United Football Club");
	$tim3->setNegara("Negara Asal Tim : Inggris");
	$tim3->setTahun("Tahun Berdiri Tim : 1878");
	$tim3->setPemain("Pemain Tim : 1) Cristiano Ronaldo, 2) Mason Greenwood, 3) Paul Pogba");
	$tim3->setPendiri("Pendiri/Pemilik Tim :  Lancashire dan Yorkshire Railway");
	$tim3->setManajer("Manajer : Ralf Rangnick");
	
	echo $tim3->getNama()."<br/>";
	echo $tim3->getNegara()."<br/>";
	echo $tim3->getTahun()."<br/>";
	echo $tim3->getPemain()."<br/>";
	echo $tim3->getPendiri()."<br/>";
	echo $tim3->getManajer()."<br/>";
	
	//tim keempat
	$tim4 = new SepakBola();
	echo "<br/>";
	echo "Tim-4 <br/>";
	$tim4->setNama("Nama Tim : Chelsea Football Club");
	$tim4->setNegara("Negara Asal Tim : Inggris");
	$tim4->setTahun("Tahun Berdiri Tim : 1905");
	$tim4->setPemain("Pemain Tim : 1) Romelu Lukaku, 2) Edouard Mendy, 3) Mason Mount");
	$tim4->setPendiri("Pendiri/Pemilik Tim : Gus Mears dan Joseph Mears");
	$tim4->setManajer("Manajer : Thomas Tuchel");
	
	echo $tim4->getNama()."<br/>";
	echo $tim4->getNegara()."<br/>";
	echo $tim4->getTahun()."<br/>";
	echo $tim4->getPemain()."<br/>";
	echo $tim4->getPendiri()."<br/>";
	echo $tim4->getManajer()."<br/>";
	
	//tim kelima
	$tim5 = new SepakBola();
	echo "<br/>";
	echo "Tim-5 <br/>";
	$tim5->setNama("Nama Tim : Arsenal Football Club");
	$tim5->setNegara("Negara Asal Tim : Inggris");
	$tim5->setTahun("Tahun Berdiri Tim : 1886");
	$tim5->setPemain("Pemain Tim : 1) Bukayo Saka, 2) Gabriel Martinelli, 3) Takehiro Tomiyasu");
	$tim5->setPendiri("Pendiri/Pemilik Tim : Kroenke Sports & Entertainment");
	$tim5->setManajer("Manajer : Mikel Arteta");
	
	echo $tim5->getNama()."<br/>";
	echo $tim5->getNegara()."<br/>";
	echo $tim5->getTahun()."<br/>";
	echo $tim5->getPemain()."<br/>";
	echo $tim5->getPendiri()."<br/>";
	echo $tim5->getManajer()."<br/>";
	
?>