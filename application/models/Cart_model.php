<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cart_model extends CI_Model
{
    private $_table = "cart";

    public $id_cart;
    public $sessionuser;
    public $id_room;
    public $id_tour;
    public $id_additional;
    public $id_hoteltour;
    public $person;
    public $adult;
    public $child;
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
    
    public function getById($id_cart)
    {
        return $this->db->get_where($this->_table, ["id_cart" => $id_cart])->result();
    }

    public function geBysessionuser($sessionuser)
    {
        return $this->db->get_where($this->_table, ["sessionuser" => $sessionuser])->result();
    }

    public function save()
    {
        $post = $this->input->post();
        // var_dump((strtotime($post['checkout'])-strtotime($post['checkin']))/ 60 / 60 / 24);die();
        // var_dump((strtotime($post['checkout'])-strtotime($post['checkin']))/ 60 / 60 / 24);die();
        $this->id_cart= "";
        $this->sessionuser = $post["sessionuser"];
        $this->id_room = $post["id_room"];
        $this->id_tour = $post["id_tour"];
        $this->id_additional = $post["id_additional"];
        $this->id_hoteltour = $post["id_hoteltour"];
        $this->person = $post["person"];
        $this->adult = $post["adult"];
        $this->child = $post["child"];
        $this->datebook = $post["datebook"];
        $this->checkin = $post["checkin"];
        $this->checkout = $post["checkout"];
        $this->price = $post["price"];
        $this->qty = $post["qty"];
        $this->total_price = $post['price'] * $post['qty'] * ((strtotime($post['checkout'])-strtotime($post['checkin']))/ 86400);
        $this->created_at = date('Y-m-d H:i:s');
        $this->updated_at = "";
        return $this->db->insert($this->_table, $this);
    }


    public function update()
    {
        $post = $this->input->post();
        $this->id_cart = $post["id_cart"];
        $this->sessionuser = $post["sessionuser"];
        $this->id_room = $post["id_room"];
        $this->id_tour = $post["id_tour"];
        $this->id_additional = $post["id_additional"];
        $this->id_hoteltour = $post["id_hoteltour"];
        $this->person = $post["person"];
        $this->checkin = $post["checkin"];
        $this->checkout = $post["checkout"];
        $this->price = $post["price"];
        $this->qty = $post["qty"];
        $this->total_price = $post["total_price"];
        $this->created_at = $post["created_at"];
        $this->updated_at = date('Y-m-d H:i:s');
        return $this->db->update($this->_table, $this, array('id_cart' => $post['id_cart']));
    }

    public function delete($id_cart)
    {
        return $this->db->delete($this->_table, array("id_cart" => $id_cart));
    }
 
}