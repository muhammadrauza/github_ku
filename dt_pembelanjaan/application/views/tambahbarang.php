<?php
defined('BASEPATH') or exit ('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Barang</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>
	bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<h1>Tambah Barang</h1>
	<form class="form-group" method="POST" action="<?php echo base_url(); ?>index.php/beranda/tambahbarang">
	<table align="center">
		<tr>
			<td>Nama_barang</td>
			<td>Alamat</td>
			<td>Jumlah_barang</td>
		</tr>
		<tr>
			<td><input class="form-control"  type="text" name="nama"></td>
			<td><input class="form-control"  type="text" name="alamat"></td>
			<td><input class="form-control"  type="text" name="jumlah"></td>
				<td colspan="3">
		<button style="margin-left: 20px" type="submit" class="btn btn-primary">
			<span class="glyphicon glyphicon-plus">
			</span>Tambah</button>
	    </td>
		</tr>

		<tr>
	    <tr></tr>
		<td></td>
	    </tr>

	</table>
</form>
</div>
</body>
</html>
