<?php include('../pages/head.php') ?>
<?php include('../pages/nav.php') ?>
<?php
include('../admin/dbconnect.php');
session_start();
?>
<div class="w-100 bg-light" style="margin-top: 32px;height: 100px;text-align: center;padding-top: 25px;">
    <div class="container">
        <?php
        $res = mysqli_query($link, "SELECT * FROM category_question WHERE id_categoryquestion = '" . $_SESSION['id'] . "'");
        while ($row = mysqli_fetch_array($res)) {
        ?>
            <h2 class="text-dark text-uppercase">Bài Tập <?php echo $row['description'] ?></h2>

        <?php
        }
        ?>
    </div>
</div>
<div class="album py-5">
    <div class="container">
        <div id="myQuestion">
            <?php
            $index = 1;
            $_SESSION['id_test'] = $_GET['id_test'];
            $sql = mysqli_query($link, "SELECT * FROM detail_shorttest, questtion, shorttest, media WHERE detail_shorttest.id_question = questtion.id_question AND detail_shorttest.id_shortTest = shorttest.id_shortTest AND media.id_media = questtion.id_media AND questtion.id_categoryquestion = '" . $_SESSION['id'] . "' AND shorttest.id_shortTest = '" . $_SESSION['id_test'] . "'");
            if ($_SESSION['id'] == 1) {
                while ($result = mysqli_fetch_array($sql)) {
            ?>
                    <div class="d-flex flex-column mb-5" id="question_<?php echo $result['id_question'] ?>">
                        <h5 class="ml-5" id="<?php echo $result['id_question'] ?>">Câu hỏi <?php echo $index ?></h5>
                        <div class="d-flex flex-column mx-auto">
                            <audio controls class="mb-3" style="width:450px;">
                                <source src="<?php echo $result['description_media'] ?>" type="audio/mpeg">
                            </audio>
                            <img src="<?php echo $result['name_question'] ?>" alt="" style="width:450px;margin-bottom:50px">
                        </div>
                        <form class="ml-5 pl-5 mb-4">
                            <fieldset id="group' . $index . '" class="d-flex flex-column" style="width:80%;">
                                <label class="A ml-5"><input type="radio" value="" name="group<?php echo $index ?>" class="A" style="margin-right:20px;">A. <?php echo $result['option1'] ?></label>
                                <label class="B ml-5"><input type="radio" value="" name="group<?php echo $index ?>" class="B" style="margin-right:20px;">B. <?php echo $result['option2'] ?></label>
                                <label class="C ml-5"><input type="radio" value="" name="group<?php echo $index ?>" class="C" style="margin-right:20px;">C. <?php echo $result['option3'] ?></label>
                                <label class="D ml-5"><input type="radio" value="" name="group<?php echo $index ?>" class="D" style="margin-right:20px;">D. <?php echo $result['option4'] ?></label>
                                <input type="hidden" value="<?php echo $result['option_correct'] ?>" class="1" />

                            </fieldset>
                        </form>
                        <div id="answer_correct">
                            <div class="answer mx-auto" style="padding:20px; background-color:#ff9; display:none" id="<?php echo $result['id_question'] ?>">
                                <h6>Lời giải:</h6>
                                <h6><?php echo $result['answer'] ?></h6>
                            </div>
                        </div>
                    </div>
                <?php
                    $index++;
                }
            } else if ($_SESSION['id'] == 2) {
                while ($result = mysqli_fetch_array($sql)) {
                ?>
                    <div class="d-flex flex-column mb-5" id="question_<?php echo $result['id_question'] ?>">
                        <h5 class="ml-5" id="<?php echo $result['id_question'] ?>">Câu hỏi <?php echo $index ?></h5>
                        <div class="d-flex flex-column mx-auto">
                            <audio controls class="mb-3" style="width:450px;">
                                <source src="<?php echo $result['description_media'] ?>" type="audio/mpeg">
                            </audio>
                        </div>
                        <form class="ml-5 pl-5 mb-4">
                            <fieldset id="group' . $index . '" class="d-flex flex-column" style="width:80%;">
                                <label class="A ml-5"><input type="radio" value="" name="group<?php echo $index ?>" class="A" style="margin-right:20px;">A. <?php echo $result['option1'] ?></label>
                                <label class="B ml-5"><input type="radio" value="" name="group<?php echo $index ?>" class="B" style="margin-right:20px;">B. <?php echo $result['option2'] ?></label>
                                <label class="C ml-5"><input type="radio" value="" name="group<?php echo $index ?>" class="C" style="margin-right:20px;">C. <?php echo $result['option3'] ?></label>
                                <input type="hidden" value="<?php echo $result['option_correct'] ?>" class="1" />
                            </fieldset>
                        </form>
                        <div id="answer_correct">
                            <div class="answer mx-auto" style="padding:20px; background-color:#ff9; display:none" id="<?php echo $result['id_question'] ?>">
                                <h6>Lời giải:</h6>
                                <h6><?php echo $result['answer'] ?></h6>
                            </div>
                        </div>
                    </div>
                <?php
                    $index++;
                }
            } else if ($_SESSION['id'] == 3) {
                $res = mysqli_query($link, "SELECT * FROM questtion, media WHERE media.id_media = questtion.id_media AND questtion.id_categoryquestion = '" . $_SESSION['id'] . "' AND media.name_media = 'Đề 1 part 3 - " . $_SESSION['id_test'] . "'");
                $row = mysqli_fetch_array($res);
                echo '<div class="d-flex flex-column mx-auto">';
                echo '<audio controls class="mb-3" style="width:450px;margin:0 auto;">';
                echo '<source src="' . $row['description_media'] . '" type="audio/mpeg" >';
                echo '</audio>';
                echo '</div>';
                while ($result = mysqli_fetch_array($sql)) {
                ?>
                    <div class="d-flex flex-column mb-5" id="question_<?php echo $result['id_question'] ?>">
                        <h5 class="ml-5" id="<?php echo $result['id_question'] ?>">Câu hỏi <?php echo $index ?></h5>
                        <div class="d-flex flex-column mx-auto">
                            <h5><?php echo $result['name_question'] ?></h5>
                        </div>
                        <form class="ml-5 pl-5 mb-4">
                            <fieldset id="group' . $index . '" class="d-flex flex-column" style="width:80%;">
                                <label class="A ml-5"><input type="radio" value="" name="group<?php echo $index ?>" class="A" style="margin-right:20px;">A. <?php echo $result['option1'] ?></label>
                                <label class="B ml-5"><input type="radio" value="" name="group<?php echo $index ?>" class="B" style="margin-right:20px;">B. <?php echo $result['option2'] ?></label>
                                <label class="C ml-5"><input type="radio" value="" name="group<?php echo $index ?>" class="C" style="margin-right:20px;">C. <?php echo $result['option3'] ?></label>
                                <label class="D ml-5"><input type="radio" value="" name="group<?php echo $index ?>" class="D" style="margin-right:20px;">D. <?php echo $result['option4'] ?></label>
                                <input type="hidden" value="<?php echo $result['option_correct'] ?>" class="1" />
                            </fieldset>
                        </form>
                        <div id="answer_correct">
                            <div class="answer mx-auto" style="padding:20px; background-color:#ff9; display:none" id="<?php echo $result['id_question'] ?>">
                                <h6>Lời giải:</h6>
                                <h6><?php echo $result['answer'] ?></h6>
                            </div>
                        </div>
                    </div>
                <?php
                    $index++;
                }
            } else if ($_SESSION['id'] == 4) {
                $res = mysqli_query($link, "SELECT * FROM questtion, media WHERE media.id_media = questtion.id_media AND questtion.id_categoryquestion = '" . $_SESSION['id'] . "' AND media.name_media = 'Đề 1 part 4 - " . $_SESSION['id_test'] . "'");
                $row = mysqli_fetch_array($res);
                echo '<div class="d-flex flex-column mx-auto">';
                echo '<audio controls class="mb-3" style="width:450px;margin:0 auto;">';
                echo '<source src="' . $row['description_media'] . '" type="audio/mpeg" >';
                echo '</audio>';
                echo '</div>';
                while ($result = mysqli_fetch_array($sql)) {
                ?>
                    <div class="d-flex flex-column mb-5" id="question_<?php echo $result['id_question'] ?>">
                        <h5 class="ml-5" id="<?php echo $result['id_question'] ?>">Câu hỏi <?php echo $index ?></h5>
                        <div class="d-flex flex-column mx-auto">
                            <h5><?php echo $result['name_question'] ?></h5>
                        </div>
                        <form class="ml-5 pl-5 mb-4">
                            <fieldset id="group' . $index . '" class="d-flex flex-column" style="width:80%;">
                                <label class="A ml-5"><input type="radio" value="" name="group<?php echo $index ?>" class="A" style="margin-right:20px;">A. <?php echo $result['option1'] ?></label>
                                <label class="B ml-5"><input type="radio" value="" name="group<?php echo $index ?>" class="B" style="margin-right:20px;">B. <?php echo $result['option2'] ?></label>
                                <label class="C ml-5"><input type="radio" value="" name="group<?php echo $index ?>" class="C" style="margin-right:20px;">C. <?php echo $result['option3'] ?></label>
                                <label class="D ml-5"><input type="radio" value="" name="group<?php echo $index ?>" class="D" style="margin-right:20px;">D. <?php echo $result['option4'] ?></label>
                                <input type="hidden" value="<?php echo $result['option_correct'] ?>" class="1" />
                            </fieldset>
                        </form>
                        <div id="answer_correct">
                            <div class="answer mx-auto" style="padding:20px; background-color:#ff9; display:none" id="<?php echo $result['id_question'] ?>">
                                <h6>Lời giải:</h6>
                                <h6><?php echo $result['answer'] ?></h6>
                            </div>
                        </div>
                    </div>
                <?php
                    $index++;
                }
            } else if ($_SESSION['id'] == 5) {
                while ($result = mysqli_fetch_array($sql)) {
                ?>
                    <div class="d-flex flex-column mb-5" id="question_<?php echo $result['id_question'] ?>">
                        <h5 class="ml-5" id="<?php echo $result['id_question'] ?>">Câu hỏi <?php echo $index ?></h5>
                        <div class="d-flex flex-column mx-auto">
                            <h5><?php echo $result['name_question'] ?></h5>
                        </div>
                        <form class="ml-5 pl-5 mb-4">
                            <fieldset id="group' . $index . '" class="d-flex flex-column" style="width:80%;">
                                <label class="A ml-5"><input type="radio" value="" name="group<?php echo $index ?>" class="A" style="margin-right:20px;">A. <?php echo $result['option1'] ?></label>
                                <label class="B ml-5"><input type="radio" value="" name="group<?php echo $index ?>" class="B" style="margin-right:20px;">B. <?php echo $result['option2'] ?></label>
                                <label class="C ml-5"><input type="radio" value="" name="group<?php echo $index ?>" class="C" style="margin-right:20px;">C. <?php echo $result['option3'] ?></label>
                                <label class="D ml-5"><input type="radio" value="" name="group<?php echo $index ?>" class="D" style="margin-right:20px;">D. <?php echo $result['option4'] ?></label>
                                <input type="hidden" value="<?php echo $result['option_correct'] ?>" class="1" />
                            </fieldset>
                        </form>
                        <div id="answer_correct">
                            <div class="answer mx-auto" style="padding:20px; background-color:#ff9; display:none" id="<?php echo $result['id_question'] ?>">
                                <h6>Lời giải:</h6>
                                <h6><?php echo $result['answer'] ?></h6>
                            </div>
                        </div>
                    </div>
                <?php
                    $index++;
                }
            } else if ($_SESSION['id'] == 6) {
                $index = 1;
                $res = mysqli_query($link, "SELECT * FROM questtion, media WHERE media.id_media = questtion.id_media AND questtion.id_categoryquestion = '" . $_SESSION['id'] . "' AND media.name_media = 'Part 6 - " . $_SESSION['id_test'] . "'");
                $row = mysqli_fetch_array($res);
                echo '<h6 class="mb-4 w-75 mx-auto">' . $row['description_media'] . '</h6>';
                $sql = mysqli_query($link, "SELECT * FROM detail_shorttest, questtion, shorttest, media WHERE detail_shorttest.id_question = questtion.id_question AND detail_shorttest.id_shortTest = shorttest.id_shortTest AND media.id_media = questtion.id_media AND questtion.id_categoryquestion = '" . $_SESSION['id'] . "' AND shorttest.id_shortTest = '" . $_SESSION['id_test'] . "'");
                while ($result = mysqli_fetch_array($sql)) {
                ?>
                    <div class="d-flex flex-column mb-2" id="question_<?php echo $result['id_question'] ?>">
                        <h5 class="ml-5" id="<?php echo $result['id_question'] ?>">Câu hỏi <?php echo $index ?></h5>
                        <div class="d-flex flex-column mx-auto">
                            <h5><?php echo $result['name_question'] ?></h5>
                        </div>
                        <form class="ml-5 pl-5 mb-4">
                            <fieldset id="group' . $index . '" class="d-flex flex-column" style="width:80%;">
                                <label class="A ml-5"><input type="radio" value="" name="group<?php echo $index ?>" class="A" style="margin-right:20px;">A. <?php echo $result['option1'] ?></label>
                                <label class="B ml-5"><input type="radio" value="" name="group<?php echo $index ?>" class="B" style="margin-right:20px;">B. <?php echo $result['option2'] ?></label>
                                <label class="C ml-5"><input type="radio" value="" name="group<?php echo $index ?>" class="C" style="margin-right:20px;">C. <?php echo $result['option3'] ?></label>
                                <label class="C ml-5"><input type="radio" value="" name="group<?php echo $index ?>" class="D" style="margin-right:20px;">D. <?php echo $result['option4'] ?></label>
                                <input type="hidden" value="<?php echo $result['option_correct'] ?>" class="1" />
                            </fieldset>
                        </form>
                        <div id="answer_correct">
                            <div class="answer mx-auto" style="padding:20px; background-color:#ff9; display:none" id="<?php echo $result['id_question'] ?>">
                                <h6>Lời giải:</h6>
                                <h6><?php echo $result['answer'] ?></h6>
                            </div>
                        </div>
                    </div>
                <?php
                    $index++;
                }
            } else if ($_SESSION['id'] == 7) {
                $index = 1;
                $res = mysqli_query($link, "SELECT * FROM questtion, media WHERE media.id_media = questtion.id_media AND questtion.id_categoryquestion = '" . $_SESSION['id'] . "' AND media.name_media = 'Part 7 - " . $_SESSION['id_test'] . "'");
                $row = mysqli_fetch_array($res);
                echo '<h6 class="mb-4 w-75 mx-auto">' . $row['description_media'] . '</h6>';
                $sql = mysqli_query($link, "SELECT * FROM detail_shorttest, questtion, shorttest, media WHERE detail_shorttest.id_question = questtion.id_question AND detail_shorttest.id_shortTest = shorttest.id_shortTest AND media.id_media = questtion.id_media AND questtion.id_categoryquestion = '" . $_SESSION['id'] . "' AND shorttest.id_shortTest = '" . $_SESSION['id_test'] . "'");
                while ($result = mysqli_fetch_array($sql)) {
                ?>
                    <div class="d-flex flex-column mb-2" id="question_<?php echo $result['id_question'] ?>">
                        <h5 class="ml-5" id="<?php echo $result['id_question'] ?>">Câu hỏi <?php echo $index ?></h5>
                        <div class="d-flex flex-column mx-auto">
                            <h5><?php echo $result['name_question'] ?></h5>
                        </div>
                        <form class="ml-5 pl-5 mb-4">
                            <fieldset id="group' . $index . '" class="d-flex flex-column" style="width:80%;">
                                <label class="A ml-5"><input type="radio" value="" name="group<?php echo $index ?>" class="A" style="margin-right:20px;">A. <?php echo $result['option1'] ?></label>
                                <label class="B ml-5"><input type="radio" value="" name="group<?php echo $index ?>" class="B" style="margin-right:20px;">B. <?php echo $result['option2'] ?></label>
                                <label class="C ml-5"><input type="radio" value="" name="group<?php echo $index ?>" class="C" style="margin-right:20px;">C. <?php echo $result['option3'] ?></label>
                                <label class="C ml-5"><input type="radio" value="" name="group<?php echo $index ?>" class="D" style="margin-right:20px;">D. <?php echo $result['option4'] ?></label>
                                <input type="hidden" value="<?php echo $result['option_correct'] ?>" class="1" />
                            </fieldset>
                        </form>
                        <div id="answer_correct">
                            <div class="answer mx-auto" style="padding:20px; background-color:#ff9; display:none" id="<?php echo $result['id_question'] ?>">
                                <h6>Lời giải:</h6>
                                <h6><?php echo $result['answer'] ?></h6>
                            </div>
                        </div>
                    </div>
                <?php
                    $index++;
                }
            } else if ($_SESSION['id'] == 8) {
                $index = 1;
                $sql = mysqli_query($link, "SELECT * FROM detail_shorttest, questtion, shorttest, media WHERE detail_shorttest.id_question = questtion.id_question AND detail_shorttest.id_shortTest = shorttest.id_shortTest AND media.id_media = questtion.id_media AND questtion.id_categoryquestion = '" . $_SESSION['id'] . "' AND shorttest.id_shortTest = '" . $_SESSION['id_test'] . "'");
                while ($result = mysqli_fetch_array($sql)) {
                ?>
                    <div class="d-flex flex-column mb-2" id="question_<?php echo $result['id_question'] ?>">
                        <h5 class="ml-5" id="<?php echo $result['id_question'] ?>">Picture <?php echo $index ?></h5>
                        <div class="d-flex flex-column mx-auto">
                            <img src="<?php echo $result['name_question'] ?>" alt="" style="width:450px">
                        </div>
                        <div class="my-5">
                            <div id="controls" class="mb-2 d-flex justify-content-center">
                                <button id="recordButton" class="btn btn-success mr-5" style="font-size:24px">Ghi âm</button>
                                <button id="pauseButton" disabled class="btn btn-primary mr-5" style="font-size:24px">Tạm ngừng</button>
                                <button id="stopButton" disabled class="btn btn-danger" style="font-size:24px">Dừng lại</button>
                            </div>
                            <div id="formats" class="mb-3" style="font-weight:bolder; font-size:24px"></div>
                            <h5 class="mb-3"><strong>Bản nghe</strong></h5>
                            <ol id="recordingsList"></ol>
                            <script src="../resources/js/recorder.js"></script>
                            <script src="../resources/js/app.js"></script>
                        </div>
                        <div id="answer_correct">
                            <div class="answer mx-auto mb-5" style="padding:20px; background-color:#ff9; display:none" id="<?php echo $result['id_question'] ?>">
                                <h6>Lời giải:</h6>
                                <h6><?php echo $result['answer'] ?></h6>
                            </div>
                        </div>
                    </div>
                <?php
                    $index++;
                }
            } else if ($_SESSION['id'] == 9) {
                $index = 1;
                $sql = mysqli_query($link, "SELECT * FROM detail_shorttest, questtion, shorttest, media WHERE detail_shorttest.id_question = questtion.id_question AND detail_shorttest.id_shortTest = shorttest.id_shortTest AND media.id_media = questtion.id_media AND questtion.id_categoryquestion = '" . $_SESSION['id'] . "' AND shorttest.id_shortTest = '" . $_SESSION['id_test'] . "'");
                while ($result = mysqli_fetch_array($sql)) {
                ?>
                    <div class="d-flex flex-column mb-2" id="question_<?php echo $result['id_question'] ?>">
                        <h5 class="ml-5" id="<?php echo $result['id_question'] ?>">Câu hỏi <?php echo $index ?></h5>
                        <div class="d-flex flex-column mx-auto">
                            <h5><?php echo $result['name_question'] ?></h5>
                        </div>
                        <div class="mt-5">
                            <div id="controls" class="mb-3 d-flex justify-content-center">
                                <button id="recordButton" class="btn btn-success mr-5" style="font-size:24px">Ghi âm</button>
                                <button id="pauseButton" disabled class="btn btn-primary mr-5" style="font-size:24px">Tạm ngừng</button>
                                <button id="stopButton" disabled class="btn btn-danger" style="font-size:24px">Dừng lại</button>
                            </div>
                            <div id="formats" class="mb-3" style="font-weight:bolder; font-size:24px"></div>
                            <h5 class="mb-3"><strong>Bản nghe</strong></h5>
                            <ol id="recordingsList"></ol>
                            <script src="../resources/js/recorder.js"></script>
                            <script src="../resources/js/app.js"></script>
                        </div>
                        <div id="answer_correct">
                            <div class="answer mx-auto" style="padding:20px; background-color:#ff9; display:none" id="<?php echo $result['id_question'] ?>">
                                <h6>Lời giải:</h6>
                                <h6><?php echo $result['answer'] ?></h6>
                            </div>
                        </div>
                    </div>
                <?php
                    $index++;
                }
            } else if ($_SESSION['id'] == 10) {
                $index = 1;
                echo '<h3>Yêu cầu:</h3> <h5 style="width:80%; text-align: center; margin:0 auto; margin-bottom:50px;">Thí sinh phải viết một câu hoàn thiện bằng tiếng Anh dựa trên những gì thí sinh quan sát được từ từng được bức hình cho sẵn. Cùng với bức ảnh, thí sinh được cung cấp thêm 2 từ hoặc cụm từ gợi ý mà bắt buộc phải có mặt trong câu văn. Thí sinh cần lưu ý rằng các từ và cụm từ này có thể được đặt ở bất cứ vị trí nào trong câu miễn là câu văn có sự xuất hiện của chúng. Bên cạnh đó, thí sinh hoàn toàn có thể thay đổi loại từ của những từ và cụm từ cho sẵn miễn là câu văn có ý nghĩa. </h5>';
                $sql = mysqli_query($link, "SELECT * FROM detail_shorttest, questtion, shorttest, media WHERE detail_shorttest.id_question = questtion.id_question AND detail_shorttest.id_shortTest = shorttest.id_shortTest AND media.id_media = questtion.id_media AND questtion.id_categoryquestion = '" . $_SESSION['id'] . "' AND shorttest.id_shortTest = '" . $_SESSION['id_test'] . "'");
                while ($result = mysqli_fetch_array($sql)) {
                ?>
                    <div class="d-flex flex-column mb-5" id="question_<?php echo $result['id_question'] ?>">
                        <h5 class="ml-5" id="<?php echo $result['id_question'] ?>">Câu hỏi <?php echo $index ?></h5>
                        <div class="d-flex flex-column mx-auto">
                            <img src="<?php echo $result['name_question'] ?>" alt="" style="width: 80%; margin:0 auto;">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label" style="font-weight: bolder;">Phần trả lời</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div id="answer_correct">
                            <div class="answer mx-auto" style="padding:20px; background-color:#ff9; display:none" id="<?php echo $result['id_question'] ?>">
                                <h6>Lời giải:</h6>
                                <h6><?php echo $result['answer'] ?></h6>
                            </div>
                        </div>
                    </div>
                <?php
                    $index++;
                }
            } else if ($_SESSION['id'] == 11) {
                $index = 1;

                $sql = mysqli_query($link, "SELECT * FROM detail_shorttest, questtion, shorttest, media WHERE detail_shorttest.id_question = questtion.id_question AND detail_shorttest.id_shortTest = shorttest.id_shortTest AND media.id_media = questtion.id_media AND questtion.id_categoryquestion = '" . $_SESSION['id'] . "' AND shorttest.id_shortTest = '" . $_SESSION['id_test'] . "'");
                while ($result = mysqli_fetch_array($sql)) {
                ?>
                    <div class="d-flex flex-column mb-5" id="question_<?php echo $result['id_question'] ?>">
                        <h5 class="ml-5" id="<?php echo $result['id_question'] ?>">Đề thi <?php echo $index ?></h5>
                        <div class="d-flex flex-column mx-auto">
                            <h5><?php echo $result['name_question'] ?></h5>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label" style="font-weight: bolder;">Phần trả lời</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
                        </div>
                        <div id="answer_correct">
                            <div class="answer mx-auto" style="padding:20px; background-color:#ff9; display:none" id="<?php echo $result['id_question'] ?>">
                                <h6>Lời giải:</h6>
                                <h6 style="font-size: 22px;"><?php echo $result['answer'] ?></h6>
                            </div>
                        </div>
                    </div>
                <?php
                    $index++;
                }
            } else if ($_SESSION['id'] == 12) {
                $index = 1;
                $sql = mysqli_query($link, "SELECT * FROM detail_shorttest, questtion, shorttest, media WHERE detail_shorttest.id_question = questtion.id_question AND detail_shorttest.id_shortTest = shorttest.id_shortTest AND media.id_media = questtion.id_media AND questtion.id_categoryquestion = '" . $_SESSION['id'] . "' AND shorttest.id_shortTest = '" . $_SESSION['id_test'] . "'");
                while ($result = mysqli_fetch_array($sql)) {
                ?>
                    <div class="d-flex flex-column mb-5" id="question_<?php echo $result['id_question'] ?>">
                        <h5 class="ml-5" id="<?php echo $result['id_question'] ?>">Đề thi <?php echo $index ?></h5>
                        <div class="d-flex flex-column mx-auto">
                            <h5><?php echo $result['name_question'] ?></h5>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label" style="font-weight: bolder;">Phần trả lời</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
                        </div>
                        <div id="answer_correct">
                            <div class="answer mx-auto" style="padding:20px; background-color:#ff9; display:none" id="<?php echo $result['id_question'] ?>">
                                <h6>Lời giải:</h6>
                                <h6 style="font-size: 22px;"><?php echo $result['answer'] ?></h6>
                            </div>
                        </div>
                    </div>
            <?php
                    $index++;
                }
            }
            ?>
        </div>
    </div>
