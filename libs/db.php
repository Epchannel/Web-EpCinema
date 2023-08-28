<?php
	$host='localhost';
	$user='tuanoric_tuanoriaaa';
	$pass='tuanoric_tuanoriaaa';
	$db='tuanoric_tuanoriaaa';
	//error_reporting(0);//Chan thong bao loi

	$link=mysqli_connect($host,$user,$pass,$db) or die('Lỗi kết nối');
	//Dong bo charset (collation)
	mysqli_query($link,'set names utf8');
?>
