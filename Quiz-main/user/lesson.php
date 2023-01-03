<?php include('../pages/head.php') ?>
<?php include('../pages/nav.php') ?>
<?php
include('../admin/dbconnect.php');
?>
<div class="w-100 bg-light" style="margin-top: 82px;height: 100px;text-align: center;padding-top: 25px;">
    <div class="container">
        <?php
        $id = $_GET['id_lesson'];

        $res = mysqli_query($link, "SELECT * FROM lesson WHERE id_detaillesson = '" . $id . "'");
        while ($row = mysqli_fetch_array($res)) {
        ?>
            <h2 class="text-dark text-uppercase"><?php echo $row['name_lesson'] ?></h2>
        <?php
        }
        ?>
    </div>
</div>
<div class="album py-5">
    <div class="container d-flex justify-content-center" style="flex-wrap: wrap;">
        <?php
        $id = $_GET['id_lesson'];
        $sql = mysqli_query($link, "SELECT * FROM lesson WHERE id_detaillesson = '" . $id . "'");
        while ($result = mysqli_fetch_array($sql)) {
        ?>
            <div class="mx-2 mb-2">
                <?php echo $result['content_lesson'] ?>
            </div>
        <?php
        }
        ?>
    </div>
</div>
<?php include('../pages/footer.php') ?>

<script>

</script>