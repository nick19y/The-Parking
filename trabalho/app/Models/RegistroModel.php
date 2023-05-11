<?php

namespace App\Models;

use CodeIgniter\Model;

class RegistroModel extends Model
{
    protected $table            = 'estacionamento';
    protected $primaryKey       = 'idestacionamento';
    protected $useAutoIncrement = true;
    protected $allowedFields = ["horario_entrada", "horario_saida", "placa_veiculo", "veiculo", "preco_carro", "preco_moto"];
    
    public function getHorarioEntrada(){
        $query = $this->db->query("SELECT *, RIGHT(horario_atual_entrada, 8) FROM estacionamento WHERE horario_atual_saida IS NULL")->getResultArray();
        return $query;
    }
    // update estacionamento set horario_atual_saida = NOW() where idEstacionamento = 1;
    public function setHorarioSaida($idEstacionamento){
        // fazer um update para o campo de saída nessa função
        $query = $this->db->query("UPDATE estacionamento SET horario_atual_saida = NOW() WHERE idEstacionamento = ?", [$idEstacionamento])->getResultArray();
        return $query;
    }
}