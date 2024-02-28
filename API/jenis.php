<?php
require_once('../config/connect.php');

// MENAMPILKAN JENIS SAMPAH
if (isset($_GET['id_kategori'])) {
    $id_kategori = mysqli_real_escape_string($connection, $_GET['id_kategori']);
    $query = mysqli_query($connection, "SELECT * FROM jenis WHERE id_kategori='$id_kategori'");
} else {
    $query = mysqli_query($connection, "SELECT * FROM jenis");
}

$result = array();
while ($row = mysqli_fetch_array($query)) {
    array_push($result, array(
        'id_jenis' => $row['id_jenis'],
        'id_kategori' => $row['id_kategori'],
        'nama_jenis' => $row['nama_jenis'],
        'ket' => $row['keterangan'],
        'harga' => $row['harga'],
    ));
}

echo json_encode($result);
?>