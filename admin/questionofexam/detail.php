<?php
    include('../../dbconnect.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM detail_exam where id_detailExam = '".$id."'";
    $rs = $conn->prepare($sql);
    $rs->execute();
    $result = $rs->fetch();
    echo json_encode($result,JSON_UNESCAPED_UNICODE);
?>