<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel  extends CI_Model {


	public function create($userdata){

        $this->db->insert('list',$userdata);

        $users = $this->db->query("SELECT * FROM list")->result();
        //foreach($users as $user){
            //print_r($user); 
        return $users;

    }

    public function deleteUser($id){
        $response = $this->db->query("DELETE FROM list WHERE id={$id}");
   
    }

    public function listUser($id){
        $response = $this->db->query("SELECT * FROM list WHERE id={$id}")->result(); 
        return $response[0];
    }

    public function updateUser($userdata){
        $response = $this->db->query("UPDATE list SET name='{$userdata['name']}',lastname='{$userdata['lastname']}',
        idnumbre='{$userdata['idnumbre']}',birthdate='{$userdata['birthdate']}',
        residencecity='{$userdata['residencecity']}',neighborhood='{$userdata['neighborhood']}',
        phonenumber='{$userdata['phonenumber']}' WHERE id={$userdata['id']}");
        return $response;
       
    }

}
?>


