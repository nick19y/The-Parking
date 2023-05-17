<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\RegistroModel;
use App\Models\AtualizacaoModel;
class Atualizacao extends BaseController
{
    public function atualizacao(){
        return view("atualizacao");
    }
    public function salvarDadosPagamento(){
        $modelAtualizacao = new AtualizacaoModel();
        $dadosEnviados = $this->request->getPost();
        $regras = [
            'preco_carro' => 'required',
            'preco_moto' => 'required'
        ];

        $mensagem = [
            'preco_carro' => [
                'required' => 'O preco do carro é obrigatório'
            ],
            'preco_moto' => [
                'required' => 'O preco da moto é obrigatório',
            ]
        ];
        if ($this->validate($regras, $mensagem)) {
            if ($modelAtualizacao->save($dadosEnviados)) {
                session()->setFlashData("tipo", "success");
                session()->setFlashData("mensagem", "Dados salvos com sucesso");
            } else {
                session()->setFlashData("tipo", "danger");
                session()->setFlashData("mensagem", "Erro ao salvar dados");
            }
            return redirect()->to("/admin/atualizacao");
        } else {
            session()->setFlashData("validacao", $this->validator);
            session()->setFlashData("atualizacao", $dadosEnviados);
            return redirect()->to("/admin/atualizacao");
        }
    }
    public function salvarDadosFuncionario()
    {
        $RegistroModel = new RegistroModel();
        $dadosEnviados = $this->request->getPost();

        $regras = [
            'email' => 'required',
            'nome' => 'required|min_length[2]',
            'senha' => 'required|min_length[6]'
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

        if ($this->validate($regras, $mensagem)) {
            if ($RegistroModel->save($dadosEnviados)) {
                session()->setFlashData("tipo", "success");
                session()->setFlashData("mensagem", "Dados salvos com sucesso");
            } else {
                session()->setFlashData("tipo", "danger");
                session()->setFlashData("mensagem", "Erro ao salvar dados");
            }
            return redirect()->to("/admin/atualizacao");
        } else {
            session()->setFlashData("validacao", $this->validator);
            session()->setFlashData("atualizacao", $dadosEnviados);
            return redirect()->to("/admin/atualizacao");
        }
    }
}