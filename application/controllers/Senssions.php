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

            header('Content-type: application/json');
            $this -> load -> model('login');
            $data = $this -> login -> login($username, $password);
            //sentence to cheek if si a local request @return JSON FORMAT
         if ($this->input->is_ajax_request()){
               echo json_encode($data);
         }
         //sentence to cheek if is a cross domain request @return JSNOP FORMAT
         if (isset($_GET['callback'])) {
             echo  $_GET['callback'].'('.json_encode($data) .')';
         }
         // REDIRECT user if is not one of this options before.
        
    }

         
        
}