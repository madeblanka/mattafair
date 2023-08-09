<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Booked_model extends CI_Model
{
    private $_table = "additional";

    public $id_booked;
    public $name;
    public $address;
    public $zipcode;
    public $state;
    public $country;
    public $email;
    public $mobilenumber;
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
        $this->id_booked = $post["id_booked"];
        $this->name = $post["name"];
        $this->address = $post["address"];
        $this->zipcode = $post["zipcode"];
        $this->state = $post["state"];
        $this->country = $post["country"];
        $this->email = $post["email"];
        $this->mobilenumber = $post["mobilenumber"];
        $this->created_at = date('Y-m-d H:i:s');
        $this->updated_at = "";
        return $this->db->insert_batch($this->_table, $this);
    }


    public function update()
    {
        $post = $this->input->post();
        $this->id_booked = $post["id_booked"];
        $this->name = $post["name"];
        $this->address = $post["address"];
        $this->zipcode = $post["zipcode"];
        $this->state = $post["state"];
        $this->country = $post["country"];
        $this->email = $post["email"];
        $this->mobilenumber = $post["mobilenumber"];
        $this->created_at = $post["created_at"];
        $this->updated_at = date('Y-m-d H:i:s');
        return $this->db->update($this->_table, $this, array('id_booked' => $post['id_booked']));
    }

    public function getidbooked()
    {
        $this->db->select('id_booked');
        $this->db->from('booked');
        $this->db->order_by('id_booked DESC');
        $this->db->limit(1);
        return $this->db->get()->row();
    }
 
}