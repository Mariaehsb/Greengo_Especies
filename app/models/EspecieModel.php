<?php
class EspecieModel{
	private $idEspecie;
	private $nomePop;
	private $nomeCie;
	private $frutifera;
	private $toxidade;
	private $comestivel;
	private $raridade;
	private $medicinal;
	
	public function getIdEspecie(): int{
		return $this->idEspecie;
	}
	
	public function setIdEspecie(int $idEspecie){
		$this->idEspecie = $idEspecie;
	}	
	
	public function getNomePop(): string{
		return $this->nomePop;
	}
	
	public function setNomePop(string $np){
		$this->nomePop = $np;
	}

	public function getNomeCie(): string{
		return $this->nomeCie;
	}
	
	public function setNomeCie(string $nc){
		$this->nomeCie = $nc;
	}

	public function getFrutifera(): bollean{
		return $this->frutifera;
	}
	
	public function setFrutifera(bollean $fru){
		$this->frutifera = $fru;
	}

	public function getToxidade(): bollean{
		return $this->toxidade;
	}
	
	public function setToxidade(bollean $tox){
		$this->toxidade = $tox;
	}

	public function getComestivel(): bollean{
		return $this->comestivel;
	}
	
	public function setComestivel(bollean $com){
		$this->comestivel = $com;
	}

	public function getRaridade(): bollean{
		return $this->raridade;
	}
	
	public function setRaridade(bollean $rar){
		$this->raridade = $rar;
	}

	public function getMedicinal(): bollean{
		return $this->medicinal;
	}
	
	public function setMedicinal(bollean $med){
		$this->medicinal = $med;
	}
}

