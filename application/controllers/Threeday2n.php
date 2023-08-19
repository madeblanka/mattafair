<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Threeday2n extends CI_Controller {

    function __construct() {
        parent::__construct(); 
        $this->load->model('Threeday2n_model');
        $this->load->model('Package_model');
		$this->load->library('form_validation');
	}

    public function index()
    {
        $this->load->view('welcome_message');
    }
	public function adminindexthreeday2n()
	{
        $data['Threeday2n'] = $this->Threeday2n_model->getAll();
		$this->load->view('admin/threeday2n/index',$data);
    }
    public function adminaddthreeday2n()
    {
        $data['package'] = $this->Package_model->getAllId();
        $this->load->view('admin/threeday2n/create',$data);
    }

    public function adminsavethreeday2n()
    {
        $this->Threeday2n_model->save();
        redirect(site_url('threeday2n/adminindexthreeday2n'));
    }
}