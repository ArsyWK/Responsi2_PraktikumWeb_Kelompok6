<?php
session_start();
require 'koneksi.php'; // Koneksi database

// Pastikan user sudah login
if (!isset($_SESSION['id_user'])) {
    header('Location: login.php');
    exit();
}

// Ambil id_user dan id_berita dari form
$id_user = $_SESSION['id_user'];
$id_berita = $_POST['id_berita'];

// Cek apakah berita sudah di-bookmark sebelumnya
$query = "SELECT * FROM bookmark WHERE id_user = ? AND id_berita = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("ii", $id_user, $id_berita);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    // Jika belum ada, tambahkan ke database
    $insert = "INSERT INTO bookmark (id_user, id_berita) VALUES (?, ?)";
    $stmt = $conn->prepare($insert);
    $stmt->bind_param("ii", $id_user, $id_berita);
    $stmt->execute();
    if ($stmt->affected_rows > 0) {
        echo "Berita berhasil di-bookmark.";
    } else {
        echo "Gagal menyimpan bookmark.";
    }
} else {
    echo "Berita sudah di-bookmark sebelumnya.";
}

header("Location: bookmark.php"); // Redirect ke halaman bookmark
exit();
?>
