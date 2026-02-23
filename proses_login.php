<?php 
session_start();
include '../../model/m_koneksi.php';

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
// Cari usernya
$query = mysqli_query($conn, "SELECT * FROM user WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($query);

if($cek > 0){
    $data = mysqli_fetch_assoc($query);

    // KUNCI UTAMA: Simpan ID User ke session buat LOG
    $_SESSION['id_user']  = $data['id_user']; 
    $_SESSION['username'] = $data['username'];
    $_SESSION['role']     = $data['role'];

    // Catat ke Log Aktivitas
    $id_user_login = $data['id_user'];
    simpan_log($conn, $id_user_login, "User [$username] berhasil login.");

    // Lempar ke halaman dashboard
    if($data['role'] == "admin" || $data['role'] == "petugas"){
        header("location:../admin/index.php");
    } else {
        header("location:../peminjaman/Datapeminjaman.php");
    }
} else {
    header("location:login.php?pesan=gagal");
}
?>
