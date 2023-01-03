<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link href="../resources/css/album.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../resources/js/coutdown.js"></script>
    <link href="../resources/css/countdown.css" rel="stylesheet">
    <title>English</title>

</head>

<body data-mdb-spy="scroll" data-mdb-target="#scrollspy" data-mdb-offset="250">
    <?php include('../pages/nav.php');
     ?>
    <?php include('../pages/sidebar.php') ?>
    <div class="container card mb-5" style="margin-top:60px">
        <div class="card-header text-center w-100">
            <h4> BÀI THI</h4>
        </div>
        <div class="card-body d-flex">
            <div class="w-75" id="contain_question" style="display: none;">
                <div id="myQuestionListening">
                    <?php
                    include('../admin/dbconnect.php');
                    $sql = $conn->prepare("SELECT * FROM category_question WHERE id_categoryquestion <=7 ORDER BY id_categoryquestion ASC");
                    $sql->execute();
                    $count = 1;
                    while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {
                        $data = '';
                        if ($_SESSION['id_categoryexam'] == 1) {
                            if ($count == 1) {
                                $data .= '<h2>' . $result['name_categoryquestion'] . '</h2>';
                                $data .= '<p>In each question, you will look at a photograph and then listen to 4 sentences. Choose the sentence that best describes the photograph. There are questions in this test.</p>';
                                $question = $conn->prepare("SELECT * FROM detail_exam,questtion,media WHERE detail_exam.id_question = questtion.id_question AND questtion.id_media = media.id_media AND id_categoryquestion = '" . $count . "' AND id_exam = '" . $_GET["id_exam"] . "'");
                                $question->execute();
                                $index = 1;
                                while ($sub_result = $question->fetch(PDO::FETCH_ASSOC)) {
                                    $data .= '<div class="d-flex flex-column mb-5" id="question_' . $sub_result['id_question'] . '">';
                                    $data .= '<h5 class="ml-5" id="' . $sub_result['id_question'] . '">Câu hỏi ' . $index . ':</h5>';
                                    $data .= '<div class="d-flex flex-column mx-auto">';
                                    $data .= '<audio controls class="mb-3">';
                                    $data .= '<source src="' . $sub_result["description_media"] . '" type="audio/mpeg">';
                                    $data .= '</audio>';
                                    $data .= '<img src="' . $sub_result["name_question"] . '" style="height:150px;width:300px;" class="mb-3"/>';
                                    $data .= '</div>';
                                    $data .= '<form class="ml-5 pl-5 mb-4">';
                                    $data .= '<fieldset id="group' . $index . '" class="d-flex flex-column" style="width:80%;">';
                                    $data .= '<label class="A ml-5"><input type="radio" value="" name="group' . ($index) . '" class="A" style="margin-right:20px;">A. ' . $sub_result["option1"] . '</label>';
                                    $data .= '<label class="B ml-5"><input type="radio" value="" name="group' . ($index) . '" class="B" style="margin-right:20px;">B. ' . $sub_result["option2"] . '</label>';
                                    $data .= '<label class="C ml-5"><input type="radio" value="" name="group' . ($index) . '" class="C" style="margin-right:20px;">C. ' . $sub_result["option3"] . '</label>';
                                    $data .= '<label class="D ml-5"><input type="radio" value="" name="group' . ($index) . '" class="D" style="margin-right:20px;">D. ' . $sub_result["option4"] . '</label>';
                                    $data .= '<input type="hidden" value="' . $sub_result["option_correct"] . '"  class="1"/>';
                                    $data .= '</fieldset>';
                                    $data .= '</form>';
                                    $data .=  '<div id="answer_correct">';
                                    $data .= '<div class="answer mx-auto" style="padding:20px; background-color:#ff9; display:none" id="' . $sub_result['id_question'] . '">';
                                    $data .= '<h6>Lời giải:</h6>';
                                    $data .= '<h6>' . $sub_result["answer"] . '</h6>';
                                    $data .=  '</div>';
                                    $data .=  '</div>';
                                    $data .= '</div>';
                                    $index++;
                                }
                            } else if ($count == 2) {
                                $data .= '<h2>' . $result['name_categoryquestion'] . '</h2>';
                                $data .= '<p>In each question, you will listen to a question and then listen to 3 possible responses. Choose the correct response.</p>';
                                $question = $conn->prepare("SELECT * FROM detail_exam,questtion,media WHERE detail_exam.id_question = questtion.id_question AND questtion.id_media = media.id_media AND id_categoryquestion = '" . $count . "' AND id_exam = '" . $_GET["id_exam"] . "'");
                                $question->execute();
                                $index = 1;
                                while ($sub_result = $question->fetch(PDO::FETCH_ASSOC)) {
                                    $data .= '<div class="d-flex flex-column mb-5" id="question_' . $sub_result['id_question'] . '">';
                                    $data .= '<h5 class="ml-5" id="' . $sub_result['id_question'] . '">Câu hỏi ' . $index . ':</h5>';
                                    $data .= '<div class="d-flex flex-column mx-auto">';
                                    $data .= '<audio controls class="mb-3">';
                                    $data .= '<source src="' . $sub_result["description_media"] . '" type="audio/mpeg">';
                                    $data .= '</audio>';
                                    $data .= '</div>';
                                    $data .= '<form class="ml-5 pl-5 mb-4">';
                                    $data .= '<fieldset id="group' . $index . '" class="d-flex flex-column" style="width:80%;">';
                                    $data .= '<label class="A"><input type="radio" value="" name="group' . ($index) . '" class="A" style="margin-right:20px;">A. ' . $sub_result["option1"] . '</label>';
                                    $data .= '<label class="B"><input type="radio" value="" name="group' . ($index) . '" class="B" style="margin-right:20px;">B. ' . $sub_result["option2"] . '</label>';
                                    $data .= '<label class="C"><input type="radio" value="" name="group' . ($index) . '" class="C" style="margin-right:20px;">C. ' . $sub_result["option3"] . '</label>';

                                    $data .= '<input type="hidden" value="' . $sub_result["option_correct"] . '"  class="1"/>';
                                    $data .= '</fieldset>';
                                    $data .= '</form>';
                                    $data .=  '<div id="answer_correct">';
                                    $data .= '<div class="answer mx-auto" style="padding:20px; background-color:#ff9; display:none" id="' . $sub_result['id_question'] . '">';
                                    $data .= '<h6>Lời giải:</h6>';
                                    $data .= '<h6>' . $sub_result["answer"] . '</h6>';
                                    $data .=  '</div>';
                                    $data .=  '</div>';
                                    $data .= '</div>';
                                    $index++;
                                }
                            } else if ($count == 3) {
                                $data .= '<h2>' . $result['name_categoryquestion'] . '</h2>';
                                $data .= '<p>In this part, you will listen to short conversations, each with 3 questions. For each question, choose the answer which you think fits best according to what you hear.</p>';
                                $question = $conn->prepare("SELECT * FROM detail_exam,questtion,media WHERE detail_exam.id_question = questtion.id_question AND questtion.id_media = media.id_media AND id_categoryquestion = '" . $count . "' AND id_exam = '" . $_GET["id_exam"] . "'");
                                $question->execute();
                                $index = 1;
                                while ($sub_result = $question->fetch(PDO::FETCH_ASSOC)) {
                                    $data .= '<div class="d-flex flex-column mb-5" id="question_' . $sub_result['id_question'] . '">';
                                    $data .= '<h5 class="ml-5" id="' . $sub_result['id_question'] . '">Câu hỏi ' . $index . ':</h5>';
                                    $data .= '<div class="d-flex flex-column mx-auto">';
                                    $data .= '<audio controls class="mb-3">';
                                    $data .= '<source src="' . $sub_result["description_media"] . '" type="audio/mpeg">';
                                    $data .= '</audio>';
                                    $data .= '<h5>' . $sub_result["name_question"] . '</h5>';
                                    $data .= '</div>';
                                    $data .= '<form class="ml-5 pl-5 mb-4">';
                                    $data .= '<fieldset id="group' . $index . '" class="d-flex flex-column" style="width:80%;">';
                                    $data .= '<label class="A"><input type="radio" value="" name="group' . ($index) . '" class="A" style="margin-right:20px;">A. ' . $sub_result["option1"] . '</label>';
                                    $data .= '<label class="B"><input type="radio" value="" name="group' . ($index) . '" class="B" style="margin-right:20px;">B. ' . $sub_result["option2"] . '</label>';
                                    $data .= '<label class="C"><input type="radio" value="" name="group' . ($index) . '" class="C" style="margin-right:20px;">C. ' . $sub_result["option3"] . '</label>';
                                    $data .= '<label class="D"><input type="radio" value="" name="group' . ($index) . '" class="D" style="margin-right:20px;">D. ' . $sub_result["option4"] . '</label>';
                                    $data .= '<input type="hidden" value="' . $sub_result["option_correct"] . '"  class="1"/>';
                                    $data .= '</fieldset>';
                                    $data .= '</form>';
                                    $data .=  '<div id="answer_correct">';
                                    $data .= '<div class="answer mx-auto" style="padding:20px; background-color:#ff9; display:none" id="' . $sub_result['id_question'] . '">';
                                    $data .= '<h6>Lời giải:</h6>';
                                    $data .= '<h6>' . $sub_result["answer"] . '</h6>';
                                    $data .=  '</div>';
                                    $data .=  '</div>';
                                    $data .= '</div>';
                                    $index++;
                                }
                            } else if ($count == 4) {
                                $data .= '<h2>' . $result['name_categoryquestion'] . '</h2>';
                                $data .= '<p>You will hear some talks given by a single speaker . You will be asked to answer questions about what the speaker says in each talk . Select the best response to each question and mark the letter (A), (B), (C), or (D) on your answer sheet . You are going to listen to short talks, each with 3 questions. For each question, choose the answer which you think fits best according to what you hear.</p>';
                                $question = $conn->prepare("SELECT * FROM detail_exam,questtion,media WHERE detail_exam.id_question = questtion.id_question AND questtion.id_media = media.id_media AND id_categoryquestion = '" . $count . "' AND id_exam = '" . $_GET["id_exam"] . "'");
                                $question->execute();
                                $index = 1;
                                while ($sub_result = $question->fetch(PDO::FETCH_ASSOC)) {
                                    $data .= '<div class="d-flex flex-column mb-5" id="question_' . $sub_result['id_question'] . '">';
                                    $data .= '<h5 class="ml-5" id="' . $sub_result['id_question'] . '">Câu hỏi ' . $index . ':</h5>';
                                    $data .= '<div class="d-flex flex-column mx-auto">';
                                    $data .= '<audio controls class="mb-3">';
                                    $data .= '<source src="' . $sub_result["description_media"] . '" type="audio/mpeg">';
                                    $data .= '</audio>';
                                    $data .= '<h5>' . $sub_result["name_question"] . '</h5>';
                                    $data .= '</div>';
                                    $data .= '<form class="ml-5 pl-5 mb-4">';
                                    $data .= '<fieldset id="group' . $index . '" class="d-flex flex-column" style="width:80%;">';
                                    $data .= '<label class="A"><input type="radio" value="" name="group' . ($index) . '" class="A" style="margin-right:20px;">A. ' . $sub_result["option1"] . '</label>';
                                    $data .= '<label class="B"><input type="radio" value="" name="group' . ($index) . '" class="B" style="margin-right:20px;">B. ' . $sub_result["option2"] . '</label>';
                                    $data .= '<label class="C"><input type="radio" value="" name="group' . ($index) . '" class="C" style="margin-right:20px;">C. ' . $sub_result["option3"] . '</label>';
                                    $data .= '<label class="D"><input type="radio" value="" name="group' . ($index) . '" class="D" style="margin-right:20px;">D. ' . $sub_result["option4"] . '</label>';
                                    $data .= '<input type="hidden" value="' . $sub_result["option_correct"] . '"  class="1"/>';
                                    $data .= '</fieldset>';
                                    $data .= '</form>';
                                    $data .=  '<div id="answer_correct">';
                                    $data .= '<div class="answer mx-auto" style="padding:20px; background-color:#ff9; display:none" id="' . $sub_result['id_question'] . '">';
                                    $data .= '<h6>Lời giải:</h6>';
                                    $data .= '<h6>' . $sub_result["answer"] . '</h6>';
                                    $data .=  '</div>';
                                    $data .=  '</div>';
                                    $data .= '</div>';
                                    $index++;
                                }
                            }
                        } else {
                            if ($count == 2) {
                                $data .= '<h2>' . $result['description'] . '</h2>';
                                $data .= '<p>In each question, you will listen to a question and then listen to 3 possible responses. Choose the correct response.</p>';
                                $question = $conn->prepare("SELECT * FROM detail_exam,questtion,media WHERE detail_exam.id_question = questtion.id_question AND questtion.id_media = media.id_media AND id_categoryquestion = '" . $count . "' AND id_exam = '" . $_GET["id_exam"] . "'");
                                $question->execute();
                                $index = 1;
                                while ($sub_result = $question->fetch(PDO::FETCH_ASSOC)) {
                                    $data .= '<div class="d-flex flex-column mb-5" id="question_' . $sub_result['id_question'] . '">';
                                    $data .= '<h5 class="ml-5" id="' . $sub_result['id_question'] . '">Câu hỏi ' . $index . ':</h5>';
                                    $data .= '<div class="d-flex flex-column mx-auto">';
                                    $data .= '<audio controls class="mb-3">';
                                    $data .= '<source src="' . $sub_result["description_media"] . '" type="audio/mpeg">';
                                    $data .= '</audio>';
                                    $data .= '</div>';
                                    $data .= '<form class="ml-5 pl-5 mb-4">';
                                    $data .= '<fieldset id="group' . $index . '" class="d-flex flex-column" style="width:80%;">';
                                    $data .= '<label class="A"><input type="radio" value="" name="group' . ($index) . '" class="A" style="margin-right:20px;">A. ' . $sub_result["option1"] . '</label>';
                                    $data .= '<label class="B"><input type="radio" value="" name="group' . ($index) . '" class="B" style="margin-right:20px;">B. ' . $sub_result["option2"] . '</label>';
                                    $data .= '<label class="C"><input type="radio" value="" name="group' . ($index) . '" class="C" style="margin-right:20px;">C. ' . $sub_result["option3"] . '</label>';
                                    $data .= '<input type="hidden" value="' . $sub_result["option_correct"] . '"  class="1"/>';
                                    $data .= '</fieldset>';
                                    $data .= '</form>';
                                    $data .=  '<div id="answer_correct">';
                                    $data .= '<div class="answer mx-auto" style="padding:20px; background-color:#ff9; display:none" id="' . $sub_result['id_question'] . '">';
                                    $data .= '<h6>Lời giải:</h6>';
                                    $data .= '<h6>' . $sub_result["answer"] . '</h6>';
                                    $data .=  '</div>';
                                    $data .=  '</div>';
                                    $data .= '</div>';
                                    $index++;
                                }
                            } else if ($count == 3) {
                                $data .= '<h2>' . $result['description'] . '</h2>';
                                $data .= '<p>In this part, you will listen to short conversations, each with 3 questions. For each question, choose the answer which you think fits best according to what you hear.</p>';
                                $question = $conn->prepare("SELECT * FROM detail_exam,questtion,media WHERE detail_exam.id_question = questtion.id_question AND questtion.id_media = media.id_media AND id_categoryquestion = '" . $count . "' AND id_exam = '" . $_GET["id_exam"] . "'");
                                $question->execute();
                                $index = 1;
                                while ($sub_result = $question->fetch(PDO::FETCH_ASSOC)) {
                                    $data .= '<div class="d-flex flex-column mb-5" id="question_' . $sub_result['id_question'] . '">';
                                    $data .= '<h5 class="ml-5" id="' . $sub_result['id_question'] . '">Câu hỏi ' . $index . ':</h5>';
                                    $data .= '<div class="d-flex flex-column mx-auto">';
                                    $data .= '<audio controls class="mb-3">';
                                    $data .= '<source src="' . $sub_result["description_media"] . '" type="audio/mpeg">';
                                    $data .= '</audio>';
                                    $data .= '<h5>' . $sub_result["name_question"] . '</h5>';
                                    $data .= '</div>';
                                    $data .= '<form class="ml-5 pl-5 mb-4">';
                                    $data .= '<fieldset id="group' . $index . '" class="d-flex flex-column" style="width:80%;">';
                                    $data .= '<label class="A"><input type="radio" value="" name="group' . ($index) . '" class="A" style="margin-right:20px;">A. ' . $sub_result["option1"] . '</label>';
                                    $data .= '<label class="B"><input type="radio" value="" name="group' . ($index) . '" class="B" style="margin-right:20px;">B. ' . $sub_result["option2"] . '</label>';
                                    $data .= '<label class="C"><input type="radio" value="" name="group' . ($index) . '" class="C" style="margin-right:20px;">C. ' . $sub_result["option3"] . '</label>';
                                    $data .= '<label class="D"><input type="radio" value="" name="group' . ($index) . '" class="D" style="margin-right:20px;">D. ' . $sub_result["option4"] . '</label>';
                                    $data .= '<input type="hidden" value="' . $sub_result["option_correct"] . '"  class="1"/>';
                                    $data .= '</fieldset>';
                                    $data .= '</form>';
                                    $data .=  '<div id="answer_correct">';
                                    $data .= '<div class="answer mx-auto" style="padding:20px; background-color:#ff9; display:none" id="' . $sub_result['id_question'] . '">';
                                    $data .= '<h6>Lời giải:</h6>';
                                    $data .= '<h6>' . $sub_result["answer"] . '</h6>';
                                    $data .=  '</div>';
                                    $data .=  '</div>';
                                    $data .= '</div>';
                                    $index++;
                                }
                            } else if ($count == 4) {
                                $data .= '<h2>' . $result['description'] . '</h2>';
                                $data .= '<p>You will hear some talks given by a single speaker . You will be asked to answer questions about what the speaker says in each talk . Select the best response to each question and mark the letter (A), (B), (C), or (D) on your answer sheet . You are going to listen to short talks, each with 3 questions. For each question, choose the answer which you think fits best according to what you hear.</p>';
                                $question = $conn->prepare("SELECT * FROM detail_exam,questtion,media WHERE detail_exam.id_question = questtion.id_question AND questtion.id_media = media.id_media AND id_categoryquestion = '" . $count . "' AND id_exam = '" . $_GET["id_exam"] . "'");
                                $question->execute();
                                $index = 1;
                                while ($sub_result = $question->fetch(PDO::FETCH_ASSOC)) {
                                    $data .= '<div class="d-flex flex-column mb-5" id="question_' . $sub_result['id_question'] . '">';
                                    $data .= '<h5 class="ml-5" id="' . $sub_result['id_question'] . '">Câu hỏi ' . $index . ':</h5>';
                                    $data .= '<div class="d-flex flex-column mx-auto">';
                                    $data .= '<audio controls class="mb-3">';
                                    $data .= '<source src="' . $sub_result["description_media"] . '" type="audio/mpeg">';
                                    $data .= '</audio>';
                                    $data .= '<h5>' . $sub_result["name_question"] . '</h5>';
                                    $data .= '</div>';
                                    $data .= '<form class="ml-5 pl-5 mb-4">';
                                    $data .= '<fieldset id="group' . $index . '" class="d-flex flex-column" style="width:80%;">';
                                    $data .= '<label class="A"><input type="radio" value="" name="group' . ($index) . '" class="A" style="margin-right:20px;">A. ' . $sub_result["option1"] . '</label>';
                                    $data .= '<label class="B"><input type="radio" value="" name="group' . ($index) . '" class="B" style="margin-right:20px;">B. ' . $sub_result["option2"] . '</label>';
                                    $data .= '<label class="C"><input type="radio" value="" name="group' . ($index) . '" class="C" style="margin-right:20px;">C. ' . $sub_result["option3"] . '</label>';
                                    $data .= '<label class="D"><input type="radio" value="" name="group' . ($index) . '" class="D" style="margin-right:20px;">D. ' . $sub_result["option4"] . '</label>';
                                    $data .= '<input type="hidden" value="' . $sub_result["option_correct"] . '"  class="1"/>';
                                    $data .= '</fieldset>';
                                    $data .= '</form>';
                                    $data .=  '<div id="answer_correct">';
                                    $data .= '<div class="answer mx-auto" style="padding:20px; background-color:#ff9; display:none" id="' . $sub_result['id_question'] . '">';
                                    $data .= '<h6>Lời giải:</h6>';
                                    $data .= '<h6>' . $sub_result["answer"] . '</h6>';
                                    $data .=  '</div>';
                                    $data .=  '</div>';
                                    $data .= '</div>';
                                    $index++;
                                }
                            }
                        }
                        $count++;
                        echo $data;
                    }
                    ?>
                </div>
                <div id="myQuestionReading">
                    <?php
                    include('../admin/dbconnect.php');
                    $sql = $conn->prepare("SELECT * FROM category_question WHERE id_categoryquestion <=7 ORDER BY id_categoryquestion ASC");
                    $sql->execute();
                    $count = 1;
                    while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {
                        $data = '';
                        if ($_SESSION['id_categoryexam'] == 1) {
                            if ($count == 5) {
                                $data .= '<h2>' . $result['name_categoryquestion'] . '</h2>';
                                $data .= '<p>For each question you will see an incomplete sentence. Four words or phrases, marked A-D are given beneath each sentence. You are to choose the one word or phrase that best completes the sentence. A word or phrase is missing in each of the sentences below. Select the best answer to complete the sentence.</p>';
                                $question = $conn->prepare("SELECT * FROM detail_exam,questtion,media WHERE detail_exam.id_question = questtion.id_question AND questtion.id_media = media.id_media AND id_categoryquestion = '" . $count . "' AND id_exam = '" . $_GET["id_exam"] . "'");
                                $question->execute();
                                $index = 1;
                                while ($sub_result = $question->fetch(PDO::FETCH_ASSOC)) {
                                    $data .= '<div class="d-flex flex-column mb-5" id="question_' . $sub_result['id_question'] . '">';
                                    $data .= '<h5 class="ml-5" id="' . $sub_result['id_question'] . '">Câu hỏi ' . $index . ':</h5>';
                                    $data .= '<div class="d-flex flex-column mx-auto">';
                                    $data .= '<h5>' . $sub_result["name_question"] . '</h5>';
                                    $data .= '</div>';
                                    $data .= '<form class="ml-5 pl-5 mb-4">';
                                    $data .= '<fieldset id="group' . $index . '" class="d-flex flex-column" style="width:80%;">';
                                    $data .= '<label class="A"><input type="radio" value="" name="group' . ($index) . '" class="A" style="margin-right:20px;">A. ' . $sub_result["option1"] . '</label>';
                                    $data .= '<label class="B"><input type="radio" value="" name="group' . ($index) . '" class="B" style="margin-right:20px;">B. ' . $sub_result["option2"] . '</label>';
                                    $data .= '<label class="C"><input type="radio" value="" name="group' . ($index) . '" class="C" style="margin-right:20px;">C. ' . $sub_result["option3"] . '</label>';
                                    $data .= '<label class="D"><input type="radio" value="" name="group' . ($index) . '" class="D" style="margin-right:20px;">D. ' . $sub_result["option4"] . '</label>';
                                    $data .= '<input type="hidden" value="' . $sub_result["option_correct"] . '"  class="1"/>';
                                    $data .= '</fieldset>';
                                    $data .= '</form>';
                                    $data .=  '<div id="answer_correct">';
                                    $data .= '<div class="answer mx-auto" style="padding:20px; background-color:#ff9; display:none" id="' . $sub_result['id_question'] . '">';
                                    $data .= '<h6>Lời giải:</h6>';
                                    $data .= '<h6>' . $sub_result["answer"] . '</h6>';
                                    $data .=  '</div>';
                                    $data .=  '</div>';
                                    $data .= '</div>';
                                    $index++;
                                }
                            } else if ($count == 6) {
                                $data .= '<h2>' . $result['name_categoryquestion'] . '</h2>';
                                $data .= '<p>Directions: Read the texts that follow. A word, phrase, or sentence is missing in parts of each text. Four answer choices for each question are given below the text. Select the best answer to complete the text. Then choose  the letter (A), (B), (C) or (D) .choose the one word or phrase that best completes the sentence. </p>';
                                $res = mysqli_query($link, "SELECT * FROM questtion, media, detail_exam  WHERE media.id_media = questtion.id_media AND detail_exam.id_question = questtion.id_question and questtion.id_categoryquestion = '" . $count . "' and detail_exam.id_exam = '" . $_GET["id_exam"] . "' and media.id_media='2'");
                                $row = mysqli_fetch_array($res);
                                $data .=  '<h4>READING 1:</h4>';
                                if (isset($row["description_media"])){
                                    $data .=  '<h6>' . $row["description_media"] . '</h6>';
                                }
                                $question = $conn->prepare("SELECT * FROM detail_exam,questtion,media WHERE detail_exam.id_question = questtion.id_question AND questtion.id_media = media.id_media AND id_categoryquestion = '" . $count . "' AND id_exam = '" . $_GET["id_exam"] . "' AND media.name_media = 'Part 6 - 3'");
                                $question->execute();
                                $index = 1;
                                while ($sub_result = $question->fetch(PDO::FETCH_ASSOC)) {
                                    $data .= '<div class="d-flex flex-column mb-5" id="question_' . $sub_result['id_question'] . '">';
                                    $data .= '<h5 class="ml-5" id="' . $sub_result['id_question'] . '">Câu hỏi ' . $index . ':</h5>';
                                    $data .= '<div class="d-flex flex-column mx-auto">';
                                    $data .= '</div>';
                                    $data .= '<form class="ml-5 pl-5 mb-4">';
                                    $data .= '<fieldset id="group' . $index . '" class="d-flex flex-column" style="width:80%;">';
                                    $data .= '<label class="A"><input type="radio" value="" name="group' . ($index) . '" class="A" style="margin-right:20px;">A. ' . $sub_result["option1"] . '</label>';
                                    $data .= '<label class="B"><input type="radio" value="" name="group' . ($index) . '" class="B" style="margin-right:20px;">B. ' . $sub_result["option2"] . '</label>';
                                    $data .= '<label class="C"><input type="radio" value="" name="group' . ($index) . '" class="C" style="margin-right:20px;">C. ' . $sub_result["option3"] . '</label>';
                                    $data .= '<label class="D"><input type="radio" value="" name="group' . ($index) . '" class="D" style="margin-right:20px;">D. ' . $sub_result["option4"] . '</label>';
                                    $data .= '<input type="hidden" value="' . $sub_result["option_correct"] . '"  class="1"/>';
                                    $data .= '</fieldset>';
                                    $data .= '</form>';
                                    $data .=  '<div id="answer_correct">';
                                    $data .= '<div class="answer mx-auto" style="padding:20px; background-color:#ff9; display:none" id="' . $sub_result['id_question'] . '">';
                                    $data .= '<h6>Lời giải:</h6>';
                                    $data .= '<h6>' . $sub_result["answer"] . '</h6>';
                                    $data .=  '</div>';
                                    $data .=  '</div>';
                                    $data .= '</div>';
                                    $index++;
                                }
                                $res = mysqli_query($link, "SELECT * FROM questtion, media, detail_exam  WHERE media.id_media = questtion.id_media AND detail_exam.id_question = questtion.id_question and questtion.id_categoryquestion = '" . $count . "' and detail_exam.id_exam = '" . $_GET["id_exam"] . "' and media.id_media='37'");
                                $row = mysqli_fetch_array($res);
                                $data .=  '<h4>READING 2:</h4>';
                                if (isset($row["description_media"])){
                                    $data .=  '<h6>' . $row["description_media"] . '</h6>';
                                }
                                $question = $conn->prepare("SELECT * FROM detail_exam,questtion,media WHERE detail_exam.id_question = questtion.id_question AND questtion.id_media = media.id_media AND id_categoryquestion = '" . $count . "' AND id_exam = '" . $_GET["id_exam"] . "' AND media.name_media = 'Part 6 - 4'");
                                $question->execute();
                                $index = 1;
                                while ($sub_result = $question->fetch(PDO::FETCH_ASSOC)) {
                                    $data .= '<div class="d-flex flex-column mb-5" id="question_' . $sub_result['id_question'] . '">';
                                    $data .= '<h5 class="ml-5" id="' . $sub_result['id_question'] . '">Câu hỏi ' . $index . ':</h5>';
                                    $data .= '<div class="d-flex flex-column mx-auto">';
                                    $data .= '</div>';
                                    $data .= '<form class="ml-5 pl-5 mb-4">';
                                    $data .= '<fieldset id="group' . $index . '" class="d-flex flex-column" style="width:80%;">';
                                    $data .= '<label class="A"><input type="radio" value="" name="group' . ($index) . '" class="A" style="margin-right:20px;">A. ' . $sub_result["option1"] . '</label>';
                                    $data .= '<label class="B"><input type="radio" value="" name="group' . ($index) . '" class="B" style="margin-right:20px;">B. ' . $sub_result["option2"] . '</label>';
                                    $data .= '<label class="C"><input type="radio" value="" name="group' . ($index) . '" class="C" style="margin-right:20px;">C. ' . $sub_result["option3"] . '</label>';
                                    $data .= '<label class="D"><input type="radio" value="" name="group' . ($index) . '" class="D" style="margin-right:20px;">D. ' . $sub_result["option4"] . '</label>';
                                    $data .= '<input type="hidden" value="' . $sub_result["option_correct"] . '"  class="1"/>';
                                    $data .= '</fieldset>';
                                    $data .= '</form>';
                                    $data .=  '<div id="answer_correct">';
                                    $data .= '<div class="answer mx-auto" style="padding:20px; background-color:#ff9; display:none" id="' . $sub_result['id_question'] . '">';
                                    $data .= '<h6>Lời giải:</h6>';
                                    $data .= '<h6>' . $sub_result["answer"] . '</h6>';
                                    $data .=  '</div>';
                                    $data .=  '</div>';
                                    $data .= '</div>';
                                    $index++;
                                }
                            } else if ($count == 7) {
                                $data .= '<h2>' . $result['name_categoryquestion'] . '</h2>';
                                $data .= '<p>Directions: In this  part you will read a selection of texts, such as magazine and newspaper articles e-mails, and instant messages. Each text or set of texts is followed by several questions. Select the best answer for each question and choose the letter (A), (B). (C), or (D ).</p>';
                                $res = mysqli_query($link, "SELECT * FROM questtion, media, detail_exam  WHERE media.id_media = questtion.id_media AND detail_exam.id_question = questtion.id_question and questtion.id_categoryquestion = '" . $count . "' and detail_exam.id_exam = '" . $_GET["id_exam"] . "'");
                                $row = mysqli_fetch_array($res);
                                if (isset($row["description_media"])){
                                    $data .=  '<h6>' . $row["description_media"] . '</h6>';
                                }
                                $question = $conn->prepare("SELECT * FROM detail_exam,questtion,media WHERE detail_exam.id_question = questtion.id_question AND questtion.id_media = media.id_media AND id_categoryquestion = '" . $count . "' AND id_exam = '" . $_GET["id_exam"] . "'");
                                $question->execute();
                                $index = 1;
                                while ($sub_result = $question->fetch(PDO::FETCH_ASSOC)) {
                                    $data .= '<div class="d-flex flex-column mb-5" id="question_' . $sub_result['id_question'] . '">';
                                    $data .= '<h5 class="ml-5" id="' . $sub_result['id_question'] . '">Câu hỏi ' . $index . ':</h5>';
                                    $data .= '<div class="d-flex flex-column mx-auto">';
                                    $data .= '<h5>' . $sub_result['name_question'] . '</h5>';
                                    $data .= '</div>';
                                    $data .= '<form class="ml-5 pl-5 mb-4">';
                                    $data .= '<fieldset id="group' . $index . '" class="d-flex flex-column" style="width:80%;">';
                                    $data .= '<label class="A"><input type="radio" value="" name="group' . ($index) . '" class="A" style="margin-right:20px;">A. ' . $sub_result["option1"] . '</label>';
                                    $data .= '<label class="B"><input type="radio" value="" name="group' . ($index) . '" class="B" style="margin-right:20px;">B. ' . $sub_result["option2"] . '</label>';
                                    $data .= '<label class="C"><input type="radio" value="" name="group' . ($index) . '" class="C" style="margin-right:20px;">C. ' . $sub_result["option3"] . '</label>';
                                    $data .= '<label class="D"><input type="radio" value="" name="group' . ($index) . '" class="D" style="margin-right:20px;">D. ' . $sub_result["option4"] . '</label>';
                                    $data .= '<input type="hidden" value="' . $sub_result["option_correct"] . '"  class="1"/>';
                                    $data .= '</fieldset>';
                                    $data .= '</form>';
                                    $data .=  '<div id="answer_correct">';
                                    $data .= '<div class="answer mx-auto" style="padding:20px; background-color:#ff9; display:none" id="' . $sub_result['id_question'] . '">';
                                    $data .= '<h6>Lời giải:</h6>';
                                    $data .= '<h6>' . $sub_result["answer"] . '</h6>';
                                    $data .=  '</div>';
                                    $data .=  '</div>';
                                    $data .= '</div>';
                                    $index++;
                                }
                            }
                        } else {
                            if ($count == 7) {
                                $data .= '<h2>' . $result['description'] . '</h2>';
                                $data .= '<p>Directions: In this section of the test, you will read FOUR different passages, each followed by 10 questions
                                about it. You are to choose the best answer A, B, C, or D, to each question. Then, on
                                your answer sheete, find the number of the question and fill in the space that corresponds to the letter of the
                                answer you have chosen. Answer all questions following a passage on the basis of what is stated or implied
                                in that passage</p>';
                                $res = mysqli_query($link, "SELECT * FROM questtion, media WHERE media.id_media = questtion.id_media AND questtion.id_categoryquestion = '" . $count . "' AND media.name_media = 'Part 7 - 5'");
                                $row = mysqli_fetch_array($res);
                                $data .=  '<h5>' . $row["description_media"] . '</h5>';
                                $question = $conn->prepare("SELECT * FROM detail_exam,questtion,media WHERE detail_exam.id_question = questtion.id_question AND questtion.id_media = media.id_media AND id_categoryquestion = '" . $count . "' AND id_exam = '" . $_GET["id_exam"] . "'");
                                $question->execute();
                                $index = 1;
                                while ($sub_result = $question->fetch(PDO::FETCH_ASSOC)) {
                                    $data .= '<div class="d-flex flex-column mb-5" id="question_' . $sub_result['id_question'] . '">';
                                    $data .= '<h5 class="ml-5" id="' . $sub_result['id_question'] . '">Câu hỏi ' . $index . ':</h5>';
                                    $data .= '<div class="d-flex flex-column mx-auto">';
                                    $data .= '<h5>' . $sub_result['name_question'] . '</h5>';
                                    $data .= '</div>';
                                    $data .= '<form class="ml-5 pl-5 mb-4">';
                                    $data .= '<fieldset id="group' . $index . '" class="d-flex flex-column" style="width:80%;">';
                                    $data .= '<label class="A"><input type="radio" value="" name="group' . ($index) . '" class="A" style="margin-right:20px;">A. ' . $sub_result["option1"] . '</label>';
                                    $data .= '<label class="B"><input type="radio" value="" name="group' . ($index) . '" class="B" style="margin-right:20px;">B. ' . $sub_result["option2"] . '</label>';
                                    $data .= '<label class="C"><input type="radio" value="" name="group' . ($index) . '" class="C" style="margin-right:20px;">C. ' . $sub_result["option3"] . '</label>';
                                    $data .= '<label class="D"><input type="radio" value="" name="group' . ($index) . '" class="D" style="margin-right:20px;">D. ' . $sub_result["option4"] . '</label>';
                                    $data .= '<input type="hidden" value="' . $sub_result["option_correct"] . '"  class="1"/>';
                                    $data .= '</fieldset>';
                                    $data .= '</form>';
                                    $data .=  '<div id="answer_correct">';
                                    $data .= '<div class="answer mx-auto" style="padding:20px; background-color:#ff9; display:none" id="' . $sub_result['id_question'] . '">';
                                    $data .= '<h6>Lời giải:</h6>';
                                    $data .= '<h6>' . $sub_result["answer"] . '</h6>';
                                    $data .=  '</div>';
                                    $data .=  '</div>';
                                    $data .= '</div>';
                                    $index++;
                                }
                            }
                        }
                        $count++;
                        echo $data;
                    }
                    ?>
                </div>
                <div class="mx-auto" id="clock">
                    <div class="position-relative">
                        <div class="clock pro-0 position-fixed">
                            <?php
                            include('../admin/dbconnect.php');
                            $sql = $conn->prepare("SELECT * FROM exam WHERE id_exam = '" . $_GET["id_exam"] . "'");
                            $sql->execute();
                            $result = $sql->fetch(PDO::FETCH_ASSOC);
                            echo '<input type="hidden" value="' . $result['time_exam'] . '" id="input-num">';
                            echo '<span class="count" id="clock_text">' . $result['time_exam'] . '</span>';
                            echo '<input type="hidden" value="' . $result['number_exam'] . '" id="number_exam"/>';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fixed-bottom bg-light p-2 d-flex justify-content-center">
                <div aria-label="" id="group_button" class="" style="margin-top:10px;">
                    <div class="d-flex justify-content-end">
                        <input type="button" class="btn btn-success" value="NỘP BÀI" id="btnFinish" name='btnFinish' style="width:150px; box-shadow: rgb(16 18 12 / 50%) 2px 3px 12px 0px;" />
                        <a href="./showexam.php" class="btn btn-success" style="display:none" id="btnRefresh" style="width:150px; box-shadow: rgb(16 18 12 / 50%) 2px 3px 12px 0px;">THOÁT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('./mdresult.php') ?>
    <?php include('./mdconfirm.php') ?>
    <?php include('./mdconfirmresult.php') ?>

    <script type="text/javascript">
        var answers;
        var id_exam = <?php echo json_encode($_GET['id_exam']) ?>;
        var account_id = <?php echo json_encode($_SESSION['account_id']) ?>;
        $(document).ready(function() {
            $('#clock').css("display", "none");
            $('#group_button').css("display", "none");
            $('#modalconfirm').modal('show');
        });
        $('#btnConfirm').click(function() {
            $('#modalconfirm').modal('hide');
            $('#contain_question').css("display", "block");
            $('#clock').css("display", "block");
            $('#group_button').css("display", "block");
        });

        $('#btnFinish').click(function() {
            let mark1 = 0;
            let mark2 = 0;
            let mark = 0;
            let count1 = 0;
            let count2 = 0;
            let count = 0;
            let number_exam = $('#number_exam').val();
            let description = '';

            $('#myQuestionListening div').each(function(k, v) {
                //lấy id của câu hỏi
                let id = $(v).find('h5').attr('id');
                //Lấy đáp án đúng
                let answer = $(v).find('form fieldset input[type="hidden"]').val();
                //lấy lựa chọn của người dùng
                let choice = $(v).find('form fieldset input[type="radio"]:checked').attr('class');
                if (choice == answer && id != undefined) {
                    mark1 += (1 / 3);
                    count1 += 1;
                } else {
                    // console.log('Câu có id: ' + id + ' sai');
                }
            });
            $('#myQuestionReading div').each(function(k, v) {
                //lấy id của câu hỏi
                let id = $(v).find('h5').attr('id');
                //Lấy đáp án đúng
                let answer = $(v).find('form fieldset input[type="hidden"]').val();
                //lấy lựa chọn của người dùng
                let choice = $(v).find('form fieldset input[type="radio"]:checked').attr('class');
                if (choice == answer && id != undefined) {
                    mark2 += (1 / 3);
                    count2 += 1;
                } else {
                    // console.log('Câu có id: ' + id + ' sai');
                }
            });
            m = mark1 + mark2;
            mark = m.toFixed(2);
            if (mark < 1) {
                description = 'Mất gốc tiếng anh. Bạn cần học lại từ đầu';
            } else if (mark <= 3) {
                description = 'Trình độ cơ bản. Khả năng giao tiếp tiếng Anh kém.';
            } else if (mark <= 6.5) {
                description = 'Có khả năng hiểu & giao tiếp tiếng Anh mức độ trung bình. Là yêu cầu đối với học viên tốt nghiệp các trường nghề, cử nhân các trường Cao đẳng (hệ đào tạo 3 năm)';
            } else if (mark <= 8.5) {
                description = 'Có khả năng hiểu & giao tiếp tiếng Anh mức độ trung bình. Là yêu cầu đối với học viên tốt nghiệp các trường nghề, cử nhân các trường Cao đẳng (hệ đào tạo 3 năm)';
            } else {
                description = 'Có khả năng giao tiếp tiếng Anh rất tốt. Sử dụng gần như người bản ngữ dù tiếng Anh không phải tiếng mẹ đẻ';
            }
            $('#score1').text(mark1.toFixed(2) + '/10');
            $('#score2').text(mark2.toFixed(2) + '/10');
            $('#number1').text(count1 + '/30');
            $('#number2').text(count2 + '/30');
            $('#description').text(description);
            $('#modalconfirmresult').modal('show');
        });

        $('#btnConfirmresult').click(function() {
            $('#modalconfirmresult').modal('hide');
            let mark1 = 0;
            let mark2 = 0;
            let mark = 0;
            let count1 = 0;
            let count2 = 0;
            let count = 0;
            let number_exam = $('#number_exam').val();
            let description = '';
            let timecurrent = $('#clock_text').text();
            let time = $('#input-num').val();
            let timesoff = time - timecurrent;
            $('#myQuestionListening div').each(function(k, v) {
                //lấy id của câu hỏi
                let id = $(v).find('h5').attr('id');
                //Lấy đáp án đúng
                let answer = $(v).find('form fieldset input[type="hidden"]').val();
                //lấy lựa chọn của người dùng
                let choice = $(v).find('form fieldset input[type="radio"]:checked').attr('class');
                if (choice == answer && id != undefined) {
                    mark1 += (1 / 3);
                    count1 += 1;
                } else {
                    // console.log('Câu có id: ' + id + ' sai');
                }
            });
            $('#myQuestionReading div').each(function(k, v) {
                //lấy id của câu hỏi
                let id = $(v).find('h5').attr('id');
                //Lấy đáp án đúng
                let answer = $(v).find('form fieldset input[type="hidden"]').val();
                //lấy lựa chọn của người dùng
                let choice = $(v).find('form fieldset input[type="radio"]:checked').attr('class');
                if (choice == answer && id != undefined) {
                    mark2 += (1 / 3);
                    count2 += 1;
                } else {
                    // console.log('Câu có id: ' + id + ' sai');
                }
            });
            m = mark1 + mark2;
            mark = m.toFixed(2);
            count = count1 + count2;
            if (mark < 1) {
                description = 'Mất gốc tiếng anh. Bạn cần học lại từ đầu';
            } else if (mark <= 3) {
                description = 'Trình độ cơ bản. Khả năng giao tiếp tiếng Anh kém.';
            } else if (mark <= 6.5) {
                description = 'Có khả năng hiểu & giao tiếp tiếng Anh mức độ trung bình. Là yêu cầu đối với học viên tốt nghiệp các trường nghề, cử nhân các trường Cao đẳng (hệ đào tạo 3 năm)';
            } else if (mark <= 8.5) {
                description = 'Có khả năng hiểu & giao tiếp tiếng Anh mức độ trung bình. Là yêu cầu đối với học viên tốt nghiệp các trường nghề, cử nhân các trường Cao đẳng (hệ đào tạo 3 năm)';
            } else {
                description = 'Có khả năng giao tiếp tiếng Anh rất tốt. Sử dụng gần như người bản ngữ dù tiếng Anh không phải tiếng mẹ đẻ';
            }

            $.ajax({
                url: './master/add_result.php',
                type: 'post',
                data: {
                    id_exam: id_exam,
                    account_id: account_id,
                    mark1: mark1,
                    mark2: mark2,
                    count: count,
                    description: description,
                    timesoff: timesoff
                },
                success: function(data) {
                    $('#contain_question').toggleClass("w-100");
                    $('#clock').css("display", "none");
                    $('#modalresult').modal('hide');
                    $('html, body').animate({
                        scrollTop: 0
                    }, 'fast');
                    $('#btnRefresh').css("display", "block");
                    $('#btnFinish').css("display", "none");
                }
            });
            $('#modalresult').modal('show');
        });

        $('#btnSubmit').click(function() {
            let mark = 0;
            let count = 0;
            let number_exam = $('#number_exam').val();
            let description = '';
            let timecurrent = $('#clock_text').text();
            let time = $('#input-num').val();
            let timesoff = time - timecurrent;
            $('#modalresult').modal('hide');
            $('#myQuestionListening div').each(function(k, v) {
                let id_answer = $(v).find('.answer').attr('id');

                //lấy id của câu hỏi
                let id = $(v).find('h5').attr('id');
                //Lấy đáp án đúng
                let answer = $(v).find('form fieldset input[type="hidden"]').val();
                //lấy lựa chọn của người dùng
                let choice = $(v).find('form fieldset input[type="radio"]:checked').attr('class');
                if (choice == answer && id != undefined) {
                    mark += (1 / 3);
                    $('#question_' + id + ' > form > fieldset > label.' + answer).css("background-color", "#66FF00");
                    count += 1;
                } else {
                    $('#question_' + id + ' > form > fieldset > label.' + choice).css("background-color", "#FF3300");
                }
                if (id != undefined) {
                    $('#question_' + id + ' > form > fieldset > label.' + answer).css("background-color", "#66FF00");
                    $('#question_' + id + '> #answer_correct > #' + id_answer).css("display", "block");
                }
            });
            $('#myQuestionReading div').each(function(k, v) {
                let id_answer = $(v).find('.answer').attr('id');

                //lấy id của câu hỏi
                let id = $(v).find('h5').attr('id');
                //Lấy đáp án đúng
                let answer = $(v).find('form fieldset input[type="hidden"]').val();
                //lấy lựa chọn của người dùng
                let choice = $(v).find('form fieldset input[type="radio"]:checked').attr('class');
                if (choice == answer && id != undefined) {
                    mark += (1 / 3);
                    $('#question_' + id + ' > form > fieldset > label.' + answer).css("background-color", "#66FF00");
                    count += 1;
                } else {
                    $('#question_' + id + ' > form > fieldset > label.' + choice).css("background-color", "#FF3300");
                }
                if (id != undefined) {
                    $('#question_' + id + ' > form > fieldset > label.' + answer).css("background-color", "#66FF00");
                    $('#question_' + id + '> #answer_correct > #' + id_answer).css("display", "block");
                }
            });
        });
    </script>
</body>

</html>