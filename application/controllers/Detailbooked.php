<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detailbooked extends CI_Controller {

    function __construct() {
        parent::__construct(); 
        $this->load->model('Detailbooked_model');
		$this->load->library('form_validation');
	}

    public function index()
    {
        $this->load->view('welcome_message');
    }
	public function adminindex()
	{
        // $data['Detailbooked'] = $this->Detailbooked_model->getAll();
		$this->load->view('admin/Detailbooked/index');
    }
}