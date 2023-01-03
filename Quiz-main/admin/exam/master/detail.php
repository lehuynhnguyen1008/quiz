<?php
    include('../../dbconnect.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM exam where id_exam = '".$id."'";
    $rs = $conn->prepare($sql);
    $rs->execute();
    $result = $rs->fetch();
    echo json_encode($result,JSON_UNESCAPED_UNICODE);
?>