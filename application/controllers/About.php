<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About  extends CI_Controller {


	public function index()
	{
        $this->load->view('layouts/header');
        $this->load->view('about');
        $this->load->view('layouts/footer');
    }
    public function welcome(){
        $message =$this->HomeModel->welcome();
        echo $message;
    }

    public function insertUser(){
        $response =$this->HomeModel->insertUser();
        echo "<h1>$response</h1>";
    }
	
}