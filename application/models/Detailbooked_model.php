<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Detailbooked_model extends CI_Model
{
    private $_table = "detailbooked";

    public $id_booked;
    public $id_room;
    public $id_tour;
    public $id_additional;
    public $id_hoteltour;
    public $person;
    public $datebook;
    public $checkin;
    public $checkout;
    public $price;
    public $qty;
    public $total_price;
    public $created_at;
    public $updated_at;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id_booked)
    {
        return $this->db->get_where($this->_table, ["id_booked" => $id_booked])->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_booked= $post["id_booked"];
        $this->id_room = $post["id_room"];
        $this->id_tour = $post["id_tour"];
        $this->id_additional = $post["id_additional"];
        $this->id_hoteltour = $post["id_hoteltour"];
        $this->person = $post["person"];
        $this->datebook = $post["datebook"];
        $this->checkin = $post["chcekin"];
        $this->checkout = $post["checkout"];
        $this->price = $post["price"];
        $this->qty = $post["qty"];
        $this->total_price = $post["total_price"];
        $this->created_at = date('Y-m-d H:i:s');
        $this->updated_at = "";
        return $this->db->insert_batch($this->_table, $this);
    }


    public function update()
    {
        $post = $this->input->post();
        $this->id_booked = $post["id_booked"];
        $this->id_room = $post["id_room"];
        $this->id_tour = $post["id_tour"];
        $this->id_additional = $post["id_additional"];
        $this->id_hoteltour = $post["id_hoteltour"];
        $this->person = $post["person"];
        $this->datebook = $post["datebook"];
        $this->checkin = $post["checkin"];
        $this->checkout = $post["checkout"];
        $this->price = $post["price"];
        $this->qty = $post["qty"];
        $this->total_price = $post["total_price"];
        $this->created_at = $post["created_at"];
        $this->updated_at = date('Y-m-d H:i:s');
        return $this->db->update($this->_table, $this, array('id_booked' => $post['id_booked']));
    }

 
}