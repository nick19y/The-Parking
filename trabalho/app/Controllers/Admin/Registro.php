<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\RegistroModel;
use App\Models\PrecoModel;

// TALVEZ O ERRO SEJA ESTAR RETORNANDO UMA VIEW, VER COMO FOI FEITO NO PROJETO DO GIOVANNI

class Registro extends BaseController{
    public function index(){        
        $registroModel = new RegistroModel();
        $dados["estacionamento"] = $registroModel->getHorarioEntrada();
        return view("registro", $dados);
    }
    public function remover($id){
        $registroModel = new RegistroModel();
        $dados["estacionamento"] = $registroModel->getHorarioEntrada();
        // $dados["estacionamento"] = $registroModel->findAll();
        if($registroModel->delete($id)){
            return redirect()->to("/admin/registro");
        }else{
            return "Erro";
        }
    }

    public function registrar(){
        $modelRegistro = new RegistroModel();
        $modelPreco = new PrecoModel();
        $dadosEnviados = $this->request->getPost();
        $dadosEnviados["horario_atual_saida"] = null;

        if($dadosEnviados["veiculo"] == "carro"){
            $valorHora = $modelPreco->find(1)["preco"];
        }else{
            $valorHora = $modelPreco->find(2)["preco"];
        }
        $dadosEnviados["valor_hora"] = $valorHora;

        // $dados["estacionamento"] = $modelRegistro->findAll();
        if($modelRegistro->save($dadosEnviados)){
            return redirect()->to("/admin/registro");
        }else{
            return "Erro";
        }   
    }
    public function setHorarioSaida(){
        $registroModel = new RegistroModel();
    }
    public function buscarRegistro($id){
        $registroModel = new RegistroModel();
        // criar nova model para preco para pegar de outro banco de dados e usar essa model nessa controller
        // $registro = $registroModel->find($id);
        $registro["estacionamento"] = $registroModel->getPrecoERegistro();        
        // $registro["registro"] = $registroModel;

        // CONCLUSÃO: SERÁ NECESSÁRIA UMA CONSULTA QUE RETORNE OS VALORES DAS TABELAS PRECO E ESTACIONAMENTO

        echo json_encode($registro, JSON_UNESCAPED_UNICODE);
        exit;
    }
}
