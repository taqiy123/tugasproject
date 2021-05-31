<div class="row">
	<div class="col-lg-7"> 
	<div class="p-5"> 
	<div class="text-center">
	<h1 class="h4 text-gray-900 mb-4">Tambah User</h1></div> 
	<form class="user" action="<?php echo base_url('index.php/Mahasiswa/input_supplier');?>" method="post"> 
		<div class="form-group"> 
			<input type="text" class="form-control form-control-user" id="id_supplier" name="id_supplier" placeholder="Id Supplier Maximal 5 Character" require> 
		</div> 
		<div class="form-group"> 
			<input type="text" class="form-control form-control-user" id="nama_supplier" name="nama_supplier" placeholder="Nama Supplier Maximal 10 Character" require> 
		</div> 
		<div class="form-group"> 
			<input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Alamat Maximal 50 Character" require> 
		</div>
		<div class="form-group"> 
			<input type="text" class="form-control form-control-user" id=phone name="phone" placeholder="Phone Maximal 15 Character" require> 
		</div> 
		<div class="form-group">
			 <input type="text" class="form-control form-control-user" id="keterangan" name="keterangan" placeholder="Keterangan Maximal 20 Character" require>
		</div> 
		<input type="submit" class="btn btn-success btn-icon-split" name="submit" value="Tambah"> 
	</form><hr> 
	<div class="text-center"> 
	<a class="small" href="index">Kembali</a> 
</div></div></div></div>
