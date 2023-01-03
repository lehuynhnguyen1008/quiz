<?php
include('../../dbconnect.php');
try {
    $id = $_POST['id'];
    $name = mysqli_real_escape_string($link,$_POST['name']);
    $email = mysqli_real_escape_string($link,$_POST['email']);
    $password = mysqli_real_escape_string($link,$_POST['password']);
    $role = mysqli_real_escape_string($link,$_POST['role']);
    $sql = "UPDATE account SET name='" . $name . "',email='" . $email . "',password='" . $password . "',role='" . $role . "' WHERE account_id='" . $id . "'";

    if ($conn->query($sql) == TRUE) {
        echo "Cập nhật thành công";
    } else {
        echo "Cập nhật thất bại";
    }
} catch (Exception $e) {
    echo "Lỗi: " . $e;
}
