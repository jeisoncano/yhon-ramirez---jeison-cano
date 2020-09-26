<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CreateUser  extends CI_Controller {

    	public function index()
	{
        $this->load->view('layouts/header');
        $this->load->view('createUser');
        $this->load->view('layouts/footer');       
       

    }

    public function create(){
        $name = $this->input->post('name');
        $lastname = $this->input->post('lastname');
        $idnumbre = $this->input->post('idnumbre');
        $birthdate = $this->input->post('birthdate');
        $residencecity = $this->input->post('residencecity');
        $neighborhood = $this->input->post('neighborhood');
        $phonenumber = $this->input->post('phonenumber');
        $userdata = array(
            'name' => $name,
            'lastname' => $lastname,
            'idnumbre' => $idnumbre,
            'birthdate' => $birthdate,
            'residencecity' => $residencecity,
            'neighborhood' => $neighborhood,
            'phonenumber' => $phonenumber,

        );
        $this->UserModel->create($userdata);
        $redirect = base_url()."/home";
        header("location: $redirect");
        
    
        

    }

    public function deleteUser(){
         $id = $this->input->get('id');
         $this->UserModel->deleteUser($id);
         $redirect = base_url()."/home";
         header("location: $redirect");
        
    }

    public function editUser(){
        $id = $this->input->get('id');
        $userdata = array('userdata' => $this->UserModel->listUser($id));
        $this->load->view('layouts/header');
        $this->load->view('edituser',$userdata);
        $this->load->view('layouts/footer');
           
    }

    public function updateUser(){
        $id = $this->input->get('id');
        $name = $this->input->post('name');
        $lastname = $this->input->post('lastname');
        $idnumbre = $this->input->post('idnumbre');
        $birthdate = $this->input->post('birthdate');
        $residencecity = $this->input->post('residencecity');
        $neighborhood = $this->input->post('neighborhood');
        $phonenumber = $this->input->post('phonenumber');
        $userdata = array(
            'id' => $id,
            'name' => $name,
            'lastname' => $lastname,
            'idnumbre' => $idnumbre,
            'birthdate' => $birthdate,
            'residencecity' => $residencecity,
            'neighborhood' => $neighborhood,
            'phonenumber' => $phonenumber,

        );
        $this->UserModel->updateUser($userdata);
        $redirect = base_url()."/home";
         header("location: $redirect");
           
    }
    
	
}