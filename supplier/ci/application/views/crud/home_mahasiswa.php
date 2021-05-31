<div class="card shadow mb-4">
	<div class="card-header py-3">
	<h6 class="m-0 fint-weight-bold text-primary">Data Barang</h6></div>
	<div class="card-body"><div class="table-responsive">
		<table class="table table-bordered" id="dataTabe" width="100%" cellspacing="0">
		<thead>
		<tr><th>No</th>
			<th>Nama Barang</th>
			<th>Kategori</th>
			<th>Merk</th>
			<th>Harga Jual</th>
			<th></th>
		</tr>
		</thead>
		<tfoot>
		<tr><th>No</th>
			<th>Nama Barang</th>
			<th>Kategori</th>
			<th>Merk</th>
			<th>Harga Jual</th>
			<th></th>
		</tr>
		</tfoot>
		<tbody>
		<?php $no = 1;
			  foreach($user as $baris){
		?>
		<tr><td><?php echo $no++ ?></td>
			<td><?php echo $baris -> nama_barang; ?></td>
			<td><?php echo $baris -> nama_kategori; ?></td>
			<td><?php echo $baris -> merk; ?></td>
			<td><?php echo $baris -> harga_jual; ?></td>
			<td></tr>
		<?php } ?>
		</tbody>
		</table>
		<a href="<?php echo base_url('index.php/Mahasiswa/tambah')?>" class="btn btn-success btn-icon-split">
		<span class="text">Tambah Data</span>
		</a>
</div></div></div>
