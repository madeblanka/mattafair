<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Package extends CI_Controller {

    function __construct() {
        parent::__construct(); 
        $this->load->model('Package_model');
		$this->load->library('form_validation');
	}

    public function index()
    {
        $this->load->view('welcome_message');
    }
	public function adminindexpackage()
	{
        $data['package'] = $this->Package_model->getAll();
		$this->load->view('admin/package/index',$data);
    }
    public function adminaddpackage()
    {
        $this->load->view('admin/package/create');
    }

    public function adminsavepackage()
    {
        $this->Package_model->save();
        redirect(site_url('package/adminindexpackage'));
    }
}