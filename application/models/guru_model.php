<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class guru_model extends CI_Model {
        
        public function getAllguru() {

            $query=$this->db->get('guru');

            return $query->result_array();
        }

        public function tambahdataguru(){
            $data=[
                "id_guru" => $this->input->post('id_guru',true),
                "nama" => $this->input->post('nama',true),
                "jenis_kelamin" => $this->input->post('jenis_kelamin',true),
                "alamat" => $this->input->post('alamat',true),
                "no_hp"  => $this->input->post('no_hp',true)
            ];

            $this->db->insert('guru', $data);
        }

        public function hapusdataguru($id){
            $this->db->where('id_guru', $id);
            $this->db->delete('guru');
        }

        public function kembalidataguru($id){
            $this->db->where('id_guru', $id);
            $this->db->back('guru');
        }

        public function getguruByID($id){
            return $this->db->get_where('guru',['id_guru'=>$id])->row_array();
        }

        public function ubahdataguru(){
            $data=[
                "id_guru" => $this->input->post('id_guru',true),
                "nama" => $this->input->post('nama',true),
                "kelas" => $this->input->post('kelas',true),
                "jenis_kelamin" => $this->input->post('jenis_kelamin',true),
                "alamat" => $this->input->post('alamat',true) , 
                "no_hp" => $this->input->post('no_hp',true)       
            ];
            $this->db->where('id_guru', $this->input->post('id_guru'));
            $this->db->update('guru', $data);   
        }

        public function cariDataguru(){
            $keyword = $this->input->post('keyword');
            $this->db->like('id_guru', $keyword);
            $this->db->or_like('nama', $keyword);
            $this->db->or_like('kelas', $keyword);
            $this->db->or_like('jenis_kelamin', $keyword);
            $this->db->or_like('alamat', $keyword);
            $this->db->or_like('no_hp',$keyword);
            
            return $this->db->get('guru')->result_array();
        }
    }
