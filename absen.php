<?php
include "koneksi.php";

    // mengambil data
        $nisn = htmlspecialchars($_POST['siswa_nisn']);
        $tanggal = htmlspecialchars($_POST['tanggal']);
    // end mengambil data
    $query = ("INSERT INTO absen VALUE ('', '$nisn', '$tanggal', current_timestamp())");
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
?>