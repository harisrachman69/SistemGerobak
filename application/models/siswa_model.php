<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class siswa_model extends CI_Model {
        
        public function getAllsiswa() {

            $query=$this->db->get('siswa');

            return $query->result_array();
        }

        public function tambahdatasiswa(){
            $data=[
                "NIS" => $this->input->post('NIS',true),
                "nama" => $this->input->post('nama',true),
                "kelas" => $this->input->post('kelas',true),
                "jenis_kelamin" => $this->input->post('jenis_kelamin',true),
                "no_hp" => $this->input->post('no_hp',true),
                "alamat" => $this->input->post('alamat',true),
                
            ];

            $this->db->insert('siswa', $data);
        }

        public function hapusdatasiswa($id){
            $this->db->where('NIS', $id);
            $this->db->delete('siswa');
        }
        public function kembalidatasiswa($id){
            $this->db->where('NIS', $id);
            $this->db->back('siswa');
        }
        

        public function getsiswaByID($id){
            return $this->db->get_where('siswa',['NIS'=>$id])->row_array();
        }

        public function ubahdatasiswa(){
            $data=[
                "NIS" => $this->input->post('NIS',true),  
                "nama" => $this->input->post('nama',true),
                "kelas" => $this->input->post('kelas',true),
                "jenis_kelamin" => $this->input->post('jenis_kelamin',true),
                "no_hp" => $this->input->post('no_hp',true),
                "alamat" => $this->input->post('alamat',true) ,
                        
            ];
            $this->db->where('NIS', $this->input->post('NIS'));
            $this->db->update('siswa', $data);   
        }

        public function cariDatasiswa(){
            $keyword = $this->input->post('keyword');
            $this->db->like('NIS', $keyword);
            $this->db->or_like('nama', $keyword);
            $this->db->or_like('kelas', $keyword);
            $this->db->or_like('jenis_kelamin', $keyword);
            $this->db->or_like('no_hp',$keyword);
            $this->db->or_like('alamat',$keyword);
            
            return $this->db->get('siswa')->result_array();
        }
    }
