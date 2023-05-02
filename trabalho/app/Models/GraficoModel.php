<?php

namespace App\Models;

use CodeIgniter\Model;

class GraficoModel extends Model
{
    protected $table            = 'estacionamento';
    protected $primaryKey       = 'idestacionamento';
    protected $useAutoIncrement = true;
    protected $allowedFields = ["horario_entrada", "horario_saida", "placa_veiculo", "veiculo"];

    public function getQuantidadeEstacionamento(){
        $query = $this->db->query('SELECT MAX(idEstacionamento) FROM estacionamento;');
        return $query;
    }
}