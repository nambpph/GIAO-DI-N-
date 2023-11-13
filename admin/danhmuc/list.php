<div class="row">
    <div class="row frm_title">
        <h1>DANH SÁCH DANH MỤC</h1>
    </div>
    <div class="row frm_content">
        <div class="row mb10 frm_ds_loai">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ LOẠI</th>
                    <th>TÊN LOẠI</th>
                    <th>THAO TÁC</th>
                </tr>
                <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        $editdm="index.php?act=editdm&id=".$id;
                        $deletedm="index.php?act=deletedm&id=".$id;
                echo         
                '<tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>'.$id.'</td>
                    <td>'.$name.'</td>
                    <td> <a href="'.$editdm.'"><input type="button" value="Sửa"></a> | <a href="'.$deletedm.'"> <input type="button" value="Xóa"></a> </td>
                </tr>';
                    }
                ?>
            
            </table>
        </div>
        <div class="row mb10">
            <input type="button" name="" id="" value="Chọn tất cả">
            <input type="button" name="" id="" value="Bỏ chọn tất cả">
            <input type="button" name="" id="" value="Xóa các mục đã chọn">
            <a href="index.php?act=adddm"><input type="button" name="" id="" value="Nhập Thêm"></a>
        </div>
    </div>

</div>