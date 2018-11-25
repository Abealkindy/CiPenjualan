<?php 
/**
 * 
 */
class Admin_Model extends CI_Model
{
	public function getKategori()
	{
		return $this->db->get('tb_kategori')->result();
	}
	
	public function addKategori($kategoriValue)
	{
		return $this->db->insert('tb_kategori', $kategoriValue);
	}
}
?>