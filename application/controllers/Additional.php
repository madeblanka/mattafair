<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Additional extends CI_Controller {

    function __construct() {
        parent::__construct(); 
        $this->load->model('Additional_model');
        $this->load->model('Tour_model');
		$this->load->library('form_validation');
	}

    public function index()
    {
        $this->load->view('welcome_message');
    }

	public function adminindexadditional()
	{
        $data['additional'] = $this->Additional_model->getAll();
		$this->load->view('admin/additional/index',$data);
    }

    public function adminaddadditional()
    {
        $data['tour'] = $this->Tour_model->getAllId();
        $this->load->view('admin/additional/create',$data);
    }

    public function adminsaveadditional()
    {
        $additional = $this->Additional_model->save();
        redirect(site_url('additional/adminindexadditional'));
    }
}