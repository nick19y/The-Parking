<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\RegistroModel;

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
        $dadosEnviados = $this->request->getPost();
        $dadosEnviados["horario_atual_saida"] = null;
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
}
