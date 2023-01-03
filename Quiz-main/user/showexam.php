<?php include('../pages/head.php') ?>
<?php include('../pages/nav.php') ?>
<?php
include('../admin/dbconnect.php');
?>
<div class="w-100 bg-light" style="margin-top: 79px;height: 100px;text-align: center;padding-top: 25px;">
    <div class="container">
        <h2 class="text-dark">ĐỀ THI</h2>
    </div>
</div>
<div class="album py-5">
    <div class="container">
        <div class="row">
            <?php
            $res = mysqli_query($link, "SELECT * FROM exam WHERE id_categoryexam");
            while ($row = mysqli_fetch_array($res)) {
                $_SESSION['id_exam'] = $row['id_exam'];
            ?>
                <div class="col-md-4">
                    <a href="./examdetail.php?id=<?php echo $_SESSION['id_exam'] ?>" class="text-dark" style="text-decoration: none;" id="btnExam">
                        <div class="card mb-4" style="-webkit-box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%) !important;box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%) !important;">
                            <div class="bg-primary" style="height: 20px;width:100%;">
                            </div>
                            <div class="card-body">
                                <h1 id="idexam" style="display: none;"><?php echo $_SESSION['id_exam'] ?></h1>
                                <p class="text-secondary font-weight-normal" style="font-size:24px;margin-bottom:10px;"><?php echo $row['name_exam'] ?></p>
                                <p class="card-text">Học các bài học ngữ pháp thường có trong mỗi cấp độ: A1 , A2 , B1 , B1 + , B2 . Có ba bài tập trở lên và một lời giải thích trong mỗi bài học. Và bạn sẽ tìm thấy phản hồi cho mọi câu hỏi!</p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
<?php include('../pages/footer.php') ?>

<script>

</script>