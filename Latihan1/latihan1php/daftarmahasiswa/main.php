<?php

	/* Buat program untuk membuat daftar mahasiswa yang memiliki atribut
	NIM, Nama, Jenis Kelamin, Program Studi, dan Semester, menggunakan
	bahasa PHP! */
	
	//menyertakan file sebelumnya pada main
	include "Mahasiswa.php";
	
	//proses set dan get dalam menampilkan output di browser
	echo "<h2> UNIVERSITAS PENDIDIKAN INDONESIA </h2>";
	$kmahasiswa = new Mahasiswa();
	$kmahasiswa->setNim("NIM : 2009110");
	$kmahasiswa->setNama("NAMA : SUKMA JULIANTI");
	$kmahasiswa->setGender("JENIS KELAMIN : PEREMPUAN");
	$kmahasiswa->setProdi("PROGRAM STUDI : ILMU KOMPUTER");
	$kmahasiswa->setSemester("SEMESTER : 4");
	
	echo $kmahasiswa->getNim()."<br/>";
	echo $kmahasiswa->getNama()."<br/>";
	echo $kmahasiswa->getGender()."<br/>";
	echo $kmahasiswa->getProdi()."<br/>";
	echo $kmahasiswa->getSemester()."<br/>";
	
	echo "<br/>";
	$kmahasiswa2 = new Mahasiswa();
	$kmahasiswa2->setNim("NIM : 2001286");
	$kmahasiswa2->setNama("NAMA : FARAH DWI A");
	$kmahasiswa2->setGender("JENIS KELAMIN : PEREMPUAN");
	$kmahasiswa2->setProdi("PROGRAM STUDI : ILMU KOMPUTER");
	$kmahasiswa2->setSemester("SEMESTER : 4");
	
	echo $kmahasiswa2->getNim()."<br/>";
	echo $kmahasiswa2->getNama()."<br/>";
	echo $kmahasiswa2->getGender()."<br/>";
	echo $kmahasiswa2->getProdi()."<br/>";
	echo $kmahasiswa2->getSemester()."<br/>";
	
	echo "<br/>";
	$kmahasiswa3 = new Mahasiswa();
	$kmahasiswa3->setNim("NIM : 2000793");
	$kmahasiswa3->setNama("NAMA : DEVA SHOFA AL-FATHIN");
	$kmahasiswa3->setGender("JENIS KELAMIN : PEREMPUAN");
	$kmahasiswa3->setProdi("PROGRAM STUDI : ILMU KOMPUTER");
	$kmahasiswa3->setSemester("SEMESTER : 4");
	
	echo $kmahasiswa3->getNim()."<br/>";
	echo $kmahasiswa3->getNama()."<br/>";
	echo $kmahasiswa3->getGender()."<br/>";
	echo $kmahasiswa3->getProdi()."<br/>";
	echo $kmahasiswa3->getSemester()."<br/>";
	
	
?>
