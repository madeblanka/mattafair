<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Image extends CI_Controller {

    function __construct() {
        parent::__construct(); 
        $this->load->model('Image_model');
        $this->load->model('Room_model');
        $this->load->model('Tour_model');
        $this->load->model('Hoteltour_model');
		$this->load->library('form_validation');
	}

    public function index()
    {
        $this->load->view('welcome_message');
    }
	public function adminindeximage()
	{
        $data['image'] = $this->Image_model->getAll();
		$this->load->view('admin/image/index',$data);
    }
    
    public function adminaddimage()
    {
        $data['room'] = $this->Room_model->getAllId();
        $data['tour'] = $this->Tour_model->getAllId();
        $data['hoteltour'] = $this->Hoteltour_model->getAllId();
        $this->load->view('admin/image/create',$data);
    }

    public function adminsaveimage()
    {
        $image = $this->Image_model->save();
        redirect(site_url('image/adminindeximage'));
    }
}