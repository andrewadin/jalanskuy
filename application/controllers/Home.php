<?php
class Home extends CI_Controller {
  public function index() {
    $this->load->view('home');
  }
  // public function greet($name) {
  //   $data['name'] = $name;
  //   $this->load->view('hello', $data);
  // }
  // public function hallo() {
  //   $this->load->model('hello_model');
  //   $name = $this->hello_model->get_name();
  //   $data['name'] = $name;
  //   $this->load->view('hello', $data);
  // }
}