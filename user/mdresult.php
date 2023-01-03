<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<div class="modal fade show" id="modalresult" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 750px">
        <div class="modal-content" style="width: 750px">
            <div class="modal-header w-100 justify-content-center">
                <h5 class="modal-title" id="exampleModalLabel">Điểm thi</h5>
            </div>
            <div class="modal-body">
                <table id="dtBasicExample" class="table table-bordered table-sm container" cellspacing="0" style="width:100%">
                    <tbody>
                        <tr class="py-3">
                            <th rowspan="2" class="th-sm pt-2 pl-3" style="width: 40%; height:70px;">
                                <h4>Điểm thi:</h4>
                            </th>
                            <th class="th-sm pt-2 pl-3" style="width: 40%; height:70px;">
                                <h4>Listening</h4>
                            </th>
                            <th class="th-sm pt-2 pl-3" style="width: 40%; height:70px;">
                                <h4>Reading</h4>
                            </th>
                        </tr>
                        <tr class="py-3">
                            <td class="th-sm pt-2 pl-3" style="width: 40%; height:70px;">
                                <h4 id="score1"></h4>
                            </td>
                            <td class="th-sm pt-2 pl-3">
                                <h4 id="score2"></h4>
                            </td>
                        </tr>
                        <tr class="py-3">
                            <th class="th-sm pt-2 pl-3" style="width: 40%; height:70px;">
                                <h4>Số câu:</h4>
                            </th>
                            <td class="th-sm pt-2 pl-3">
                                <h4 id="number1"></h4>
                            </td>
                            <td class="th-sm pt-2 pl-3">
                                <h4 id="number2"></h4>
                            </td>
                        </tr>
                        <tr class="py-3">
                            <th class="th-sm pt-2 pl-3" style="width: 40%; height:70px;">
                                <h4>Nhận xét:</h4>
                            </th>
                            <td colspan="2" class="th-sm pt-2 pl-3">
                                <h4 id="description" class=""></h4>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="alert alert-success d-none" id="alert">
                Success!
            </div>
            <div class="modal-footer  justify-content-around">
                <a href="./showexam.php"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btnClose">Thi lại</button></a>
                <button type="button" class="btn btn-primary" id="btnSubmit">Xem lời giải</button>
            </div>
        </div>
    </div>
</div>