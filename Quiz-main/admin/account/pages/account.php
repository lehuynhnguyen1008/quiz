<?php session_start(); ?>
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
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="">
                <img src="../../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold text-white">Trang quản lý</span>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse w-auto " id="sidenav-collapse-main" style="height: calc(100vh - 330px);">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" href="../../">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">dashboard</i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../../exam/pages/exam.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">Đề thi</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../../bankquestion/pages/question.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">Ngân hàng câu hỏi</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../../historyresult/pages/historyresult.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">Lịch sử thi</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../../shorttest/pages/shorttest.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">Đề luyện tập</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white active bg-gradient-primary" href="../../account/pages/account.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">Tài khoản</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../../media/pages/media.php">
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
                                    window.location.replace("../../../pages/sign-in.php");
                                </script> <?php } ?></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="../../../pages/logout.php">
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
                    <h6 class="font-weight-bolder mb-0">Tài khoản</h6>
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
                                <h6 class="text-white text-capitalize ps-3">Tài khoản</h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="d-flex justify-content-around">
                                <div class="w-25">
                                    <button id="btnmedia" type="button" class="btn btn-success" style="margin-right: 10%;">Thêm</button>
                                </div>

                            </div>
                            <div class="table-responsive p-0">
                                <div class="tab-content" id="myTabContent">
                                    <?php
                                    include('../../dbconnect.php');
                                    $sql = $conn->prepare("SELECT * FROM account");
                                    $sql->execute();
                                    $data = '';
                                    $data .= '<div class="tab-pane fade show active" id="" role="tabpanel">';
                                    $data .= '<table id="question_data_table" class="table align-items-center mb-0">';
                                    $data .= '<thead>';
                                    $data .= '<tr class="bg-light">';
                                    $data .= '<th class="text-uppercase text-dark text-xs font-weight-bolder" style="width: 5%">STT</th>';
                                    $data .= '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder" scope="col" style="width: 15%">Tên tài khoản</th>';
                                    $data .= '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Email</th>';
                                    $data .= '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Mật khẩu</th>';
                                    $data .= '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Vai trò</th>';
                                    $data .= '<th class="text-dark text-center" style="width: 15%">Thao tác</th>';
                                    $data .= '</tr>';
                                    $data .= '</thead>';
                                    $data .= '<tbody id="media">';
                                    $index = 1;
                                    while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {
                                        $data .= '<tr id=' . $result['account_id'] . '>';
                                        $data .= '<td>';
                                        $data .= '<div class="d-flex px-4 py-1">';
                                        $data .= '<span>' . $index . '</span>';
                                        $data .= '</div>';
                                        $data .= '</td>';
                                        $data .= '<td>';
                                        $data .= '<div class="d-flex flex-column justify-content-center px-2 py-1">';
                                        $data .= '<h5 class="text-center">' . $result['name'] . '</h5>';
                                        $data .= '</div>';
                                        $data .= '</td>';
                                        $data .= '<td class="align-center text-center text-sm">';
                                        $data .= '<h6 class="mb-0 text-sm">' . $result['email'] . '</h6>';
                                        $data .= '</td>';
                                        $data .= '<td class="align-center text-center text-sm">';
                                        $data .= '<h6 class="mb-0 text-sm">' . $result['password'] . '</h6>';
                                        $data .= '</td>';
                                        $data .= '<td class="align-center text-center text-sm">';
                                        $data .= '<h6 class="mb-0 text-sm">' . $result['role'] . '</h6>';
                                        $data .= '</td>';
                                        $data .= '<td class="align-middle text-center">';
                                        $data .= '<input type="button" class="btn btn-warning text-dark mb-0" href="javascript:;" value="Sửa" name="update"></input>';
                                        $data .= '<input type="button" class="btn btn-danger text-white mb-0" href="javascript:;" value="Xoá" name="delete"></input>';
                                        $data .= '</td>';
                                        $data .= '</tr>';
                                        $index++;
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
    <div class="modal fade" id="modalmedia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm tài khoản</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="basic-form">
                        <input type="hidden" id="txtMediaId" value="">
                        <div class="form-group mb-3">
                            <label for="">Tên tài khoản</label>
                            <input for="input" name="input" class="form-control" id="texaMedia" placeholder="Tên tài khoản: " required></input>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Email</label>
                            <input for="input" name="input" class="form-control" id="texaDesciption" placeholder="Email:" required></input>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Mật khẩu</label>
                            <input for="input" name="input" class="form-control" id="texapassword" placeholder="Mật khẩu:" required></input>
                        </div>
                        <div class="form-group mt-3">
                            <label for="">Vai trò</label>
                            <select class="form-select" aria-label="Default select example" id="media_selected">
                                <option>Vai trò</option>
                                <?php include('../../dbconnect.php') ?>;
                                <?php
                                $sql2 = $conn->prepare("SELECT * FROM account limit 2");
                                $sql2->execute();
                                while ($result2 = $sql2->fetch(PDO::FETCH_ASSOC)) {
                                    echo '<option value="' . $result2['account_id'] . '" id="select_media">' . $result2['role'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="alert alert-success d-none" id="alert">
                    Success!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btnClose">Đóng</button>
                    <button type="button" class="btn btn-primary" id="btnSubmit">Xác nhận</button>
                </div>
            </div>
        </div>
    </div>
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
    $('#btnmedia').click(function() {
        $('#txtMediaId').val('');
        $('#texaMedia').val('');
        $('#texaDesciption').val('');
        $('#modalmedia').modal('show');
    });

    $(document).on('click', "input[name='update']", function() {
        var bid = this.id;
        var trid = $(this).closest('tr').attr('id'); //lấy id của dòng được chọn trên table khi click update
        GetDetail(trid); //lấy dữ liệu câu hỏi dựa vào id tìm được ở trên và đổ dữ liệu cho các input
        $('#txtMediaId').val(trid);
    });

    $(document).on('click', "input[name='delete']", function() {
        var bid = this.id;
        var trid = $(this).closest('tr').attr('id');
        if (confirm("Bạn có chắc chắn muốn xóa?") == true) {
            $.ajax({
                url: '../master/delete.php',
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

    function GetDetail(id) { //hàm lấy câu hỏi dựa vào id câu hỏi
        $.ajax({
            url: '../master/detail.php', //chỉ đường dẫn tới file detail.php để lấy thông tin câu hỏi
            type: 'get',
            data: {
                id: id //truyền tham số có giá trị bằng giá trị của id câu hỏi
            },
            success: function(data) {
                var q = jQuery.parseJSON(data); //ép dữ liệu trả về Json
                $('#modalmedia').modal('show');

                $('#texaMedia').val(q['name']);
                $('#texaDesciption').val(q['email']);
                $('#texapassword').val(q['password']);
                $('#media_selected').val(q['account_id']);
            }
        });
    }
    $('#btnClose').click(function() {
        location.reload();
    });
    $('#btnSubmit').click(function() {
        let name = $('#texaMedia').val().trim();
        let email = $('#texaDesciption').val().trim();
        let password = $('#texapassword').val().trim();
        let role = $('#media_selected :selected').text();
        if (name.length == 0 || email.length == 0 || password.length == 0) {
            alert('Vui lòng nhập!');
        }
        let id = $('#txtMediaId').val();

        if (id.length == 0) {
            $.ajax({
                url: '../master/add.php',
                type: 'post',
                data: {
                    name: name,
                    email: email,
                    password: password,
                    role: role
                },
                success: function(data) {
                    alert(data);

                    $('#texaMedia').val('');
                    $('#texaDesciption').val('');
                    $('#texapassword').val('');

                }
            });
        } else {
            $.ajax({
                url: '../master/update.php',
                type: 'post',
                data: {
                    id: id,
                    name: name,
                    email: email,
                    password: password,
                    role: role
                },
                success: function(data) {
                    alert(data);

                    $('#texaMedia').val('');
                    $('#texaDesciption').val('');
                    $('#texapassword').val('');

                    location.reload();
                }
            });
        }

    });
</script>