</div>
<div class="fixed-bottom bg-light p-3 d-flex justify-content-around">
    <div class="container d-flex justify-content-center align-items-center" style="flex-wrap: wrap;">
        <?php
        $index = 1;
        $res = mysqli_query($link, "SELECT * FROM shorttest WHERE id_categoryquestion = '" . $_SESSION['id'] . "'");
        while ($row = mysqli_fetch_array($res)) {
            $_SESSION['id_test'] = $row['id_shortTest'];
        ?>
            <div class="mx-2 mb-2">
                <a href="./test.php?id_test=<?php echo $_SESSION['id_test'] ?>" class="text-dark" style="text-decoration: none;" id="btnExam">
                    <h1 id="idexam" style="display: none;"></h1>
                    <input type="button" class="btn btn-primary" value="<?php echo $row['name_Test'] ?>" id="btnTest" name='btnTest' style="width:150px; box-shadow: rgb(16 18 12 / 50%) 2px 3px 12px 0px;width:auto" />
                </a>
            </div>
        <?php
            $index++;
        }
        ?>
    </div>
    <div aria-label="" id="group_button" class="container">
        <div class="d-flex justify-content-around align-items-center">
            <input type="button" class="btn btn-success" value="XEM KẾT QUẢ" id="btnFinish" name='btnFinish' style="width:150px; box-shadow: rgb(16 18 12 / 50%) 2px 3px 12px 0px;" />
            <input type="button" class="btn btn-secondary" value="THI LẠI" id="btnRefresh" name='btnRefresh' style="width:150px; box-shadow: rgb(16 18 12 / 50%) 2px 3px 12px 0px;" />
            <a href="./index.php" class="btn btn-danger" id="btnClose" style="width:150px; box-shadow: rgb(16 18 12 / 50%) 2px 3px 12px 0px;">THOÁT</a>
        </div>
    </div>
</div>
<script>
    $('#btnFinish').click(function() {
        let mark = 0;
        let count = 0;
        $('#myQuestion div').each(function(k, v) {
            let id_answer = $(v).find('.answer').attr('id');
            //lấy id của câu hỏi
            let id = $(v).find('h5').attr('id');
            //Lấy đáp án đúng
            let answer = $(v).find('form fieldset input[type="hidden"]').val();
            //lấy lựa chọn của người dùng
            let choice = $(v).find('form fieldset input[type="radio"]:checked').attr('class');
            if (choice == answer && id != undefined) {
                $('#question_' + id + ' > form > fieldset > label.' + answer).css("background-color", "#66FF00");
            } else {
                $('#question_' + id + ' > form > fieldset > label.' + choice).css("background-color", "#FF3300");
            }
            if (id != undefined) {
                $('#question_' + id + ' > form > fieldset > label.' + answer).css("background-color", "#66FF00");
                $('#question_' + id + '> #answer_correct > #' + id_answer).css("display", "block");
            }
        });
        $('html, body').animate({
            scrollTop: 0
        }, 'fast');
    });
    $('#btnRefresh').click(function() {
        location.reload();
    });
</script>