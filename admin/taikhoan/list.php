
<div class="row">
    <div class="row frm_title">
        <h1>DANH SÁCH TÀI KHOẢN</h1>
    </div>
    <div class="row frm_content">
        <div class="row mb10 frm_ds_loai">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ TÀI KHOẢN</th>
                    <th>TÊN ĐĂNG NHÂP</th>
                    <th>MẬT KHẨU</th>
                    <th>EMAIL</th>
                    <th>ĐỊA CHỈ</th>
                    <th>ĐIỆN THOẠI</th>
                    <th>VAI TRÒ</th>
                    <th>KHÁC</th>
                    
                </tr>
                <?php
                    foreach ($listtk as $tk) {
                        extract($tk);
                        $edittk="index.php?act=edit_tk&id=".$id;
                        $deletetk="index.php?act=delete_tk&id=".$id;
                echo         
                '<tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>'.$id.'</td>
                    <td>'.$user.'</td>
                    <td>'.$pass.'</td>
                    <td>'.$email.'</td>
                    <td>'.$address.'</td>
                    <td>'.$tel.'</td>
                    <td>'.$role.'</td>
                    <td> <a href="'.$edittk.'"><input type="button" value="Sửa"></a> | <a href="'.$deletetk.'"> <input type="button" value="Xóa"></a> </td>
                </tr>';
                    }
                ?>
            
            </table>
        </div>
        <div class="row mb10">
            <input type="button" name="" id="" value="Chọn tất cả">
            <input type="button" name="" id="" value="Bỏ chọn tất cả">
            <input type="button" name="" id="" value="Xóa các mục đã chọn">
            <a href="index.php?act=addtk"><input type="button" name="" id="" value="Nhập Thêm"></a>
        </div>
    </div>
</div>