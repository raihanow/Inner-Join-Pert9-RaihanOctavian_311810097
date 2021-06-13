<?php 
	require 'koneksi.php';
		$customer = customer("SELECT * FROM customer");
		$penjual = penjual("SELECT * FROM penjual");
		$inner_join = inner_join("SELECT * FROM customer");
		$outer_join = outer_join("SELECT * FROM penjual");
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Tugas Inner Join</title>
 </head>
 <body>

 	<h3>TABLE CUSTOMER (mysqli_fetch_array)</h3>

<!-- TABLE CUSTOMER -->
 	<table border="1" cellpadding="10" cellspacing="">
 		<tr>
 			<th>NO PESANAN</th>
 			<th>NAMA PENERIMA</th>
 			<th>TANGGAL</th>
 			<th>NAMA BARANG</th>
 			<th>ALAMAT</th>
 		</tr>

 	<?php foreach ($customer as $b) : ?>

 		<tr>
 			<td><?= $b["no_pesanan"]?></td>
 			<td><?= $b["nama_penerima"]?></td>
 			<td><?= $b["tanggal"]?></td>
 			<td><?= $b["nama_barang"]?></td>
 			<td><?= $b["alamat"]?></td>
 		</tr>

 	<?php endforeach; ?>
 	</table>

 		<!-- ============================================================== --><br>

 		<h3>TABLE PENJUAL (mysqli_fetch_array)</h3>

<!-- TABLE PENJUAL -->
 	<table border="1" cellpadding="10" cellspacing="">
 		<tr>
 			<th>NO PESANAN</th>
 			<th>NAMA BARANG</th>
 			<th>HARGA</th>
 			<th>QTY</th>
 		</tr>

 	<?php foreach ($penjual as $b) : ?>
 		<tr>
 			<td><?= $b["no_pesanan"]?></td>
 			<td><?= $b["nama_barang"]?></td>
 			<td><?= $b["harga"]?></td>
 			<td><?= $b["qty"]?></td>
 		</tr>
 	<?php endforeach; ?>
 	</table>

 		<!-- ============================================================== --><br>

 	<h3>TABLE INNER JOIN (mysqli_fetch_assoc)</h3>

 	<table border="1" cellpadding="10" cellspacing="">
 		<tr>
 			<th>NO PESANAN</th>
 			<th>NAMA PENERIMA</th>
 			<th>TANGGAL</th>
 			<th>NAMA BARANG</th>
 			<th>ALAMAT</th>
 		</tr>

 	<?php foreach ($inner_join as $b) : ?>

 		<tr>
 			<td><?= $b["no_pesanan"]?></td>
 			<td><?= $b["nama_penerima"]?></td>
 			<td><?= $b["tanggal"]?></td>
 			<td><?= $b["nama_barang"]?></td>
 			<td><?= $b["alamat"]?></td>
 		</tr>

 	<?php endforeach; ?>
 	</table>

 		<!-- ============================================================== --><br>

 		<h3>TABLE LEFT OUTER JOIN (mysqli_fetch_assoc)</h3>

 	<table border="1" cellpadding="10" cellspacing="">
 		<tr>
 			<th>NO PESANAN</th>
 			<th>NAMA BARANG</th>
 			<th>HARGA</th>
 			<th>QTY</th>
 		</tr>

 	<?php foreach ($outer_join as $b) : ?>
 		<tr>
 			<td><?= $b["no_pesanan"]?></td>
 			<td><?= $b["nama_barang"]?></td>
 			<td><?= $b["harga"]?></td>
 			<td><?= $b["qty"]?></td>
 		</tr>
 	<?php endforeach; ?>
 	</table>

 
 </body>
 </html> 
