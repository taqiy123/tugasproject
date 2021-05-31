<?php
	defined('BASEPATH')OR exit('No direct script access allowed');
	class Mahasiswa extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this -> load -> model('Mahasiswa_model');
		}

		public function index(){
			$data['user'] = $this->Mahasiswa_model->getAll()->result();
			$this->template->views('crud/home_mahasiswa',$data);
		}
		
		public function tambah(){
			$data['user'] = $this->Mahasiswa_model->getGrup()->result();
			$this->template->views('crud/tambah_mahasiswa',$data);
		}

		public function input(){
			$nama_kategori = $this->input->post('nama_kategori');
			$nama_barang = $this->input->post('nama_barang');
			$merk = $this->input->post('merk');
			$harga_jual = $this->input->post('harga_jual');

			$data = array(
				'nama_kategori' => $nama_kategori,
				'nama_barang' => $nama_barang,
				'merk' => $merk,
				'harga_jual' => $harga_jual,
				);
			$this->Mahasiswa_model->input_data($data,'tb_barang');
			redirect('Mahasiswa/index');
		}

		public function edit($id){
			$where = array('id' => $id);
			$data['user'] = $this->Mahasiswa_model->edit_data($where, 'tb_barang')->result();
			$data['kategori'] = $this->Mahasiswa_model->getGrup()->result();
			$this->template->views('crud/edit_mahasiswa',$data);
		}

		public function update(){
			$id = $this->input->post('id');
			$nama_kategori = $this->input->post('nama_kategori');
			$nama_barang = $this->input->post('nama_barang');
			$merk = $this->input->post('merk');
			$harga_jual = $this->input->post('harga_jual');

			$data = array(
				'nama_kategori' => $nama_kategori,
				'nama_barang' => $nama_barang,
				'merk' => $merk,
				'harga_jual' => $harga_jual
			);

			$where = array(
				'id' => $id_barang
			);
			$this->Mahasiswa_model->update_data($where,$data, 'tb_barang');
			redirect('Mahasiswa');
		}

		public function hapus($id)
		{
			$where = array('id' => $id_barang);
			$this->Mahasiswa_model->hapus_data($where,'tb_barang');
			redirect('Mahasiswa/index');
		}
		public function supplier()
		{
			$data['supplier'] = $this->Mahasiswa_model->getSupplier()->result();
			$this->template->views('crud/data_supplier',$data);
		}
		public function tambah_supplier(){
			$this->template->views('crud/add_supplier');
		}
		public function input_supplier(){
			$id_supplier = $this->input->post('id_supplier');
			$nama_su = $this->input->post('nama_supplier');
			$alamat = $this->input->post('alamat');
			$phone = $this->input->post('phone');
			$keterangan = $this->input->post('keterangan');

			$data = array(
				'id_supplier' => $id_supplier,
				'nama_supplier' => $nama_su,
				'alamat' => $alamat,
				'phone' => $phone,
				'keterangan' => $keterangan,
				);
			$this->Mahasiswa_model->input_data_supplier($data,'tb_supplier');
			redirect('crud/data_supplier');
		}
	}
	
?>
