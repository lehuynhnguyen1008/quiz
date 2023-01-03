<?php
include('../../dbconnect.php');
$sql = $conn->prepare("SELECT * FROM category_exam");
$sql->execute();
$count = 1;
while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {
    $data = '';
    if ($count == 1) {
        $data .= '<div class="tab-pane fade show active" id="F' . $result["id_categoryexam"] . '" role="tabpanel">';
        $data .= '<table id="exam_data_table" class="table align-items-center mb-0">';
        $data .= '<thead>';
        $data .= '<tr class="bg-light">';
        $data .= '<th class="text-uppercase text-dark text-xs font-weight-bolder" style="width: 5%">STT</th>';
        $data .= '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder" scope="col">Tên đề thi</th>';
        $data .= '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Số câu</th>';
        $data .= '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Thời gian';
        $data .= '</th>';
        $data .= '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Loại đề thi';
        $data .= '</th>';
        $data .= '<th class="text-dark text-center">Thao tác</th>';
        $data .= '</tr>';
        $data .= '</thead>';
        $data .= '<tbody id="exams">';
        $product = $conn->prepare("SELECT * FROM exam, category_exam WHERE exam.id_categoryexam = category_exam.id_categoryexam AND category_exam.id_categoryexam = '".$count."'");
        $product->execute();
        $index = 1;
        while ($sub_result = $product->fetch(PDO::FETCH_ASSOC)) {
            $data .= '<tr id=' . $sub_result['id_exam'] . '>';
            $data .= '<td>';
            $data .= '<div class="d-flex px-4 py-1">';
            $data .= '<span>' . ($index++) . '</span>';
            $data .= '</div>';
            $data .= '</td>';
            $data .= '<td class="align-center text-center text-sm">';
            $data .= '<h6 class="mb-0 text-sm">' . $sub_result['name_exam'] . '</h6>';
            $data .= '</td>';
            $data .= '<td class="align-center text-center text-sm">';
            $data .= '<h6 class="mb-0 text-sm">' . $sub_result['number_exam'] . '</h6>';
            $data .= '</td>';
            $data .= '<td class="align-center text-center text-sm">';
            $data .= '<h6 class="mb-0 text-sm">' . $sub_result['time_exam'] . '</h6>';
            $data .= '</td>';
            $data .= '<td class="align-center text-center">';
            $data .= '<h6 class="mb-0 text-sm">' . $sub_result['name_categoryexam'] . '</h6>';
            $data .= '</td>';
            $data .= '<td class="align-middle text-center">';
            $data .= '<input type="button" class="btn btn-primary text-white mb-0" href="javascript:;" value="Xem danh sách" name="view"></input>';
            $data .= '<input type="button" class="btn btn-warning mx-3 text-white mb-0" href="javascript:;" value="Sửa" name="update"></input>';
            $data .= '<input type="button" class="btn btn-danger text-white mb-0" href="javascript:;" value="Xoá" name="delete"></input>';
            $data .= '</td>';
            $data .= '</tr>';
        }
        $data .= '</tbody>';
        $data .= '</table>';
        $data .= '</div>';
    } else {
        $data .= '<div class="tab-pane fade" id="F' . $result["id_categoryexam"] . '" role="tabpanel">';
        $data .= '<table id="exam_data_table" class="table align-items-center mb-0">';
        $data .= '<thead>';
        $data .= '<tr class="bg-light">';
        $data .= '<th class="text-uppercase text-dark text-xs font-weight-bolder" style="width: 5%">STT</th>';
        $data .= '<th class="text-uppercase text-dark text-xs font-weight-bolder" scope="col">Tên đề thi</th>';
        $data .= '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Số câu</th>';
        $data .= '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Thời gian';
        $data .= '</th>';
        $data .= '<th class="text-center text-uppercase text-dark text-xs font-weight-bolder">Loại đề thi';
        $data .= '</th>';
        $data .= '<th class="text-dark text-center">Thao tác</th>';
        $data .= '</tr>';
        $data .= '</thead>';
        $data .= '<tbody id="exams">';
        $product = $conn->prepare("SELECT * FROM exam, category_exam WHERE exam.id_categoryexam = category_exam.id_categoryexam AND category_exam.id_categoryexam = '".$count."'");
        $product->execute();
        $index = 1;
        while ($sub_result = $product->fetch(PDO::FETCH_ASSOC)) {
            $data .= '<tr id=' . $sub_result['id_exam'] . '>';
            $data .= '<td>';
            $data .= '<div class="d-flex px-4 py-1">';
            $data .= '<span>' . ($index++) . '</span>';
            $data .= '</div>';
            $data .= '</td>';
            $data .= '<td class="align-center text-center text-sm">';
            $data .= '<h6 class="mb-0 text-sm">' . $sub_result['name_exam'] . '</h6>';
            $data .= '</td>';
            $data .= '<td class="align-center text-center text-sm">';
            $data .= '<h6 class="mb-0 text-sm">' . $sub_result['number_exam'] . '</h6>';
            $data .= '</td>';
            $data .= '<td class="align-center text-center text-sm">';
            $data .= '<h6 class="mb-0 text-sm">' . $sub_result['time_exam'] . '</h6>';
            $data .= '</td>';
            $data .= '<td class="align-center text-center">';
            $data .= '<h6 class="mb-0 text-sm">' . $sub_result['name_categoryexam'] . '</h6>';
            $data .= '</td>';
            $data .= '<td class="align-middle text-center">';
            $data .= '<input type="button" class="btn btn-primary text-white mb-0" href="javascript:;" value="Xem danh sách" name="view"></input>';
            $data .= '<input type="button" class="btn btn-warning mx-3 text-white mb-0" href="javascript:;" value="Sửa" name="update"></input>';
            $data .= '<input type="button" class="btn btn-danger text-white mb-0" href="javascript:;" value="Xoá" name="delete"></input>';
            $data .= '</td>';
            $data .= '</tr>';
        }
        $data .= '</tbody>';
        $data .= '</table>';
        $data .= '</div>';
    }
    $count++;
    echo $data;
}
