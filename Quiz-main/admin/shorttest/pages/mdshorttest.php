<div class="modal fade" id="modalexam" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm bài tập</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="basic-form">
                    <input type="hidden" id="txtExamid" value="">
                    <div class="form-group mb-3">
                        <label for="">Tên bài tập</label>
                        <input for="input" name="input" class="form-control" id="nameExam" placeholder="Tên bài tập:" required></input>
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Loại câu hỏi</label>
                        <select class="form-select" aria-label="Default select example" id="categoryExam_selected">
                            <option>Lựa chọn loại câu hỏi</option>
                            <?php include('../master/dbconnect.php') ?>;
                            <?php
                            $sql = $conn->prepare("SELECT * FROM category_question");
                            $sql->execute();
                            while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {
                                echo '<option value="' . $result['id_categoryquestion'] . '" id="select_categoryExam">' . $result['name_categoryquestion'] . '</option>';
                            }
                            ?>
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
        let nameExam = $('#nameExam').val().trim();
        let categoryExam = $('#categoryExam_selected :selected').text();
        let categoryExam_id = $('#categoryExam_selected :selected').val();

        if (nameExam.length == 0) {
            alert('Vui lòng nhập đầy đủ');
        }

        let id = $('#txtExamid').val();

        if (id.length == 0) {
            $.ajax({
                url: '../master/add.php',
                type: 'post',
                data: {
                    id: id,
                    nameExam: nameExam,
                    categoryExam: categoryExam,
                    categoryExam_id: categoryExam_id
                },
                success: function(data) {
                    alert(data);

                    $('#nameExam').val('');

                    location.reload();
                }
            });
        } else {
            $.ajax({
                url: '../master/update.php',
                type: 'post',
                data: {
                    id: id,
                    nameExam: nameExam,
                    categoryExam: categoryExam,
                    categoryExam_id: categoryExam_id
                },
                success: function(data) {
                    alert(data);

                    $('#nameExam').val('');

                    location.reload();
                }
            });
        }

    });
</script>