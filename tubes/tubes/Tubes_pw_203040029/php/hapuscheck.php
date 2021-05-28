<?php 

	include '../conn/connect.php';

	$query = mysqli_query($connect,"DELETE FROM barang WHERE id_barang='".$_GET['id']."'");
		if($query){
			echo "<script>alert('Data berhasil dihapus')</script>";
			header('location:admin.php');
		}
