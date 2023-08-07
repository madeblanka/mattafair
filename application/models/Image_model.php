<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Image_model extends CI_Model
{
    private $_table = "image";

    public $id_image;
    public $id_room;
    public $id_tour;
    public $id_hoteltour;
    public $image1;
    public $image2;
    public $image3;
    public $image4;
    public $image5;
    public $image6;
    public $image7;
    public $image8;
    public $image9;
    public $image10;
    public $created_at;
    public $updated_at;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id_image)
    {
        return $this->db->get_where($this->_table, ["id_image" => $id_image])->result();
    }

    public function getByIdroom($id_room)
    {
        return $this->db->get_where($this->_table, ["id_room" => $id_room])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_image= "";
        $this->id_room = $post["id_room"];
        $this->id_tour = $post["id_tour"];
        $this->id_hoteltour = $post["id_hoteltour"];
        $this->image1 = $this->_uploadImage();
        $this->image2 = $this->_uploadImage2();
        $this->image3 = $this->_uploadImage3();
        $this->image4 = $this->_uploadImage4();
        $this->image5 = $this->_uploadImage5();
        $this->image6 = $this->_uploadImage6();
        $this->image7 = $this->_uploadImage7();
        $this->image8 = $this->_uploadImage8();
        $this->image9 = $this->_uploadImage9();
        $this->image10 = $this->_uploadImage10();
        $this->created_at = date('Y-m-d H:i:s');
        $this->updated_at = "";
        return $this->db->insert($this->_table, $this);
    }


    public function update()
    {
        $post = $this->input->post();
        $this->id_image = $post["id_image"];
        $this->id_room = $post["id_room"];
        $this->id_tour = $post["id_tour"];
        $this->id_hoteltour = $post["id_hoteltour"];
        $this->image1 = $post["image1"];
        $this->image2 = $post["image2"];
        $this->image3 = $post["image3"];
        $this->image4 = $post["image4"];
        $this->image5 = $post["image5"];
        $this->image6 = $post["image6"];
        $this->image7 = $post["image7"];
        $this->image8 = $post["image8"];
        $this->image9 = $post["image9"];
        $this->image10 = $post["image10"];
        $this->created_at = $post["created_at"];
        $this->updated_at = date('Y-m-d H:i:s');
        return $this->db->update($this->_table, $this, array('id_image' => $post['id_image']));
    }

    private function _uploadImage()
    {
        if($this->id_room != 0 )
        {
            return $imagename = $this->id_room;
        }elseif($this->id_tour != 0 )
        {
            return $imagename = $this->id_tour;
        }elseif($this->id_hoteltour !=0 )
        {
            return $imagename = $this->id_hotel;
        }
        $config['upload_path']          = './gallery/';
        $config['allowed_types']        = 'jpg|png|webp|jpeg';
        $config['file_name']            = $imagename;
        $config['overwrite']			      = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('image1') != null) {
            return $this->upload->data("file_name");
        }else
        {
            var_dump($this->upload->do_upload('image1'));die();
        }

        return "defaultman.jpg";
    }

    private function _uploadImage2()
    {
        if($this->id_room != 0 )
        {
            return $imagename = $this->id_room;
        }elseif($this->id_tour != 0 )
        {
            return $imagename = $this->id_tour;
        }elseif($this->id_hoteltour !=0 )
        {
            return $imagename = $this->id_hotel;
        }
        $config['upload_path']          = './gallery/';
        $config['allowed_types']        = 'jpg|png|webp|jpeg';
        $config['file_name']            = $imagename.'-2';
        $config['overwrite']			      = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image2') != null) {
            return $this->upload->data("file_name");
        }else{
            var_dump($this->upload->do_upload('image3'));
        }

        return "defaultman.jpg";
    }
    private function _uploadImage3()
    {
        if($this->id_room != 0 )
        {
            return $imagename = $this->id_room;
        }elseif($this->id_tour != 0 )
        {
            return $imagename = $this->id_tour;
        }elseif($this->id_hoteltour !=0 )
        {
            return $imagename = $this->id_hotel;
        }
        $config['upload_path']          = './gallery/';
        $config['allowed_types']        = 'jpg|png|webp|jpeg';
        $config['file_name']            = $imagename.'-3';
        $config['overwrite']			      = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image3') != null) {
            return $this->upload->data("file_name");
        }else{
            var_dump($this->upload->do_upload('image3'));
        }

        return "defaultman.jpg";
    }
    private function _uploadImage4()
    {
        if($this->id_room != 0 )
        {
            return $imagename = $this->id_room;
        }elseif($this->id_tour != 0 )
        {
            return $imagename = $this->id_tour;
        }elseif($this->id_hoteltour !=0 )
        {
            return $imagename = $this->id_hotel;
        }
        $config['upload_path']          = './gallery/';
        $config['allowed_types']        = 'jpg|png|webp|jpeg';
        $config['file_name']            = $imagename.'-4';
        $config['overwrite']			      = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image4') != null) {
            return $this->upload->data("file_name");
        }else{
            var_dump($this->upload->do_upload('image3'));
        }

        return "defaultman.jpg";
    }
    private function _uploadImage5()
    {
        if($this->id_room != 0 )
        {
            return $imagename = $this->id_room;
        }elseif($this->id_tour != 0 )
        {
            return $imagename = $this->id_tour;
        }elseif($this->id_hoteltour !=0 )
        {
            return $imagename = $this->id_hotel;
        }
        $config['upload_path']          = './gallery/';
        $config['allowed_types']        = 'jpg|png|webp|jpeg';
        $config['file_name']            = $imagename.'-5';
        $config['overwrite']			      = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image5') != null) {
            return $this->upload->data("file_name");
        }else{
            var_dump($this->upload->do_upload('image3'));
        }

        return "defaultman.jpg";
    }
    private function _uploadImage6()
    {
        if($this->id_room != 0 )
        {
            return $imagename = $this->id_room;
        }elseif($this->id_tour != 0 )
        {
            return $imagename = $this->id_tour;
        }elseif($this->id_hoteltour !=0 )
        {
            return $imagename = $this->id_hotel;
        }
        $config['upload_path']          = './gallery/';
        $config['allowed_types']        = 'jpg|png|webp|jpeg';
        $config['file_name']            = $imagename.'-6';
        $config['overwrite']			      = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image6') != null) {
            return $this->upload->data("file_name");
        }else{
            var_dump($this->upload->do_upload('image3'));
        }

        return "defaultman.jpg";
    }
    private function _uploadImage7()
    {
        if($this->id_room != 0 )
        {
            return $imagename = $this->id_room;
        }elseif($this->id_tour != 0 )
        {
            return $imagename = $this->id_tour;
        }elseif($this->id_hoteltour !=0 )
        {
            return $imagename = $this->id_hotel;
        }
        $config['upload_path']          = './gallery/';
        $config['allowed_types']        = 'jpg|png|webp|jpeg';
        $config['file_name']            = $imagename.'-7';
        $config['overwrite']			      = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image7') != null) {
            return $this->upload->data("file_name");
        }else{
            var_dump($this->upload->do_upload('image3'));
        }

        return "defaultman.jpg";
    }
    private function _uploadImage8()
    {
        if($this->id_room != 0 )
        {
            return $imagename = $this->id_room;
        }elseif($this->id_tour != 0 )
        {
            return $imagename = $this->id_tour;
        }elseif($this->id_hoteltour !=0 )
        {
            return $imagename = $this->id_hotel;
        }
        $config['upload_path']          = './gallery/';
        $config['allowed_types']        = 'jpg|png|webp|jpeg';
        $config['file_name']            = $imagename.'-8';
        $config['overwrite']			      = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image8') != null) {
            return $this->upload->data("file_name");
        }else{
            var_dump($this->upload->do_upload('image3'));
        }

        return "defaultman.jpg";
    }
    private function _uploadImage9()
    {
        if($this->id_room != 0 )
        {
            return $imagename = $this->id_room;
        }elseif($this->id_tour != 0 )
        {
            return $imagename = $this->id_tour;
        }elseif($this->id_hoteltour !=0 )
        {
            return $imagename = $this->id_hotel;
        }
        $config['upload_path']          = './gallery/';
        $config['allowed_types']        = 'jpg|png|webp|jpeg';
        $config['file_name']            = $imagename.'-9';
        $config['overwrite']			      = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image9') != null) {
            return $this->upload->data("file_name");
        }else{
            var_dump($this->upload->do_upload('image3'));
        }

        return "defaultman.jpg";
    }
    private function _uploadImage10()
    {
        if($this->id_room != 0 )
        {
            return $imagename = $this->id_room;
        }elseif($this->id_tour != 0 )
        {
            return $imagename = $this->id_tour;
        }elseif($this->id_hoteltour !=0 )
        {
            return $imagename = $this->id_hotel;
        }
        $config['upload_path']          = './gallery/';
        $config['allowed_types']        = 'jpg|png|webp|jpeg';
        $config['file_name']            = $imagename.'-10';
        $config['overwrite']			      = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image10') != null) {
            return $this->upload->data("file_name");
        }else{
            var_dump($this->upload->do_upload('image3'));
        }

        return "defaultman.jpg";
    }

    private function _deleteImage($id_image)
    {
      $tour = $this->getById($id_image);

      if ($tour->IMG != "default.jpg")
      {
	         $filename = explode(".", $tour->IMG)[0];
		       return array_map('unlink', glob(FCPATH."tour/$filename.*"));
      }

    }
 
}