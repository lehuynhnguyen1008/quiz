<?php include('../pages/head.php') ?>
<?php include('../pages/nav.php') ?>
<?php
include('../admin/dbconnect.php');
?>
<div class="w-100 bg-light" style="margin-top: 80px;height: 100px;text-align: center;padding-top: 25px;">
    <div class="container">
        <?php
        $id = $_GET['id'];

        $res = mysqli_query($link, "SELECT * FROM detailcategory_lesson WHERE id_detailcategory = '" . $id . "'");
        while ($row = mysqli_fetch_array($res)) {
        ?>
            <h2 class="text-dark text-uppercase"><?php echo $row['name_detailcategory'] ?></h2>

        <?php
        }
        ?>
    </div>
</div>
<div class="album py-5">
    <div class="container">
        <div class="row">
            <?php
            $res = mysqli_query($link, "SELECT * FROM detail_lesson WHERE id_detailcategory = '" . $id . "'");
            while ($row = mysqli_fetch_array($res)) {
                $_SESSION['id_detaillesson'] = $row['id_detaillesson'];
            ?>
                <div class="text-center bg-white mr-5" style="width: 237px;margin: 50px 0; padding: 0 20px; border: 1px solid #ccc; border-radius: 15px;  box-shadow: 0px 5px 2px 0px #0000cc;">
                    <a href="./lesson.php?id_lesson=<?php echo $_SESSION['id_detaillesson'] ?>" style="text-decoration: none;color:#000">
                        <img class="bd-placeholder-img rounded-circle" src="<?php echo $row['logo'] ?>" style="width:120px;height:120px; border: 1px solid #0000cc; margin-top:-50px;">
                        </img>
                        <h2><?php echo $row['name_detaillesson'] ?></h2>
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