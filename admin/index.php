<?php
session_start();
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "../model/thongke.php";
include "../model/cart.php";
include "header.php";
// controller

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            // kiểm tra ng dùng có ấn vào add ko
            if (isset($_POST['themmoi']) && ($_POST['themmoi']) && ($_POST['tenloai'] != '')) {
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao = "Thêm thành công";
            } else {
                $thongbaor = 'tên rỗng';
            }
            include "danhmuc/add.php";
            break;

        case 'listdm':
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;

        case 'deletedm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();

            include "danhmuc/list.php";
            break;
        case 'editdm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $danhmuc = loadone_danhmuc($_GET['id']);
            }
            // $listdanhmuc = loadall_danhmuc();
            include "danhmuc/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat']) && ($_POST['tenloai'] != ' ')) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_danhmuc($id, $tenloai);
                $thongbao = "cập nhật thành công";
                // echo pdo_execute($sql);
            } else {
                $thongbao = 'tên rỗng';
            }
            $sql = "SELECT * FROM danhmuc ORDER BY id DESC";
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;


        // controller sản phẩm

        case 'addsp':
            // kiểm tra ng dùng có ấn vào add ko
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $dir = "../upload/";
                $target_file = $dir . basename($_FILES['hinh']['name']);
                if (move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)) {

                } else {

                }
                insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm);
                $thongbao = "Thêm thành công";
                // echo pdo_execute($sql);
            } else {
                $thongbaor = 'tên rỗng';
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/add.php";
            break;

        case 'listsp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($kyw, $iddm);
            include "sanpham/list.php";
            break;

        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanpham($_GET['id']);
            }
            $listsanpham = loadall_sanpham("", 0);

            include "sanpham/list.php";
            break;
        case 'editsp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = loadone_sanpham($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/update.php";
            break;
        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $dir = "../upload/";
                $target_file = $dir . basename($_FILES['hinh']['name']);
                if (move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file))
                    ;
                $listdanhmuc = loadall_danhmuc();
                update_sanpham($id, $tensp, $giasp, $hinh, $mota, $iddm);
                $thongbao = "cập nhật thành công";
            }

            $listsanpham = loadall_sanpham("", 0);
            include "sanpham/list.php";
            break;

        // control tài khoản
        case 'addtk':
            // kiểm tra ng dùng có ấn vào add ko
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                insert_taikhoan($email,$user,$pass);
                $thongbao = "Thêm thành công";
                // echo pdo_execute($sql);
            } else {
                $thongbao = 'Thêm thành công';
            }
            include "taikhoan/add.php";
            break;

        case 'edit_tk':

            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $role = $_POST['role'];
                $id = $_POST['id'];
                update_taikhoan2($id, $user, $pass, $email, $address, $tel, $role);
                $_SESSION['user'] = checkuser($user, $pass);
                header('location: index.php?act=dskh');
            }
            include "taikhoan/update.php";
            break;
        case 'delete_tk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_taikhoan($_GET['id']);
            }
            $listtk = loadall_taikhoan();

            include "taikhoan/list.php";
            break;

        case 'dskh':
            $listtk = loadall_taikhoan();
            include "taikhoan/list.php";
            break;

        case "dsbl":
            $listbinhluan = loadall_binhluan(0);
            include "binhluan/list.php";
            break;

        case 'xoabl':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_binhluan($_GET['id']);
            }
            $listbinhluan = loadall_binhluan(0);

            include "binhluan/list.php";
            break;

        case 'thongke':
            $listthongke = loadall_thongke();
            include "thongke/list.php";
            break;

        case 'bieudo':
            $listthongke = loadall_thongke();
            include "thongke/bieudo.php";
            break;

        case 'listbill':
            if (isset($_POST['kyw']) && ($_POST['kyw']!="")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = '';
            }
            $listbill = loadall_bill($kyw,0);
            include "bill/listbill.php";
            break;

        default:
            include "home.php";
            break;

    }
} else {
    include "home.php";
}



include "footer.php";
?>