<?php
session_start();
include 'koneksi.php';

if ($_POST['regis']) {
    $nama = $_POST['name'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $level = $_POST['level'];

    mysqli_query($koneksi, "INSERT INTO user VALUES('','$nama','$username','$password', '$level')");
    header("location:login.php?berhasildaftar");
}
