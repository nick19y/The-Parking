<?php

namespace App\Models;

use CodeIgniter\Model;

class HistoricoModel extends Model
{
    protected $table            = 'estacionamento';
    protected $primaryKey       = 'idestacionamento';
    protected $useAutoIncrement = true;
    protected $allowedFields = ["horario_entrada", "horario_saida", "placa_veiculo", "veiculo"];

    public function getHorarioEntrada(){
        $query = $this->db->query("SELECT *, RIGHT(horario_atual_entrada, 8) h FROM estacionamento WHERE horario_atual_saida IS NUll")->getResultArray();
        return $query;
    }
    public function getHorarioSaida(){
        // $query = $this->db->query("SELECT *, RIGHT(horario_atual_entrada, 8) he, RIGHT(horario_atual_saida, 8) hs FROM estacionamento")->getResultArray();
        $query = $this->db->query("SELECT *, horario_atual_entrada he, horario_atual_saida hs FROM estacionamento")->getResultArray();
        return $query;
    }
    // SELECT RIGHT(horario_atual_entrada, 8) he, RIGHT(horario_atual_saida, 8) hs FROM estacionamento
}