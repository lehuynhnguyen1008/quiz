<?php
include('../admin/dbconnect.php');
$question = $conn->prepare("SELECT * FROM questtion");
$question->execute();
echo json_encode($question->fetchAll(PDO::FETCH_ASSOC), JSON_UNESCAPED_UNICODE);

// $result = mysqli_query($connn, $query);
// while ($row = mysqli_fetch_array($result)) {
//     $sub_data["id_question"] = $row["id_question"];
//     $sub_data["name_question"] = $row["name_question"];
//     $sub_data["option1"] = $row["option1"];
//     $sub_data["option2"] = $row["option2"];
//     $sub_data["option3"] = $row["option3"];
//     $sub_data["option4"] = $row["option4"];
//     $sub_data["option_correct"] = $row["option_correct"];
//     $sub_data["answer"] = $row["answer"];
//     $sub_data["description_media"] = $row["description_media"];
//     $sub_data["name_categoryquestion"] = $row["name_categoryquestion"];
//     $sub_data["id_detailExam"] = $row["id_detailExam"];
//     $sub_data["id_media"] = $row["id_media"];
//     $sub_data["id_categoryquestion"] = $row["id_categoryquestion"];
//     $data[] = $sub_data;
// }
// foreach($data as $key => &$value){
//     $output[$value["id_question"]]= &$value;
// }
// foreach($data as $key => &$value){
//     if ($value["id_categoryquestion"] && isset($output[$value["id_categoryquestion"]]))
//     {

//         $output[$value["id_categoryquestion"]]["nodes"]= &$value;
//     }
// }
// foreach($data as $key => &$value){
//     if ($value["id_question"] && isset($output[$value["id_question"]]))
//     {

//         $output[$value["id_question"]]["nodes"]= &$value;
//     }
// }
// echo '<pre>';
// print_r($data);
// echo '</pre>';


// $sql = $conn->prepare("SELECT * FROM detail_exam,questtion,media, category_question WHERE questtion.id_categoryquestion = category_question.id_categoryquestion AND detail_exam.id_question = questtion.id_question AND questtion.id_media = media.id_media AND id_exam = '" . $_POST["id_exam"] . "' ORDER BY category_question.id_categoryquestion ASC");
// $sql->execute();
// while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {
//     $data = '';
//     if ($count == 1) {
//         $data .= '<h2>' . $result['name_categoryquestion'] . '</h2>';
//         $data .= '<p>In each question, you will look at a photograph and then listen to 4 sentences. Choose the sentence that best describes the photograph. There are questions in this test.</p>';
//         $question = $conn->prepare("SELECT * FROM detail_exam,questtion,media WHERE detail_exam.id_question = questtion.id_question AND questtion.id_media = media.id_media AND id_categoryquestion = '" . $count . "' AND id_exam = '" . $_GET["id_exam"] . "'");
//         $question->execute();
//         $index = 1;
//         while ($sub_result = $question->fetch(PDO::FETCH_ASSOC)) {
//             $data .= '<div class="d-flex flex-column mb-5">';
//             $data .= '<h5 class="ml-5">Câu hỏi ' . $index . ':</h5>';
//             $data .= '<div class="d-flex flex-column mx-auto">';
//             $data .= '<audio controls class="mb-3">';
//             $data .= '<source src="' . $sub_result["description_media"] . '" type="audio/mpeg">';
//             $data .= '</audio>';
//             $data .= '<img src="' . $sub_result["name_question"] . '" style="height:150px;width:300px;" class="mb-3"/>';
//             $data .= '</div>';
//             $data .= '<form class="ml-5 pl-5 mb-4">';
//             $data .= '<fieldset id="group' . $index . '" class="d-flex flex-column">';
//             $data .= '<label class="ml-5"><input type="radio" value="" name="group' . ($index) . '" class="mr-2">A. ' . $sub_result["option1"] . '</label>';
//             $data .= '<label class="ml-5"><input type="radio" value="" name="group' . ($index) . '" class="mr-2">B. ' . $sub_result["option2"] . '</label>';
//             $data .= '<label class="ml-5"><input type="radio" value="" name="group' . ($index) . '" class="mr-2">C. ' . $sub_result["option3"] . '</label>';
//             $data .= '<label class="ml-5"><input type="radio" value="" name="group' . ($index) . '" class="mr-2">D. ' . $sub_result["option4"] . '</label>';
//             $data .= '</fieldset>';
//             $data .= '</form>';
//             $data .= '</div>';
//             $index++;
//         }
//     }
//     $count++;
//     echo $data;
// }

// echo json_encode($sql->fetchAll(PDO::FETCH_ASSOC),JSON_UNESCAPED_UNICODE);