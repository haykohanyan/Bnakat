<?php
class Admin_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	public function check_admin($email,$password){
		$query = $query = $this->db->get_where('admin', array('email' => $email,'password' => $password));
		return $query->num_rows();
	      
	}
	public function signup_admin($name,$surname,$email,$password){
		$data = array(
		   'name' => $name ,
		   'surname' => $surname ,
		   'email' => $email,
		   'password' => $password
	);
	   $this->db->insert('admin', $data); 
	}
	public function add_slide($title_am,$title_ru,$title_en,$image){
		$data = array(
		   'title-am' => $title_am,
		   'title-ru' => $title_ru,
		   'title-en' => $title_en,
		   'image' => $image
	);
		$this->db->insert('slider1', $data); 
	}
	public function get_result($table){
		$result=$this->db->get($table)->result_array();
		return $result;
	}
	public function edit_item($table,$data,$id){
           
		$this->db->where('id', $id);
		$this->db->update($table, $data); 
	}
	public function remove_item($table,$id){
		$this->db->where('id', $id);
		$this->db->delete($table); 
	}
	public function remove_location($table,$data){
		$this->db->where('lat', $data['lat']);
		$this->db->where('lng', $data['lng']);
		$this->db->delete($table); 
	}
	public function add_item($table,$data){
		$this->db->insert($table, $data); 
	}

	public function get_result_id($table,$id){
		$this->db->where('id', $id);
		$result=$this->db->get($table)->result_array();
		return $result;
	}
	public function get_result_page_id($table,$id){
		$this->db->where('page_id', $id);
		$result=$this->db->get($table)->result_array();
		return $result;
	}

}