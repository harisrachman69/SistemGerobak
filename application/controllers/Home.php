<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Home extends CI_Controller {

		public function index( ){
			$data['title']='Home';
			//$data['name']='$name';
			$this->load->view('template/header',$data);
			$this->load->view('Home/index',$data);
			$this->load->view('template/footer');
			$this->load->library('session');
			
			if($this->session->userdata('level')!="admin"){
				redirect('login','refresh');
			}
		
		}
	}
