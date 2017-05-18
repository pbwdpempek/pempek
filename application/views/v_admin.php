<!DOCTYPE html>
<html>
<head>
	<title>Data Customer</title>
</head>
<body>
	<h1>Pembelian</h1>
	
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>Nomor KTP</th>
			<th>Nomor HP</th>
			<th>Nama Pembeli</th>
			<th>Alamat Pembeli</th>
			<th>Tanggal Diambil</th>
			<th>Pempek Lenjer</th>
			<th>Pempek Kapal Selam</th>
			<th>Pempek Adaan</th>
			<th>Pempek Kulit</th>
			<th>Status</th>
			<th> Action </th>
		</tr>
		<?php
		foreach($data_pembeli as $d){
		?>
		<tr>
			<td><?php echo $d['no_ktp'] ?></td>
			<td><?php echo $d['no_hp'] ?></td>
			<td><?php echo $d['nama_user'] ?></td>
			<td><?php echo $d['alamat_user'] ?></td>
			<td><?php echo $d['tanggal_diambil'] ?></td>
			<td><?php echo $d['lenjer'] ?></td>
			<td><?php echo $d['kapalselam'] ?></td>
			<td><?php echo $d['adaan'] ?></td>
			<td><?php echo $d['kulit'] ?></td>
			<td><?php echo $d['status'] ?></td>
			<td>
			      <?php echo anchor('crud/edit/'.$d['no_ktp'],'Edit'); ?>
				  <?php echo anchor('crud/hapus/'.$d['no_ktp'].'/','Hapus'); ?>
			</td>
		</tr>

		<?php } ?>
	</table>
	
	<h1>Bukti Pembayaran</h1>
	
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>Nomor KTP</th>
			<th>Resi</th>
			<th> Action </th>
		</tr>
		<?php
		foreach($bukti_pembayaran as $b){
		?>
		<tr>
			<td><?php echo $b['no_ktp'] ?></td>
			<td><img src="<?php echo base_url().'upload/'.$b['gambar'] ?>" class="img-responsive" ></td>
			<td>
			      <?php echo anchor('crud/edit/'.$d['no_ktp'],'Edit'); ?>
				  <?php echo anchor('crud/hapus/'.$d['no_ktp'].'/','Hapus'); ?>
			</td>
		</tr>

		<?php } ?>
	</table>
	 <a href="<?php echo base_url('index.php/login/logout'); ?>">Logout</a>
</body>
</html>