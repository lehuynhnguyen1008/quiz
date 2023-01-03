<div class="modal fade" id="modalmedia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm Media (Audio, Paragraph)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="basic-form">
                    <input type="hidden" id="txtMediaId" value="">
                    <div class="form-group mb-3">
                        <label for="">Tên Media (Audio, Paragraph)</label>
                        <input for="input" name="input" class="form-control" id="texaMedia" placeholder="Media (Audio, Paragraph):" required></input>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Đường dẫn hoặc Đoạn Văn</label>
                        <input for="input" name="input" style="height:100px;" class="form-control" id="texaDesciption" placeholder="Đường dẫn hoặc Đoạn Văn:" required></input>
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
    $('#btnClose').click(function() {
        location.reload();
    });
    $('#btnSubmit').click(function() {
        let name_media = $('#texaMedia').val().trim();
        let description = $('#texaDesciption').val().trim();


        if (name_media.length == 0 || description.length == 0) {
            alert('Vui lòng nhập!');
        }
        let id = $('#txtMediaId').val();

        if (id.length == 0) {
            $.ajax({
                url: '../master/add.php',
                type: 'post',
                data: {
                    name_media: name_media,
                    description: description
                },
                success: function(data) {
                    alert(data);

                    $('#texaMedia').val('');
                    $('#texaDesciption').val('');

                    $('#btnSearch').click();
                }
            });
        } else {
            $.ajax({
                url: '../master/update.php',
                type: 'post',
                data: {
                    id: id,
                    name_media: name_media,
                    description: description
                },
                success: function(data) {
                    alert(data);

                    $('#texaMedia').val('');
                    $('#texaDesciption').val('');

                    location.reload();
                    $('#btnSearch').click();
                }
            });
        }

    });
</script>