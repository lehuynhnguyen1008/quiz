<!DOCTYPE html>
<html lang="en">

<?php
include('../pages/head.php');
session_start();
?>

<body>
    <?php include('../pages/nav.php') ?>
    <main role="main">
        <section class="bg-white jumbotron text-center mt-5 mb-0">
            <div class="container">
                <h1 class="jumbotron-heading">Chuẩn bị cho kỳ thi của bạn</h1>
                <p class="lead text-muted">Trên English.com, bạn sẽ tìm thấy rất nhiều bài kiểm tra và tài liệu thực hành miễn phí để giúp bạn cải thiện các kỹ năng tiếng Anh và chuẩn bị nhiều hơn cho bài kiểm tra tiếng Anh của bạn: <b>TOEIC, VSTEP B1</b>. Nếu bạn không biết cấp độ của mình, bạn có thể bắt đầu bằng cách làm bài kiểm tra cấp độ.</p>
                <p>
                    <a href="../user/showlesson.php?id=2" class="btn btn-primary my-2">HỌC NGAY</a>
                    <a href="../user/showexam.php" class="btn btn-success my-2">THI NGAY</a>
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
                    $res = mysqli_query($link, "SELECT * FROM detailcategory_lesson WHERE id_categorylesson = 2 ORDER BY id_categorylesson ASC");
                    while ($row = mysqli_fetch_array($res)) {
                        $_SESSION['id_category'] = $row['id_detailcategory'];
                    ?>
                        <div class="text-center bg-white mx-3" style="width: 253px;margin: 50px 0; padding: 0 20px; border: 1px solid #ccc; border-radius: 15px;  box-shadow: 0px 5px 2px 0px #0000cc;">
                            <a href="./detaillesson.php?id=<?php echo $_SESSION['id_category'] ?>" style="text-decoration: none;color:#000">
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
                    $res = mysqli_query($link, "SELECT * FROM detailcategory_lesson WHERE id_categorylesson = 1 ORDER BY id_categorylesson ASC");
                    while ($row = mysqli_fetch_array($res)) {
                        $_SESSION['id_category'] = $row['id_detailcategory'];
                    ?>
                        <div class="text-center bg-white mx-3" style="width: 253px;margin: 50px 0; padding: 0 20px; border: 1px solid #ccc; border-radius: 15px;  box-shadow: 0px 5px 2px 0px #0000cc;">
                            <a href="./detaillesson.php?id=<?php echo $_SESSION['id_category'] ?>" style="text-decoration: none;color:#000">
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
    <?php include('../pages/footer.php') ?>

</body>
<script>

</script>

</html>