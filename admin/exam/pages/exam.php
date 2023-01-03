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
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main" style="height: calc(100vh - 330px);">
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
          <a class="nav-link text-white active bg-gradient-primary" href="./exam.php">
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
          <a class="nav-link text-white" href="../../account/pages/account.php">
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
          <h6 class="font-weight-bolder mb-0">Đề thi</h6>
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
                <h6 class="text-white text-capitalize ps-3">Đề thi</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="d-flex justify-content-around">
                <div class="w-25">
                  <button id="btnExam" type="button" class="btn btn-success" style="margin-right: 10%;">Thêm đề thi</button>
                </div>
              </div>
              <div class="table-responsive p-0">
                <div class="d-flex justify-content-between">
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <?php include('../../dbconnect.php') ?>
                    <?php
                    $sql = $conn->prepare("SELECT * FROM category_exam");
                    $sql->execute();
                    $count = 1;
                    while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {
                      if ($count == 1) {
                        echo '<li class="nav-item" role="presentation">';
                        echo '<button class="nav-link active px-3 py-3" id="tab" data-bs-toggle="tab" data-bs-target="#F' . $result["id_categoryexam"] . '" type="button" role="tab" aria-controls="home" aria-selected="true">' . $result["name_categoryexam"] . '</button>';
                        echo '  </li>';
                      } else {
                        echo '<li class="nav-item" role="presentation">';
                        echo '<button class="nav-link px-3 py-3" id="tab" data-bs-toggle="tab" data-bs-target="#F' . $result["id_categoryexam"] . '" type="button" role="tab" aria-controls="profile" aria-selected="false">' . $result["name_categoryexam"] . '</button>';
                        echo '</li>';
                      }
                      $count++;
                    }
                    ?>
                  </ul>
                </div>
                <div class="tab-content" id="myTabContent">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php include('./mdexam.php') ?>
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
    ReadData();
  });

  $('#btnExam').click(function() {
    $('#txtExamid').val('');

    $('#nameExam').val('');
    $('#numberExam').val('');
    $('#timeExam').val('');

    $('#categoryExam_selected').val('Lựa chọn loại đề thi');

    $('#modalexam').modal('show');
  });

  $(document).on('click', "input[name='view']", function() {
    var bid = this.id;
    var trid = $(this).closest('tr').attr('id'); //lấy id của dòng được chọn trên table khi click update
    GetView(trid); //lấy dữ liệu đề thi dựa vào id tìm được ở trên và đổ dữ liệu cho các input
    $('#txtExamid').val(trid);
  });

  $(document).on('click', "input[name='update']", function() {
    var bid = this.id;
    var trid = $(this).closest('tr').attr('id'); //lấy id của dòng được chọn trên table khi click update
    GetDetail(trid); //lấy dữ liệu đề thi dựa vào id tìm được ở trên và đổ dữ liệu cho các input
    $('#txtExamid').val(trid);
  });

  $(document).on('click', "input[name='delete']", function() {
    var bid = this.id;
    var trid = $(this).closest('tr').attr('id');
    if (confirm("Bạn có chắc chắn muốn xóa đề này này?") == true) {
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

  function GetView(id) { //hàm lấy đề thi dựa vào id đề thi
    $.ajax({
      url: './viewallquestion.php', //chỉ hướng dẫn tới file detail.php để lấy thông tin đề thi
      type: 'get',
      data: {
        id: id //truyền tham số có giá trị bằng giá trị của id đề thi
      },
      success: function(data) {
        var w = window.location.href = './viewallquestion.php?id_exam=' + id;
        w.document.write(msg);
        w.document.close();
      }
    });
  }

  function GetDetail(id) { //hàm lấy đề thi dựa vào id đề thi
    $.ajax({
      url: '../master/detail.php', //chỉ hướng dẫn tới file detail.php để lấy thông tin đề thi
      type: 'get',
      data: {
        id: id //truyền tham số có giá trị bằng giá trị của id đề thi
      },
      success: function(data) {
        var q = jQuery.parseJSON(data); //ép dữ liệu trả về Json
        $('#modalexam').modal('show');
        $('#nameExam').val(q['name_exam']);
        $('#numberExam').val(q['number_exam']);
        $('#timeExam').val(q['time_exam']);

        $('#categoryExam_selected').val(q['id_categoryexam']);
      }
    });
  }

  function ReadData() {
    $.ajax({
      url: '../master/view.php',
      type: 'get',
      data: {},
      success: function(data) {
        $('#myTabContent').empty();
        $('#myTabContent').append(data);
      }
    });
  }
</script>