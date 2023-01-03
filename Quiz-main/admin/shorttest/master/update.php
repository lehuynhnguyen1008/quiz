<?php
include('../../dbconnect.php');
try {
    $id = $_POST['id'];
    $nameExam = $_POST['nameExam'];
    $categoryExam = $_POST['categoryExam'];
    $categoryExam_id = $_POST['categoryExam_id'];
    $sql = "UPDATE shorttest SET name_Test='" . $nameExam . "',id_categoryquestion='" . $categoryExam_id . "' WHERE id_shortTest='" . $id . "'";

    if ($conn->query($sql) == TRUE) {
        echo "Cập nhật thành công";
    } else {
        echo "Cập nhật thất bại";
    }
} catch (Exception $e) {
    echo "Lỗi: " . $e;
}
