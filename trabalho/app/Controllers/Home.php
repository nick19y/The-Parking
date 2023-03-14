<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }
    public function codigoDeSeguranca()
    {
        return view('codigoDeSeguranca');
    }
    public function criarConta()
    {
        return view('criarConta');
    }
    public function iniciarSessao()
    {
        return view('iniciarSessao');
    }
    public function mensagemContaCriada()
    {
        return view('mensagemContaCriada');
    }
    public function recuperarSenha()
    {
        return view('recuperarSenha');
    }
    public function redefinirSenha()
    {
        return view('redefinirSenha');
    }
    public function registro()
    {
        return view('registro');
    }
    public function senhaRedefinidaMensagem()
    {
        return view('senhaRedefinidaMensagem');
    }
}
