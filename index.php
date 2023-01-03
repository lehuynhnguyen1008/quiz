<!DOCTYPE html>
<html lang="en">

<?php include('./pages/head.php') ?>

<body>
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" style="box-shadow: 0 2px 7px 0 rgb(0 0 0 / 15%);">
    <div class="container">
      <a class="navbar-brand" href="./"><img src="https://play-lh.googleusercontent.com/eaDUcPNYodG-ea3L_oLHOh0eP-R1xDEI_zTDwI8ZPW47uxq1CGukhKIwy1DS99CGbg" style="width:70px;height:50px" /> </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item dropdown mr-4">
            <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-headphones pr-2" aria-hidden="true"></i>
              NGHE
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php
              include('./admin/dbconnect.php');
              $sql = $conn->prepare("SELECT * FROM category_question WHERE id_categoryquestion >= 1 and id_categoryquestion <=4");
              $sql->execute();
              while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {
                echo '<a class="dropdown-item" href="./pages/sign-in.php">' . $result['description'] . '</a>';
                echo '<div class="dropdown-divider"></div>';
              }
              ?>
            </div>
          </li>
          <li class="nav-item dropdown mr-4">
            <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-microphone pr-2" aria-hidden="true"></i>
              NÓI
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php
              include('./admin/dbconnect.php');
              $sql = $conn->prepare("SELECT * FROM category_question WHERE id_categoryquestion >= 8 and id_categoryquestion <=9");
              $sql->execute();
              while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {
                echo '<a class="dropdown-item" href="./pages/sign-in.php">' . $result['description'] . '</a>';
                echo '<div class="dropdown-divider"></div>';
              }
              ?>
            </div>
          </li>
          <li class="nav-item dropdown mr-4">
            <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-file-text-o pr-2" aria-hidden="true"></i>
              ĐỌC
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php
              include('./admin/dbconnect.php');
              $sql = $conn->prepare("SELECT * FROM category_question WHERE id_categoryquestion >= 5 and id_categoryquestion <=7");
              $sql->execute();
              while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {
                echo '<a class="dropdown-item" href="./pages/sign-in.php">' . $result['description'] . '</a>';
                echo '<div class="dropdown-divider"></div>';
              }
              ?>
            </div>
          </li>
          <li class="nav-item dropdown mr-4">
            <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-pencil pr-2" aria-hidden="true"></i>
              VIẾT
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php
              include('./admin/dbconnect.php');
              $sql = $conn->prepare("SELECT * FROM category_question WHERE id_categoryquestion >= 10");
              $sql->execute();
              while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {
                echo '<a class="dropdown-item" href="./pages/sign-in.php">' . $result['description'] . '</a>';
                echo '<div class="dropdown-divider"></div>';
              }
              ?>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-book pr-2" aria-hidden="true"></i>
              BÀI HỌC
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php
              include('./admin/dbconnect.php');
              $sql = $conn->prepare("SELECT * FROM category_lesson");
              $sql->execute();
              while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {
                echo '<a class="dropdown-item" href="./client/showlesson.php?id=' . $result["id_categorylesson"] . '">' . $result['name_categorylesson'] . '</a>';
                echo '<div class="dropdown-divider"></div>';
              }
              ?>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav">
          <a href="./pages/sign-in.php" class="btn btn-primary">Đăng nhập</a>
        </ul>
      </div>
    </div>
  </nav>
  <main role="main">
    <section class="bg-white jumbotron text-center mt-5 mb-0">
      <div class="container">
        <h1 class="jumbotron-heading">Chuẩn bị cho kỳ thi của bạn</h1>
        <p class="lead text-muted">Trên English.com, bạn sẽ tìm thấy rất nhiều bài kiểm tra và tài liệu thực hành miễn phí để giúp bạn cải thiện các kỹ năng tiếng Anh và chuẩn bị nhiều hơn cho bài kiểm tra tiếng Anh của bạn: <b>TOEIC, VSTEP B1</b>. Nếu bạn không biết cấp độ của mình, bạn có thể bắt đầu bằng cách làm bài kiểm tra cấp độ.</p>
        <p>
          <a href="./client/showlesson.php?id=2" class="btn btn-primary my-2">HỌC NGAY</a>
          <a href="./pages/sign-in.php" class="btn btn-success my-2">THI NGAY</a>
        </p>
      </div>
    </section>
    <div class="bg-light">
      <div class="container marketing">
        <div class="bg-info mb-5">
          <h2 class="text-center py-3 text-light">NGỮ PHÁP</h2>
        </div>
        <div class="row">
          <?php
          include('./admin/dbconnect.php');
          $res = mysqli_query($link, "SELECT * FROM detailcategory_lesson WHERE id_categorylesson = 2 ORDER BY id_categorylesson ASC");
          while ($row = mysqli_fetch_array($res)) {
            $_SESSION['id_category'] = $row['id_detailcategory'];
          ?>
            <div class="text-center bg-white mx-3" style="width: 253px;margin: 50px 0; padding: 0 20px; border: 1px solid #ccc; border-radius: 15px;  box-shadow: 0px 5px 2px 0px #0000cc;">
              <a href="./client/detaillesson.php?id=<?php echo $_SESSION['id_category'] ?>" style="text-decoration: none;color:#000">
                <img class="bd-placeholder-img rounded-circle" src="<?php echo $row['logo'] ?>" style="width:120px;height:120px; border: 1px solid #0000cc; margin-top:-50px;">
                </img>
                <h2><?php echo $row['name_detailcategory'] ?></h2>
                <p><?php echo $row['description'] ?></p>
              </a>
            </div>
          <?php
          }
          ?>
        </div>
      </div>
      <div class="container marketing">
        <div class="bg-info my-5">
          <h2 class="text-center py-3 text-light">TỪ VỰNG</h2>
        </div>
        <div class="row">
          <?php
          include('./admin/dbconnect.php');
          $res = mysqli_query($link, "SELECT * FROM detailcategory_lesson WHERE id_categorylesson = 1 ORDER BY id_categorylesson ASC");
          while ($row = mysqli_fetch_array($res)) {
            $_SESSION['id_category'] = $row['id_detailcategory'];
          ?>
            <div class="text-center bg-white mx-3" style="width: 253px;margin: 50px 0; padding: 0 20px; border: 1px solid #ccc; border-radius: 15px;  box-shadow: 0px 5px 2px 0px #0000cc;">
              <a href="./client/detaillesson.php?id=<?php echo $_SESSION['id_category']?>" style="text-decoration: none;color:#000">
                <img class="bd-placeholder-img rounded-circle" src="<?php echo $row['logo'] ?>" style="width:120px;height:120px; border: 1px solid #0000cc; margin-top:-50px;">
                </img>
                <h2><?php echo $row['name_detailcategory'] ?></h2>
                <p><?php echo $row['description'] ?></p>
              </a>
            </div>
          <?php
          }
          ?>
        </div>
      </div>
    </div>
  </main>
  <?php include('./pages/footer.php') ?>
</body>
<script>
  $("#btnSignin").click(function() {
    window.location = "./pages/sign-in.php"
  });
</script>

</html>