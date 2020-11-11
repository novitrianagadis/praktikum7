
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Praktikum</title>
</head>

<body>
    <center>
	<h1>Data Kependudukan</h1>
    </center>
    <h4>Semua Data Penduduk</h4>
    <table border='1' cellpadding ="8">
    <tr>
        <td><center>NIK</center></td>
        <td><center>Nama</center></td>
        <td><center>Tanggal Lahir</center></td>
        <td><center>Tempat Tanggal Lahir</center></td>
        <td><center>Foto</center></td>
        <td colspan=2><center>Action</center></td>

    </tr>
<?php
    require_once('koneksi.php');
    $data = mysqli_query($conn,"select * from penduduk");
        while($x = mysqli_fetch_assoc($data)){
            ?>
            
            <tr>
                <td><?php echo $x['nik']; ?></td>
                <td><?php echo $x['nama']; ?></td>
                <td><?php echo $x['tanggal_lahir']; ?></td>
                <td><?php echo $x['tempat_lahir']; ?></td>
                <td><?php echo $x['foto']; ?></td>
                <td><button><a href=proseshapus.php?nik='.$x['nik'].'>Hapus</a></button</td>
                <td><button><a href='edit.php' style='text-decoration:none; color:black'>Edit</a></button</td>
            </tr>
            <?php
        }
?>
</table>
<br></br>
    <a href ="penduduk.php"><button>Tambah Data Penduduk Baru</button></a>
