<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Room_model extends CI_Model
{
    private $_table = "room";

    public $id_room;
    public $id_hotel;
    public $name;
    public $price;
    public $facility;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id_room)
    {
        return $this->db->get_where($this->_table, ["id_room" => $id_room])->result();
    }

    public function getAllId()
    {
        return $this->db->select('id_room,name')->get($this->_table)->result();
    }

    public function getByIdhotel($id_hotel)
    {
        return $this->db->get_where($this->_table, ["id_hotel" => $id_hotel])->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_room = "";
        $this->id_hotel= $post["id_hotel"];
        $this->name = $post["name"];
        $this->price = $post["price"];
        $this->facility = $post["facility"];
        
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_room = $post["id_room"];
        $this->id_hotel = $post["id_hotel"];
        $this->name = $post["name"];
        $this->price = $post["price"];
        $this->facility = $post["facility"]; 
        return $this->db->update($this->_table, $this, array('id_room' => $post['id_room']));
    }
 
}