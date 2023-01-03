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
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="./exam.php">Đề luyện tập</a></li>
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
                                <div class="tab-content" id="myTabContent">
                                    <?php
                                    include('../../dbconnect.php');
                                    $id = $_GET['id'];

                                    $sql = $conn->prepare("SELECT * FROM detail_shorttest, questtion WHERE detail_shorttest.id_question = questtion.id_question AND id_shortTest = '" . $id . "'");
                                    $sql->execute();
                                    $data = '';
                                    $data .= '<div class="tab-pane fade show active" id="" role="tabpanel">';
                                    $data .= '<table id="question_data_table" class="table align-items-center mb-0">';
                                    $data .= '<thead>';
                                    $data .= '<tr class="bg-light">';
                                    $data .= '<th class="text-uppercase text-dark text-xs font-weight-bolder" style="width: 5%">Mã câu hỏi</th>';
                                    $data .= '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder" scope="col" style="width: 15%">Tên câu hỏi</th>';
                                    $data .= '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Đáp án A</th>';
                                    $data .= '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Đáp án B</th>';
                                    $data .= '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Đáp án C</th>';
                                    $data .= '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Đáp án D</th>';
                                    $data .= '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Đáp án Đúng</th>';
                                    $data .= '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Lời giải</th>';

                                    $data .= '<th class="text-dark text-center" style="width: 15%">Thao tác</th>';
                                    $data .= '</tr>';
                                    $data .= '</thead>';
                                    $data .= '<tbody id="media">';
                                    while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {
                                        if ($result['id_categoryquestion'] == 1) {
                                            $data .= '<tr id=' . $result['id_detailTest'] . '>';
                                            $data .= '<td>';
                                            $data .= '<div class="d-flex px-4 py-1">';
                                            $data .= '<span>' . $result['id_question'] . '</span>';
                                            $data .= '</div>';
                                            $data .= '</td>';
                                            $data .= '<td class="d-flex justify-content-center">';
                                            $data .= '<div class="px-2 py-1 ">';
                                            $data .= '<img src="' . $result['name_question'] . '"class="me-3 border-radius-lg" alt="user5" style="width:150px">';
                                            $data .= '</div>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option1'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option2'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option3'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option4'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option_correct'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['answer'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-middle text-center">';
                                            $data .= '<input type="button" class="btn btn-danger text-white mb-0" href="javascript:;" value="Xoá" name="delete"></input>';
                                            $data .= '</td>';
                                            $data .= '</tr>';
                                        } elseif ($result['id_categoryquestion'] == 2) {
                                            $data .= '<tr id=' . $result['id_detailTest'] . '>';
                                            $data .= '<td>';
                                            $data .= '<div class="d-flex px-4 py-1">';
                                            $data .= '<span>' . $result['id_question'] . '</span>';
                                            $data .= '</div>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['name_question'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option1'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option2'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option3'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option4'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option_correct'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['answer'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-middle text-center">';
                                            $data .= '<input type="button" class="btn btn-danger text-white mb-0" href="javascript:;" value="Xoá" name="delete"></input>';
                                            $data .= '</td>';
                                            $data .= '</tr>';
                                        } else if ($result['id_categoryquestion'] == 3) {
                                            $data .= '<tr id=' . $result['id_detailTest'] . '>';
                                            $data .= '<td>';
                                            $data .= '<div class="d-flex px-4 py-1">';
                                            $data .= '<span>' . $result['id_question'] . '</span>';
                                            $data .= '</div>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['name_question'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option1'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option2'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option3'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option4'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option_correct'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['answer'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-middle text-center">';
                                            $data .= '<input type="button" class="btn btn-danger text-white mb-0" href="javascript:;" value="Xoá" name="delete"></input>';
                                            $data .= '</td>';
                                            $data .= '</tr>';
                                        } else if ($result['id_categoryquestion'] == 4) {
                                            $data .= '<tr id=' . $result['id_detailTest'] . '>';
                                            $data .= '<td>';
                                            $data .= '<div class="d-flex px-4 py-1">';
                                            $data .= '<span>' . $result['id_question'] . '</span>';
                                            $data .= '</div>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['name_question'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option1'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option2'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option3'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option4'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option_correct'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['answer'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-middle text-center">';
                                            $data .= '<input type="button" class="btn btn-danger text-white mb-0" href="javascript:;" value="Xoá" name="delete"></input>';
                                            $data .= '</td>';
                                            $data .= '</tr>';
                                        } else if ($result['id_categoryquestion'] == 5) {
                                            $data .= '<tr id=' . $result['id_detailTest'] . '>';
                                            $data .= '<td>';
                                            $data .= '<div class="d-flex px-4 py-1">';
                                            $data .= '<span>' . $result['id_question'] . '</span>';
                                            $data .= '</div>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['name_question'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option1'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option2'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option3'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option4'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option_correct'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['answer'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-middle text-center">';
                                            $data .= '<input type="button" class="btn btn-danger text-white mb-0" href="javascript:;" value="Xoá" name="delete"></input>';
                                            $data .= '</td>';
                                            $data .= '</tr>';
                                        } else if ($result['id_categoryquestion'] == 6) {
                                            $data .= '<tr id=' . $result['id_detailTest'] . '>';
                                            $data .= '<td>';
                                            $data .= '<div class="d-flex px-4 py-1">';
                                            $data .= '<span>' . $result['id_question'] . '</span>';
                                            $data .= '</div>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['name_question'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option1'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option2'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option3'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option4'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option_correct'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['answer'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-middle text-center">';
                                            $data .= '<input type="button" class="btn btn-danger text-white mb-0" href="javascript:;" value="Xoá" name="delete"></input>';
                                            $data .= '</td>';
                                            $data .= '</tr>';
                                        } else if ($result['id_categoryquestion'] == 7) {
                                            $data .= '<tr id=' . $result['id_detailTest'] . '>';
                                            $data .= '<td>';
                                            $data .= '<div class="d-flex px-4 py-1">';
                                            $data .= '<span>' . $result['id_question'] . '</span>';
                                            $data .= '</div>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['name_question'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option1'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option2'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option3'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option4'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option_correct'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['answer'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-middle text-center">';
                                            $data .= '<input type="button" class="btn btn-danger text-white mb-0" href="javascript:;" value="Xoá" name="delete"></input>';
                                            $data .= '</td>';
                                            $data .= '</tr>';
                                        }else if ($result['id_categoryquestion'] == 8) {
                                            $data .= '<tr id=' . $result['id_detailTest'] . '>';
                                            $data .= '<td>';
                                            $data .= '<div class="d-flex px-4 py-1">';
                                            $data .= '<span>' . $result['id_question'] . '</span>';
                                            $data .= '</div>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['name_question'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option1'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option2'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option3'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option4'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option_correct'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['answer'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-middle text-center">';
                                            $data .= '<input type="button" class="btn btn-danger text-white mb-0" href="javascript:;" value="Xoá" name="delete"></input>';
                                            $data .= '</td>';
                                            $data .= '</tr>';
                                        }else if ($result['id_categoryquestion'] == 9) {
                                            $data .= '<tr id=' . $result['id_detailTest'] . '>';
                                            $data .= '<td>';
                                            $data .= '<div class="d-flex px-4 py-1">';
                                            $data .= '<span>' . $result['id_question'] . '</span>';
                                            $data .= '</div>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['name_question'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option1'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option2'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option3'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option4'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option_correct'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['answer'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-middle text-center">';
                                            $data .= '<input type="button" class="btn btn-danger text-white mb-0" href="javascript:;" value="Xoá" name="delete"></input>';
                                            $data .= '</td>';
                                            $data .= '</tr>';
                                        }else if ($result['id_categoryquestion'] == 10) {
                                            $data .= '<tr id=' . $result['id_detailTest'] . '>';
                                            $data .= '<td>';
                                            $data .= '<div class="d-flex px-4 py-1">';
                                            $data .= '<span>' . $result['id_question'] . '</span>';
                                            $data .= '</div>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['name_question'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option1'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option2'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option3'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option4'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option_correct'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['answer'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-middle text-center">';
                                            $data .= '<input type="button" class="btn btn-danger text-white mb-0" href="javascript:;" value="Xoá" name="delete"></input>';
                                            $data .= '</td>';
                                            $data .= '</tr>';
                                        }else if ($result['id_categoryquestion'] == 11) {
                                            $data .= '<tr id=' . $result['id_detailTest'] . '>';
                                            $data .= '<td>';
                                            $data .= '<div class="d-flex px-4 py-1">';
                                            $data .= '<span>' . $result['id_question'] . '</span>';
                                            $data .= '</div>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['name_question'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option1'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option2'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option3'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option4'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option_correct'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['answer'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-middle text-center">';
                                            $data .= '<input type="button" class="btn btn-danger text-white mb-0" href="javascript:;" value="Xoá" name="delete"></input>';
                                            $data .= '</td>';
                                            $data .= '</tr>';
                                        }else if ($result['id_categoryquestion'] == 12) {
                                            $data .= '<tr id=' . $result['id_detailTest'] . '>';
                                            $data .= '<td>';
                                            $data .= '<div class="d-flex px-4 py-1">';
                                            $data .= '<span>' . $result['id_question'] . '</span>';
                                            $data .= '</div>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['name_question'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option1'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option2'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option3'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option4'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['option_correct'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-center text-center text-sm">';
                                            $data .= '<h6 class="mb-0 text-sm">' . $result['answer'] . '</h6>';
                                            $data .= '</td>';
                                            $data .= '<td class="align-middle text-center">';
                                            $data .= '<input type="button" class="btn btn-danger text-white mb-0" href="javascript:;" value="Xoá" name="delete"></input>';
                                            $data .= '</td>';
                                            $data .= '</tr>';
                                        }
                                    }
                                    $data .= '</tbody>';
                                    $data .= '</table>';
                                    $data .= '</div>';
                                    echo $data;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include('./mddetailtest.php') ?>
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
    $(document).ready(function() {});

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
                url: '../master/delete_test.php',
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
            url: '../master/detail_test.php', //chỉ hướng dẫn tới file detail.php để lấy thông tin đề thi
            type: 'get',
            data: {
                id: id //truyền tham số có giá trị bằng giá trị của id đề thi
            },
            success: function(data) {
                var q = jQuery.parseJSON(data); //ép dữ liệu trả về Json
                $('#modalexam').modal('show');
                $('#question_selected').val(q['id_question']);
            }
        });
    }
</script>