<?php
include('../../dbconnect.php');
try {
    $id = $_POST['id'];
    $sql = "DELETE FROM detail_shorttest WHERE id_detailTest ='".$id."'";
    if ($conn->query($sql) == TRUE) {
        echo "Xóa câu hỏi thành công";
    } else {
        echo "Xóa câu hỏi thất bại";
    }
} catch (Exception $e) {
    echo "Lỗi: " . $e;
}
