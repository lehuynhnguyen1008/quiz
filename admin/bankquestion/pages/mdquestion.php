<div class="modal fade" id="modalquestion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm câu hỏi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <div class="modal-body">
                <form id="basic-form">
                    <input type="hidden" id="txtQuestionId" value="">
                    <div class="form-group mb-3">
                        <label for="">Câu hỏi</label>
                        <input for="input" name="input" class="form-control" id="texaQuestion" placeholder="Câu hỏi:" required></input>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Đáp án A</label>
                        <input for="input" name="input" class="form-control" id="texaOptionA" placeholder="Đáp án A:" required></input>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Đáp án B</label>
                        <input for="input" name="input" class="form-control" id="texaOptionB" placeholder="Đáp án B:" required></input>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Đáp án C</label>
                        <input for="input" name="input" class="form-control" id="texaOptionC" placeholder="Đáp án C:" required></input>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Đáp án D</label>
                        <input for="input" name="input" class="form-control" id="texaOptionD" placeholder="Đáp án D:" required></input>
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Lựa chọn đáp án đúng</label>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="radio">
                                    <label><input type="radio" name="optradio" id="optradioA">Đáp án A</label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="radio">
                                    <label><input type="radio" name="optradio" id="optradioB">Đáp án B</label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="radio">
                                    <label><input type="radio" name="optradio" id="optradioC">Đáp án C</label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="radio">
                                    <label><input type="radio" name="optradio" id="optradioD">Đáp án D</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Lời giải</label>
                        <textarea class="form-control" id="texaAnswer" placeholder="Lời giải:"></textarea>
                    </div>

                    <div class="form-group mt-3">
                        <label for="">Loại câu hỏi</label>
                        <select class="form-select" aria-label="Default select example" id="category_selected">
                            <option>Lựa chọn loại câu hỏi</option>
                            <?php include('../master/dbconnect.php') ?>;
                            <?php
                            $sql = $conn->prepare("SELECT * FROM category_question");
                            $sql->execute();
                            while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {
                                echo '<option value="' . $result['id_categoryquestion'] . '" id="select_category">' . $result['name_categoryquestion'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Loại phương tiện</label>
                        <select class="form-select" aria-label="Default select example" id="media_selected">
                            <option>Lựa chọn phương tiện</option>
                            <?php include('../master/dbconnect.php') ?>;
                            <?php
                            $sql2 = $conn->prepare("SELECT * FROM media");
                            $sql2->execute();
                            while ($result2 = $sql2->fetch(PDO::FETCH_ASSOC)) {
                                echo '<option value="' . $result2['id_media'] . '" id="select_media">' . $result2['name_media'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </form>
                <div class="modal-footer justify-content-around">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btnClose">Đóng</button>
                    <button type="button" class="btn btn-primary" id="btnSubmit">Xác nhận</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('#btnClose').click(function() {
        location.reload();
    });
    $('#btnSubmit').click(function() {
        let question = $('#texaQuestion').val().trim();
        let option_a = $('#texaOptionA').val().trim();
        let option_b = $('#texaOptionB').val().trim();
        let option_c = $('#texaOptionC').val().trim();
        let option_d = $('#texaOptionD').val().trim();
        let option_correct = $('#optradioA').is(':checked') ? 'A' : $('#optradioB').is(':checked') ? 'B' : $('#optradioC').is(':checked') ? 'C' : $('#optradioD').is(':checked') ? 'D' : '';
        let answer = $('#texaAnswer').val().trim();
        let category_question = $('#category_selected :selected').text();
        let category_id = $('#category_selected :selected').val();
        let name_media = $('#media_selected :selected').text();
        let id_media = $('#media_selected :selected').val();

        console.log(question, option_a, option_b, option_c, option_d, option_correct, answer, category_question, category_id, id_media);


        if (option_correct.length == 0) {
            alert('Vui lòng chọn đáp án đúng');
            return;
        }

        let questionId = $('#txtQuestionId').val();


        if (questionId.length == 0) {
            $.ajax({
                url: '../master/add_question.php',
                type: 'post',
                data: {
                    question: question,
                    option_a: option_b,
                    option_b: option_b,
                    option_c: option_c,
                    option_d: option_d,
                    option_correct: option_correct,
                    answer: answer,
                    category_question: category_question,
                    category_id: category_id,
                    name_media: name_media,
                    id_media: id_media
                },
                success: function(data) {
                    alert(data);

                    $('#texaQuestion').val('');
                    $('#texaOptionA').val('');
                    $('#texaOptionB').val('');
                    $('#texaOptionC').val('');
                    $('#texaOptionD').val('');
                    $('#texaAnswer').val('');

                    $('#optradioA').prop('checked', false);
                    $('#optradioC').prop('checked', false);
                    $('#optradioD').prop('checked', false);
                    $('#optradioB').prop('checked', false);

                    $('#btnSearch').click();
                }
            });
        } else {
            $.ajax({
                url: '../master/update.php',
                type: 'post',
                data: {
                    id: questionId,
                    question: question,
                    option_a: option_a,
                    option_b: option_b,
                    option_c: option_c,
                    option_d: option_d,
                    option_correct: option_correct,
                    answer: answer,
                    category_question: category_question,
                    category_id: category_id,
                    name_media: name_media,
                    id_media: id_media
                },
                success: function(data) {
                    alert(data);

                    $('#texaQuestion').val('');
                    $('#texaOptionA').val('');
                    $('#texaOptionB').val('');
                    $('#texaOptionC').val('');
                    $('#texaOptionD').val('');
                    $('#texaAnswer').val('');

                    $('#optradioA').prop('checked', false);
                    $('#optradioC').prop('checked', false);
                    $('#optradioD').prop('checked', false);
                    $('#optradioB').prop('checked', false);

                    location.reload();
                    $('#btnSearch').click();
                }
            });
        }
    });
</script>