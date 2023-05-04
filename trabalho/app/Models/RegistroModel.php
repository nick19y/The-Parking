<?php

namespace App\Models;

use CodeIgniter\Model;

class RegistroModel extends Model
{
    protected $table            = 'estacionamento';
    protected $primaryKey       = 'idestacionamento';
    protected $useAutoIncrement = true;
    protected $allowedFields = ["horario_entrada", "horario_saida", "placa_veiculo", "veiculo"];
    
    public function setHorarioSaida(){
        $query = $this->db->query("SELECT *, RIGHT(horario_atual_saida, 8) FROM estacionamento WHERE horario_atual_saida IS NULL")->getResultArray();
        return $query;
    }
    // update estacionamento set horario_atual_saida = NOW() where idEstacionamento = 1;
}