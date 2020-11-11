<!DOCTYPE html>
<head>
    <title>Data</title>
</head>
<body>

<?php
    $usernamelogin = 'gadis';
    $passwordlogin = '123';

    session_start();


    $username = $_POST['username'];
    $password = $_POST['password'];


    if ($username == $usernamelogin && $password == $passwordlogin) {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: menu.php");
    } 
    else {
        echo "username atau password salah, silhakan ulangi kembali";
    }
?>
        <br></br>
        <br> <a href ="login.php"><button>Kembali</button></a> </br>