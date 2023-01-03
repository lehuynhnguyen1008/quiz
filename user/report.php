<?php include('../pages/head.php') ?>
<div class="container" id="pdf">
    <div class="row">
        <div class="col-md-10 offset-md-1 main">
            <div class="col-md-12">
                <?php
                include('../admin/dbconnect.php');
                $sql = $conn->prepare("SELECT * FROM historyexam, account, exam WHERE historyexam.account_id = account.account_id AND exam.id_exam = historyexam.id_exam AND historyexam.id_historyexam = '" . $_GET['id'] . "'");
                $sql->execute();
                while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {
                ?>
                    <div class="row mb-2 d-flex">
                        <div class="col-md-12 text-xs-center">
                            <h2 class="text-uppercase" style="color: #F81D2D;"><?php echo $result['name_exam'] ?></h2>
                        </div>
                        <div class="col-md-12 text-xs-center">
                            <h6 class="text-right">Ngày thi: <?php echo $result['resultTime'] ?></h6>
                        </div>
                    </div>
                    <div>
                        <table class="table table-bordered">
                            <tr class="text-center" style="height: 80px;">
                                <th style="padding-top:30px;">
                                    <h6>TÊN THÀNH VIÊN</h6>
                                </th>
                                <th style="padding-top:30px;">
                                    <h6>LISTENING</h6>
                                </th>
                                <th style="width: 50%;padding-top:30px;">
                                    <h6>NHẬN XÉT</h6>
                                </th>
                                <th style="padding-top:30px;">
                                    <h6>TỔNG ĐIỂM</h6>
                                </th>
                            </tr>
                            <tr class="text-center">
                                <td rowspan="3" style="padding-top:50px;"><?php echo $result['name'] ?></td>
                                <td style="height: 60px;padding-top:20px;"><?php echo $result['mark'] ?></td>
                                <td rowspan="3" style="padding-top:50px;"><?php echo $result['comment'] ?></td>
                                <td rowspan="3" style="padding-top:50px;"><?php echo ($result['mark'] + $result['mark2']) ?></td>
                            </tr>
                            <tr class="text-center">
                                <th style="height: 80px;padding-top:30px;">
                                    <h6>READING</h6>
                                </th>
                            </tr>
                            <tr class="text-center">
                                <td style="height: 60px;padding-top:20px;"><?php echo $result['mark2'] ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="d-flex justify-content-end">
                        <input type="submit" class="btn btn-success text-left" name="export" id="export" value="XUẤT PDF">
                    </div>
                <?php
                }
                ?>
                <br />

            </div>
        </div>
    </div>
</div>
<style>
    .main {
        background: #ffffff;
        border-bottom: 15px solid #F81D2D;
        border-top: 15px solid #1E1F23;
        margin-top: 30px;
        margin-bottom: 30px;
        padding: 40px 30px !important;
        position: relative;
        box-shadow: 0 1px 21px #808080;
        font-size: 10px;
    }

    .main thead {
        background: #1E1F23;
        color: #fff;
    }
</style>
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
<script>
    (function() {
        var
            form = $('#pdf'),
            cache_width = form.width(),
            a4 = [595.28, 950]; // for a4 size paper width and height  

        $('#export').on('click', function() {
            $('#pdf').scrollTop(0);
            createPDF();
        });
        //create pdf  
        function createPDF() {
            getCanvas().then(function(canvas) {
                var
                    img = canvas.toDataURL("image/png"),
                    doc = new jsPDF({
                        unit: 'px',
                        format: 'a3'
                    });
                doc.addImage(img, 'JPEG', 20, 20);
                doc.save('file-pdf.pdf');
                form.width(cache_width);
            });
        }

        // create canvas object  
        function getCanvas() {
            form.width((a4[0] * 1.85) - 40).css('max-width', 'none');
            return html2canvas(form, {
                imageTimeout: 2000,
                removeContainer: true
            });
        }

    }());
</script>
