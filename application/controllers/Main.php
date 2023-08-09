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
        $this->load->library('curl');
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

    public function detailroom($id_room)
    {
        $data['room'] = $this->Room_model->getById($id_room);
        $data['image'] = $this->Image_model->getByIdroom($id_room);
        $this->load->view('user/detail_room',$data);
    }

    public function cart()
    {
        $data['cart'] = $this->Cart_model->geBysessionuser($this->input->ip_address());
        $this->load->view('user/cart',$data);
    }

    public function deletecart($id_cart)
    {
        if (!isset($id_cart)) show_404();
        if ($this->Cart_model->delete($id_cart)) {
            redirect(site_url('main/cart'));
        }
    }

    public function checkout()
    {
        $kurs= 'https://booknpay.net/ver3/bnp20/htls/curmyr.php';
        $apiData = $this->curl->simple_get($kurs);
        $data['cart'] = $this->Cart_model->geBysessionuser($this->input->ip_address());
        $this->load->view('user/form_guest',$data,$apiData);
    }

    public function addcart()
    {
        // var_dump($this->Cart_model->save);die();
        $this->Cart_model->save();
        $this->session->set_flashdata('success', 'Berhasil disimpan');
		redirect('main/detailroom/1');
    }

    public function fullpayment()
    {
        $id_cart = $this->load->post('id_cart',TRUE);
        $sessionuser = $this->load->post('sessionuser',TRUE);
        $id_room = $this->load->post('id_room',TRUE);
        $id_tour = $this->load->post('id_tour',TRUE);
        $id_additional = $this->load->post('id_additional',TRUE);
        $id_hoteltour = $this->load->post('id_hoteltour',TRUE);
        $person = $this->load->post('person',TRUE);
        $adult = $this->load->post('adult',TRUE);
        $child = $this->load->post('child',TRUE);
        $datebook = $this->load->post('datebook',TRUE);
        $checkin = $this->load->post('checkin',TRUE);
        $checkout = $this->load->post('checkout',TRUE);
        $price = $this->load->post('price',TRUE);
        $qty = $this->load->post('qty',TRUE);
        $total_price = $this->load->post('total_price',TRUE);
        $created_at = $this->load->post('created_at',TRUE);
        $updated_at = $this->load->post('updated_at',TRUE);

        $this->Detailbooked_model->create_transaction($id_cart,$id_room,$id_tour,$id_additional,$id_hoteltour,$person,$adult,$child,$datebook,$checkin,$checkout,$price,$qty,$total_price,$created_at,$updated_at);
    }
}