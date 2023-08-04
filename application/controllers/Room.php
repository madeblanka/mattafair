<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Room extends CI_Controller {

    function __construct() {
        parent::__construct(); 
        $this->load->model('Room_model');
        $this->load->model('Hotel_model');
		$this->load->library('form_validation');
	}

    public function index()
    {
        $this->load->view('welcome_message');
    }
	public function adminindexroom()
	{
        $data['Room'] = $this->Room_model->getAll();
		$this->load->view('admin/room/index',$data);
    }
    public function adminaddroom()
    {
        $data['hotel'] = $this->Hotel_model->getAllId();
        $this->load->view('admin/room/create',$data);
    }

    public function adminsaveroom()
    {
        $room = $this->Room_model->save();
        redirect(site_url('room/adminindexroom'));
    }
}