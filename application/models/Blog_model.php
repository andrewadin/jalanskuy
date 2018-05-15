<?php
class Blog_model extends CI_Model{
public function get_post(){
$this->load->database();
$query=$this->db->query('SELECT * FROM post');
return $query->result();
}
public function insert_post($judul,$konten){
$this->load->database();
$this->db->query("INSERT INTO post (judul,konten) VALUES ('$judul','$konten')");
}
public function delete_post($id) {
$this->load->database();
$this->db->query("DELETE FROM post WHERE id = $id");
}
public function get_post_one($id){
$this->load->database();
$query=$this->db->query("SELECT * FROM post WHERE id = $id");
return $query->result();
}
public function update_post($id,$judul,$konten) {
$this->load->database();
$this->db->query("UPDATE `post` SET judul= '$judul', konten ='$konten' WHERE id='$id'");
}
}