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
        if($ano && $tipo){
            if($tipo=="mes_total"){
                $dados["valor_mensal"] = $registroModel->getFaturamentoMensal($ano);
                $dados["legenda"] = "R$ no mês";
            }
            else if($tipo == "mes_qtd"){
                $dados["valor_mensal"] = $registroModel->getQuantidadeVendasMensal($ano);
                $dados["legenda"] = "Qtd no mês";
            }
        } else{
            $dados["valor_mensal"] = $registroModel->getFaturamentoMensal(2022);
            $dados["legenda"] = "R$ no mês";
        }
        return view("graficos", $dados);
    }
}