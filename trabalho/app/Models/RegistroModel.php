<?php

namespace App\Models;

use CodeIgniter\Model;

class RegistroModel extends Model
{
    protected $table            = 'estacionamento';
    protected $primaryKey       = 'idestacionamento';
    protected $useAutoIncrement = true;
    protected $allowedFields = ["horario_entrada", "horario_saida", "placa_veiculo", "veiculo", "total", "valor_hora"];
    
    public function getHorarioEntrada(){
        $query = $this->db->query("SELECT *, RIGHT(horario_atual_entrada, 8) FROM estacionamento WHERE horario_atual_saida IS NULL")->getResultArray();
        return $query;
    }
    // update estacionamento set horario_atual_saida = NOW() where idEstacionamento = 1;
    public function setHorarioSaida($idEstacionamento){
        // fazer um update para o campo de saída nessa função
        $query = $this->db->query("UPDATE estacionamento SET horario_atual_saida = NOW() WHERE idEstacionamento = ?", [$idEstacionamento]);
        return $query;
    }
    public function getPreco(){
        $selectEstacionamento = $this->db->query("SELECT * FROM estacionamento")->getResultArray();
        $query = $this->db->table("preco")->get()->getResultArray();
        return [$query, $selectEstacionamento];
    }
    public function getPrecoERegistro(){
        $query = $this->db->query("SELECT * FROM preco p INNER JOIN preco_estacionamento pe INNER JOIN estacionamento e ON p.idPreco = pe.fkPreco AND e.idEstacionamento = pe.fkEstacionamento;")->getResultArray();
        return $query;
    }


    public function getFaturamentoMensal($ano){
        return $this->db->query("SELECT MONTH(horario_atual_saida) AS mes, SUM(valor_hora) AS faturamento_mensal FROM estacionamento WHERE YEAR(horario_atual_saida) = ? GROUP BY mes ORDER BY mes", [$ano])->getResultArray();
    }
    public function getQuantidadeVendasMensal($ano){
        return $this->db->query("SELECT MONTH(horario_atual_saida) AS mes, count(*) AS quantidade_estacionamento FROM estacionamento WHERE year(horario_atual_saida) = ? GROUP BY mes", [$ano])->getResultArray();
    }
}