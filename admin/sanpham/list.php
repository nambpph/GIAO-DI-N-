<div class="row">
    <div class="row frm_title mb">
        <h1>DÁNH SÁCH SẢN PHẨM</h1>
    </div>
    <form action="" method="POST">
        <input type="text" name="kyw">
        <select name="iddm">
            <option value="0" selected>Tất cả</option>
            <?php
            foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                echo ' <option value="'.$id.'">'.$name.'</option>';
            }
            ?>
        </select>
        <input type="submit" name="listok" value="Go">
    </form>
    <div class="row frm_content">
        <div class="row mb10 frm_ds_loai">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ LOẠI</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>HÌNH SẢN PHẨM</th>
                    <th>GIÁ SẢN PHẨM</th>
                    <th>Mô Tả</th>
                    <th>LƯỢT XEM</th>
                    <th>THAO TÁC</th>
                </tr>
                <?php
                foreach ($listsanpham as $sanpham) {
                    extract($sanpham);
                    $editsp = "index.php?act=editsp&id=".$id;
                    $xoasp = "index.php?act=xoasp&id=".$id;
                    $hinhpath = "../upload/" . $img;
                    if (is_file($hinhpath)) {
                        $hinh = "<img src='" .$hinhpath. "' height='80'>";
                    } else {
                        $hinh = "Ko có hình";
                    }
                    echo
                    '<tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>' . $id . '</td>
                    <td>' . $name . '</td>
                    <td>' . $hinh . '</td>
                    <td>' . $price . '</td>
                    <td>' . $mota . '</td>
                    <td>' . $luotxem . '</td>
                    <td> <a href="' . $editsp . '"><input type="button" value="Sửa"></a> | <a href="' . $xoasp . '"> <input type="button" value="Xóa"></a> </td>
                    </tr>';
                }
                ?>

            </table>
        </div>
        <div class="row mb10">
            <input type="button" name="" id="" value="Chọn tất cả">
            <input type="button" name="" id="" value="Bỏ chọn tất cả">
            <input type="button" name="" id="" value="Xóa các mục đã chọn">
            <a href="index.php?act=addsp" onclick="confirm('Bạn có chắc muốn xóa sản phẩm hay không')"><input type="button" name="" id="" value="Nhập Thêm"></a>
        </div>
    </div>
</div>