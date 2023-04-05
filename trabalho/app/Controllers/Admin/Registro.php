<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\RegistroModel;

class Registro extends BaseController{
    public function index(){        
        $registroModel = new RegistroModel();
        $dados["estacionamento"] = $registroModel->findAll();
        return view("registro", $dados);
    }
    public function remover($id){
        $registroModel = new RegistroModel();
        $dados["estacionamento"] = $registroModel->findAll();
        if($registroModel->delete($id)){
            return view("registro", $dados);
        }
        return "Erro";
    }

    public function registrar(){
            $modelRegistro = new RegistroModel();
            $dadosEnviados = $this->request->getPost();
            $dados["estacionamento"] = $modelRegistro->findAll();
            if($modelRegistro->save($dadosEnviados)){
                return view("registro", $dados);
            }else{
                return "Erro ao sucesso";
            }
    }

}
