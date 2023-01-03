<?php include('../admin/dbconnect.php') ?>
<!DOCTYPE html>
<html lang="en">

<?php include('../pages/head.php') ?>

<body class="bg-light">
  <main class="main-content mt-5">
    <section>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-5 me-auto ms-lg-auto">
            <div class="d-flex flex-column">
              <div class="text-center">
                <h4 class="font-weight-bolder h2 mb-3">Đăng ký</h4>
                <p class="mb-4" style="font-size: 18px;">Nhập Email và mật khẩu để đăng ký</p>
              </div>
              <div class="">
                <form role="form" method="post" id="loginForm">
                  <div class="mb-4">
                    <label for="exampleInputName" class="form-label" style="font-size: 20px;">Tên</label>
                    <input type="text" name="name" class="form-control py-3" style="font-size: 20px;font-weight:400;" id="InputName" placeholder="Nhập tên" required="">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputEmail" class="form-label" style="font-size: 20px;">Email</label>
                    <input type="email" name="email" class="form-control py-3" style="font-size: 20px;font-weight:400;" id="InputEmail" placeholder="Nhập email" required="">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword" class="form-label" style="font-size: 20px;">Mật khẩu</label>
                    <input type="password" name="password" class="form-control py-3" style="font-size: 20px;font-weight:400;" id="InputPassword" placeholder="Nhập mật khẩu" required="">
                  </div>
                  <div class="text-center mb-3">
                    <input type="submit" name="register" class="btn btn-primary bg-gradient-primary btn-lg w-100 mt-4 mb-0" id="register" value="Đăng ký" />
                  </div>
                  <div class="alert alert-success" id="success" style="display:none;">
                    <strong>Thành công!</strong> Đăng ký tài khoản thành công.
                  </div>
                  <div class="alert alert-danger" id="failure" style="display:none;">
                    <strong>Đã tồn tại!</strong> Email này đã tồn tại.
                  </div>
                </form>
              </div>
              <div class="text-center">
                <p class="mb-2 text-sm mx-auto">
                  Bạn đã có tài khoản?
                  <a href="./sign-in.php" class="text-primary text-gradient font-weight-bold">Đăng nhập</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php
  if (isset($_POST["register"])) {
    $count = 0;
    $res = mysqli_query($link, "SELECT * FROM account WHERE email='$_POST[email]'") or die(mysqli_error($link));

    $count = mysqli_num_rows($res);

    if ($count > 0) {
  ?>
      <script type="text/javascript">
        document.getElementById("success").style.display = "none";
        document.getElementById("failure").style.display = "block";
      </script>
    <?php
    } else {
      mysqli_query($link, "INSERT INTO account VALUES(NULL,'$_POST[name]','$_POST[email]','$_POST[password]', 'user')") or die(mysqli_error($link));
    ?>
      <script type="text/javascript">
        document.getElementById("success").style.display = "block";
        document.getElementById("failure").style.display = "none";
        window.location = "./sign-in.php"
      </script>
  <?php
    }
  }
  ?>

  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
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
  <script src="../assets/js/material-dashboard.min.js?v=3.0.2"></script>
</body>

</html>
<!-- <script>
</script> -->