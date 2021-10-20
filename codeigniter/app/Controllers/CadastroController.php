<?php
namespace App\Controllers;


use App\Models\ProfissionalDAO;
use App\Models\Profissional;

class CadastroController extends BaseController {

	public function index(){
		return view('index');
	}

	public function cadastrar(){
		$profissional = new Profissional();
		$profissionalDAO = new ProfissionalDAO();

		$request = service('request');

        $request->uri->getPath();

        $nome = $request->getPost('nome');
        $idade = $request->getPost('idade');
        $sexo = $request->getPost('sexo');
        $profissao = $request->getPost('profissao');

        $profissional->setNome($nome);
        $profissional->setIdade($idade);
        $profissional->setSexo($sexo);
        $profissional->setProfissao($profissao);


        $check = $profissionalDAO->create($profissional);

        if($check === 0){
        	return redirect()->to('http://localhost:8080/codeigniter/public/');
        } else {
        	return $check;
        }
	}


	public function ler(){
		$profissionalDAO = new ProfissionalDAO();

		$profissionais = $profissionalDAO->read();

		$data['profissionais'] = $profissionais;

		return view('dados', $data);		
	}

	public function alterar($id){
		$profissionalDAO = new ProfissionalDAO();

		$profissionais = $profissionalDAO->read();

		$data['profissionais'] = $profissionais;

		$data['id'] = $id;

		return view('dados', $data);

	}

	public function computarAlteracao(){

		$profissional = new Profissional();
		$profissionalDAO = new ProfissionalDAO();

		$request = service('request');

        $request->uri->getPath();

        $id = $request->getPost('id');
        $nome = $request->getPost('nome');
        $idade = $request->getPost('idade');
        $sexo = $request->getPost('sexo');
        $profissao = $request->getPost('profissao');

        $profissional->setNome($nome);
        $profissional->setIdade($idade);
        $profissional->setSexo($sexo);
        $profissional->setProfissao($profissao);
        $profissional->setId($id);


        $check = $profissionalDAO->update($profissional);

        if($check === 0){
        	return redirect()->to('http://localhost:8080/codeigniter/public/ler');
        } else {
        	return $check;
        }


	}


	public function deletar($id){
		
		$profissionalDAO = new profissionalDAO();

		$check = $profissionalDAO->delete($id);

		if($check == 0){
			return redirect()->to('http://localhost:8080/codeigniter/public/ler');
		} else {
			return "Um erro ocorreu. O registro ".$id." não foi apagado.";
		}
	}
}