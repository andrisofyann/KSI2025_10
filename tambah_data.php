<?php
include 'koneksi.php';

if (isset($_POST['nama'])) {
  $nama = $_POST['nama'];
  $sql = "INSERT INTO mahasiswa (nama) VALUES ('$nama')";
  
  if ($conn->query($sql)) {
    echo "Data berhasil ditambah!";
  } else {
    echo "Error: " . $conn->error;
  }
}
?>
