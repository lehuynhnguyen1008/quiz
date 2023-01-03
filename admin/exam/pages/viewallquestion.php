<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
    <title>
        Trang quản trị
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="../../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <link id="pagestyle" href="../../assets/css/material-dashboard.css?v=3.0.2" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        table td {
            white-space: unset !important;
        }
    </style>
</head>

<body class="g-sidenav-show  bg-gray-200">
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="./exam.php">Đề thi</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Danh sách câu hỏi</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Danh sách câu hỏi</h6>
                </nav>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Danh sách câu hỏi</h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="d-flex justify-content-around">
                                <div class="w-25">
                                    <button id="btnAllquestion" type="button" class="btn btn-success" style="margin-right: 10%;">Thêm câu hỏi</button>
                                </div>
                            </div>
                            <div class="table-responsive p-0">
                                <div class="d-flex justify-content-between">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <?php include('../../dbconnect.php') ?>
                                        <?php
                                        $id_exam = $_GET['id_exam'] ;
                                        if ($id_exam == '2') {
                                            $sql = $conn->prepare("SELECT * FROM category_question WHERE id_categoryquestion <=7");
                                            $sql->execute();
                                            $count = 0;
                                            while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {
                                                if ($count == 0) {
                                                    echo '<li class="nav-item" role="presentation">';
                                                    echo '<button class="nav-link active px-3 py-3" id="tab" data-bs-toggle="tab" data-bs-target="#F' . $result["id_categoryquestion"] . '" type="button" role="tab" aria-controls="home" aria-selected="true">' . $result["name_categoryquestion"] . '</button>';
                                                    echo '  </li>';
                                                } else {
                                                    echo '<li class="nav-item" role="presentation">';
                                                    echo '<button class="nav-link px-3 py-3" id="tab" data-bs-toggle="tab" data-bs-target="#F' . $result["id_categoryquestion"] . '" type="button" role="tab" aria-controls="profile" aria-selected="false">' . $result["name_categoryquestion"] . '</button>';
                                                    echo '</li>';
                                                }
                                                $count++;
                                            }
                                        } else {
                                            $sql = $conn->prepare("SELECT * FROM category_question WHERE id_categoryquestion");
                                            $sql->execute();
                                            $count = 0;
                                            while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {
                                                if ($count == 0) {
                                                    echo '<li class="nav-item" role="presentation">';
                                                    echo '<button class="nav-link active px-3 py-3" id="tab" data-bs-toggle="tab" data-bs-target="#F' . $result["id_categoryquestion"] . '" type="button" role="tab" aria-controls="home" aria-selected="true">' . $result["name_categoryquestion"] . '</button>';
                                                    echo '  </li>';
                                                } else {
                                                    echo '<li class="nav-item" role="presentation">';
                                                    echo '<button class="nav-link px-3 py-3" id="tab" data-bs-toggle="tab" data-bs-target="#F' . $result["id_categoryquestion"] . '" type="button" role="tab" aria-controls="profile" aria-selected="false">' . $result["name_categoryquestion"] . '</button>';
                                                    echo '</li>';
                                                }
                                                $count++;
                                            }
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div class="tab-content" id="myTabContent">
                                    <?php
                                    include('../../dbconnect.php');
                                    $sql = $conn->prepare("SELECT * FROM category_question");
                                    $sql->execute();
                                    $count = 0;
                                    while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {
                                        $data = '';
                                        if ($count == 0) {
                                            echo '<div class="tab-pane fade show active" id="F' . $result["id_categoryquestion"] . '" role="tabpanel">';
                                            echo '<table id="question_data_table" class="table align-items-center mb-0">';
                                            echo '<thead>';
                                            echo '<tr class="bg-light">';
                                            echo '<th class="text-uppercase text-dark text-xs font-weight-bolder" style="width: 5%">Mã câu hỏi</th>';
                                            echo '<th class="text-uppercase text-dark text-xs font-weight-bolder" scope="col">Hình ảnh</th>';
                                            echo '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Đáp án A</th>';
                                            echo '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Đáp án B';
                                            echo '</th>';
                                            echo '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Đáp án C</th>';
                                            echo '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Đáp án D';
                                            echo '</th>';
                                            echo '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Đáp án đúng</th>';
                                            echo '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Lời giải';
                                            echo '</th>';
                                            echo '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Media';
                                            echo '</th>';
                                            echo '<th class="text-dark text-center">Thao tác</th>';
                                            echo '</tr>';
                                            echo '</thead>';
                                            echo '<tbody id="questions">';
                                            // $product = $conn->prepare("SELECT * FROM questtion WHERE id_categoryquestion = '" . $result["id_categoryquestion"] . "'");
                                            $product = $conn->prepare("SELECT * FROM detail_exam,questtion,media WHERE detail_exam.id_question = questtion.id_question AND questtion.id_media = media.id_media AND id_exam = '" . $_GET['id_exam'] . "' AND id_categoryquestion = '" . $result["id_categoryquestion"] . "'");
                                            $product->execute();
                                            while ($sub_result = $product->fetch(PDO::FETCH_ASSOC)) {
                                                echo '<tr id=' . $sub_result['id_detailExam'] . '>';
                                                echo '<td>';
                                                echo '<div class="d-flex px-4 py-1">';
                                                echo '<span>' . $sub_result['id_question'] . '</span>';
                                                echo '</div>';
                                                echo '</td>';
                                                echo '<td>';
                                                echo '<div class="d-flex flex-column justify-content-center px-2 py-1">';
                                                echo '<img src="' . $sub_result['name_question'] . '"class="avatar avatar-sm me-3 border-radius-lg" alt="user5">';
                                                echo '</div>';
                                                echo '</td>';
                                                echo '<td class="align-center text-center text-sm">';
                                                echo '<h6 class="mb-0 text-sm">' . $sub_result['option1'] . '</h6>';
                                                echo '</td>';
                                                echo '<td class="align-center text-center text-sm">';
                                                echo '<h6 class="mb-0 text-sm">' . $sub_result['option2'] . '</h6>';
                                                echo '</td>';
                                                echo '<td class="align-center text-center">';
                                                echo '<h6 class="mb-0 text-sm">' . $sub_result['option3'] . '</h6>';
                                                echo '</td>';
                                                echo '<td class="align-center text-center">';
                                                echo '<h6 class="mb-0 text-sm">' . $sub_result['option4'] . '</h6>';
                                                echo '</td>';
                                                echo '<td class="align-center text-center">';
                                                echo '<h6 class="mb-0 text-sm">' . $sub_result['option_correct'] . '</h6>';
                                                echo '</td>';
                                                echo '<td>';
                                                echo '<p>' . $sub_result['answer'] . '</p>';
                                                echo '</td>';
                                                echo '<td class="align-center text-center">';
                                                echo '<h6 class="mb-0 text-sm">' . $sub_result['name_media'] . '</h6>';
                                                echo '</td>';
                                                echo '<td class="align-middle text-center">';
                                                echo '<input type="button" class="btn btn-danger text-dark mb-0" href="javascript:;" value="Xoá" name="delete"></input>';
                                                echo '</td>';
                                                echo '</tr>';
                                            }
                                            echo '</tbody>';
                                            echo '</table>';
                                            echo '</div>';
                                        } else if ($count == 1) {
                                            echo '<div class="tab-pane fade" id="F' . $result["id_categoryquestion"] . '" role="tabpanel">';
                                            echo '<table id="question_data_table" class="table align-items-center mb-0">';
                                            echo '<thead>';
                                            echo '<tr class="bg-light">';
                                            echo '<th class="text-uppercase text-dark text-xs font-weight-bolder" style="width: 5%">Mã câu hỏi</th>';
                                            echo '<th class="text-uppercase text-dark text-xs font-weight-bolder" scope="col">Câu hỏi</th>';
                                            echo '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Đáp án A</th>';
                                            echo '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Đáp án B';
                                            echo '</th>';
                                            echo '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Đáp án C</th>';
                                            echo '</th>';
                                            echo '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Đáp án đúng</th>';
                                            echo '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Lời giải';
                                            echo '</th>';
                                            echo '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Media';
                                            echo '</th>';
                                            echo '<th class="text-dark text-center">Thao tác</th>';
                                            echo '</tr>';
                                            echo '</thead>';
                                            echo '<tbody id="questions">';

                                            $product = $conn->prepare("SELECT * FROM detail_exam,questtion,media WHERE detail_exam.id_question = questtion.id_question AND questtion.id_media = media.id_media AND id_exam = '" . $_GET['id_exam'] . "' AND id_categoryquestion = '" . $result["id_categoryquestion"] . "'");

                                            $product->execute();
                                            $index = 1;
                                            while ($sub_result = $product->fetch(PDO::FETCH_ASSOC)) {
                                                echo '<tr id=' . $sub_result['id_detailExam'] . '>';
                                                echo '<td>';
                                                echo '<div class="d-flex px-4 py-1">';
                                                echo '<span>' . $sub_result['id_question'] . '</span>';
                                                echo '</div>';
                                                echo '</td>';
                                                echo '<td>';
                                                echo '<div class="d-flex flex-column justify-content-center px-2 py-1">';
                                                echo '<h6 class="mb-0 text-sm">' . $sub_result['name_question'] . '</h6>';
                                                echo '</div>';
                                                echo '</td>';
                                                echo '<td class="align-center text-center text-sm">';
                                                echo '<h6 class="mb-0 text-sm">' . $sub_result['option1'] . '</h6>';
                                                echo '</td>';
                                                echo '<td class="align-center text-center text-sm">';
                                                echo '<h6 class="mb-0 text-sm">' . $sub_result['option2'] . '</h6>';
                                                echo '</td>';
                                                echo '<td class="align-center text-center">';
                                                echo '<h6 class="mb-0 text-sm">' . $sub_result['option3'] . '</h6>';
                                                echo '</td>';
                                                echo '<td class="align-center text-center">';
                                                echo '<h6 class="mb-0 text-sm">' . $sub_result['option_correct'] . '</h6>';
                                                echo '</td>';
                                                echo '<td>';
                                                echo '<p>' . $sub_result['answer'] . '</p>';
                                                echo '</td>';
                                                echo '<td class="align-center text-center">';
                                                echo '<h6 class="mb-0 text-sm">' . $sub_result['name_media'] . '</h6>';
                                                echo '</td>';
                                                echo '<td class="align-middle text-center">';
                                                echo '<input type="button" class="btn btn-danger text-dark mb-0" href="javascript:;" value="Xoá" name="delete"></input>';
                                                echo '</td>';
                                                echo '</tr>';
                                            }
                                            echo '</tbody>';
                                            echo '</table>';
                                            echo '</div>';
                                        } else if ($count == 2 and $count == 3) {
                                            echo '<div class="tab-pane fade" id="F' . $result["id_categoryquestion"] . '" role="tabpanel">';
                                            echo '<table id="question_data_table" class="table align-items-center mb-0">';
                                            echo '<thead>';
                                            echo '<tr class="bg-light">';
                                            echo '<th class="text-uppercase text-dark text-xs font-weight-bolder" style="width: 5%">Mã câu hỏi</th>';
                                            echo '<th class="text-uppercase text-dark text-xs font-weight-bolder" scope="col">Câu hỏi</th>';
                                            echo '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Đáp án A</th>';
                                            echo '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Đáp án B';
                                            echo '</th>';
                                            echo '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Đáp án C</th>';
                                            echo '</th>';
                                            echo '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Đáp án D';
                                            echo '</th>';
                                            echo '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Đáp án đúng</th>';
                                            echo '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Lời giải';
                                            echo '</th>';
                                            echo '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Media';
                                            echo '</th>';
                                            echo '<th class="text-dark text-center">Thao tác</th>';
                                            echo '</tr>';
                                            echo '</thead>';
                                            echo '<tbody id="questions">';

                                            $product = $conn->prepare("SELECT * FROM detail_exam,questtion,media WHERE detail_exam.id_question = questtion.id_question AND questtion.id_media = media.id_media AND id_exam = '" . $_GET['id_exam'] . "' AND id_categoryquestion = '" . $result["id_categoryquestion"] . "'");

                                            $product->execute();
                                            $index = 1;
                                            while ($sub_result = $product->fetch(PDO::FETCH_ASSOC)) {
                                                echo '<tr id=' . $sub_result['id_detailExam'] . '>';
                                                echo '<td>';
                                                echo '<div class="d-flex px-4 py-1">';
                                                echo '<span>' . $sub_result['id_question'] . '</span>';
                                                echo '</div>';
                                                echo '</td>';
                                                echo '<td>';
                                                echo '<div class="d-flex flex-column justify-content-center px-2 py-1">';
                                                echo '<h6 class="mb-0 text-sm">' . $sub_result['name_question'] . '</h6>';
                                                echo '</div>';
                                                echo '</td>';
                                                echo '<td class="align-center text-center text-sm">';
                                                echo '<h6 class="mb-0 text-sm">' . $sub_result['option1'] . '</h6>';
                                                echo '</td>';
                                                echo '<td class="align-center text-center text-sm">';
                                                echo '<h6 class="mb-0 text-sm">' . $sub_result['option2'] . '</h6>';
                                                echo '</td>';
                                                echo '<td class="align-center text-center">';
                                                echo '<h6 class="mb-0 text-sm">' . $sub_result['option3'] . '</h6>';
                                                echo '</td>';
                                                echo '<td class="align-center text-center">';
                                                echo '<h6 class="mb-0 text-sm">' . $sub_result['option4'] . '</h6>';
                                                echo '</td>';
                                                echo '<td class="align-center text-center">';
                                                echo '<h6 class="mb-0 text-sm">' . $sub_result['option_correct'] . '</h6>';
                                                echo '</td>';
                                                echo '<td>';
                                                echo '<p>' . $sub_result['answer'] . '</p>';
                                                echo '</td>';
                                                echo '<td class="align-center text-center">';
                                                echo '<h6 class="mb-0 text-sm">' . $sub_result['name_media'] . '</h6>';
                                                echo '</td>';
                                                echo '<td class="align-middle text-center">';
                                                echo '<input type="button" class="btn btn-danger text-dark mb-0" href="javascript:;" value="Xoá" name="delete"></input>';
                                                echo '</td>';
                                                echo '</tr>';
                                            }
                                            echo '</tbody>';
                                            echo '</table>';
                                            echo '</div>';
                                        } else if ($count == 4) {
                                            echo '<div class="tab-pane fade" id="F' . $result["id_categoryquestion"] . '" role="tabpanel">';
                                            echo '<table id="question_data_table" class="table align-items-center mb-0">';
                                            echo '<thead>';
                                            echo '<tr class="bg-light">';
                                            echo '<th class="text-uppercase text-dark text-xs font-weight-bolder" style="width: 5%">Mã câu hỏi</th>';
                                            echo '<th class="text-uppercase text-dark text-xs font-weight-bolder" scope="col">Đoạn văn</th>';
                                            echo '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Đáp án A</th>';
                                            echo '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Đáp án B';
                                            echo '</th>';
                                            echo '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Đáp án C</th>';
                                            echo '</th>';
                                            echo '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Đáp án D';
                                            echo '</th>';
                                            echo '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Đáp án đúng</th>';
                                            echo '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Lời giải';
                                            echo '</th>';
                                            echo '<th class="text-dark text-center">Thao tác</th>';
                                            echo '</tr>';
                                            echo '</thead>';
                                            echo '<tbody id="questions">';

                                            $product = $conn->prepare("SELECT * FROM detail_exam,questtion,media WHERE detail_exam.id_question = questtion.id_question AND questtion.id_media = media.id_media AND id_exam = '" . $_GET['id_exam'] . "' AND id_categoryquestion = '" . $result["id_categoryquestion"] . "'");

                                            $product->execute();
                                            $index = 1;
                                            while ($sub_result = $product->fetch(PDO::FETCH_ASSOC)) {
                                                echo '<tr id=' . $sub_result['id_detailExam'] . '>';
                                                echo '<td>';
                                                echo '<div class="d-flex px-4 py-1">';
                                                echo '<span>' . $sub_result['id_question'] . '</span>';
                                                echo '</div>';
                                                echo '</td>';
                                                echo '<td>';
                                                echo '<div class="d-flex flex-column justify-content-center px-2 py-1">';
                                                echo '<h6 class="mb-0 text-sm">' . $sub_result['name_question'] . '</h6>';
                                                echo '</div>';
                                                echo '</td>';
                                                echo '<td class="align-center text-center text-sm">';
                                                echo '<h6 class="mb-0 text-sm">' . $sub_result['option1'] . '</h6>';
                                                echo '</td>';
                                                echo '<td class="align-center text-center text-sm">';
                                                echo '<h6 class="mb-0 text-sm">' . $sub_result['option2'] . '</h6>';
                                                echo '</td>';
                                                echo '<td class="align-center text-center">';
                                                echo '<h6 class="mb-0 text-sm">' . $sub_result['option3'] . '</h6>';
                                                echo '</td>';
                                                echo '<td class="align-center text-center">';
                                                echo '<h6 class="mb-0 text-sm">' . $sub_result['option4'] . '</h6>';
                                                echo '</td>';
                                                echo '<td class="align-center text-center">';
                                                echo '<h6 class="mb-0 text-sm">' . $sub_result['option_correct'] . '</h6>';
                                                echo '</td>';
                                                echo '<td>';
                                                echo '<p>' . $sub_result['answer'] . '</p>';
                                                echo '</td>';
                                                echo '<td class="align-middle text-center">';
                                                echo '<input type="button" class="btn btn-danger text-dark mb-0" href="javascript:;" value="Xoá" name="delete"></input>';
                                                echo '</td>';
                                                echo '</tr>';
                                            }
                                            echo '</tbody>';
                                            echo '</table>';
                                            echo '</div>';
                                        } else if ($count == 5) {
                                            echo '<div class="tab-pane fade" id="F' . $result["id_categoryquestion"] . '" role="tabpanel">';
                                            echo '<table id="question_data_table" class="table align-items-center mb-0">';
                                            echo '<thead>';
                                            echo '<tr class="bg-light">';
                                            echo '<th class="text-uppercase text-dark text-xs font-weight-bolder" style="width: 5%">Mã câu hỏi</th>';
                                            echo '<th class="text-uppercase text-dark text-xs font-weight-bolder" scope="col">Câu hỏi</th>';
                                            echo '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Đáp án A</th>';
                                            echo '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Đáp án B';
                                            echo '</th>';
                                            echo '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Đáp án C</th>';
                                            echo '</th>';
                                            echo '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Đáp án D';
                                            echo '</th>';
                                            echo '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Đáp án đúng</th>';
                                            echo '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Lời giải';
                                            echo '</th>';
                                            echo '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Media';
                                            echo '</th>';
                                            echo '<th class="text-dark text-center">Thao tác</th>';
                                            echo '</tr>';
                                            echo '</thead>';
                                            echo '<tbody id="questions">';

                                            $product = $conn->prepare("SELECT * FROM detail_exam,questtion,media WHERE detail_exam.id_question = questtion.id_question AND questtion.id_media = media.id_media AND id_exam = '" . $_GET['id_exam'] . "' AND id_categoryquestion = '" . $result["id_categoryquestion"] . "'");

                                            $product->execute();
                                            $index = 1;
                                            while ($sub_result = $product->fetch(PDO::FETCH_ASSOC)) {
                                                echo '<tr id=' . $sub_result['id_detailExam'] . '>';
                                                echo '<td>';
                                                echo '<div class="d-flex px-4 py-1">';
                                                echo '<span>' . $sub_result['id_question'] . '</span>';
                                                echo '</div>';
                                                echo '</td>';
                                                echo '<td>';
                                                echo '<div class="d-flex flex-column justify-content-center px-2 py-1">';
                                                echo '<h6 class="mb-0 text-sm">' . $sub_result['name_question'] . '</h6>';
                                                echo '</div>';
                                                echo '</td>';
                                                echo '<td class="align-center text-center text-sm">';
                                                echo '<h6 class="mb-0 text-sm">' . $sub_result['option1'] . '</h6>';
                                                echo '</td>';
                                                echo '<td class="align-center text-center text-sm">';
                                                echo '<h6 class="mb-0 text-sm">' . $sub_result['option2'] . '</h6>';
                                                echo '</td>';
                                                echo '<td class="align-center text-center">';
                                                echo '<h6 class="mb-0 text-sm">' . $sub_result['option3'] . '</h6>';
                                                echo '</td>';
                                                echo '<td class="align-center text-center">';
                                                echo '<h6 class="mb-0 text-sm">' . $sub_result['option4'] . '</h6>';
                                                echo '</td>';
                                                echo '<td class="align-center text-center">';
                                                echo '<h6 class="mb-0 text-sm">' . $sub_result['option_correct'] . '</h6>';
                                                echo '</td>';
                                                echo '<td>';
                                                echo '<p>' . $sub_result['answer'] . '</p>';
                                                echo '</td>';
                                                echo '<td class="align-center text-center">';
                                                echo '<h6 class="mb-0 text-sm">' . $sub_result['name_media'] . '</h6>';
                                                echo '</td>';
                                                echo '<td class="align-middle text-center">';
                                                echo '<input type="button" class="btn btn-danger text-dark mb-0" href="javascript:;" value="Xoá" name="delete"></input>';
                                                echo '</td>';
                                                echo '</tr>';
                                            }
                                            echo '</tbody>';
                                            echo '</table>';
                                            echo '</div>';
                                        } else {
                                            echo '<div class="tab-pane fade" id="F' . $result["id_categoryquestion"] . '" role="tabpanel">';
                                            echo '<table id="question_data_table" class="table align-items-center mb-0">';
                                            echo '<thead>';
                                            echo '<tr class="bg-light">';
                                            echo '<th class="text-uppercase text-dark text-xs font-weight-bolder" style="width: 5%">Mã câu hỏi</th>';
                                            echo '<th class="text-uppercase text-dark text-xs font-weight-bolder" scope="col">Câu hỏi</th>';
                                            echo '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Đáp án A</th>';
                                            echo '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Đáp án B';
                                            echo '</th>';
                                            echo '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Đáp án C</th>';
                                            echo '</th>';
                                            echo '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Đáp án D';
                                            echo '</th>';
                                            echo '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Đáp án đúng</th>';
                                            echo '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Lời giải';
                                            echo '</th>';
                                            echo '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Media';
                                            echo '</th>';
                                            echo '<th class="text-dark text-center">Thao tác</th>';
                                            echo '</tr>';
                                            echo '</thead>';
                                            echo '<tbody id="questions">';
                                            $product = $conn->prepare("SELECT * FROM detail_exam,questtion,media WHERE detail_exam.id_question = questtion.id_question AND questtion.id_media = media.id_media AND id_exam = '" . $_GET['id_exam'] . "' AND id_categoryquestion = '" . $result["id_categoryquestion"] . "'");

                                            $product->execute();
                                            $index = 1;
                                            while ($sub_result = $product->fetch(PDO::FETCH_ASSOC)) {
                                                echo '<tr id=' . $sub_result['id_detailExam'] . '>';
                                                echo '<td>';
                                                echo '<div class="d-flex px-4 py-1">';
                                                echo '<span>' . $sub_result['id_question'] . '</span>';
                                                echo '</div>';
                                                echo '</td>';
                                                echo '<td>';
                                                echo '<div class="d-flex flex-column justify-content-center px-2 py-1">';
                                                echo '<h6 class="mb-0 text-sm">' . $sub_result['name_question'] . '</h6>';
                                                echo '</div>';
                                                echo '</td>';
                                                echo '<td class="align-center text-center text-sm">';
                                                echo '<h6 class="mb-0 text-sm">' . $sub_result['option1'] . '</h6>';
                                                echo '</td>';
                                                echo '<td class="align-center text-center text-sm">';
                                                echo '<h6 class="mb-0 text-sm">' . $sub_result['option2'] . '</h6>';
                                                echo '</td>';
                                                echo '<td class="align-center text-center">';
                                                echo '<h6 class="mb-0 text-sm">' . $sub_result['option3'] . '</h6>';
                                                echo '</td>';
                                                echo '<td class="align-center text-center">';
                                                echo '<h6 class="mb-0 text-sm">' . $sub_result['option4'] . '</h6>';
                                                echo '</td>';
                                                echo '<td class="align-center text-center">';
                                                echo '<h6 class="mb-0 text-sm">' . $sub_result['option_correct'] . '</h6>';
                                                echo '</td>';
                                                echo '<td>';
                                                echo '<p>' . $sub_result['answer'] . '</p>';
                                                echo '</td>';
                                                echo '<td class="align-center text-center">';
                                                echo '<h6 class="mb-0 text-sm">' . $sub_result['name_media'] . '</h6>';
                                                echo '</td>';
                                                echo '<td class="align-middle text-center">';
                                                echo '<input type="button" class="btn btn-danger text-dark mb-0" href="javascript:;" value="Xoá" name="delete"></input>';
                                                echo '</td>';
                                                echo '</tr>';
                                            }
                                            echo '</tbody>';
                                            echo '</table>';
                                            echo '</div>';
                                        }
                                        $count++;
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include('./mdviewall.php') ?>
    <!--   Core JS Files   -->
    <script src="../../assets/js/core/popper.min.js"></script>
    <script src="../../assets/js/core/bootstrap.min.js"></script>
    <script src="../../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../../assets/js/plugins/smooth-scrollbar.min.js"></script>
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
    <script src="../../assets/js/material-dashboard.min.js?v=3.0.2"></script>
</body>

</html>
<script type="text/javascript">
    $(document).ready(function() {
        $('#btnSearch').click();
    });

    $('#btnAllquestion').click(function() {
        $('#category_selected').val('Lựa chọn loại đề thi');
        $('#question_selected').val('Lựa chọn câu hỏi');

        $('#modalviewallquestion').modal('show');
    });

    $(document).on('click', "input[name='delete']", function() {
        var bid = this.id;
        var trid = $(this).closest('tr').attr('id');
        console.log(trid);
        if (confirm("Bạn có chắc chắn muốn xóa câu hỏi này?") == true) {
            $.ajax({
                url: '../../questionofexam/delete.php',
                type: 'post',
                data: {
                    id: trid
                },
                success: function(data) {
                    alert(data);
                    location.reload();
                }
            });
        }
    });

    function GetDetail(id) { //hàm lấy đề thi dựa vào id đề thi
        $.ajax({
            url: '../../questionofexam/detail.php', //chỉ hướng dẫn tới file detail.php để lấy thông tin đề thi
            type: 'get',
            data: {
                id: id //truyền tham số có giá trị bằng giá trị của id đề thi
            },
            success: function(data) {
                var q = jQuery.parseJSON(data); //ép dữ liệu trả về Json
                $('#modalexam').modal('show');
                $('#category_selected').val(q['id_categoryquestion']);

                $('#question_selected').val(q['id_question']);
            }
        });
    }

    // function ReadData(search) {
    //     $.ajax({
    //         type: 'get',
    //         data: {
    //             search: search
    //         },
    //         success: function(data) {
    //             var w = window.location.href = './viewallquestion.php?page=viewallquestion&search=' + search;
    //             w.document.write(msg);
    //         }
    //     });
    // }
</script>