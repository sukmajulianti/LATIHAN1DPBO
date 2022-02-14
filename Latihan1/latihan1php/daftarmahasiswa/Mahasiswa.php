<?php 
	/* Buat program untuk membuat daftar mahasiswa yang memiliki atribut
	NIM, Nama, Jenis Kelamin, Program Studi, dan Semester, menggunakan
	bahasa PHP! */
 
 class Mahasiswa{

	private $nim;
	private $nama;
	private $jenis_kelamin;
	private $prodi;
	private $semester;
		
	function __construct(){
	}
		
		
	function setNim($nim){
		$this->nim = $nim;
	}
		
	function getNim(){
		return $this->nim;
	}
		
	function setNama($nama){
		$this->nama = $nama;
	}
		
	function getNama(){
		return $this->nama;
	}
		
	function setGender($jenis_kelamin){
		$this->jenis_kelamin = $jenis_kelamin;
	}
		
	function getGender(){
		return $this->jenis_kelamin;
	}
		
	function setProdi($prodi){
		$this->prodi = $prodi;
	}
		
	function getProdi(){
		return $this->prodi;
	}
	
	function setSemester($semester){
		$this->semester = $semester;
	}
		
	function getSemester(){
		return $this->semester;
	}
		
	 function __destruct(){
	 }
}
?>