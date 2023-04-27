<?php
    namespace App\Controllers\Admin;

    use App\Controllers\BaseController;
    use App\Models\AdminModel;
    use Exception;
    class AutenticacaoAdmin extends BaseController
    {
            public function login()
        {
            if(session()->has("idFuncionario")){
                return redirect()->to(base_url("admin/registro"));
            }
            return view("/iniciarSessao");
        }

        public function sair(){
            $session = session();

            $session->destroy();
            
            return redirect()->to(base_url("/"));
        }
        public function logar()
        {
            try {
                $email = $this->request->getPost("email");
                $senha = $this->request->getPost("senha");
                $adminModel = new AdminModel();
                $dados = $adminModel->logar($email, $senha);
                session()->set("idFuncionario", $dados["id"]);
                session()->set("nome", $dados["nome"]);
                return redirect()->to(base_url("admin/registro"));
            } catch (Exception $erro) {
                session()->setFlashdata("aviso-login", $erro->getMessage());
                return redirect()->to(base_url("/"));
            }
        }   
        public function cadastrar(){
            $nome = $this->request->getPost("nome");
            $email = $this->request->getPost("email");
            $senha = $this->request->getPost("senha");
            $adminModel = new AdminModel();
            if($adminModel->cadastrar($nome, $email, $senha)){
                // se retornar true
                return redirect()->to("/mensagemContaCriada");
            }
            else{
                return "Erro";
            }
            // return redirect()->to("/admin");
        }
    }

?>