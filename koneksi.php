<?php 

	$conn = mysqli_connect("localhost","root","","raihan_311810097");

	function customer($query) {
		global $conn;
			 $result = mysqli_query($conn, $query);
			 $array = [];
			 while($row = mysqli_fetch_array($result)) {
			 	$array[] = $row;
			 }
			 	return $array;
		}

	function penjual($query) {
		global $conn;
			 $result = mysqli_query($conn, $query);
			 $array = [];
			 while($row = mysqli_fetch_array($result)) {
			 	$array[] = $row;
			 }
			 	return $array;
		}

	function inner_join($query) {
		global $conn;
			 $result = mysqli_query($conn, $query);
			 $array = [];
			 while($row = mysqli_fetch_assoc($result)) {
			 	$array[] = $row;
			 }
			 	return $array;
		}

	function outer_join($query) {
		global $conn;
			 $result = mysqli_query($conn, $query);
			 $array = [];
			 while($row = mysqli_fetch_assoc($result)) {
			 	$array[] = $row;
			 }
			 	return $array;
		}

