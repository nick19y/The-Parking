<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
// use App\Models\RegistroModel;
use App\Models\PrecoModel;
use App\Models\AdminModel;
class Atualizacao extends BaseController
{
    public function atualizacao(){
        return view("atualizacao");
    }
    public function salvarPrecoMoto(){
        $modelAtualizacao = new PrecoModel();
        // $dadosEnviados = $this->request->getPost();
        // $veiculo = $this->request->getPost("veiculo");
        $preco = $this->request->getPost("preco");
        if($modelAtualizacao->setPrecoMoto($preco)){
            // se retornar true
            return redirect()->to("/admin/atualizacao");
        }
        else{
            return "Erro";
        }
    }
    public function salvarPrecoCarro(){
        $modelAtualizacao = new PrecoModel();
        // $dadosEnviados = $this->request->getPost();
        // $veiculo = $this->request->getPost("veiculo");
        $preco = $this->request->getPost("preco");
        if($modelAtualizacao->setPrecoCarro($preco)){
            // se retornar true
            return redirect()->to("/admin/atualizacao");
        }
        else{
            return "Erro";
        }
    }
    public function salvarDadosFuncionario()
    {
        $AdminModel = new AdminModel();
        $dadosEnviados = $this->request->getPost();
        $dadosEnviados["idFuncionario"] = session("idFuncionario");
        $regras = [
            'email' => 'required',
            'nome' => 'required|min_length[2]',
            'senha' => 'required|min_length[2]'
        ];

        $mensagem = [
            'email' => [
                'required' => 'O email é necessário'
            ],
            'nome' => [
                'required' => 'O nome é obrigatório',
                'min_length' => 'O nome precisa ter no mínimo 2 caracteres'
            ],
            'senha' => [
                'required' => 'A senha precisa ter no mínimo 6 caracteres'
            ]
        ];
        $dadosEnviados["senha"] = password_hash($dadosEnviados["senha"], PASSWORD_DEFAULT);
        
// usar a model de funcionario
        if ($this->validate($regras, $mensagem)) {
            // troquei o save pelo metodo cadastrar
            // o problema disso é que o save atualiza os dados mas não faz o hash da senha
            if ($AdminModel->save($dadosEnviados)) {
                session()->setFlashData("tipo", "success");
                session()->setFlashData("mensagem", "Dados salvos com sucesso");
            } else {
                session()->setFlashData("tipo", "danger");
                session()->setFlashData("mensagem", "Erro ao salvar dados");
            }
            return redirect()->to("/admin/atualizacao");
        } else {
            // colocar validacao em da mesma forma que eu coloquei a mensagem na view
            session()->setFlashData("validacao", $this->validator);
            session()->setFlashData("atualizacao", $dadosEnviados);
            return redirect()->to("/admin/atualizacao");
        }
    }
}