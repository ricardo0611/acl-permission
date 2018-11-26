<?php

class Dashboard extends My_Controller {
    protected $access = 'admin|consultor|farmaceutico';
    protected $permission = 'dashboad_app';
    
    // listagem de empresas
    public function index() {
        echo "Hello from dashboard";
        echo "<br>usuario: ". $this->session->nome;
        echo "<br>email: ". $this->session->email;
        echo "<br>tipo: ". $this->session->tipo;

        echo '<br> <a href="'.base_url('auth/logout').'"> logout </a>';
        echo '<br> <a href="'.base_url('farmacia').'"> farmacias </a>';
    }
}