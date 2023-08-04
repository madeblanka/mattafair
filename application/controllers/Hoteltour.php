<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hoteltour extends CI_Controller {

    function __construct() {
        parent::__construct(); 
        $this->load->model('Hoteltour_model');
		$this->load->library('form_validation');
	}

    public function index()
    {
        $this->load->view('welcome_message');
    }
	public function adminindexhoteltour()
	{
        $data['Hoteltour'] = $this->Hoteltour_model->getAll();
		$this->load->view('admin/hoteltour/index',$data);
    }
    public function adminaddhoteltour()
    {
        $this->load->view('admin/hoteltour/create');
    }

    public function adminsavehoteltour()
    {
        $hoteltour = $this->Hoteltour_model->save();
        redirect(site_url('hoteltour/adminindexhoteltour'));
    }
}