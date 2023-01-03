<?php
session_start();
?>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" style="box-shadow: 0 2px 7px 0 rgb(0 0 0 / 15%);">
    <div class="container">
        <a class="navbar-brand" href="../user/"><img src="https://play-lh.googleusercontent.com/eaDUcPNYodG-ea3L_oLHOh0eP-R1xDEI_zTDwI8ZPW47uxq1CGukhKIwy1DS99CGbg" style="width:70px;height:50px" /> </a>
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
                            echo '<a class="dropdown-item" href="./testshort.php?id='.$result["id_categoryquestion"].'">' . $result['description'] . '</a>';
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
                            echo '<a class="dropdown-item" href="./testshort.php?id='.$result["id_categoryquestion"].'">' . $result['description'] . '</a>';
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
                            echo '<a class="dropdown-item" href="./testshort.php?id='.$result["id_categoryquestion"].'">' . $result['description'] . '</a>';
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
                            echo '<a class="dropdown-item" href="./testshort.php?id='.$result["id_categoryquestion"].'">' . $result['description'] . '</a>';
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
                            echo '<a class="dropdown-item" href="./showlesson.php?id='.$result["id_categorylesson"].'">' . $result['name_categorylesson'] . '</a>';
                            echo '<div class="dropdown-divider"></div>';
                        }
                        ?>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php
                        echo $_SESSION['name'];
                        // echo $_SESSION['account_id'];
                        ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../user/historyexam.php">Lịch sử làm bài</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../pages/logout.php">Đăng xuất</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>