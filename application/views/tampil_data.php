<!DOCTYPE html>
<html>
<head>
	<title>Ceritanya bikin Create</title>
</head>
<body>
	<center>
		<h1>Ini Create</h1>
		<h3>Tambah data baru</h3>
	</center>
	<form action="<?php echo base_url(). 'index.php/crud/edit'; ?>" enctype="multipart/form-data" method="post">
		<table style="margin:20px auto;" border="1">
			<tr style="background: white;">
				<th>Pesanan Pempek Lenjer</th>
				<th>Pesanan Pempek Kapal Selam</th>
				<th>Pesanan Pempek Adaan</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Tanggal Di Ambil</th>
			</tr>
			<?php
		foreach($data_pembeli as $d){
		?>
			<tr>
			<td><?php echo $d['lenjer']; ?></td>
			<td><?php echo $$d['kapalselam']; ?></td>
			<td><?php echo $d['adaan']; ?></td>
			<td><?php echo $d['nama_user']; ?></td>
			<td><?php echo $d['alamat_user']; ?></td>
			<td><?php echo $d['tanggal_diambil']; ?></td>
			</tr>
			<?php } ?>
		</table>
	</form>
</body>
</html>