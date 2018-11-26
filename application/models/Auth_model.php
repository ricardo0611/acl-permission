<?php

class Auth_model extends CI_Model {
    public function loggin_is($email, $password){
        $resultset = $this->db->get_where('usuario',[ 'email' => $email, 'senha' => $password ])->result();
        return $resultset;
    }
}