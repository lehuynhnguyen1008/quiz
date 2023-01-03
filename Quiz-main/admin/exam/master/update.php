<?php
include('../../dbconnect.php');
try {
    $id = $_POST['id'];
    $nameExam = $_POST['nameExam'];
    $numberExam = $_POST['numberExam'];
    $timeExam = $_POST['timeExam'];
    $categoryExam = $_POST['categoryExam'];
    $categoryExam_id = $_POST['categoryExam_id'];
    $sql = "UPDATE exam SET name_exam='" . $nameExam . "',number_exam='" . $numberExam . "',time_exam='" . $timeExam . "',id_categoryexam='" . $categoryExam_id . "' WHERE id_exam='" . $id . "'";

    if ($conn->query($sql) == TRUE) {
        echo "Cập nhật thành công";
    } else {
        echo "Cập nhật thất bại";
    }
} catch (Exception $e) {
    echo "Lỗi: " . $e;
}
