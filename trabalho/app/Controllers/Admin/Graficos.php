<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\RegistroModel;
class Graficos extends BaseController
{
    public function index(){
        $registroModel = new RegistroModel();
        $ano= $this->request->getVar("ano");
        $tipo = $this->request->getVar("tipo");
        $dados["quantidade_estacionamento"] = $registroModel->getQuantidadeVendasMensal(2023);
        return view("graficos", $dados);
    }
}