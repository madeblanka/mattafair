<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Package_model extends CI_Model
{
    private $_table = "package";

    public $id_package;
    public $kategori;
    public $hotel;

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
        $this->id_package= $post["id_package"];
        $this->kategori = $post["kategori"];
        $this->hotel = $post["hotel"];
        return $this->db->insert($this->_table, $this);
    }


    public function update()
    {
        $post = $this->input->post();
        $this->id_package= $post["id_package"];
        $this->kategori = $post["kategori"];
        $this->hotel = $post["hotel"];
        return $this->db->update($this->_table, $this, array('id_booked' => $post['id_booked']));
    }

}