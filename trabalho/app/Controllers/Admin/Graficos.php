<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\GraficoModel;

class Graficos extends BaseController{
    public function listarVeiculos(){
        $graficoModel = new GraficoModel();
        $dados = $graficoModel->getQuantidadeEstacionamento();
        return redirect()->to(base_url("/admin/graficos", $dados));
    }

}
