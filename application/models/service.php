<?php

class Service extends CI_Model{

    function __constructor()
    {
        //call tha model constructor
        parent::__constructor();
    }

    function getServices(){
        $query = $this -> db -> get('servicios');
        return $query->result_array();
    }

    function insertDate($date){

        $data = array(
            'id_usuario' =>  $date -> idUser,
            'id_servicio' => $date -> idService,
            'fecha' => $date -> date,
            'hora' => $date -> hour
        );
        $this -> db -> insert('citas', $data);
        $result = array('messagges' => "Se a agregado una cita");
        return $result;
    }

    function deleteDate($id){
        $this -> db -> delete('citas', $id);
        $result = array('messagges' => 'Se a eliminado su cita');
        return $result;
    }

    function getDatesOfService($date = '', $service = ''){
        $this -> db -> select('id_citas, hora');
        $this -> db -> where('fecha', $date);
        $this -> db -> where('id_servicio', $service);

        $query = $this -> db -> get('citas');
        return $query -> result_array();
    }


}