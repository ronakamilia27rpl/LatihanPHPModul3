<?php
$email =$_POST['email'];
$password = $_POST['password'];
if ($email = "rona_kamilia_27rpl@student.smktelkom-mlg.sch.id" && $password == "345"){
    echo "<h1>Selamat Login Anda Berhasil </h1>";
} else {
    echo "<h1> Maaf Login Anda Gagal</h1>";
}

?>