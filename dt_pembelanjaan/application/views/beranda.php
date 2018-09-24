<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Pembelanjaan</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>
	bootstrap/css/bootstrap.min.css">
	<?php extract($barang);?>
</head>
<body>
	<div class="container">
	<h1 class="page-header text-center" align="center">Data Pembelanjaan Operasi Keolahragaan SMK Madinatul Qur'an</h1>
	<marquee>Dipersembahkan oleh PT.indopud bogor-jonggol samping sodong</marquee>
	<a href="<?php echo base_url();?>index.php/beranda/linktambahbarang">
		Tambah Data
	</a>
<table class="table table-striped" border="1" align="center">
	<tr>
	 <thead class="thead-dark">
	  <th>Id_barang</th>
	  <th>Nama_barang</th>
	  <th>Alamat</th>
	  <th>Jumlah_barang</th>
   	  <th colspan="3">Action</th>
     </thead>
   </tr>
   <?php
   foreach ($barang as $barang) {
   ?>
   <tr>

   	 <td><?php echo $barang ->id_barang;?></td>
   	 <td><?php echo $barang ->nama_barang;?></td>
   	 <td><?php echo $barang ->alamat;?></td>
   	 <td><?php echo $barang ->jumlah_barang;?></td>
   	 
      <td>
     	<a href="<?php echo base_url();?>index.php/beranda/linkeditbarang/<?php echo $barang->id_barang;?>"> 
         <button style="margin-left: 20px" type="submit" class="btn btn-primary">
    
   	 		<span class="glyphicon glyphicon-pencil"></span>edit
         </button>
   	 	</a>
   	 </td>

   	 <td>
   	 	<a href="<?php echo base_url();?>index.php/beranda/deletebarang/<?php echo $barang->id_barang;?>">
              <button style="margin-left: 20px" type="submit" class="btn btn-primary">
   	 		<span class="glyphicon glyphicon-trash"></span>delete
         </button>
   		</a>
   	 </td>

   </tr>
<?php
}
?>

</table>
</div>
    </body>
</html>