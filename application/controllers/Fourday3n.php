<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fourday3n extends CI_Controller {

    function __construct() {
        parent::__construct(); 
        $this->load->model('Fourday3n_model');
        $this->load->model('Package_model');
		$this->load->library('form_validation');
	}

    public function index()
    {
        $this->load->view('welcome_message');
    }
	public function adminindexfourday3n()
	{
        $data['fourday3n'] = $this->Fourday3n_model->getAll();
		$this->load->view('admin/fourday3n/index',$data);
    }
    public function adminaddfourday3n()
    {
        $data['package'] = $this->Package_model->getAllId();
        $this->load->view('admin/fourday3n/create',$data);
    }

    public function adminsavefourday3n()
    {
        $data['fourday3n'] = $this->Fourday3n_model->save();
        redirect(site_url('admin/fourday3n/adminindexpackage',$data));
    }
}