<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="./assets/img/favicon.png">
        <title>
            Trang quản trị
        </title>
        <!--     Fonts and icons     -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <!-- Nucleo Icons -->
        <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
        <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <!-- Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <!-- CSS Files -->
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
        <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.2" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            table td {
                white-space: unset !important;
            }
        </style>
    </head>
</head>

<body>

    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="">
                <img src="./assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold text-white">Trang quản lý</span>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main" style="height: calc(100vh - 330px);">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white active bg-gradient-primary" href="">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">dashboard</i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="./exam/pages/exam.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">Đề thi</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="./bankquestion/pages/question.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">Ngân hàng câu hỏi</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="./historyresult/pages/historyresult.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">Lịch sử thi</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="./shorttest/pages/shorttest.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">Đề luyện tập</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="./account/pages/account.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">Tài khoản</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="./media/pages/media.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">Media (Audio, Paragraph)</span>
                    </a>
                </li>
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">person</i>
                        </div>
                        <span class="nav-link-text ms-1"><?php if (isset($_SESSION['name'])) {
                                                                echo $_SESSION['name'];
                                                            } else { ?> <script type="text/javascript">
                                    window.location.replace("../pages/sign-in.php");
                                </script> <?php } ?></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="../pages/logout.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">logout</i>
                        </div>
                        <span class="nav-link-text ms-1">Đăng xuất</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <h6 class="font-weight-bolder mb-0">Dashboard</h6>
                </nav>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3" style="margin-bottom: 50px;">
                <h6 class="text-white text-capitalize ps-3">Thống kê</h6>
            </div>
            <div class="row px-5">
                <div class="col-sm-6 mb-xl-5 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                                <i class="fa fa-question-circle opacity-10"></i>
                            </div>
                            <div class="text-center pt-1" style="padding-right: 0px;">
                                <?php
                                include('./dbconnect.php');
                                $sql = $conn->prepare("SELECT count(*) as total_question FROM questtion");
                                $sql->execute();
                                while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {
                                    echo '<p class="text-sm mb-0 text-capitalize pb-2">Tổng số câu hỏi</p>';
                                    echo '<h4 class="mb-0" style="padding-right:10px">' . $result["total_question"] . '</h4>';
                                }
                                ?>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <a href="../admin/bankquestion/pages/question.php" class="text-secondary text-end" style="text-decoration: none;">
                                <p class="mb-0" style="padding-right: 30px;">>> Xem chi tiết</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb-xl-5 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">quiz</i>
                            </div>
                            <div class="text-center pt-1" style="padding-right: 0px;">
                                <?php
                                include('./dbconnect.php');
                                $sql = $conn->prepare("SELECT count(*) as total_exam FROM exam");
                                $sql->execute();
                                while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {
                                    echo '<p class="text-sm mb-0 text-capitalize pb-2">Tổng số đề thi</p>';
                                    echo '<h4 class="mb-0" style="padding-right:10px">' . $result["total_exam"] . '</h4>';
                                }
                                ?>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <a href="../admin/exam/pages/exam.php" class="text-secondary text-end" style="text-decoration: none;">
                                <p class="mb-0" style="padding-right: 30px;">>> Xem chi tiết</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">quiz</i>
                            </div>
                            <div class="text-center pt-1" style="padding-right: 0px;">
                                <?php
                                include('./dbconnect.php');
                                $sql = $conn->prepare("SELECT count(*) as total_test FROM shorttest");
                                $sql->execute();
                                while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {
                                    echo '<p class="text-sm mb-0 text-capitalize pb-2">Tổng số bài tập</p>';
                                    echo '<h4 class="mb-0" style="padding-right:10px">' . $result["total_test"] . '</h4>';
                                }
                                ?>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <a href="../admin/shorttest/pages/shorttest.php" class="text-secondary text-end" style="text-decoration: none;">
                                <p class="mb-0" style="padding-right: 30px;">>> Xem chi tiết</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">history</i>
                            </div>
                            <div class="text-center pt-1" style="padding-right: 0px;">
                                <?php
                                include('./dbconnect.php');
                                $sql = $conn->prepare("SELECT count(*) as total_history FROM historyexam");
                                $sql->execute();
                                while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {
                                    echo '<p class="text-sm mb-0 text-capitalize pb-2">Tổng lượt thi</p>';
                                    echo '<h4 class="mb-0" style="padding-right:10px">' . $result["total_history"] . '</h4>';
                                }
                                ?>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <a href="../admin/historyresult/pages/historyresult.php" class="text-secondary text-end" style="text-decoration: none;">
                                <p class="mb-0" style="padding-right: 30px;">>> Xem chi tiết</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">person</i>
                            </div>
                            <div class="text-center pt-1" style="padding-right: 0px;">
                                <?php
                                include('./dbconnect.php');
                                $sql = $conn->prepare("SELECT count(*) as total_user FROM account where role='user'");
                                $sql->execute();
                                while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {
                                    echo '<p class="text-sm mb-0 text-capitalize pb-2">Thành viên</p>';
                                    echo '<h4 class="mb-0" style="padding-right:10px">' . $result["total_user"] . '</h4>';
                                }
                                ?>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <a href="../admin/account/pages/account.php" class="text-secondary text-end" style="text-decoration: none;">
                                <p class="mb-0" style="padding-right: 30px;">>> Xem chi tiết</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--   Core JS Files   -->
    <script src="./assets/js/core/popper.min.js"></script>
    <script src="./assets/js/core/bootstrap.min.js"></script>
    <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="./assets/js/material-dashboard.min.js?v=3.0.2"></script>
</body>

</html>