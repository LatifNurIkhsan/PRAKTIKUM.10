<?php
    Function koneksiAkademik(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "akademik";

// menciptakan koneksi
    $koneksi = mysqli_connect($servername, $username, $password,$dbname);

// Cek koneksi
    if (!$koneksi) {
        die("Koneksigagal: " . mysqli_connect_error());
    }
        return $koneksi;
}