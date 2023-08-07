<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Additional_model extends CI_Model
{
    private $_table = "additional";

    public $id_additional;
    public $id_tour;
    public $name;
    public $image;
    public $description;
    public $price;
    public $created_at;
    public $updated_at;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id_additional)
    {
        return $this->db->get_where($this->_table, ["id_additional" => $id_additional])->result();
    }
    
    public function getAllId()
    {
        return $this->db->select('id_additional,name')->get($this->_table)->result();
    }

    public function penjualan($id_tour,$tanggal)
    {
        $a = $this->Transaksi_model->caritanggal($tanggal);
        
        $this->db->where_in('id_additional',$a[0]);
        $this->db->where('id_tour', $id_tour);
        $s = $this->db->get('tb_detail')->num_rows();
        return $s;
        
    }
    public function save()
    {
        $post = $this->input->post();
        $this->id_additional = "";
        $this->id_tour = $post["id_tour"];
        $this->name = $post["name"];
        $this->image = $this->_uploadImage();
        $this->description = $post["description"];
        $this->price = $post["price"];
        $this->created_at = date('Y-m-d H:i:s');
        $this->updated_at = "";
        return $this->db->insert($this->_table, $this);
    }


    public function update()
    {
        $post = $this->input->post();
        $this->id_additional = $post["id_additional"];
        $this->id_tour = $post["id_tour"];
        $this->name = $post["name"];
        if (!empty($_FILES["image"]["name"])) {
            $this->image = $this->_uploadImage();
          } else {
            $this->image = $post["old_image"];
          }
        $this->description = $post["description"];
        $this->price = $post["price"];
        $this->created_at = $post["created_at"];
        $this->updated_at = date('Y-m-d H:i:s');
        return $this->db->update($this->_table, $this, array('id_additional' => $post['id_additional']));
    }


    private function _uploadImage()
    {
        $config['upload_path']          = './additional/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|webp';
        $config['file_name']            = $this->name.'-'.$this->id_tour;
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

    private function _deleteImage($id_additional)
    {
      $additional = $this->getById($id_additional);

      if ($additional->image != "default.jpg")
      {
	         $filename = explode(".", $additional->image)[0];
		       return array_map('unlink', glob(FCPATH."additional/$filename.*"));
      }

    }
   
 
}