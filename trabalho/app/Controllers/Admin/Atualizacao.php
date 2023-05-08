<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\RegistroModel;
class Atualizacao extends BaseController
{
    public function atualizacao(){
        return view("atualizacao");
    }
    public function salvarPreco(){
        $modelRegistro = new RegistroModel();
        $dadosEnviados = $this->request->getPost();
        if($modelRegistro->save($dadosEnviados)){
            return redirect()->to("/admin/registro");
        }
        else{
            return "Erro";
        }       
    }
}