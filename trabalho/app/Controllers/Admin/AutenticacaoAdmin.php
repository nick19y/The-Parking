<?php
    namespace App\Controllers\Admin;

    use App\Controllers\BaseController;
    use App\Models\AdminModel;
    class AutenticacaoAdmin extends BaseController
    {
        public function login(){
            return view("registro");
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
            return redirect()->to("/admin");
        }
    }

?>