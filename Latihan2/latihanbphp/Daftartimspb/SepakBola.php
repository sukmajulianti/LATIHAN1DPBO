<?php 
	/* Buat program untuk membuat daftar tim sepakbola yang memiliki atribut
	nama tim, negara asal tim, tahun berdiri tim, serta pemain, menggunakan
	setiap bahasa (C++, PHP, Python dan Java)! */
 
 class SepakBola{

	private $nama;
	private $negara;
	private $tahun;
	private $pemain;
	private $pendiri;
	private $manajer;
		
	function __construct(){
	}
		
	function setNama($nama){
		$this->nama = $nama;
	}
		
	function getNama(){
		return $this->nama;
	}
		
	function setNegara($negara){
		$this->negara = $negara;
	}
		
	function getNegara(){
		return $this->negara;
	}
		
	function setTahun($tahun){
		$this->tahun = $tahun;
	}
		
	function getTahun(){
		return $this->tahun;
	}
		
	function setPemain($pemain){
		$this->pemain = $pemain;
	}
		
	function getPemain(){
		return $this->pemain;
	}
	
	function setPendiri($pendiri){
		$this->pendiri = $pendiri;
	}
		
	function getPendiri(){
		return $this->pendiri;
	}
	
	function setManajer($manajer){
		$this->manajer = $manajer;
	}
		
	function getManajer(){
		return $this->manajer;
	}
		
	 function __destruct(){
	 }
}
?>
