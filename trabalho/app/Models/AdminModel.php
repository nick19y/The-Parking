<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table            = 'funcionario';
    protected $primaryKey       = 'idFuncionario';
    protected $useAutoIncrement = true;
    protected $allowedFields= ["nome", "email", "senha"];
    
public function cadastrar($nome, $email, $senha){
    $hash = password_hash($senha, PASSWORD_DEFAULT);
    return $this->save(["nome" => $nome, "email" => $email, "senha" => $hash]);
}

    public function logar($email, $senha){
        //criar query
    }
}

