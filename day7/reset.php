<?php
// memulai session
 session_start();
// hapus session
 session_destroy();
// tentukan file yang dituju ketika setelah proses hapus session selesai
 header("location:index.php");
// keluar
 exit();