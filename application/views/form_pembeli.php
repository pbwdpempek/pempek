<!DOCTYPE html>
<html>
<head>
	<title>Ceritanya bikin Create</title>
</head>
<body>
	<center>
		<h1>Ini Create</h1>
		<h3>Tambah data pembeli</h3>
	</center>
	<form action="<?php echo base_url(). 'index.php/crud/tambah_aksi'; ?>" enctype="multipart/form-data" method="post">
		<table style="margin:20px auto;">

			<tr>
				<td>Pesanan Pempek Lenjer</td>
				<td><input type="text" name="lenjer2" id="lenjer2" value="<?php echo $this->input->post('lenjer'); ?>"></td>
			</tr>
			<tr>
				<td>Pesanan Pempek Kapal Selam</td>
				<td><input type="text" name="kapalselam2" id="kapalselam2" value="<?php echo $this->input->post('kapalselam'); ?>"></td>
			</tr>
			<tr>
				<td>Pesanan Pempek Adaan</td>
				<td><input type="text" name="adaan2" id="adaan2" value="<?php echo $this->input->post('adaan'); ?>"></td>
			</tr>
			<tr>
				<td>Pesanan Pempek Kulit</td>
				<td><input type="text" name="kulit2" id="kulit2" value="<?php echo $this->input->post('kulit'); ?>"></td>
			</tr>
			<tr>
				<td>Nomor Identitas</td>
				<td><input type="text" name="no_ktp" placeholder="KTP/sejenisnya"></td>
			</tr>
			
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama_user" placeholder="Nama Lengkap Anda"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat_user" placeholder="Alamat dan Kode Pos"></td>
			</tr>
			<tr>
				<td>Nomor Telepon</td>
				<td><input type="text" name="no_hp" placeholder="Nomor yang bisa dihubungi"></td>
			</tr>
			<tr>
				<td>Tanggal Di Ambil</td>
				<td><input type="date" name="tanggal_diambil" placeholder="mm/dd/yyyy"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SELESAI"></td>
			</tr>
			
		</table>
	</form>
</body>
</html>