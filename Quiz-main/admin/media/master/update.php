<?php
include('../../dbconnect.php');
try {
    $id = $_POST['id'];
    $name_media = mysqli_real_escape_string($link,$_POST['name_media']);
    $description = mysqli_real_escape_string($link,$_POST['description']);
    $sql = "UPDATE media SET name_media='" . $name_media . "',description_media='" . $description . "'WHERE id_media='" . $id . "'";

    if ($conn->query($sql) == TRUE) {
        echo "Cập nhật thành công";
    } else {
        echo "Cập nhật thất bại";
    }
} catch (Exception $e) {
    echo "Lỗi: " . $e;
}
