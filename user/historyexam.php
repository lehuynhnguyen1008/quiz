<?php session_start(); ?>
<?php include('../pages/head.php'); ?>

<?php include('../pages/nav.php'); ?>
<?php
// echo $_SESSION['name'];
// echo $_SESSION['account_id'];
include('../admin/dbconnect.php');

$sql = $conn->prepare("SELECT * FROM historyexam, account, exam WHERE historyexam.account_id = account.account_id AND exam.id_exam = historyexam.id_exam AND historyexam.account_id = '" . $_SESSION['account_id'] . "'ORDER BY id_historyexam DESC");
$sql->execute();
$data = '';
$data .= '<div class="w-100 bg-light" style="margin-top: 20px;height: 120px;text-align: center;padding-top: 50px;">';
$data .= '<div class="container">';
$data .= '<h2 class="text-dark">Lịch sử thi</h2>';
$data .= '</div>';
$data .= '</div>';
$data .= '<div class="container">';
$data .= '<table id="question_data_table" class="table align-items-center mb-0" style="margin-top:20px">';
$data .= '<thead>';
$data .= '<tr class="bg-light">';
$data .= '<th class="text-uppercase text-dark text-xs font-weight-bolder" style="width: 5%">STT</th>';
$data .= '<th class="text-uppercase text-dark text-xs font-weight-bolder" scope="col">Tên thành viên</th>';
$data .= '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Điểm Listening</th>';
$data .= '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Điểm Reading</th>';
$data .= '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Số câu';
$data .= '</th>';
$data .= '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder" style="width: 20%">Nhận xét</th>';
$data .= '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Đề thi';
$data .= '</th>';
$data .= '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Thời gian thi';
$data .= '</th>';
$data .= '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Ngày thi';
$data .= '</th>';
$data .= '<th class="text-dark text-center">Thao tác</th>';
$data .= '</tr>';
$data .= '</thead>';
$data .= '<tbody id="historyexam">';
$index = 1;
while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {
    $data .= '<tr id=' . $result['id_historyexam'] . '>';
    $data .= '<td>';
    $data .= '<div class="d-flex px-4 py-1">';
    $data .= '<span>' . $index . '</span>';
    $data .= '</div>';
    $data .= '</td>';
    $data .= '<td>';
    $data .= '<div class="d-flex flex-column justify-content-center px-2 py-1">';
    $data .= '<h6>' . $result["name"] . '</h6>';
    $data .= '</div>';
    $data .= '</td>';
    $data .= '<td class="align-center text-center text-sm">';
    $data .= '<h7 class="mb-0 text-sm">' . $result['mark'] . '</h7>';
    $data .= '</td>';
    $data .= '<td class="align-center text-center text-sm">';
    $data .= '<h7 class="mb-0 text-sm">' . $result['mark2'] . '</h7>';
    $data .= '</td>';
    $data .= '<td class="align-center text-center text-sm">';
    $data .= '<h7 class="mb-0 text-sm">' . $result['number'] . '</h7>';
    $data .= '</td>';
    $data .= '<td class="align-center text-center">';
    $data .= '<h7 class="mb-0 text-sm">' . $result['comment'] . '</h7>';
    $data .= '</td>';
    $data .= '<td class="align-center text-center">';
    $data .= '<h7 class="mb-0 text-sm">' . $result['name_exam'] . '</h7>';
    $data .= '</td>';
    $data .= '<td class="align-center text-center">';
    $data .= '<h7 class="mb-0 text-sm">' . $result['timeExam'] . ' Phút</h7>';
    $data .= '</td>';
    $data .= '<td class="align-center text-center">';
    $data .= '<h7 class="mb-0 text-sm">' . $result['resultTime'] . '</h7>';
    $data .= '</td>';
    $data .= '<td class="align-middle text-center">';
    $data .= '<input type="button" class="btn btn-success text-white mb-0" href="javascript:;" value="In kết quả" name="view"></input>';
    $data .= '</td>';
    $data .= '</tr>';
    $index++;
}
$data .= '</tbody>';
$data .= '</table>';
$data .= '</div>';

echo $data;
?>
<script>
    $(document).on('click', "input[name='view']", function() {
        var bid = this.id;
        var trid = $(this).closest('tr').attr('id'); //lấy id của dòng được chọn trên table khi click update
        $('#txtQuestionId').val(trid);
        window.open('./report.php?id='+trid, '_blank');
    });
</script>