<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class siswa extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model('siswa_model');
            $this->load->library('form_validation');

            if($this->session->userdata('level')!="admin"){
                redirect('login','refresh');
            }
        }

        public function index() {

            $this->load->model('siswa_model');

            $data['title']='List Siswa';
            $data['siswa']=$this->siswa_model->getAllsiswa();

            if($this->input->post('keyword')){
                $data['siswa'] = $this->siswa_model->cariDatasiswa();
            }

            $this->load->view('template/header',$data);
            $this->load->view('siswa/index',$data);
            $this->load->view('template/footer');
        }

        public function tambah() {

            $data['title']='Form Tambah Data Siswa';

            $this->form_validation->set_rules('nama', 'nama', 'required');
            $this->form_validation->set_rules('kelas', 'kelas', 'required');
            $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required');
            $this->form_validation->set_rules('no_hp', 'no_hp', 'required|numeric');
            $this->form_validation->set_rules('alamat', 'alamat', 'required');
            $this->form_validation->set_rules('NIS', 'NIS', 'required');

            if($this->form_validation->run() == FALSE){
                $this->load->view('template/header', $data);
                $this->load->view('siswa/tambah', $data);
                $this->load->view('template/footer');
            }else{
                $this->siswa_model->tambahdatasiswa();
                $this->session->set_flashdata('flash-data','ditambahkan');
                redirect('siswa','refresh');
            }
        }

        public function hapus($id){
            $this->siswa_model->hapusdatasiswa($id);

            $this->session->set_flashdata('flash-data','dihapus');
            redirect('siswa','refresh');
        }

        public function detail($id){
            $data['title'] = 'Detail Siswa';
            $data['siswa'] = $this->siswa_model->getsiswaByID($id);

            $this->load->view('template/header', $data);
            $this->load->view('siswa/detail', $data);
            $this->load->view('template/footer');
        }

        public function edit($id) {

            $data['title']='Form Edit Data siswa';
            $data['siswa']=$this->siswa_model->getsiswaByID($id);

            $this->form_validation->set_rules('NIS', 'NIS', 'required');
            $this->form_validation->set_rules('nama', 'nama', 'required');
            $this->form_validation->set_rules('kelas', 'kelas', 'required');
            $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required');
            $this->form_validation->set_rules('no_hp', 'no_hp', 'required|numeric');
            $this->form_validation->set_rules('alamat', 'alamat', 'required');
            


            if($this->form_validation->run() == FALSE){
                $this->load->view('template/header', $data);
                $this->load->view('siswa/edit', $data);
                $this->load->view('template/footer');
            }else{
                $this->siswa_model->ubahdatasiswa();
                $this->session->set_flashdata('flash-data','Diedit');
                redirect('siswa','refresh');
            }
        }
    }
