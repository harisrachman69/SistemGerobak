<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class guru extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model('guru_model');
            $this->load->library('form_validation');

            if($this->session->userdata('level')!="admin"){
                redirect('login','refresh');
            }
        }

        public function index() {

            $this->load->model('guru_model');

            $data['title']='List Guru';
            $data['guru']=$this->guru_model->getAllguru();

            if($this->input->post('keyword')){
                $data['guru'] = $this->guru_model->cariDataguru();
            }

            $this->load->view('template/header',$data);
            $this->load->view('guru/index',$data);
            $this->load->view('template/footer');
        }

        public function tambah() {

            $data['title']='Form Tambah Data guru';

            $this->form_validation->set_rules('id_guru', 'id_guru', 'required');
            $this->form_validation->set_rules('nama', 'nama', 'required');
            $this->form_validation->set_rules('kelas', 'kelas', 'required');
            $this->form_validation->set_rules('MataPelajaran', 'MataPelajaran', 'required');
            $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required');
            $this->form_validation->set_rules('no_hp', 'no_hp', 'required');
            $this->form_validation->set_rules('alamat', 'alamat', 'required');

            if($this->form_validation->run() == FALSE){
                $this->load->view('template/header', $data);
                $this->load->view('guru/tambah', $data);
                $this->load->view('template/footer');
            }else{
                $this->guru_model->tambahdataguru();
                $this->session->set_flashdata('flash-data','Ditambahkan');
                redirect('guru','refresh');
            }
        }

        public function hapus($id){
            $this->guru_model->hapusdataguru($id);

            $this->session->set_flashdata('flash-data','Dihapus');
            redirect('guru','refresh');
        }

        public function detail($id){
            $data['title'] = 'Detail Guru';
            $data['guru'] = $this->guru_model->getguruByID($id);

            $this->load->view('template/header', $data);
            $this->load->view('guru/detail', $data);
            $this->load->view('template/footer');
        }

        public function edit($id) {

            $data['title']='Form Edit Data guru';
            $data['guru']=$this->guru_model->getguruByID($id);

            
            $this->form_validation->set_rules('id_guru', 'id_guru', 'required|numeric');
            $this->form_validation->set_rules('nama', 'nama', 'required');
            $this->form_validation->set_rules('kelas', 'kelas', 'required');
            $this->form_validation->set_rules('MataPelajaran', 'MataPelajaran', 'required');
            $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required');
            $this->form_validation->set_rules('no_hp', 'no_hp', 'required');
            $this->form_validation->set_rules('alamat', 'alamat', 'required');
            

            if($this->form_validation->run() == FALSE){
                $this->load->view('template/header', $data);
                $this->load->view('guru/edit', $data);
                $this->load->view('template/footer');
            }else{
                $this->guru_model->ubahdataguru();
                $this->session->set_flashdata('flash-data','diedit');
                redirect('guru','refresh');
            }
        }
    }
