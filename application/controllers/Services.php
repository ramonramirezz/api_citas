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
            header("Access-Control-Allow-Origin: *");
            header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
            header('Content-type: application/json');
            $this -> load -> model('service');
            $data = $this -> service -> getServices();
            echo json_encode($data);
	    }

        public function setDate(){
            header("Access-Control-Allow-Origin: *");
            header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
            header('Content-type: application/json');

            $postdata = file_get_contents("php://input");
            if (isset($postdata)) {
                $request = json_decode($postdata);
                $this -> load -> model('service');
                $data = $this -> service -> insertDate($request);
                echo json_encode($data);
            }

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