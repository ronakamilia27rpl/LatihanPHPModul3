<?php
$email =$_POST['email'];
$password = $_POST['password'];
if ($email = "rona_kamilia_27rpl@student.smktelkom-mlg.sch.id" ||  $password == "345" ){
    echo "<h1>Selamat SigIn Anda Berhasil </h1>";
} else {
    echo "<h1> Maaf SigIn Anda Gagal</h1>";
}

?>