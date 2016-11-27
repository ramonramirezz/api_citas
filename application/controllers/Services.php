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

        public function deleteDate(){
            header("Access-Control-Allow-Origin: *");
            header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
            header('Content-type: application/json');

            $postdata = file_get_contents("php://input");
            if (isset($postdata)) {
                $request = json_decode($postdata);
                $id = array('id_citas' => $request -> id);

                $this -> load -> model('service');
                $data = $this -> service -> deleteDate($id);
                echo json_encode($data);
            }
        }

        public function getDatesOfService(){
            header("Access-Control-Allow-Origin: *");
            header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
            header('Content-type: application/json');

            $postdata = file_get_contents("php://input");
            if (isset($postdata)) {
                $request = json_decode($postdata);
                $date = $request -> date;
                $service = $request -> service;

                $this -> load -> model('service');
                $data = $this -> service -> getDatesOfService($date, $service);
                echo json_encode($data);
            }         
        }
}