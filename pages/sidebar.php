<head>
    <link href="../resources/css/sidebar.css" rel="stylesheet">
</head>
<!--Main Navigation-->
<!-- Sidebar -->
<div id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white mt-3">
    <div class="">
        <div class="btn-toolbar justify-content-center py-3" role="toolbar" aria-label="Toolbar with button groups">
            <?php
            include('../admin/dbconnect.php');
            $sql = $conn->prepare("SELECT * FROM category_question WHERE id_categoryquestion <=7 ORDER BY id_categoryquestion ASC");
            $sql->execute();
            $count = 1;
            while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {
                if ($_SESSION['id_categoryexam'] == 1) {
                    if ($count == 1) {
            ?>
                        <div class="d-flex flex-column">
                            <h6 class="mx-auto"><?php echo $result["name_categoryquestion"] ?> </h6>
                            <div class="btn-group d-flex flex-row justify-content-center mx-auto pb-2" role="group" aria-label="First group" style="flex-wrap: wrap;width:200px">
                                <?php
                                $question = $conn->prepare("SELECT * FROM questtion,detail_exam WHERE detail_exam.id_question = questtion.id_question AND id_categoryquestion = '" . $count . "' AND id_exam = '" . $_GET["id_exam"] . "'");
                                $question->execute();
                                $index = 1;
                                while ($sub_result = $question->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <a href="#<?php echo $sub_result["id_question"] ?> "><button type="button" class="btn btn-outline-primary mr-2 mb-2"><?php echo $index; ?> </button></a>
                                <?php
                                    $index++;
                                }

                                ?>
                            </div>
                        </div>
                    <?php
                    } else if ($count == 2) {
                    ?>
                        <div class="d-flex flex-column">
                            <div class="dropdown-divider"></div>
                            <h6 class="mx-auto"><?php echo $result["name_categoryquestion"] ?> </h6>
                            <div class="btn-group d-flex flex-row justify-content-center mx-auto pb-2" role="group" aria-label="First group" style="flex-wrap: wrap;width:200px">
                                <?php
                                $question = $conn->prepare("SELECT * FROM questtion,detail_exam WHERE detail_exam.id_question = questtion.id_question AND id_categoryquestion = '" . $count . "' AND id_exam = '" . $_GET["id_exam"] . "'");
                                $question->execute();
                                $index = 1;
                                while ($sub_result = $question->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <a href="#<?php echo $sub_result["id_question"] ?> "><button type="button" class="btn btn-outline-primary mr-2 mb-2"><?php echo $index; ?> </button></a>
                                <?php
                                    $index++;
                                }

                                ?>
                            </div>
                        </div>
                    <?php
                    } else if ($count == 3) {
                    ?>
                        <div class="d-flex flex-column">
                            <div class="dropdown-divider"></div>
                            <h6 class="mx-auto"><?php echo $result["name_categoryquestion"] ?> </h6>
                            <div class="btn-group d-flex flex-row justify-content-center mx-auto pb-2" role="group" aria-label="First group" style="flex-wrap: wrap;width:200px">
                                <?php
                                $question = $conn->prepare("SELECT * FROM questtion,detail_exam WHERE detail_exam.id_question = questtion.id_question AND id_categoryquestion = '" . $count . "' AND id_exam = '" . $_GET["id_exam"] . "'");
                                $question->execute();
                                $index = 1;
                                while ($sub_result = $question->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <a href="#<?php echo $sub_result["id_question"] ?> "><button type="button" class="btn btn-outline-primary mr-2 mb-2"><?php echo $index; ?> </button></a>
                                <?php
                                    $index++;
                                }

                                ?>
                            </div>
                        </div>
                    <?php
                    } else if ($count == 4) {
                    ?>
                        <div class="d-flex flex-column">
                            <div class="dropdown-divider"></div>
                            <h6 class="mx-auto"><?php echo $result["name_categoryquestion"] ?> </h6>
                            <div class="btn-group d-flex flex-row justify-content-center mx-auto pb-2" role="group" aria-label="First group" style="flex-wrap: wrap;width:200px">
                                <?php
                                $question = $conn->prepare("SELECT * FROM questtion,detail_exam WHERE detail_exam.id_question = questtion.id_question AND id_categoryquestion = '" . $count . "' AND id_exam = '" . $_GET["id_exam"] . "'");
                                $question->execute();
                                $index = 1;
                                while ($sub_result = $question->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <a href="#<?php echo $sub_result["id_question"] ?> "><button type="button" class="btn btn-outline-primary mr-2 mb-2"><?php echo $index; ?> </button></a>
                                <?php
                                    $index++;
                                }

                                ?>
                            </div>
                        </div>
                    <?php
                    } else if ($count == 5) {
                    ?>
                        <div class="d-flex flex-column">
                            <div class="dropdown-divider"></div>
                            <h6 class="mx-auto"><?php echo $result["name_categoryquestion"] ?> </h6>
                            <div class="btn-group d-flex flex-row justify-content-center mx-auto pb-2" role="group" aria-label="First group" style="flex-wrap: wrap;width:200px">
                                <?php
                                $question = $conn->prepare("SELECT * FROM questtion,detail_exam WHERE detail_exam.id_question = questtion.id_question AND id_categoryquestion = '" . $count . "' AND id_exam = '" . $_GET["id_exam"] . "'");
                                $question->execute();
                                $index = 1;
                                while ($sub_result = $question->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <a href="#<?php echo $sub_result["id_question"] ?> "><button type="button" class="btn btn-outline-primary mr-2 mb-2"><?php echo $index; ?> </button></a>
                                <?php
                                    $index++;
                                }

                                ?>
                            </div>
                        </div>
                    <?php
                    } else if ($count == 6) {
                    ?>
                        <div class="d-flex flex-column">
                            <div class="dropdown-divider"></div>
                            <h6 class="mx-auto"><?php echo $result["name_categoryquestion"] ?> </h6>
                            <div class="btn-group d-flex flex-row justify-content-center mx-auto pb-2" role="group" aria-label="First group" style="flex-wrap: wrap;width:200px">
                                <?php
                                $question = $conn->prepare("SELECT * FROM questtion,detail_exam WHERE detail_exam.id_question = questtion.id_question AND id_categoryquestion = '" . $count . "' AND id_exam = '" . $_GET["id_exam"] . "'");
                                $question->execute();
                                $index = 1;
                                while ($sub_result = $question->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <a href="#<?php echo $sub_result["id_question"] ?> "><button type="button" class="btn btn-outline-primary mr-2 mb-2"><?php echo $index; ?> </button></a>
                                <?php
                                    $index++;
                                }

                                ?>
                            </div>
                        </div>
                    <?php
                    } else {
                    ?>
                        <div class="d-flex flex-column" data-spy="scroll">
                            <div class="dropdown-divider"></div>
                            <h6 class="mx-auto"><?php echo $result["name_categoryquestion"] ?> </h6>
                            <div class="btn-group d-flex flex-row justify-content-center mx-auto pb-5" role="group" aria-label="First group" style="flex-wrap: wrap;width:200px;">
                                <?php
                                $question = $conn->prepare("SELECT * FROM questtion,detail_exam WHERE detail_exam.id_question = questtion.id_question AND id_categoryquestion = '" . $count . "' AND id_exam = '" . $_GET["id_exam"] . "'");
                                $question->execute();
                                $index = 1;
                                while ($sub_result = $question->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <a href="#<?php echo $sub_result["id_question"] ?> "><button type="button" class="btn btn-outline-primary mr-2 mb-2"><?php echo $index; ?> </button></a>
                                <?php
                                    $index++;
                                }

                                ?>
                            </div>
                        </div>
                    <?php
                    }
                } else {
                    if ($result["id_categoryquestion"] == 7) {
                    ?>
                        <div class="d-flex flex-column">
                            <div class="dropdown-divider"></div>
                            <h6 class="mx-auto"><?php echo $result["description"] ?> </h6>
                            <div class="btn-group d-flex flex-row justify-content-center mx-auto pb-2" role="group" aria-label="First group" style="flex-wrap: wrap;width:200px">
                                <?php
                                $question = $conn->prepare("SELECT * FROM questtion,detail_exam WHERE detail_exam.id_question = questtion.id_question AND id_categoryquestion = '" . $count . "' AND id_exam = '" . $_GET["id_exam"] . "'");
                                $question->execute();
                                $index = 1;
                                while ($sub_result = $question->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <a href="#<?php echo $sub_result["id_question"] ?> "><button type="button" class="btn btn-outline-primary mr-2 mb-2"><?php echo $index; ?> </button></a>
                                <?php
                                    $index++;
                                }

                                ?>
                            </div>
                        </div>
                    <?php
                    } else if ($result["id_categoryquestion"] == 3) {
                    ?>
                        <div class="d-flex flex-column">
                            <div class="dropdown-divider"></div>
                            <h6 class="mx-auto"><?php echo $result["description"] ?> </h6>
                            <div class="btn-group d-flex flex-row justify-content-center mx-auto pb-2" role="group" aria-label="First group" style="flex-wrap: wrap;width:200px">
                                <?php
                                $question = $conn->prepare("SELECT * FROM questtion,detail_exam WHERE detail_exam.id_question = questtion.id_question AND id_categoryquestion = '" . $count . "' AND id_exam = '" . $_GET["id_exam"] . "'");
                                $question->execute();
                                $index = 1;
                                while ($sub_result = $question->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <a href="#<?php echo $sub_result["id_question"] ?> "><button type="button" class="btn btn-outline-primary mr-2 mb-2"><?php echo $index; ?> </button></a>
                                <?php
                                    $index++;
                                }

                                ?>
                            </div>
                        </div>
                    <?php
                    } else if ($result["id_categoryquestion"] == 2) {
                    ?>
                        <div class="d-flex flex-column">
                            <h6 class="mx-auto"><?php echo $result["description"] ?> </h6>
                            <div class="btn-group d-flex flex-row justify-content-center mx-auto pb-2" role="group" aria-label="First group" style="flex-wrap: wrap;width:200px">
                                <?php
                                $question = $conn->prepare("SELECT * FROM questtion,detail_exam WHERE detail_exam.id_question = questtion.id_question AND id_categoryquestion = '" . $count . "' AND id_exam = '" . $_GET["id_exam"] . "'");
                                $question->execute();
                                $index = 1;
                                while ($sub_result = $question->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <a href="#<?php echo $sub_result["id_question"] ?> "><button type="button" class="btn btn-outline-primary mr-2 mb-2"><?php echo $index; ?> </button></a>
                                <?php
                                    $index++;
                                }

                                ?>
                            </div>
                        </div>
                    <?php
                    } else if ($result["id_categoryquestion"] == 4) {
                    ?>
                        <div class="d-flex flex-column">
                            <div class="dropdown-divider"></div>
                            <h6 class="mx-auto"><?php echo $result["description"] ?> </h6>
                            <div class="btn-group d-flex flex-row justify-content-center mx-auto pb-2" role="group" aria-label="First group" style="flex-wrap: wrap;width:200px">
                                <?php
                                $question = $conn->prepare("SELECT * FROM questtion,detail_exam WHERE detail_exam.id_question = questtion.id_question AND id_categoryquestion = '" . $count . "' AND id_exam = '" . $_GET["id_exam"] . "'");
                                $question->execute();
                                $index = 1;
                                while ($sub_result = $question->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <a href="#<?php echo $sub_result["id_question"] ?> "><button type="button" class="btn btn-outline-primary mr-2 mb-2"><?php echo $index; ?> </button></a>
                                <?php
                                    $index++;
                                }

                                ?>
                            </div>
                        </div>
            <?php
                    }
                }

                $count++;
            }
            ?>
        </div>
    </div>
</div>