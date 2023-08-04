<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Card extends CI_Controller {

    function __construct() {
        parent::__construct(); 
        $this->load->model('Card_model');
		$this->load->library('form_validation');
	}

    public function index()
    {
        $this->load->view('welcome_message');
    }
	public function adminindex()
	{
        // $data['card'] = $this->Card_model->getAll();
		$this->load->view('admin/card/index');
    }
}