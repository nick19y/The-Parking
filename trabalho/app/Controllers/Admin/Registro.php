<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\RegistroModel;
use App\Models\PrecoModel;
use DateTime;

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
        date_default_timezone_set('America/Sao_Paulo');
        $registroModel = new RegistroModel();
        // criar nova model para preco para pegar de outro banco de dados e usar essa model nessa controller
        $registro = $registroModel->find($id);

        $valor_hora = $registro["valor_hora"];

        $intervalo  = date_diff (new DateTime($registro["horario_atual_entrada"]), new DateTime());


        // $teste = new DateTime();
        // var_dump($teste);
        // 2023-05-18 19:38:50.913687 valor retornado

        $intervaloVisual = $intervalo->h .":".  $intervalo->i . ":". $intervalo->s;

            // valor padrão da hora         
        $total = ($valor_hora/60) * (($intervalo->h * 60) + $intervalo->i);

        // var_dump($intervalo);

        $registro["preco"] = number_format($total, 2, ",", ".");
        $registro["intervalo"] = $intervaloVisual;

        //$registro["estacionamento"] = $registroModel->getPrecoERegistro();        
        // $registro["registro"] = $registroModel;

        echo json_encode($registro, JSON_UNESCAPED_UNICODE);
        exit;
    }
    public function getValorHora(){
        $precoModel = new PrecoModel();
        $valorHora["valorHora"] = $precoModel->getPreco();
    }
}
