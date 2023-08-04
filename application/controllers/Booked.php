<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booked extends CI_Controller {

    function __construct() {
        parent::__construct(); 
        $this->load->model('booked_model');
		$this->load->library('form_validation');
	}

    public function index()
    {
        $this->load->view('welcome_message');
    }
	public function adminindex()
	{
        // $data['additional'] = $this->Additional_model->getAll();
		$this->load->view('admin/Booked/index');
    }
}