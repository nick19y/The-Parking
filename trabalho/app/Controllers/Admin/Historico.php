<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\HistoricoModel;
class Historico extends BaseController
{
    public function historico(){        
        $historicoModel = new HistoricoModel();
        $dados["estacionamento"] = $historicoModel->getHorario();
        return view("historico", $dados);
    }
}