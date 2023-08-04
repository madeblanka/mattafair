<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tour_model extends CI_Model
{
    private $_table = "tour";

    public $id_tour;
    public $name;
    public $image;
    public $destination;
    public $description;
    public $price;
    public $created_at;
    public $updated_at;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id_tour)
    {
        return $this->db->get_where($this->_table, ["id_tour" => $id_tour])->result();
    }

    public function getAllId()
    {
        return $this->db->select('id_tour,name')->get($this->_table)->result();
    }
    public function save()
    {
        $post = $this->input->post();
        $this->id_tour= "";
        $this->name = $post["name"];
        $this->image = $this->_uploadImage();
        $this->destination = $post["destination"];
        $this->description = $post["description"];
        $this->price = $post["price"];
        $this->created_at = date('Y-m-d H:i:s');
        $this->updated_at = "";
        return $this->db->insert($this->_table, $this);
    }


    public function update()
    {
        $post = $this->input->post();
        $this->id_tour = $post["id_tour"];
        $this->name = $post["name"];
        $this->image = $post["image"];
        $this->destination = $post["destination"];
        $this->description = $post["description"];
        $this->price = $post["price"];
        $this->created_at = $post["created_at"];
        $this->updated_at = date('Y-m-d H:i:s');
        return $this->db->update($this->_table, $this, array('id_tour' => $post['id_tour']));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './tour/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->name.'-'.$this->destination;
        $config['overwrite']			      = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }

        return "defaultman.jpg";
    }

    private function _deleteImage($id_tour)
    {
      $additional = $this->getById($id_tour);

      if ($additional->image != "default.jpg")
      {
	         $filename = explode(".", $additional->image)[0];
		       return array_map('unlink', glob(FCPATH."tour/$filename.*"));
      }

    }
 
}