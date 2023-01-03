<?php
try {
    include('../../dbconnect.php');
    $exam_name = $_POST['exam_name'];
    $exam_id = $_POST['exam_id'];
    $question_name = $_POST['question_name'];
    $question_id = $_POST['question_id'];
    $sql = "INSERT INTO detail_shorttest(id_shortTest,id_question) VALUES('" . $exam_id . "','" . $question_id . "')";
    if ($conn->query($sql) == TRUE) {
        echo "Thêm câu hỏi thành công";
    } else {
        echo "Không thêm được câu hỏi";
    }
} catch (Exception $e) {
    echo "Lỗi: " .$e;
}
