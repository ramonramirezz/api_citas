<?php

class User extends CI_Model{

    function __constructor()
    {
        //call tha model constructor
        parent::__constructor();
    }

    function getUser()
    {
        $query = $this->db->get('usuarios');
        return $query->row();
    }
}