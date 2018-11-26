<?php

class Usuario extends My_Controller {
    protected $access = 'admin|consultor';
    protected $permission = 'gerenciar_usuarios';
    
    // listagem de empresas
    public function index() {
        echo "Hello from usuario";
    }
}