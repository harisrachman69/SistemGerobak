<?php

class Kategori extends CI_Controller
{
    public function gerobakbakso()
    {
        $data['gerobakbakso'] = $this->model_kategori->data_gerobakbakso()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('gerobakbakso',$data);
        $this->load->view('templates/footer');

    }

    public function gerobaksoto()
    {
        $data['gerobaksoto'] = $this->model_kategori->data_gerobaksoto()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('gerobaksoto',$data);
        $this->load->view('templates/footer');

    }

    public function gerobaksate()
    {
        $data['gerobaksate'] = $this->model_kategori->data_gerobaksate()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('gerobaksate',$data);
        $this->load->view('templates/footer');

    }
    // public function teko()
    // {
    //     $data['teko'] = $this->model_kategori->data_teko()->result();
    //     $this->load->view('templates/header');
    //     $this->load->view('templates/sidebar');
    //     $this->load->view('teko',$data);
    //     $this->load->view('templates/footer');

    // }

    // public function kursi()
    // {
    //     $data['kursi'] = $this->model_kategori->data_kursi()->result();
    //     $this->load->view('templates/header');
    //     $this->load->view('templates/sidebar');
    //     $this->load->view('kursi',$data);
    //     $this->load->view('templates/footer');

    // }
}
?>