<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel_model extends CI_Model
{
    private $_table = "hotel";

    public $id_hotel;
    public $name;
    public $image;
    public $address;
    public $created_at;
    public $updated_at;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id_hotel)
    {
        return $this->db->get_where($this->_table, ["id_hotel" => $id_hotel])->result();
    }
    
    public function getname($id_hotel)
    {
        return $this->db->get_where($this->_table, ["id_hotel" => $id_hotel])->row();
    }

    public function getAllId()
    {
        return $this->db->select('id_hotel,name')->get($this->_table)->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_hotel= "";
        $this->name = $post["name"];
        $this->image = $this->_uploadImage();
        $this->address = $post["address"];
        $this->created_at = date('Y-m-d H:i:s');
        $this->updated_at = "";
        return $this->db->insert($this->_table, $this);
    }


    public function update()
    {
        $post = $this->input->post();
        $this->id_hotel = $post["id_hotel"];
        $this->name = $post["name"];
        $this->image = $post["image"];
        $this->address = $post["address"];
        $this->created_at = $post["created_at"];
        $this->updated_at = date('Y-m-d H:i:s');
        return $this->db->update($this->_table, $this, array('id_hotel' => $post['id_hotel']));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './hotel/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|webp';
        $config['file_name']            = $this->name.'-'.$this->address;
        $config['overwrite']			      = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }

        return "defaultimage.jpg";
    }

    private function _deleteImage($id_hotel)
    {
      $additional = $this->getById($id_hotel);

      if ($additional->image != "default.jpg")
      {
	         $filename = explode(".", $additional->image)[0];
		       return array_map('unlink', glob(FCPATH."hotel/$filename.*"));
      }

    }
 
}