<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class About extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model('about_model');

            if($this->session->userdata('level')!="user"){
                redirect('login','refresh');
            }
        }

        public function index() 
        {
            $data['title']='About';
			$this->load->view('template/header2',$data);
			$this->load->view('about/index',$data);
			$this->load->view('template/footer');
			$this->load->library('session');
			
			if($this->session->userdata('level')!="user"){
				redirect('login','refresh');
			}
        
        }
    }
?>