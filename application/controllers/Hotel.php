<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel extends CI_Controller {

    public function __construct() {
        parent::__construct(); 
        $this->load->model('Hotel_model');
		$this->load->library('form_validation');
	}

    public function index()
    {
        $this->load->view('welcome_message');
    }
	public function adminindexhotel()
	{
        $data['Hotel'] = $this->Hotel_model->getAll();
		$this->load->view('admin/Hotel/index',$data);
    }

    public function adminaddhotel()
    {
        $this->load->view('admin/hotel/create');
    }

    public function adminsavehotel()
    {
        $hotel = $this->Hotel_model->save();
        redirect(site_url('hotel/adminindexhotel'));
    }
}