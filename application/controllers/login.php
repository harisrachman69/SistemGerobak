<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('model_login');
    }

    public function index()
    {
        $data['title'] = 'Login';
        $this->load->view('template/header_login', $data);
        $this->load->view('login/index');
        $this->load->view('template/footer');
    }

    public function proses_login()
    {
        $username = htmlspecialchars($this->input->post('uname1'));
        $password = htmlspecialchars($this->input->post('pwd1'));

        $ceklogin = $this->model_login->login($username, $password);

        if ($ceklogin) {
            foreach ($ceklogin as $row);
            $this->session->set_userdata('user', $row->username);
            $this->session->set_userdata('level', $row->level);

            if ($this->session->userdata('level') == "admin") {
                redirect('Home/index');
            } elseif ($this->session->userdata('level') == "user") {
                redirect('Home2');
                //controller dan fungsi
            }
        } else {
            $data['pesan'] = "username dan password anda salah";
            $data['title'] = "Login";
            $this->load->view('template/header_login', $data);
            $this->load->view('login/index');
            $this->load->view('template/footer');
            //redirect('login/index','refresh');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login', 'refresh');
    }
}
