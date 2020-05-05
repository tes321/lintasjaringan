<?php
$host	= "sql12.freesqldatabase.com";	//alamat server, biasanya 'localhost' atau isi dengan alamat ip server mysql anda
$user	= "sql12336925";		//defaultnya 'root', sesuaikan dg konfigurasi server anda
$pass	= "gEVsECXley";		//kosongkan jika tidak ada
$db		= "sql12336925";	//isi dengan nama database

$konek = mysqli_connect($host, $user, $pass,$db) or die( "server database tidak ditemukan!");

?>