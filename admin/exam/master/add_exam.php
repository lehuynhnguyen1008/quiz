<?php
try {
    include('../../dbconnect.php');
    $nameExam = $_POST['nameExam'];
    $numberExam = $_POST['numberExam'];
    $timeExam = $_POST['timeExam'];
    $categoryExam = $_POST['categoryExam'];
    $categoryExam_id = $_POST['categoryExam_id'];
    $sql = "INSERT INTO exam(name_exam,number_exam,time_exam,id_categoryexam) VALUES('" . $nameExam . "','" . $numberExam . "','" . $timeExam . "','" . $categoryExam_id . "')";
    if ($conn->query($sql) == TRUE) {
        echo "Thêm thành công";
    } else {
        echo "Không thêm được";
    }
} catch (Exception $e) {
    echo "Lỗi: " .$e;
}
