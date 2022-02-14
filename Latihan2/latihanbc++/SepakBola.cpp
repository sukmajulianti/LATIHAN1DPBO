class SepakBola{
	
	private:
	string nama;
	string negara;
	string tahun;
	string pemain;
	string pendiri;
	string manajer;
	
	public:
	SepakBola(){
	}
	
	void setNama(string nama){
		this->nama = nama;
	}
	
	string getNama(){
		return this->nama;
	}
	
	void setNegara(string negara){
		this->negara = negara;
	}
	
	string getNegara(){
		return this->negara;
	}
	
	void setTahun(string tahun){
		this->tahun = tahun;
	}
	
	string getTahun(){
		return this->tahun;
	}
	
	void setPemain(string pemain){
		this->pemain = pemain;
	}
	
	string getPemain(){
		return this->pemain;
	}
	
	void setPendiri(string pendiri){
		this->pendiri = pendiri;
	}
	
	string getPendiri(){
		return this->pendiri;
	}
	
	void setManajer(string manajer){
		this->manajer = manajer;
	}
	
	string getManajer(){
		return this->manajer;
	}
	
	~SepakBola(){
	}
};
	
	