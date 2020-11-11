<?php
require_once('koneksi.php');

$nik   = $_GET['nik'];
$query  = "DELETE FROM penduduk 
        WHERE id = $nik";
echo $sql;
mysqli_query($conn, $query);
header("location: menu.php");

?>