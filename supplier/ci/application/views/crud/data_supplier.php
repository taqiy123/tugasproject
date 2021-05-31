<div class="card shadow mb-4">
	<div class="card-header py-3">
	<h6 class="m-0 fint-weight-bold text-primary">Data Supplier</h6></div>
	<div class="card-body"><div class="table-responsive">
		<table class="table table-bordered" id="dataTabe" width="100%" cellspacing="0">
		<thead>
		<tr><th>No</th>
			<th>Nama Supplier</th>
			<th>Alamat Supplier</th>
			<th>Phone Number</th>
			<th>Keterangan</th>
			<th></th>
		</tr>
		</thead>
		<tfoot>
		<tr><th>No</th>
			<th>Nama Supplier</th>
			<th>Alamat Supplier</th>
			<th>Phone Number</th>
			<th>Keterangan</th>
			<th></th>
		</tr>
		</tfoot>
		<tbody>
		<?php $no = 1;
			  foreach($supplier as $baris){
		?>
		<tr><td><?php echo $no++ ?></td>
			<td><?php echo $baris -> nama_supplier; ?></td>
			<td><?php echo $baris -> alamat; ?></td>
			<td><?php echo $baris -> phone; ?></td>
			<td><?php echo $baris -> keterangan; ?></td>
			<td></tr>
		<?php } ?>
		</tbody>
		</table>
		<a href="<?php echo base_url('index.php/Mahasiswa/tambah_supplier')?>" class="btn btn-success btn-icon-split">
		<span class="text">Tambah Data</span>
		</a>
</div></div></div>
