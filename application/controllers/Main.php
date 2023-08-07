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
        $this->load->library('user_agent');
	}

    public function index()
    {
        $data['hotel'] = $this->Hotel_model->getAll();
        $data['tour'] = $this->Tour_model->getAll();
        $data['hoteltour'] = $this->Hoteltour_model->getAll();
        $this->load->view('user/index',$data);
    }
	
    public function cekip()
    {

        $data['browser'] = $this->agent->browser();
      
        $data['browser_version'] = $this->agent->version();
      
        $data['os'] = $this->agent->platform();
      
        $data['ip_address'] = $this->input->ip_address();
      
        $this->load->view('user/userdetail', $data);
    }

    public function hotelall()
    {
        $data['hotel'] = $this->Hotel_model->getAll();
        $this->load->view('user/full_hotel',$data);
    }

    public function tourall()
    {
        $data['tour'] = $this->Tour_model->getAll();
        $this->load->view('user/full_tour',$data);
    }

    public function hoteltourall()
    {
        $data['hoteltour'] = $this->Hoteltour_model->getAll();
        $this->load->view('user/full_tour',$data);
    }

    public function roomall($id_hotel)
    {
        $data['room'] = $this->Room_model->getByIdhotel($id_hotel);
        $this->load->view('user/full_room',$data);
    }
}