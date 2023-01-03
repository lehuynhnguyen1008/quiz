<?php
    include('../../dbconnect.php');
    try {
        $id = $_POST['id'];
        $sql = "DELETE FROM media ";
        $sql = $sql."WHERE id_media='" . $id . "'";

        if ($conn->query($sql) == TRUE) {
            echo "Xóa thành công";
        } else {
            echo "Xóa thất bại";
        }
    } catch (Exception $e) {
        echo "Lỗi: " .$e;
    }
