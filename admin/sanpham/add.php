<div class="row">
            <div class="row frm_title">
                <h1>THÊM MỚI SẢN PHẨM</h1>
            </div>
            <div class="row frm_content">
                <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">
                    <div class="row mb10">
                        Danh Mục <br>
                        <select name="iddm" id="">
                            <?php 
                                foreach ($listdanhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    echo ' <option value="'.$id.'">'.$name.'</option>';
                                }
                            ?>      
                        </select>
                    </div>
                    <div class="row mb10">
                        Tên Sản Phẩm <br>
                        <input type="text" name="tensp">
                    </div>
                    <div class="row mb10">
                        Giá Sản Phẩm<br>
                        <input type="text" name="giasp" >
                    </div>
                    <div class="row mb10">
                        Hình Sản Phẩm <br>
                        <input type="file" name="hinh" >
                    </div>
                    <div class="row mb10">
                        Mô tả Sản Phẩm <br>
                        <textarea name="mota" cols="30" rows="10"></textarea>
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="Thêm Mới">
                        <input type="reset" name="" value="Nhập Lại">
                        <a href="index.php?act=listsp"><input type="button" name="" value="Danh Sách"></a>
                    </div>
                </form>
            </div>
        </div>
    </div>