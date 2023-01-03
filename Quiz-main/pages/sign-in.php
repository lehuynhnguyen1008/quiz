<?php include('../admin/dbconnect.php') ?>
<!DOCTYPE html>
<html lang="en">

<?php
include('./head.php');
session_start();
?>
<body class="bg-light">
  <main class="main-content mt-5">
    <section>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-5 me-auto ms-lg-auto">
            <div class="d-flex flex-column">
              <div class="text-center">
                <h4 class="font-weight-bolder h2 mb-3">Đăng nhập</h4>
                <p class="mb-4" style="font-size: 18px;">Nhập Email và mật khẩu để đăng nhập</p>
              </div>
              <div class="">
                <form role="form" method="post" id="loginForm">
                  <div class="mb-4">
                    <label for="exampleInputEmail" class="form-label" style="font-size: 20px;">Email</label>
                    <input type="email" name="email" class="form-control py-3" style="font-size: 20px;font-weight:400;" id="InputEmail" placeholder="Nhập email" required="">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword" class="form-label" style="font-size: 20px;">Mật khẩu</label>
                    <input type="password" name="password" class="form-control py-3" style="font-size: 20px;font-weight:400;" id="InputPassword" placeholder="Nhập mật khẩu" required="">
                  </div>
                  <div class="text-center mb-3">
                    <input type="submit" name="login" class="btn btn-primary bg-gradient-primary btn-lg w-100 mt-4 mb-0" id="login" value="Đăng nhập" />
                  </div>
                  <div class="alert alert-success" id="success" style="display:none;">
                    <strong>Thành công!</strong> Đăng nhập thành công.
                  </div>
                  <div class="alert alert-danger" id="failure" style="display:none;">
                    <strong>Lỗi!</strong> Email hoặc mật khẩu không đúng.
                  </div>
                </form>
              </div>
              <div class="text-center">
                <p class="mb-2 text-sm mx-auto">
                  Bạn chưa có tài khoản?
                  <a href="./sign-up.php" class="text-primary text-gradient font-weight-bold">Đăng ký</a>
                </p>
              </div>
              <div class="text-center mt-5">
                <p class="text-sm mx-auto">
                  <a href="../" class="text-primary text-gradient font-weight-bold"><i class="fa fa-long-arrow-left"></i> Quay lại trang chủ</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php
  if (isset($_POST["login"])) {
    $count = 0;
    $res = mysqli_query($link, "SELECT * FROM account WHERE email='$_POST[email]' AND password='$_POST[password]'") or die(mysqli_error($link));

    $count = mysqli_num_rows($res);

    $row = mysqli_fetch_array($res);
    if ($count == 0) {
  ?>
      <script type="text/javascript">
        document.getElementById("success").style.display = "none";
        document.getElementById("failure").style.display = "block";
      </script>
      <?php
    } else {
      if ($row['role'] == 'admin') {
        $_SESSION['name'] = $row['name'];
        header('location:../admin/');
      ?>
        <!-- <script type="text/javascript">
          document.getElementById("success").style.display = "block";
          document.getElementById("failure").style.display = "none";
          window.location = "../admin/dashboard.php"
        </script> -->
      <?php
      } else if ($row['role'] == 'user') {
        $_SESSION['name'] = $row['name'];
        $_SESSION['account_id'] = $row['account_id'];
        echo $_SESSION['account_id'];
        header('location:../user/');
      ?>
        <!-- <script type="text/javascript">
          document.getElementById("success").style.display = "block";
          document.getElementById("failure").style.display = "none";
          // window.location = "../user/index.php"
        </script> -->
      <?php
      } else {
      ?>
        <script type="text/javascript">
          document.getElementById("success").style.display = "block";
          document.getElementById("failure").style.display = "none";
        </script>
  <?php
      }
    }
  }
  ?>
</body>

</html>
<!-- <script>
</script> -->