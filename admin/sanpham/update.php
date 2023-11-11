<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "../upload/" . $img;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='80'>";
} else {
    $hinh = "Ko có hình";
}
echo "$id, $name, $price, $img, $mota, $iddm";
?>

<div class="row">
    <div class="row frm_title">
        <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
    </div>

    <div class="row frm_content">
        <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
            <div class="row mb10">
                <select name="iddm">
                    
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        if ($iddm == $danhmuc['id']) $s="selected"; else $s="";
                        echo ' <option value="'.$danhmuc['id'].'" '.$s.'>' .$danhmuc['name'].'</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="row mb10">
                Tên Sản Phẩm <br>
                <input type="text" name="tensp" value="<?php echo $name ?>">
            </div>
            <div class="row mb10">
                Giá Sản Phẩm<br>
                <input type="text" name="giasp" value="<?php echo $price ?>">
            </div>
            <div class="row mb10">
                Hình Phẩm <br>
                <input type="file" name="hinh" value="<?php ?>">
                <?php echo $hinh ?>
            </div>
            <div class="row mb10">
                Mô tả Sản Phẩm <br>
                <textarea name="mota" cols="30" rows="10"><?php echo $mota ?></textarea>
            </div>
            <div class="row mb10">
                <input type="hidden" name="id" value="<?php echo $id ?>" id="">
                <input type="submit" name="capnhat" value="Cập Nhật">
                <input type="reset" name="" value="Nhập Lại">
                <a href="index.php?act=listsp"><input type="button" name="" id="" value="Danh Sách"></a>
            </div>
            <?php
            if (isset($thongbaor)) {
                echo $thongbao;
                echo $thongbaor;
            }
            ?>
        </form>
    </div>
</div>
</div>