<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class matapelajaran extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model('matapelajaran_model');
            $this->load->library('form_validation');

            if($this->session->userdata('level')!="admin"){
                redirect('login','refresh');
            }
        }

        public function index() {

            $this->load->model('matapelajaran_model');

            $data['title']='List Mata Pelajaran';
            $data['matapelajaran']=$this->matapelajaran_model->getAllmatapelajaran();

            if($this->input->post('keyword')){
                $data['matapelajaran'] = $this->matapelajaran_model->cariDatamatapelajaran();
            }

            $this->load->view('template/header',$data);
            $this->load->view('matapelajaran/index',$data);
            $this->load->view('template/footer');
        }

        public function tambah() {

            $data['title']='Form Tambah Data Mata Pelajaran';

            $this->form_validation->set_rules('Kode_Mapel', 'Kode_Mapel', 'required');
            $this->form_validation->set_rules('nama', 'nama', 'required');
            $this->form_validation->set_rules('KKM', 'KKM', 'required');
            $this->form_validation->set_rules('Id_Guru','Id_Guru', 'required');
            $this->form_validation->set_rules('kelas', 'kelas', 'required');
           
            

            if($this->form_validation->run() == FALSE){
                $this->load->view('template/header', $data);
                $this->load->view('matapelajaran/tambah', $data);
                $this->load->view('template/footer');
            }else{
                $this->matapelajaran_model->tambahdatamatapelajaran();
                $this->session->set_flashdata('flash-data','Ditambahkan');
                redirect('matapelajaran','refresh');
            }
        }

        public function hapus($id){
            $this->matapelajaran_model->hapusdatamatapelajaran($id);

            $this->session->set_flashdata('flash-data','Dihapus');
            redirect('matapelajaran','refresh');
        }

        public function detail($id){
            $data['title'] = 'Detail matapelajaran';
            $data['matapelajaran'] = $this->matapelajaran_model->getmatapelajaranByID($id);

            $this->load->view('template/header', $data);
            $this->load->view('matapelajaran/detail', $data);
            $this->load->view('template/footer');
        }

        public function edit($id) {

            $data['title']='Form Edit Data MataPelajaran';
            $data['matapelajaran']=$this->matapelajaran_model->getmatapelajaranByID($id);

            
            $this->form_validation->set_rules('Kode_Mapel', 'Kode_Mapel', 'required');
            $this->form_validation->set_rules('nama', 'nama', 'required');
            $this->form_validation->set_rules('KKM', 'KKM', 'required');
            $this->form_validation->set_rules('Id_Guru','Id_Guru', 'required');
            $this->form_validation->set_rules('kelas','kelas', 'required');

            if($this->form_validation->run() == FALSE){
                $this->load->view('template/header', $data);
                $this->load->view('matapelajaran/edit', $data);
                $this->load->view('template/footer');
            }else{
                $this->matapelajaran_model->ubahdatamatapelajaran();
                $this->session->set_flashdata('flash-data','diedit');
                redirect('matapelajaran','refresh');
            }
        }
    }
