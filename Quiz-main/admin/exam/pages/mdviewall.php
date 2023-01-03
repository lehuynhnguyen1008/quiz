<div class="modal fade" id="modalviewallquestion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm câu hỏi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="basic-form">
                    <input type="hidden" id="txtQuestionId" value="">
                    <div class="form-group mt-3">
                        <label for="">Đề thi</label>
                        <select disabled class="form-select" aria-label="Default select example" id="exam_selected">
                            <?php include('../../dbconnect.php') ?>;
                            <?php
                            $sql = $conn->prepare("SELECT * FROM detail_exam,exam WHERE exam.id_exam = ' ". $_GET['id_exam'] ." '");
                            $sql->execute();
                            while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {
                                echo '<option value="'.$result['id_exam'].'" id="select_category">' .$result['name_exam']. '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Loại câu hỏi</label>
                        <select class="form-select" aria-label="Default select example" id="category_selected" name="category_selected">
                            <option value="">Lựa chọn loại câu hỏi</option>
                            <?php include('../../dbconnect.php') ?>;
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
                        <label for="">Câu hỏi</label>
                        <select class="form-select" aria-label="Default select example" id="question_selected">
                            
                        </select>
                    </div>
                </form>
            </div>
            <div class="alert alert-success d-none" id="alert">
                Success!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btnClose">Đóng</button>
                <button type="button" class="btn btn-primary" id="btnSubmit">Xác nhận</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('#btnSubmit').click(function() {
        let exam_name = $('#exam_selected :selected').text();
        let exam_id = $('#exam_selected :selected').val();
        let category_question = $('#category_selected :selected').text();
        let category_id = $('#category_selected :selected').val();
        let question_name = $('#question_selected :selected').text();
        let question_id = $('#question_selected :selected').val();
        if (category_id.length == 0 || question_id.length == 0) {
            alert('Vui lòng lựa chọn');
            return;
        }

        let questionId = $('#txtQuestionId').val();

        if (questionId.length == 0) {
            $.ajax({
                url: '../../questionofexam/add.php',
                type: 'post',
                data: {
                    exam_name: exam_name,
                    exam_id: exam_id,
                    category_question: category_question,
                    category_id: category_id,
                    question_name: question_name,
                    question_id: question_id
                },
                success: function(data) {
                    alert(data);
                    location.reload();
                }
            });
        } else {
            $.ajax({
                url: '../../questionofexam/update.php',
                type: 'post',
                data: {
                    exam_name: exam_name,
                    exam_id: exam_id,
                    category_question: category_question,
                    category_id: category_id,
                    question_name: question_name,
                    question_id: question_id
                },
                success: function(data) {
                    alert(data);
                    location.reload();
                }
            });
        }

    });
    jQuery(document).ready(function($){
        $("#category_selected").change(function(event){
            let id_categoryquestion = $('#category_selected :selected').val();
            console.log(id_categoryquestion);
            $.post('./questioncombobox.php',{"id_categoryquestion":id_categoryquestion},function(data){
                $('#question_selected').html(data);
            });
        });
    });
</script>