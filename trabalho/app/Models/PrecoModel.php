<?php

namespace App\Models;

use CodeIgniter\Model;

class PrecoModel extends Model
{
    protected $table            = 'preco';
    protected $primaryKey       = 'idPreco';
    protected $useAutoIncrement = true;
    protected $allowedFields = ["veiculo", "preco"];
}