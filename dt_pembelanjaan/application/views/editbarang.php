<?php
defined('BASEPATH') or exit ('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit barang</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>
	bootstrap/css/bootstrap.min.css">
</head>
<body>
	<h1 class="page-header text-center">Edit barang</h1>

	<form method="POST" 
	action="<?php echo base_url(); ?>index.php/beranda/updatebarang/<?php echo $id;?>">
		<table align="center">
		<tr>
			<td>Nama_barang</td>
			<td>Alamat</td>
			<td>Jumlah_barang</td>
		</tr>
		<tr>
			<td><input class="form-control" type="text" value="<?php echo $nama_barang;?>" name="nama_barang"></td>
			<td><input class="form-control" type="text" value="<?php echo $alamat;?>"name="alamat"></td>
			<td><input class="form-control" type="text" value="<?php echo $jumlah_barang;?>"name="jumlah_barang">
			</td>
					<td colspan="3">
		<button style="margin-left: 20px" class="btn btn-primary" type="submit">
		 <span class="glyphicon glyphicon-pencil"></span>
		Tambah</button>
		    </td>
		</tr>

		<tr>
	    <tr></tr>
		<td></td>


		</tr>
	</table>
</form>
</body>
</html>
