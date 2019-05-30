<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Mregistrasi');
	}

	public function index()
	{
		if ($this->session->flashdata('simpandata') == 'sukses')
			$this->load->view('welcome_message');
		else {
			$data['daftarlayanan'] = $this->Mregistrasi->daftarlayanan();
			$this->load->view('registrasi', $data);
		}
	}

  function simpanData(){
		//print_r('Sampe');die;
		//
    // $password = md5($_POST['password']);
    // if($_POST['active'] == true) $active = true;

    $data=array(
        "nama" => $_POST['nama'],
        "email" => $_POST['email'],
        "birthday" => mdate('%Y-%d-%m', strtotime($_POST['birthday'])),
				//"birthday" => date('Y-d-m', strtotime($_POST['birthday'])),
        "phone" => $_POST['phone'],
        "layanan" =>  $_POST['layanan'],
        "jkelamin" => $_POST['jkelamin'],
    );
    $query = $this->Mregistrasi->simpanRegistrasi($data);

    $output = array(
        "status" => 0,
        "message" => "failed"
    );
    if($query){
			//$this->session->set_userdata('simpandata', 'sukses');
			$this->session->set_flashdata('simpandata', 'sukses');
			$output = array(
	        "status" => 1,
	        "message" => "success",
	    );
    }
    echo json_encode($output);
  }

  public function selesai() {
      $this->load->view('welcome_message');
  }
}
