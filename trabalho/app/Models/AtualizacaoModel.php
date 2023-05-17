<?php

namespace App\Models;

use CodeIgniter\Model;

class AtualizacaoModel extends Model
{
    protected $table            = 'preco';
    protected $primaryKey       = 'idPreco';
    protected $useAutoIncrement = true;
    protected $allowedFields = ["idPreco", "preco_carro", "preco_moto"];
}