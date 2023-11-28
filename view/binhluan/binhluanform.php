<?php
    session_start();
    include "../../model/pdo.php";
    include "../../model/binhluan.php";
    $idpro = $_REQUEST['idpro'];
    $dsbl = loadall_binhluan($idpro);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        body{
            margin: 0;
        }
        *{
            font-size: 1.5vw;
            color: #333;
        }
    </style>
</head>
<body>      
    <div class="row mb">
        <div class="box_title">BÌNH LUẬN</div>
        <div class="box_content2 binhluan">
            <table>
                <tr>
                    <th>NỘI DUNG</th>
                    <th>ID USER</th>
                    <th>NGÀY BÌNH LUẬN</th>
                </tr>
                <?php
                    foreach ($dsbl as $bl) {
                        extract($bl);
                        $linkdm = "index.php?act=sanpham&iddm=".$id;
                        echo '<tr><td>'.$noidung.'</td>';
                        echo '<td>'.$iduser.'</td>';
                        echo '<td>'.$ngaybinhluan.'</td></tr>';
                    }
                ?>
            </table>
        </div>
        <div class="box_footer sear_box">
            <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                <input type="hidden" name="idpro" value="<?=$idpro?>">
                <input type="text" name="noidung" >
                <input type="submit" name="guibinhluan" value="GỬI BÌNH LUẬN">
            </form>
        </div>
    </div>

    <?php
        if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
            $noidung = $_POST['noidung'];
            $idpro = $_POST['idpro'];
            $iduser = $_SESSION['user']['id'];
            $ngaybinhluan = date('h:i:sa d/m/Y');
            insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan);
            header("location: ".$_SERVER['HTTP_REFERER']);
        }
    ?>
</body>
</html>
