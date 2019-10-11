<?php

	class Carro {
		private $modelo;
		private $marca;
		private $cor;
		private $ano;
		private $placa;
		
		public function getModelo(){
			echo $this->modelo;
		}
		public function setModelo($md){
			$this->modelo = $md;
		}
		public function getMarca(){
			echo $this->marca;
		}
		public function setMarca($ma){
			$this->marca = $ma;
		}
		public function getCor(){
			echo $this->cor;
		}
		public function setCor($co){
			$this->cor = $co;
		}
		public function getAno(){
			echo $this->ano;
		}
		public function setAno($an){
			$this->ano = $an;
		}
		public function getPlaca(){
			echo $this->placa;
		}
		public function setPlaca($plac){
			$this->placa = $plac;
		}
	}

?>