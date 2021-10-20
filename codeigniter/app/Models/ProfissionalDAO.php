<?php
namespace App\Models;

use App\Models\Profissional;

class ProfissionalDAO {
	var $servername = "localhost";
	var $username = "root";
	var $password = "";
	var $dbname = "banco";

	public function create($profissional){

		$conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);

		if(!$conn){
			die("Connection failed: ".mysqli_connect_error());
		}

		$sql = "INSERT INTO Profissional (nome, idade, sexo, profissao) VALUES ('".$profissional->getNome()."', ".$profissional->getIdade().",'".$profissional->getSexo()."','".$profissional->getProfissao()."');";

		if(mysqli_query($conn,$sql)){
			return 0;
		} else {
			return "Erro: ".$sql."<br>";
		}
	}


	
	public function read(){
		$conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);

		if(!$conn){
			die("Connection failed: ".mysqli_connect_error());
		}

		$sql = "SELECT * from Profissional;";
		$result = mysqli_query($conn, $sql);

		$profissionais = [];



		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_assoc($result)){
				$profissional = new Profissional();
				$profissional->setId($row["id"]);
				$profissional->setNome($row["nome"]);

				$profissional->setIdade($row["idade"]);

				$profissional->setSexo($row["sexo"]);

				$profissional->setProfissao($row["profissao"]);

				array_push($profissionais,$profissional);
			}

			return $profissionais;
		} else {
			return 1;
		}
	}	


	public function update($profissional){
		$conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);

		if(!$conn){
			die("Connection failed: ".mysqli_connect_error());
		}

		$sql = "UPDATE Profissional SET nome='".$profissional->getNome()."', idade=".$profissional->getIdade().",sexo='".$profissional->getSexo()."',profissao='".$profissional->getProfissao()."' WHERE id=".$profissional->getId().";";

		if(mysqli_query($conn,$sql)){
			return 0;
		} else {
			return "Erro: ".mysqli_error($conn)."<br>";
		}
	}


	public function delete($id){
		$conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);

		if(!$conn){
			die("Connection failed: ".mysqli_connect_error());
		}

		$sql = "DELETE from Profissional WHERE id=".$id.";";
		

		$num = 1;
		if(mysqli_query($conn, $sql)){
			$num = 0;
		}

		mysqli_close($conn);

		return $num;
	}
}

?>