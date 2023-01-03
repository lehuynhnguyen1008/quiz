<?php
try {
    include('../../admin/dbconnect.php');
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $date = date('H:i d-m-Y');
    $mark1 = mysqli_real_escape_string($link,$_POST['mark1']);
    $mark2 = mysqli_real_escape_string($link,$_POST['mark2']);
    $count = mysqli_real_escape_string($link,$_POST['count']);
    $description = mysqli_real_escape_string($link,$_POST['description']);
    $timesoff = mysqli_real_escape_string($link,$_POST['timesoff']);
    $id_exam = $_POST['id_exam'];
    $account_id = $_POST['account_id'];
    $sql = "INSERT INTO historyexam(mark,mark2,number,comment,account_id,id_exam,resultTime,timeExam) VALUES('" . $mark1 . "','" . $mark2 . "','" . $count . "','" . $description . "','" . $account_id . "','" . $id_exam . "','" . $date . "','" . $timesoff . "')";
    if ($conn->query($sql) == TRUE) {
        echo "Thêm thành công";
    } else {
        echo "Không thêm được";
    }
} catch (Exception $e) {
    echo "Lỗi: " .$e;
}
