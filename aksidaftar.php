<?php

//session_start(); //mulai session, karena kita akan menggunakan session pd file php ini

include 'koneksi.php'; //hubungkan dengan koneksi.php untuk berhubungan dengan database
$nama=$_POST['nama'];
$username=$_POST['username']; //tangkap data yg di input dari form login input username

$password=$_POST['password']; //tangkap data yg di input dari form login input password

$query=mysql_query("insert into benutzer values ('$username','$password','$nama','','','','','')"); //melakukan pengampilan data dari database untuk di cocokkan

if($query){ // melakukan pemeriksaan kecocokan dengan percabangan.

header("location:login.php"); // dan alihkan ke index.php 
}
else
{ //jika tidak tampilkan pesan gagal login
echo "<script> alert('Registrierung fehlgeschlagen'); location = 'daftar.php'; </script>";

}
?>
