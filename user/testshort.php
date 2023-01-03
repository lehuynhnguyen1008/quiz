<?php include('../pages/head.php') ?>
<?php include('../pages/nav.php') ?>
<?php
include('../admin/dbconnect.php');
session_start();
?>
<div class="w-100 bg-light" style="margin-top: 32px;height: 100px;text-align: center;padding-top: 25px;">
    <div class="container">
        <?php
        $_SESSION['id'] = $_GET['id'];

        $res = mysqli_query($link, "SELECT * FROM category_question WHERE id_categoryquestion = '" . $_SESSION['id'] . "'");
        while ($row = mysqli_fetch_array($res)) {
        ?>
            <h2 class="text-dark text-uppercase">Bài Tập <?php echo $row['description'] ?></h2>

        <?php
        }
        ?>
    </div>
</div>
<div class="album py-5 h-75">
    <div class="container d-flex justify-content-center" style="flex-wrap: wrap;">
        <?php
        $_SESSION['id'] = $_GET['id'];
        $index = 1;
        $res = mysqli_query($link, "SELECT * FROM shorttest WHERE id_categoryquestion = '" . $_SESSION['id'] . "'");
        while ($row = mysqli_fetch_array($res)) {
            $_SESSION['id_test'] = $row['id_shortTest'];
        ?>
            <div class="mx-2 mb-2">
                <a href="./test.php?id_test=<?php echo $_SESSION['id_test'] ?>" class="text-dark" style="text-decoration: none;" id="btnExam">
                    <h1 id="idexam" style="display: none;"></h1>
                    <input type="button" class="btn btn-primary text-white font-weight-normal" value="<?php echo $row['name_Test'] ?>" style="font-size:24px;margin-bottom:10px; width:auto" />
                </a>
            </div>
        <?php
            $index++;
        }
        ?>
    </div>
</div>
<?php include('../pages/footer.php') ?>

<script>

</script>