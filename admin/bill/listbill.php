<div class="row2">
         <div class="row2 font_title">
          <h1>DANH SÁCH BÌNH LUẬN</h1>
         </div>
         <form action="index.php?act=listsp" method="POST">

         <div class="row2 form_content ">
           <table>
            <tr>
                <th></th>
                <th>Mã Đơn Hàng</th>
                <th>Khách hàng</th>
                <th>Số lượng Hàng</th>
                <th>Giá trị Đơn Hàng</th>
                <th>Tình trạng đơn hàng</th>
                <th>Thao tác</th>
            </tr>
            <?php
                foreach($listbill as $bill){
                    extract($bill);
                    $kh=$bill["bill_name"].'
                    <br> '.$bill['bill_email'].'
                    <br> '.$bill['bill_address'].'
                    <br> '.$bill['bill_tel'];
                    $ttdh=get_ttdh($bill["bill_status"]);
                    $countsp=loadall_cart_count($bill['id']);
                    echo'<tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$bill['id'].'</td>
                        <td>'.$kh.'</td>
                        <td>'.$countsp.'</td>
                        <td>'.$bill['total'].'</strong> VND </td>
                        <td>'.$ttdh.'</td>
                        <td><a href=""><input type="button" value="Sửa"> </a> <a href=""> <input type="button" value="Xóa"> </a> </td>
                </tr>';
                }
            ?>

            
           </table>
           </div>
           <div class="row mb10 ">
         <input class="mr20" type="button" value="CHỌN TẤT CẢ">
         <input  class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
         <input  class="mr20" type="button" value="Xóa bỏ mục đã chọn">
           </div>
          </form>
         </div>
        </div>
    </div>