<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Threeday2n_model extends CI_Model
{
    private $_table = "3d2n";

    public $id_package;
    public $id_3d2n;
    public $a;
    public $b;
    public $c;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id_3d2n)
    {
        return $this->db->get_where($this->_table, ["id_3d2n" => $id_3d2n])->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_package= $post["id_package"];
        $this->id_3d2n= "";
        $this->a = $post["a"];
        $this->b = $post["b"];
        $this->c = $post["c"];
        return $this->db->insert($this->_table, $this);
    }


    public function update()
    {
        $post = $this->input->post();
        $this->id_package= $post["id_package"];
        $this->id_3d2n= $post["id_3d2n"];
        $this->a = $post["a"];
        $this->b = $post["b"];
        $this->c = $post["c"];
        return $this->db->update($this->_table, $this, array('id_3d2n' => $post['id_3d2n']));
    }

    public function getprice($id_3d2n)
    {
        return $this->db->get_where($this->_table, ["id_3d2n" => $id_3d2n])->row();
    }   

}