<?php

class MY_Controller extends CI_Controller {
    protected $access = '';
    protected $permission = '';

    public function __construct(){
        parent::__construct();
        MY_Controller::reload_access_permission();
    }

    /**
     * Verifica se o usuario esta logado
     */
    private static function is_logged(){
        $ci =& get_instance();
        $logged = $ci->session->userdata('logged');
        return !( $logged == NULL || $logged == false);
    }

    /**
     * Verifica se o usuario tem acesso (tipo de usuario correto)
     * '*'                              -> qualquer usuario logado
     * 'admin|contador|farmaceutico'    -> forma de dividir varios tipo de usuarios
     */
    private static function is_access() {
        $ci =& get_instance();
        if($ci->access == '' || $ci->access == '*'){ return true; }
        if(in_array($ci->session->tipo, explode('|', $ci->access))){ return true; }
        return false;
    }


    /**
     * Verifica se o usuario tem permissao de acesso ao controller (ou funcao)
     */
    private static function is_permission(){
        // $ci =& get_instance();
        // $ci->load->model('Usuario_model', 'users');
        return true;
    }

    /**
     * Atualiza as permissoes de acesso de acordo com os campos ($access, $permission)
     */
    public function reload_access_permission(){
        if(!MY_Controller::is_logged()){ redirect('auth/login'); }
        if(!MY_Controller::is_access()){ redirect('auth/noaccess'); }
        if(!MY_Controller::is_permission()){ redirect('auth/nopermission'); }
    }
}