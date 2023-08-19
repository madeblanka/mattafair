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
    
    public function getById($id_package)
    {
        return $this->db->get_where($this->_table, ["id_package" => $id_package])->result();
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
        return $this->db->update($this->_table, $this, array('id_package' => $post['id_package']));
    }

    public function getAllId()
    {
        return $this->db->select('id_package,hotel')->get($this->_table)->result();
    }

    public function getfneAsc()
    {
        $this->db->select('*');
        $this->db->from('package');
        $this->db->where('kategori','Free and Easy');
        $this->db->order_by('id_package ASC');
        return $this->db->get()->result();
    }
}