<?php
try {
    include('../../dbconnect.php');
    $name = mysqli_real_escape_string($link,$_POST['name']);
    $email = mysqli_real_escape_string($link,$_POST['email']);
    $password = mysqli_real_escape_string($link,$_POST['password']);
    $role = mysqli_real_escape_string($link,$_POST['role']);
   
    $sql = "INSERT INTO account(name,email,password,role) VALUES('" . $name . "' ,'" . $email . "','" . $password . "','" . $role . "')";
    if ($conn->query($sql) == TRUE) {
        echo "Thêm thành công";
    } else {
        echo "Không thêm được";
    }
} catch (Exception $e) {
    echo "Lỗi: " .$e;
}
