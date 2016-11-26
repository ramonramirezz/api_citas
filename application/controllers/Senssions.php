<?php
class Senssions extends CI_Controller {

       public function index()
        {
            $this -> load -> model('user');
            $data = $this -> user -> getUser();
            header('Content-type: application/json');
            echo json_encode($data);
        }

        public function goLogin(){
            $username = $this -> input -> post('username');
            $password = $this -> input -> post('password');
            $this -> load -> model('login');
            header('Content-type: application/json');
            $data = $this -> login -> login($username, $password);
            
            echo json_encode($data);
        }
}