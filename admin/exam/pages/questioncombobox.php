    <option selected>Lựa chọn câu hỏi</option>
    <?php include('../../dbconnect.php') ?>;
    <?php
    $sql2 = $conn->prepare("SELECT * FROM questtion WHERE id_categoryquestion = '".$_POST["id_categoryquestion"]."'");
    $sql2->execute();
    while ($result2 = $sql2->fetch(PDO::FETCH_ASSOC)) {
        echo '<option value="' . $result2['id_question'] . '" id="select_question">' . $result2['id_question'] . '.' . $result2['name_question'] . '</option>';
    }
    ?>