<?php

class Login extends CI_Model{

    function __constructor(){
        //call tha model constructor
        parent::__constructor();
    }

    public function login($username = '', $password = ''){
        $this -> db -> select('U.id_usuario, U.nombre_usuario, S.nombre_servicio, C.fecha, C.id_citas, C.hora');
        $this -> db -> from('usuarios U');
        $this -> db -> join('citas C', 'U.id_usuario = C.id_usuario', 'inner');
        $this -> db -> join('servicios S', 'C.id_servicio = S.id_servicio', 'inner');

        $this -> db -> where('nombre_usuario', $username);
        $this -> db -> where('password_usuario', $password);
        $query = $this -> db -> get();

        $req = array(
            'idUser' => '',
            'name' => '',
            'dates' => array()
        );

        $row = $query->row();

        if (isset($row)){
            $req['idUser'] = $row -> id_usuario;
            $req['name'] = $row -> nombre_usuario;

            foreach ($query -> result_array() as &$item) {
                array_push($req['dates'], $item);
            }

        }else{
            $req = array('messagges' => 'Usuario no encontrado');
        }

        return $req;
    }


}