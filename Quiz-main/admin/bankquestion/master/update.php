<?php
include('../../dbconnect.php');
try {
    $id = $_POST['id'];
    $question = mysqli_real_escape_string($link,$_POST['question']);
    $option_a = mysqli_real_escape_string($link,$_POST['option_a']);
    $option_b = mysqli_real_escape_string($link,$_POST['option_b']);
    $option_c = mysqli_real_escape_string($link,$_POST['option_c']);
    $option_d = mysqli_real_escape_string($link,$_POST['option_d']);
    $answer = mysqli_real_escape_string($link,$_POST['answer']);
    $option_correct = $_POST['option_correct'];
    $category_question = $_POST['category_question'];
    $category_id = $_POST['category_id'];
    $name_media = $_POST['name_media'];
    $id_media = $_POST['id_media'];
    $sql = "UPDATE questtion ";
    $sql = $sql . "SET name_question='" . $question . "',";
    $sql = $sql . "option1='" . $option_a . "',";
    $sql = $sql . "option2='" . $option_b . "',";
    $sql = $sql . "option3='" . $option_c . "',";
    $sql = $sql . "option4='" . $option_d . "',";
    $sql = $sql . 'answer="' . $answer . '",';
    $sql = $sql . "option_correct='" . $option_correct . "',";
    $sql = $sql . "id_media='" . $id_media . "',";
    $sql = $sql . "id_categoryquestion='" . $category_id . "'";
    $sql = $sql . "WHERE id_question='" . $id . "'";

    if ($conn->query($sql) == TRUE) {
        echo "Cập nhật câu hỏi thành công";
    } else {
        echo "Cập nhật câu hỏi thất bại";
    }
} catch (Exception $e) {
    echo "Lỗi: " . $e;
}
