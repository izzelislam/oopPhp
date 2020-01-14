<?php

namespace \kendaraan\mobil;

class Kursi{
	private $jumlahKursi;
	private $jumlahRoda;

	public function setJumlahKursi($krs)
	{
		$this->jumlahKursi=$krs;
	}

	public function setJumlahroda($rda)
	{
		$this->jumlahRoda=$rda;
	}

	public function hasil()
	{
	   	return	$this->jumlahKursi." :  roda , dan rodanya :".$this->jumlahRoda;
	} 
}

$jkr=new Kursi();
$jkr->setJumlahKursi(9);
$jkr->setJumlahroda(100);
echo $jkr->hasil();