<?php

class Service extends CI_Model{

    function __constructor()
    {
        //call tha model constructor
        parent::__constructor();
    }

    function getServices(){
        $query = $this->db->get('servicios');
        return $query->result_array();
    }

/*    public function getUserbyId($id){
        $this -> db -> where('id_usuario', $id);
        $query = $this -> db -> get('usuarios');
        return $query->row();
    }*/


}