<?php 

parse_str(file_get_contents('php://input'), $value); 

$id = $value['id']; 
$note = $value['nama']; 

$query = "UPDATE mahasiswa SET nama='$note' WHERE id='$id'";

$sql = mysqli_query($conn, $query); 

if ($sql) { 
    http_response_code(200);
    echo json_encode(array('message' => 'updated!')); 
} else { 
    echo json_encode(array('message' => 'error')); 
}
