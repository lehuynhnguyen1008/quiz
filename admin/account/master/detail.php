<?php
    include('../../dbconnect.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM account where account_id = '".$id."'";
    $rs = $conn->prepare($sql);
    $rs->execute();
    $result = $rs->fetch();
    echo json_encode($result,JSON_UNESCAPED_UNICODE);
?>