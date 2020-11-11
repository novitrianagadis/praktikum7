<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Input Penduduk</title>
</head>

<body>
	<h4>Data Penduduk</h4>
    <form action="prosespenduduk.php" method="post">
    <label>Nama Penduduk : </label>
    <input type="text" name="nama">
    <br>
    <label>Tanggal Lahir : </label>
    <input type="date" name="tanggal_lahir">
    <br>
    <label>tempat Tanggal Lahir : </label>
    <input type="text" name="tempat_lahir">
    <br>
    <label>Foto : </label>
    <input type="text" name="foto">
    <br>
    <input type="submit" name="submit" value="Submit" />
    <p><a href='main.php' style='text-decoration:none; color:black'>Menu</a></p>
</body>
</html>