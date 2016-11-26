<?php
class Users extends CI_Controller {


        /*public function index()
        {
            $this -> load -> model('user');
            $data = $this -> user -> getUser();
            header('Content-type: application/json');
            echo json_encode($data);
        }*/

        public function getUser(){
            $this -> load -> model('user');
            $data = $this -> user -> getUser();
            header('Content-type: application/json');
            echo json_encode($data);
	    }

        public function getUserbyId(){
            $id = $this -> input -> post('id');
            $this -> load -> model('user');
            header('Content-type: application/json');
            $data = $this -> user -> getUserbyId($id);
            
            echo json_encode($data);
        }
}