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
            header("Access-Control-Allow-Origin: *");
            header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
            header('Content-type: application/json');
            /*$username = $this -> input -> post('username');
            $password = $this -> input -> post('password');*/

            $postdata = file_get_contents("php://input");
            if (isset($postdata)) {
                $request = json_decode($postdata);
                $username = $request->username;
                $password = $request->password;
                
                $this -> load -> model('login');
                $data = $this -> login -> login($username, $password);
                echo json_encode($data);
            }

            
    }

         
        
}