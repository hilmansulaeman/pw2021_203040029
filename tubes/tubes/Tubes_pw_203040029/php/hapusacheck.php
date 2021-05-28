<?php 

	include '../conn/connect.php';

	$query = mysqli_query($connect,"DELETE FROM user WHERE id_user='".$_GET['id']."'");
		if($query){
			echo "<script>alert('Data berhasil dihapus')</script>";
			header('location:listadmin.php');
		}
