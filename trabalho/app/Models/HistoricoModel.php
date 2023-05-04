<?php

namespace App\Models;

use CodeIgniter\Model;

class HistoricoModel extends Model
{
    protected $table            = 'estacionamento';
    protected $primaryKey       = 'idestacionamento';
    protected $useAutoIncrement = true;
    protected $allowedFields = ["horario_entrada", "horario_saida", "placa_veiculo", "veiculo"];

    public function getHorario(){
        $query = $this->db->query("SELECT *, RIGHT(horario_atual, 8) h FROM estacionamento")->getResultArray();
        return $query;
    }
}