<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . "/../repository/EspecieRepository.php";
//require_once __DIR__ . "/Controller.php";

$ccliente = new ControllerEspecie();

class ControllerEspecie{

	function __construct(){
		if(isset($_POST["action"])){
			$action = $_POST["action"];
		}else if(isset($_GET["action"])){
			$action = $_GET["action"];
		}
		//print_r($action);

		if(isset($action)){
			$this->callAction($action);
		}else{
			$msg = "Nenhuma acao a ser processada...";
            print_r($msg);
			//include_once "index.php";
		}
	}

    public function callAction(string $functionName = null){
        //print_r($functionName);
        if (method_exists($this, $functionName)) {
            $this->$functionName();
        
        } else if(method_exists($this, "preventDefault")) {
            $met = "preventDefault";
            $this->$met();
        
        } else {
            throw new BadFunctionCallException("Usecase not exists");
        }
    }

    public function loadView(string $path, array $data = null, string $msg = null){
        $caminho = __DIR__ . "/../views/" . $path;
        // echo("msg=");
        // print_r($msg);
        if(file_exists($caminho)){
             require $caminho;
        } else {
            print "Erro ao carregar a view";
        }
    }

    private function create(){
        $especie = new EspecieModel();
        // $cliente->setNome("aaa");
        // $cliente->setTelefone("123213");
        // $cliente->setEmail("asd@asd");

		$especie->setNomePop($_POST["nomePop"]);
		$especie->setNomeCie($_POST["nomeCie"]);
		$especie->setFrutifera($_POST["frutifera"]);
        $especie->setToxidade($_POST["toxidade"]);
        $especie->setComestivel($_POST["comestivel"]);
        $especie->setRaridade($_POST["raridade"]);
        $especie->setMedicinal($_POST["medicinal"]);

        $especieRepository = new EspecieRepository();
        $id = $especieRepository->create($especie);
        //var_dump($id);

        if($id){
			$msg = "Registro inserido com sucesso.";
		}else{
			$msg = "Erro ao inserir o registro no banco de dados.";
		}

        $this->findAll($msg);
    }

    private function loadFormNew(){
        $this->loadView("especies/formCadastroEspecie.php", null,"teste");
    }    

    private function findAll(string $msg = null){
        $especieRepository = new EspecieRepository();

        $especies = $especieRepository->findAll();

        $data['titulo'] = "listar especies";
        $data['especies'] = $especies;

        $this->loadView("especies/list.php", $data, $msg);
    }

    private function findEspecieById(){
        $idParam = $_GET['id'];

        $especieRepository = new EspecieRepository();
        $especie = $especieRepository->findEspecieById($idParam);

        print "<pre>";
        print_r($especie);
        print "</pre>";
    }

    private function deleteEspecieById(){
        $idParam = $_GET['id'];
        $especieRepository = new EspecieRepository();    

        $qt = $especieRepository->deleteById($idParam);
        if($qt){
			$msg = "Registro excluído com sucesso.";
		}else{
			$msg = "Erro ao excluir o registro no banco de dados.";
		}
        $this->findAll($msg);
    }

    private function edit(){
        $idParam = $_GET['id'];
        $especieRepository = new EspecieRepository(); 
        $especie = $especieRepository->findEspecieById($idParam);
        $data['especies'][0] = $especie;

        $this->loadView("especies/formEditaEspecie.php", $data);
    }

    private function update(){
        $especie = new EspecieModel();

		$especie->setIdEspecie($_GET["idEspecie"]);
		$especie->setNomePop($_POST["nomePop"]);
		$especie->setNomeCie($_POST["nomeCie"]);
		$especie->setFrutifera($_POST["frutifera"]);
        $especie->setToxidade($_POST["toxidade"]);
        $especie->setComestivel($_POST["comestivel"]);
        $especie->setRaridade($_POST["raridade"]);
        $especie->setMedicinal($_POST["medicinal"]);

        $especieRepository = new EspecieRepository();
        //print_r($cliente);
        $atualizou = $especieRepository->update($especie);
        
        if($atualizou){
			$msg = "Registro atualizado com sucesso.";
		}else{
			$msg = "Erro ao atualizar o registro no banco de dados.";
		}
		// include_once "cadastrar.php";

        $this->findAll($msg);        
    }

    private function preventDefault() {
        print "Ação indefinida...";
    }
}