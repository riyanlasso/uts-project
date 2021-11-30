<?php
session_start();
include "koneksi.php";
$username = $_POST['username'];
$password = md5($_POST['password']);
$login = mysqli_query($connect, "select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);


if ($cek > 0) {

    $data = mysqli_fetch_assoc($login);
    if ($data['level'] == "1") {
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "1";
        header("location:halamanAdmin.php");
    } else if ($data['level'] == "2") {
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "2";
        header("location:halamanGuest.php");
    } else {
        header("location:index.php?pesan=gagal");
    }
} else {
    header("location:index.php?pesan=gagal");
}
