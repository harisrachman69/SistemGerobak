<?php
defined('BASEPATH') OR exit('No direct scipt access allowes');
/**
 * 
 */
class cetak_model extends CI_Model
{
	public function view()
    {
        $this->db->select('judul,Pengarang');
        $query = $this->db->get('peminjam');
        return $query->result();
    }
	
}
?>
