<?php

class Usuario {

	private $idteste;
	private $nome;
	private $idade;
	private $inserido;

	public function getIdteste(){
		return $this->idteste;
	}

	public function setIdteste($value){
		$this->idteste=$value;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($value){
		$this->nome=$value;
	}

	public function getIdade(){
		return $this->idade;
	}

	public function setIdade($value){
		$this->idade=$value;
	}

	public function getInserido(){
		return $this->inserido;
	}

	public function setInserido($value){
		$this->inserido=$value;
	}

	public function loadById($id){

		$sql = new Sql();
		$results = $sql->select("SELECT * FROM teste WHERE id_teste = :id", array(
			":ID"=>$id
		));

		if (count($results) > 0){

			$row = $results[0];

			$this->setIdteste($row['id_teste']);
			$this->setNome($row['nome']);
			$this->setIdade($row['idade']);
			$this->setInserido(new DateTime($row['inserido']));

		}
	}

	public function __toString(){

		return json_encode(array(
			"idteste"=>$this->getIdteste(),
			"nome"=>$this->getNome(),
			"idade"=>$this->getIdade(),
			"inserido"=>$this->getInserido()->format("d/m/Y H:i:s")
		));
	}

}



?>