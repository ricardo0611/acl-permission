<?php

class Auth extends CI_Controller {
    
    public function login() {
        $email = $this->input->post('email');
        $senha = $this->input->post('senha');
        if($email and $senha){
            $this->load->model('Auth_model', 'auth');
            $user = $this->auth->loggin_is($email, $senha);
            if(count($user) == 0){
                $this->session->set_flashdata('mensagem', 'Usuario ou senha nao conferem');
            }else{
                $user = $user[0];
                $this->session->set_userdata([
                    "logged"    => true,
                    "nome"      => $user->nome,
                    "email"     => $user->email,
                    "tipo"      => $user->tipo
                ]);
                redirect(base_url());
            }
        }
        if($this->session->userdata('logged')){
            redirect('auth/logout');
        }
        $this->load->view('login/login', ['mensagem' => $this->session->flashdata('mensagem')]);
    }
    
    public function logout() {
        $dados = ['logged', 'nome', 'email', 'tipo'];
        $this->session->unset_userdata($dados);
        redirect('auth/login');
    }

    public function register(){
        if($this->session->userdata('logged')){
            $this->session->set_flashdata('mensagem', 'Você ainda estava logado');
            redirect('auth/logout');
        }
        echo "hello from register auth";
    }

    public function noaccess(){
        echo "você nao possue acesso a essa pagina";
    }
    
    public function nopermission(){
        echo "você nao possue permissao para essa pagina";
    }
}