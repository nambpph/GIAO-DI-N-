<div class="row2">
         <div class="row2 font_title">
          <h1>DANH SÁCH BÌNH LUẬN</h1>
         </div>
         <form action="index.php?act=listsp" method="POST">
         <input type="text" name="kyw">
            <select name="iddm" >
                <option value="0" selected>tat ca</option>
              <?php
                foreach($listdanhmuc as $danhmuc){
                  extract($danhmuc);
                  echo '<option value="'.$id.'">'.$name.'</option>';
                }
              ?>
            </select>
                <input type="submit" name="listok" value="GO">
        <div class="row2 mb10 formds_loai">

         <div class="row2 form_content ">
           <table>
            <tr>
                <th></th>
                <th>ID</th>
                <th>Nội dung bình luận</th>
                <th>Iduser</th>
                <th>Idpro</th>
                <th>Ngày bình luận</th>
                <th></th>
            </tr>
            <?php
                foreach($listbinhluan as $binhluan){
                    extract($binhluan);
                    $suabl = "index.php?act=suabl&id=".$id;
                    $xoabl = "index.php?act=xoabl&id=".$id;

                    echo'<tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>'.$id.'</td>
                    <td>'.$noidung.'</td>
                    <td>'.$iduser.'</td>
                    <td>'.$idpro.'</td>
                    <td>'.$ngaybinhluan.'</td>
                    <td><a href="'.$suabl.'"><input type="button" value="Sửa"> </a> <a href="'.$xoabl.'"> <input type="button" value="Xóa"> </a> </td>
                </tr>';
                }
            ?>

            
           </table>
           </div>
           <div class="row mb10 ">
         <input class="mr20" type="button" value="CHỌN TẤT CẢ">
         <input  class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
           </div>
          </form>
         </div>
        </div>
    </div>