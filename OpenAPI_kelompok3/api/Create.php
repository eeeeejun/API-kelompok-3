<?php


$nama = $_POST['nama'];

$query = "INSERT INTO mahasiswa(nama) VALUES ('$nama')" ;
$sql = mysqli_query($conn, $query);

if ($sql && isset($nama)) {

         echo json_encode ( array('message' => 'created!'));
 } else  {
        echo json_encode ( array('message' => 'error'));
    }
    
