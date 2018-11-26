<?php

class Farmacia extends My_Controller {
    protected $access = 'admin|consultor|farmaceutico';
    protected $permission = 'gerenciar_farmacia';
    
    // listagem de empresas
    public function index() {
        echo "Hello from farmacia";
    }
}