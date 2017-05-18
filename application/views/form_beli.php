<!DOCTYPE html>
<html>
<head>
	<title>Ceritanya bikin Create</title>
</head>
<body>
	<center>
		<h1>Ini UPDATE</h1>
		<h3>Tambah data pembeli</h3>
	</center>
	 <?php foreach($data_pembeli as $b){ ?>
	<form action="<?php echo base_url(). 'index.php/crud/update'; ?>" enctype="multipart/form-data" method="post">
		<table style="margin:20px auto;">

			<tr>
				<td>Pesanan Pempek Lenjer</td>
				<td><input type="text" name="lenjer" id="lenjer2" value="<?php echo $b->lenjer ?>"></td>
			</tr>
			<tr>
				<td>Pesanan Pempek Kapal Selam</td>
				<td><input type="text" name="kapalselam" id="kapalselam2" value="<?php echo $b->kapalselam ?>"></td>
			</tr>
			<tr>
				<td>Pesanan Pempek Adaan</td>
				<td><input type="text" name="adaan" id="adaan2" value="<?php echo $b->adaan ?>"></td>
			</tr>
			<tr>
				<td>Pesanan Pempek Kulit</td>
				<td><input type="text" name="kulit" id="kulit2" value="<?php echo $b->kulit ?>"></td>
			</tr>
			<tr>
				<td>Nomor Identitas</td>
				<td><input type="text" name="no_ktp" placeholder="KTP/sejenisnya" value="<?php echo $b->no_ktp ?>"></td>
			</tr>
			
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama_user" placeholder="Nama Lengkap Anda" value="<?php echo $b->nama_user ?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat_user" placeholder="Alamat dan Kode Pos" value="<?php echo $b->alamat_user ?>"></td>
			</tr>
			<tr>
				<td>Nomor Telepon</td>
				<td><input type="text" name="no_hp" placeholder="Nomor yang bisa dihubungi" value="<?php echo $b->no_hp ?>"></td>
			</tr>
			<tr>
				<td>Tanggal Di Ambil</td>
				<td><input type="date" name="tanggal_diambil" placeholder="mm/dd/yyyy" value="<?php echo $b->tanggal_diambil ?>"></td>
			</tr>
			<tr>
				<td>Status</td>
				<td><input type="date" name="status" value="<?php echo $b->status ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SELESAI"></td>
			</tr>
			
		</table>
	</form>
	<?php } ?>
</body>
</html>