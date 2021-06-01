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

 	<table border="1" cellpadding="10" cellspacing="">
 		<tr>
 			<th>NAMA_PENERIMA</th>
 			<th>NO_PESANAN</th>
 			<th>TANGGAL</th>
 			<th>NAMA_BARANG</th>
 			<th>ALAMAT</th>
 		</tr>

 	<?php foreach ($customer as $b) : ?>

 		<tr>
 			<td><?= $b["NAMA_PENERIMA"]?></td>
 			<td><?= $b["NO_PESANAN"]?></td>
 			<td><?= $b["TANGGAL"]?></td>
 			<td><?= $b["NAMA_BARANG"]?></td>
 			<td><?= $b["ALAMAT"]?></td>
 		</tr>

 	<?php endforeach; ?>
 	</table>

 		<!-- ============================================================== -->

 		<h3>TABLE PENJUAL (mysqli_fetch_array)</h3>

 	<table border="1" cellpadding="10" cellspacing="">
 		<tr>
 			<th>NO_PESANAN</th>
 			<th>NAMA_BARANG</th>
 			<th>HARGA</th>
 			<th>QTY</th>
 		</tr>

 	<?php foreach ($penjual as $b) : ?>
 		<tr>
 			<td><?= $b["NO_PESANAN"]?></td>
 			<td><?= $b["NAMA_BARANG"]?></td>
 			<td><?= $b["HARGA"]?></td>
 			<td><?= $b["QTY"]?></td>
 		</tr>
 	<?php endforeach; ?>
 	</table>

 		<!-- ============================================================== -->

 	<h3>TABLE INNER JOIN (mysqli_fetch_assoc)</h3>

 	<table border="1" cellpadding="10" cellspacing="">
 		<tr>
 			<th>NAMA_PENERIMA</th>
 			<th>NO_PESANAN</th>
 			<th>TANGGAL</th>
 			<th>NAMA_BARANG</th>
 			<th>ALAMAT</th>
 		</tr>

 	<?php foreach ($inner_join as $b) : ?>

 		<tr>
 			<td><?= $b["NAMA_PENERIMA"]?></td>
 			<td><?= $b["NO_PESANAN"]?></td>
 			<td><?= $b["TANGGAL"]?></td>
 			<td><?= $b["NAMA_BARANG"]?></td>
 			<td><?= $b["ALAMAT"]?></td>
 		</tr>

 	<?php endforeach; ?>
 	</table>

 		<!-- ============================================================== -->

 		<h3>TABLE LEFT OUTER JOIN (mysqli_fetch_assoc)</h3>

 	<table border="1" cellpadding="10" cellspacing="">
 		<tr>
 			<th>NO_PESANAN</th>
 			<th>NAMA_BARANG</th>
 			<th>HARGA</th>
 			<th>QTY</th>
 		</tr>

 	<?php foreach ($outer_join as $b) : ?>
 		<tr>
 			<td><?= $b["NO_PESANAN"]?></td>
 			<td><?= $b["NAMA_BARANG"]?></td>
 			<td><?= $b["HARGA"]?></td>
 			<td><?= $b["QTY"]?></td>
 		</tr>
 	<?php endforeach; ?>
 	</table>

 
 </body>
 </html> 