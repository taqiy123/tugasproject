<?php
class Mahasiswa_model extends CI_Model{
	public function get_data(){
		$data_mahasiswa =[
			["nama"=>"Kim Jefry","prodi"=>"MIF"],
			["nama"=>"Ahmad Kurniawan","prodi"=>"TKK"],
			["nama"=>"Budi Sudarsono","prodi"=>"TIF"]
		];
		return $data_mahasiswa;
	}
	function getALL(){
		$this -> db -> select('*');
		$this -> db -> from('tb_barang');
		$this -> db -> join('tb_kategori','tb_barang.nama_kategori = tb_kategori.nama_kategori');
		$query = $this -> db -> get();
		return $query;
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function edit_data($where,$table)
	{
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	function getGrup(){
		$this -> db -> select('*');
		$this -> db -> from('tb_kategori');
		$query = $this -> db -> get();
		return $query;
	}
	function getSupplier()
	{
		$this -> db -> select('*');
		$this -> db -> from('tb_supplier');
		$query = $this -> db -> get();
		return $query;
	}
	function input_data_supplier($data,$table){
		$this->db->insert($table,$data);
	}
}
?>
