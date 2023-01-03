<!DOCTYPE html>
<html lang="en">
<?php include('../pages/head.php');
   
?>

<body>
    <?php session_start();
    include('../pages/nav.php'); ?>
    <div class="pt-4 mt-2">
    </div>
    <section class="vh-100">
        <div class="w-100 bg-light" style="height: 80px;text-align: center;padding-top: 20px;">
            <div class="container">
                <h2 class="text-dark">Chi tiết đề thi</h2>
            </div>
        </div>
        <div class="container mt-3 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-10 col-xl-8">
                    <table id="dtBasicExample" class="table table-striped table-bordered table-sm container" cellspacing="0" style="width:100%">
                        <tbody>
                            <?php
                            include('../admin/dbconnect.php');
                            $res1 = mysqli_query($link, "SELECT * FROM exam WHERE id_exam='" . $_GET['id'] . "'");
                            while ($row = mysqli_fetch_array($res1)) {
                                $_SESSION['id_categoryexam']= $row['id_categoryexam'];
                            ?>
                                <tr class="py-3">
                                    <th class="th-sm pt-2 pl-3" style="width: 30%; height:50px;">
                                        Tên
                                    </th>
                                    <td class="th-sm pt-2 pl-3">
                                        <?php echo $row['name_exam']; ?>
                                    </td>
                                </tr>
                                <tr class="py-3">
                                    <th class="th-sm pt-2 pl-3" style="width: 30%; height:50px;">
                                        Thời gian
                                    </th>
                                    <td class="th-sm pt-2 pl-3">
                                        <?php echo $row['time_exam']; ?>
                                    </td>
                                </tr>
                                <tr class="py-3">
                                    <th class="th-sm pt-2 pl-3" style="width: 30%; height:50px;">
                                        Số câu
                                    </th>
                                    <td class="th-sm pt-2 pl-3">
                                        <?php echo $row['number_exam']; ?>
                                    </td>
                                </tr>
                                <tr class="py-3">
                                    <th rowspan="8" class="th-sm pt-2 pl-3" style="width: 30%; height:50px;">
                                        Nội dung
                                    </th>
                                </tr>
                                <?php
                                include('../admin/dbconnect.php');
                                if ($row['id_categoryexam'] == 1) {
                                    $res = mysqli_query($link, "SELECT * FROM category_question WHERE id_categoryquestion<=7");
                                    while ($row_result = mysqli_fetch_array($res)) {
                                ?>
                                        <tr class="py-3">
                                            <td class="th-sm pt-2 pl-3">
                                                <?php echo $row_result['name_categoryquestion']; ?>:
                                                <?php echo $row_result['description']; ?>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                } else {
                                    $res = mysqli_query($link, "SELECT * FROM category_question WHERE id_categoryquestion = 7 OR id_categoryquestion >=2 AND id_categoryquestion <=4");
                                    while ($row_result = mysqli_fetch_array($res)) {
                                    ?>
                                        <tr class="py-3">
                                            <td class="th-sm pt-2 pl-3">
                                                <?php echo $row_result['description']; ?>
                                                
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }
                                ?>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <div class="text-center">
                        <a href="./exam.php?id_exam=<?php echo $_GET['id']?>"><button type="button" class="btn btn-success">Vào thi</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>