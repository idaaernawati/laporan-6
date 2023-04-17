<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // cek apakah nama dan email sudah diisi
    if(empty($nama) || empty($email)) {
        // jika belum diisi, redirect ke halaman error
        header("Location: tgs6(2-error).php");
        exit;
    } else {
        // jika sudah diisi, tampilkan informasi login
        date_default_timezone_set("Asia/Jakarta");
        $tanggal = date("d-m-Y");
        $hari = date("l");
        $jam = date("H:i:s");

        echo "Nama: $nama <br>";
        echo "Email: $email <br>";
        echo "Tanggal Login: $tanggal <br>";
        echo "Hari: $hari <br>";
        echo "Jam: $jam <br>";
    }
}
?>
