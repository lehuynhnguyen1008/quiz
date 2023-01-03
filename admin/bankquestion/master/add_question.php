<?php
try {
    include('../../dbconnect.php');
    $question = mysqli_real_escape_string($link, $_POST['question']);
    $option_a = mysqli_real_escape_string($link, $_POST['option_a']);
    $option_b = mysqli_real_escape_string($link, $_POST['option_b']);
    $option_c = mysqli_real_escape_string($link, $_POST['option_c']);
    $option_d = mysqli_real_escape_string($link, $_POST['option_d']);
    $answer = mysqli_real_escape_string($link, $_POST['answer']);
    $option_correct = $_POST['option_correct'];
    $category_question = $_POST['category_question'];
    $category_id = $_POST['category_id'];
    $name_media = $_POST['name_media'];
    $id_media = $_POST['id_media'];
    $sql = "INSERT INTO questtion(name_question,option1,option2,option3,option4,option_correct,answer,id_categoryquestion,id_media) VALUES('" . $question . "','" . $option_a . "','" . $option_b . "','" . $option_c . "','" . $option_d . "','" . $option_correct . "','" . $answer . "', '" . $category_id . "', '" . $id_media . "' )";
    if ($conn->query($sql) == TRUE) {
        echo "Thêm câu hỏi thành công";
    } else {
        echo "Không thêm được câu hỏi";
    }
} catch (Exception $e) {
    echo "Lỗi: " . $e;
}
