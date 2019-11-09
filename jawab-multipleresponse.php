<?php
session_start();
include 'koneksi.php';

$jenis_soal=$_POST["jenis_soal"];
$skor=$_POST["skor"];
            

$query=mysql_query("update benutzer set $jenis_soal = ".$skor." where username = '".$_SESSION['username']."'");

?>