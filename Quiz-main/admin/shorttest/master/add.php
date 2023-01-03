<?php
try {
    include('../../dbconnect.php');
    $nameExam = $_POST['nameExam'];
    $categoryExam = $_POST['categoryExam'];
    $categoryExam_id = $_POST['categoryExam_id'];
    $sql = "INSERT INTO shorttest(name_Test,id_categoryquestion) VALUES('" . $nameExam . "','" . $categoryExam_id . "')";
    if ($conn->query($sql) == TRUE) {
        echo "Thêm thành công";
    } else {
        echo "Không thêm được";
    }
} catch (Exception $e) {
    echo "Lỗi: " .$e;
}
