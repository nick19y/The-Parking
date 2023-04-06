<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\RegistroModel;

// TALVEZ O ERRO SEJA ESTAR RETORNANDO UMA VIEW, VER COMO FOI FEITO NO PROJETO DO GIOVANNI

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
<<<<<<< HEAD
            return view("registro", $dados);
=======
            // return view("registro", $dados);
            session()->setFlashdata("tipo","danger");
            session()->setFlashdata("mensagem","Item excluído com sucesso");
            return redirect()->to("/admin/registro");
        }else{
            return "Erro";
>>>>>>> 96b46f2 (função de exclusão)
        }
        
    }

    public function registrar(){
            $modelRegistro = new RegistroModel();
            $dadosEnviados = $this->request->getPost();
            $dados["estacionamento"] = $modelRegistro->findAll();
            if($modelRegistro->save($dadosEnviados)){
<<<<<<< HEAD
                return view("registro", $dados);
=======
                session()->setFlashdata("tipo","success");
                session()->setFlashdata("mensagem","Item salvo com sucesso");
                // return view("registro", $dados);
                return redirect()->to("/admin/registro");
>>>>>>> 96b46f2 (função de exclusão)
            }else{
                return "Erro";
            }
            
    }

}
