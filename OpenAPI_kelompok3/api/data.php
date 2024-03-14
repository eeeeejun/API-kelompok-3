<?php

    
    $query = "SELECT * FROM mahasiswa ORDER BY id DESC";
    $sql = mysqli_query($conn, $query);
    
    if ($sql) {
        $result = array();
        while ($row = mysqli_fetch_array($sql)) {
            array_push($result, array(
                'id' => $row['id'],
                'nama' => $row['nama']
            ));
        }
    
        echo json_encode(array('result' => $result));
        http_response_code(200);
    }
    