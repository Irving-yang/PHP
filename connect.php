<?php
	require_once('config.php');
	//Á¬¿â
	if(!($con = mysqli_connect(HOST, USERNAME, PASSWORD,DBNAME))){
		echo mysqli_error();
	}
	//Ñ¡¿â
//	if(!mysqli_select_db('test')){
//		echo mysqli_error();
//	}
	//×Ö·û¼¯
	if(!mysqli_query($con,'set names utf8')){
		echo mysqli_error();
	}
?>