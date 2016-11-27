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

    function insertDate($date){

        $data = array(
            'id_usuario' =>  $date -> idUser,
            'id_servicio' => $date -> idService,
            'fecha' => $date -> date,
            'hora' => $date -> hour
        );
        $this->db->insert('citas', $data);
        $result = array('messagges' => "Se a agregado una cita");
        return $result;
    }

/*    public function getUserbyId($id){
        $this -> db -> where('id_usuario', $id);
        $query = $this -> db -> get('usuarios');
        return $query->row();
    }*/


}