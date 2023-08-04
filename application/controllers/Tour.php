<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tour extends CI_Controller {

    function __construct() {
        parent::__construct(); 
        $this->load->model('Tour_model');
		$this->load->library('form_validation');
	}

    public function index()
    {
        $this->load->view('welcome_message');
    }
	public function adminindextour()
	{
        $data['Tour'] = $this->Tour_model->getAll();
		$this->load->view('admin/Tour/index',$data);
    }
    public function adminaddtour()
    {
        $this->load->view('admin/tour/create');
    }

    public function adminsavetour()
    {
        $tour = $this->Tour_model->save();
        redirect(site_url('tour/adminindextour'));
    }
}