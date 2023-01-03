<?php include('../pages/head.php') ?>
<?php
include('../admin/dbconnect.php');
?>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" style="box-shadow: 0 2px 7px 0 rgb(0 0 0 / 15%);">
    <div class="container">
        <a class="navbar-brand" href="../"><img src="https://play-lh.googleusercontent.com/eaDUcPNYodG-ea3L_oLHOh0eP-R1xDEI_zTDwI8ZPW47uxq1CGukhKIwy1DS99CGbg" style="width:70px;height:50px" /> </a>
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
                        include('../admin/dbconnect.php');
                        $sql = $conn->prepare("SELECT * FROM category_question WHERE id_categoryquestion >= 1 and id_categoryquestion <=4");
                        $sql->execute();
                        while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {
                            echo '<a class="dropdown-item" href="../pages/sign-in.php">' . $result['description'] . '</a>';
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
                        include('../admin/dbconnect.php');
                        $sql = $conn->prepare("SELECT * FROM category_question WHERE id_categoryquestion >= 8 and id_categoryquestion <=9");
                        $sql->execute();
                        while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {
                            echo '<a class="dropdown-item" href="../pages/sign-in.php">' . $result['description'] . '</a>';
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
                        include('../admin/dbconnect.php');
                        $sql = $conn->prepare("SELECT * FROM category_question WHERE id_categoryquestion >= 5 and id_categoryquestion <=7");
                        $sql->execute();
                        while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {
                            echo '<a class="dropdown-item" href="../pages/sign-in.php">' . $result['description'] . '</a>';
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
                        include('../admin/dbconnect.php');
                        $sql = $conn->prepare("SELECT * FROM category_question WHERE id_categoryquestion >= 10");
                        $sql->execute();
                        while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {
                            echo '<a class="dropdown-item" href="../pages/sign-in.php">' . $result['description'] . '</a>';
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
                        include('../admin/dbconnect.php');
                        $sql = $conn->prepare("SELECT * FROM category_lesson");
                        $sql->execute();
                        while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {
                            echo '<a class="dropdown-item" href="../client/showlesson.php?id=' . $result["id_categorylesson"] . '">' . $result['name_categorylesson'] . '</a>';
                            echo '<div class="dropdown-divider"></div>';
                        }
                        ?>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav">
                <a href="../pages/sign-in.php" class="btn btn-primary">Đăng nhập</a>
            </ul>
        </div>
    </div>
</nav>
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