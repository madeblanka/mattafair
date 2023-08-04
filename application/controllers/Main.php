<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    function __construct() {
        parent::__construct(); 
        $this->load->model('Additional_model');
        $this->load->model('Booked_model');
        $this->load->model('Cart_model');
        $this->load->model('Detailbooked_model');
        $this->load->model('Hotel_model');
        $this->load->model('Hoteltour_model');
        $this->load->model('Image_model');
        $this->load->model('Room_model');
        $this->load->model('Tour_model');
		$this->load->library('form_validation');
	}

    public function index()
    {
        $this->load->view('admin/index');
    }
	
}