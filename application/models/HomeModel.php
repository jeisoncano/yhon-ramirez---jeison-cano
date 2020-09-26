<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeModel  extends CI_Model {


	public function listUsers(){
        $users = $this->db->query("SELECT * FROM list")->result();
        //foreach($users as $user){
            //print_r($user); 
        return $users;

    }

  

}
    
	
