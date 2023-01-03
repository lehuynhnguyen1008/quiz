<div class="modal fade" id="modalexam" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm đề thi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="basic-form">
                    <input type="hidden" id="txtExamid" value="">
                    <div class="form-group mb-3">
                        <label for="">Tên đề thi</label>
                        <input for="input" name="input" class="form-control" id="nameExam" placeholder="Tên đề thi:" required></input>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Số câu</label>
                        <input for="input" name="input" class="form-control" id="numberExam" placeholder="Số câu:" required></input>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Thời gian</label>
                        <input for="input" name="input" class="form-control" id="timeExam" placeholder="Thời gian:" required></input>
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Loại đề thi</label>
                        <select class="form-select" aria-label="Default select example" id="categoryExam_selected">
                            <option>Lựa chọn loại đề thi</option>
                            <?php include('../master/dbconnect.php') ?>;
                            <?php
                            $sql = $conn->prepare("SELECT * FROM category_exam");
                            $sql->execute();
                            while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {
                                echo '<option value="' . $result['id_categoryexam'] . '" id="select_categoryExam">' . $result['name_categoryexam'] . '</option>';
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
        let numberExam = $('#numberExam').val().trim();
        let timeExam = $('#timeExam').val().trim();
        let categoryExam = $('#categoryExam_selected :selected').text();
        let categoryExam_id = $('#categoryExam_selected :selected').val();

        if (nameExam.length == 0 || numberExam.length == 0 || timeExam.length == 0) {
            alert('Vui lòng nhập đầy đủ');
        }

        let id = $('#txtExamid').val();

        if (id.length == 0) {
            $.ajax({
                url: '../master/add_exam.php',
                type: 'post',
                data: {
                    id: id,
                    nameExam: nameExam,
                    numberExam: numberExam,
                    timeExam: timeExam,
                    categoryExam: categoryExam,
                    categoryExam_id: categoryExam_id
                },
                success: function(data) {
                    alert(data);

                    $('#nameExam').val('');
                    $('#numberExam').val('');
                    $('#timeExam').val('');

                    location.reload();
                    $('#btnSearch').click();
                }
            });
        } else {
            $.ajax({
                url: '../master/update.php',
                type: 'post',
                data: {
                    id: id,
                    nameExam: nameExam,
                    numberExam: numberExam,
                    timeExam: timeExam,
                    categoryExam: categoryExam,
                    categoryExam_id: categoryExam_id
                },
                success: function(data) {
                    alert(data);

                    $('#nameExam').val('');
                    $('#numberExam').val('');
                    $('#timeExam').val('');

                    location.reload();
                    $('#btnSearch').click();
                }
            });
        }

    });
</script>