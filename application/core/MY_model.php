<?php

class MY_model extends CI_model {
    protected $table;

    public function getAll(){
        return $this->db->get($this->table)->result();
    }

    public function getById($id){
        return $this->db->where('id', $id)
            ->get($this->table);
    }

    public function deleteById($id){
        $this->db->where('id', $id)
            ->delete($this->table);
        return $this->db->affected_rows() > 0;
    }

    public function updateById($id, $data){
        $this->db->where('id', $id)
            ->update($this->table, $data);
        return $this->db->affected_rows() > 0;
    }
}