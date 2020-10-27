<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class matapelajaran_model extends CI_Model {
        
        public function getAllmatapelajaran() {

            $query=$this->db->get('matapelajaran');

            return $query->result_array();
        }
        public function tambahdatamatapelajaran(){
            $data=[
                "Kode_Mapel" => $this->input->post('Kode_Mapel',true),  
                "Mapel" => $this->input->post('Mapel',true),
                "kelas" => $this->input->post('kelas',true),
                "KKM" => $this->input->post('KKM',true),
                "Id_Guru" => $this->input->post('Id_Guru',true),
                "nama" => $this->input->post('nama',true),
               
                        
            ];

            $this->db->insert('matapelajaran',$data);
        }

        public function hapusdatamatapelajaran($id){
            $this->db->where('Kode_Mapel', $id);
            $this->db->delete('matapelajaran');
        }
        public function Kembalidatamatapelajaran($id){
            $this->db->where('Kode_Mapel', $id);
            $this->db->Back('matapelajaran');
        }

        public function getmatapelajaranByID($id){
            return $this->db->get_where('matapelajaran',['Kode_Mapel'=>$id])->row_array();
        }

        public function ubahdatamatapelajaran(){
            $data=[
                "Kode_Mapel" => $this->input->post('Kode_Mapel',true),  
                "Mapel" => $this->input->post('Mapel',true),
                "kelas" => $this->input->post('kelas',true),
                "KKM" => $this->input->post('KKM',true),
                "nama" => $this->input->post('nama',true),
               
                        
            ];
            $this->db->where('Kode_Mapel', $this->input->post('Kode_Mapel'));
            $this->db->update('matapelajaran', $data);   
        }


        public function cariDatamatapelajaran(){
            $keyword = $this->input->post('keyword');
            $this->db->like('Kode_Mapel', $keyword);
            $this->db->or_like('Mapel', $keyword);
            $this->db->or_like('KKM', $keyword);
            $this->db->or_like('Id_Guru',$keyword);
            $this->db->or_like('nama',$keyword);
            $this->db->or_like('kelas',$keyword);
            
            
            return $this->db->get('matapelajaran')->result_array();
        }
    }
