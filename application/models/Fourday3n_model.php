<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Fourday3n_model extends CI_Model
{
    private $_table = "4d3n";

    public $id_package;
    public $id_4d3n;
    public $a;
    public $b;
    public $c;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id_4d3n)
    {
        return $this->db->get_where($this->_table, ["id_4d3n" => $id_4d3n])->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_package= $post["id_package"];
        $this->id_4d3n= "";
        $this->a = $post["a"];
        $this->b = $post["b"];
        $this->c = $post["c"];
        return $this->db->insert($this->_table, $this);
    }


    public function update()
    {
        $post = $this->input->post();
        $this->id_package= $post["id_package"];
        $this->id_4d3n= $post["id_4d3n"];
        $this->a = $post["a"];
        $this->b = $post["b"];
        $this->c = $post["c"];
        return $this->db->update($this->_table, $this, array('id_4d3n' => $post['id_4d3n']));
    }

}