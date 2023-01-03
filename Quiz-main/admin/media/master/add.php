<?php
try {
    include('../../dbconnect.php');
    $name_media = mysqli_real_escape_string($link,$_POST['name_media']);
    $description = mysqli_real_escape_string($link,$_POST['description']);
   
    $sql = "INSERT INTO media(name_media,description_media) VALUES('" . $name_media . "' ,'" . $description . "' )";
    if ($conn->query($sql) == TRUE) {
        echo "Thêm thành công";
    } else {
        echo "Không thêm được";
    }
} catch (Exception $e) {
    echo "Lỗi: " .$e;
}
