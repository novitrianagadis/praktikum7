<?php
    require_once("koneksi.php");
    
    $nik = null;
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $foto = $_POST['foto'];

    if($nama == "" || $tanggal_lahir == "" || $tempat_lahir == "" || $foto == "" ){
        echo "<h1>Data Kurang Lengkap</h1>";
        echo "<p><button><a href='penduduk.php' style='text-decoration:none; color:black'>Back</a></button></p>";
    } else {
        $query = "INSERT INTO penduduk(nama, nik, tanggal_lahir, tempat_lahir, foto)
                    VALUES ('$nama','$nik','$tanggal_lahir','$tempat_lahir','$foto' )";
        $result = mysqli_query($conn, $query);
        header("location: menu.php");
    }

?>