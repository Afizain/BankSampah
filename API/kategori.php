<?php
require_once('../config/connect.php');

// MENAMPILKAN KATEGORI SAMPAH
  
  if (empty($_GET)) {
    $query = mysqli_query($connection, "SELECT * FROM kategori");
  $result = array();
  while ($row = mysqli_fetch_array($query)){
    array_push($result, array(
      'id_kategori' => $row['id_kategori'],
      'nama_kategori' => $row['nama_kategori']
    ));
  } 
  
  echo json_encode(
    $result
  );
  
  }else{
    $query = mysqli_query($connection, "SELECT * FROM kategori WHERE id_kategori=".$_GET['id_kategori']);
    $result = array();
    while ($row = $query->fetch_assoc()){
      $result = array(
        'id_kategori' => $row['id_kategori'],
        'nama_kategori' => $row['nama_kategori']
      );
    } 
    echo json_encode(
      $result
    );
  }?>