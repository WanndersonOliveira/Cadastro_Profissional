<?php
namespace App\Models;

class Profissional {
	var $id;
	var $nome;
	var $idade;
	var $sexo;
	var $profissao;

	public function setId($id){
		$this->id = $id;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function setIdade($idade){
		$this->idade = $idade;
	}

	public function setSexo($sexo){
		$this->sexo = $sexo;
	}

	public function setProfissao($profissao){
		$this->profissao = $profissao;
	}

	public function getId(){
		return $this->id;
	}

	public function getNome(){
		return $this->nome;
	}

	public function getIdade(){
		return $this->idade;
	}

	public function getSexo(){
		return $this->sexo;
	}

	public function getProfissao(){
		return $this->profissao;
	}

}

?>