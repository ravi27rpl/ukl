<?php
	if (isset($_GET["hapus"])) {
		$koneksi = mysqli_connect("localhost","root","","olshop_kopi");
		$id_penjualan = $_GET["id_penjualan"];
		$sql = "select * from detail_penjualan where id_penjualan = '$id_penjualan'";
		$sql = "delete from detail_penjualan where id_penjualan = '$id_penjualan'";
		mysqli_query($koneksi,$sql); //eksekusi sintaks sql
		header("location:page_admin.php?page=detail_penjualan");
	}
 ?>