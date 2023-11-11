<?php
    if (is_array($danhmuc)) {
        extract($danhmuc);
    }
?>

<div class="row">
            <div class="row frm_title">
                <h1>CẬP NHẬT Loại Hàng Hóa</h1>
            </div>
            <div class="row frm_content">
                <form action="index.php?act=updatedm" method="POST">
                    <div class="row mb10">
                        Mã loại <br>
                        <input type="text" name="maloai" id="" placeholder="Auto..." disabled>
                    </div>
                    <div class="row mb10">
                        Tên loại <br>
                        <input type="text" name="tenloai" id="" value="<?php if (isset($name)&& ($name !='')) {
                            echo $name;
                        } ?>">
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" id="" value="<?php if (isset($id)&& ($id>0)) {
                            echo $id;
                        } ?>">
                        <input type="submit" name="capnhat" id="" value="CẬP NHẬT">
                        <input type="reset" name="" id="" value="NHẬP LẠI">
                        <a href="index.php?act=listdm"><input type="button" name="" id="" value="Danh Sách"></a>
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