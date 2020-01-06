<?php

	class Buah{
		// property
		private $buah;
		private $berat;

		// metod

		public function SetNamaBuah($buh){
			$this->buah=$buh;
		}
		public function TampilNama(){
			echo "saya suka dengan buah  :".$this->buah;
		}
		public function Berat ($br){
			$this->berat=$br;
		}
		public function PrintBerat(){
			echo "dan saya beli apel sebanyak :".$this->berat." kg , ditoko sebelah";
		}



	}

	$nama=new Buah();
	$nama->SetNamaBuah('apel');
	$nama->TampilNama();
	$nama->Berat(20);
	$nama->PrintBerat();

