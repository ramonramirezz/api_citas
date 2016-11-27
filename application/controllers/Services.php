<?php
class Services extends CI_Controller {


        /*public function index()
        {
            $this -> load -> model('user');
            $data = $this -> user -> getUser();
            header('Content-type: application/json');
            echo json_encode($data);
        }*/

        public function getServices(){
            $this -> load -> model('service');
            $data = $this -> service -> getServices();
            header('Content-type: application/json');
            echo json_encode($data);
	    }
/*
        public function getUserbyId(){
            $id = $this -> input -> post('id');
            $this -> load -> model('user');
            header('Content-type: application/json');
            $data = $this -> user -> getUserbyId($id);
            
            echo json_encode($data);
        }*/
}