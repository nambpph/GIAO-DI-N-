<div class="row">
            <div class="row frm_title">
                <h1>Thêm Mới Loại Hàng Hóa</h1>
            </div>
            <div class="row frm_content">
                <form action="index.php?act=adddm" method="POST">
                    <div class="row mb10">
                        Mã loại <br>
                        <input type="text" name="maloai" id="" placeholder="Auto..." disabled>
                    </div>
                    <div class="row mb10">
                        Tên loại <br>
                        <input type="text" name="tenloai" id="">
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="themmoi" id="" value="Thêm Mới">
                        <input type="reset" name="" id="" value="Nhập Lại">
                        <a href="index.php?act=listdm"><input type="button" name="" id="" value="Danh Sách"></a>
                    </div>
                    <?php
                        if (isset($thongbaor)) {
                            // echo $thongbao;
                            echo $thongbaor;
                        }
                    ?>
                </form>
            </div>
        </div>
    </div>