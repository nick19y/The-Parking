<?php

namespace App\Models;

use CodeIgniter\Model;

class PrecoModel extends Model
{
    protected $table            = 'preco';
    protected $primaryKey       = 'idPreco';
    protected $useAutoIncrement = true;
    protected $allowedFields = ["veiculo", "preco"];

    public function setPrecoCarro($precoCarro){
        $query = $this->db->query("UPDATE preco SET preco = $precoCarro WHERE idPreco = 1");
        return $query;
    }
    public function setPrecoMoto($precoMoto){
        $query = $this->db->query("UPDATE preco SET preco = $precoMoto WHERE idPreco = 2");
        return $query;
    }
}
