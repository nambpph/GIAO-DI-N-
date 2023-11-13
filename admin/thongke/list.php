<div class="row2">
         <div class="row2 font_title">
          <h1>BẢNG THỐNG KÊ HÀNG HÓA</h1>
         </div>
         <form action="index.php?act=listtk" method="POST">
        <div class="row2 mb10 formds_loai">
         <div class="row2 form_content ">
           <table>
            <tr>
                <th></th>
                <th>STT</th>
                <th>LOẠI HÀNG</th>
                <th>SỐ LƯỢNG</th>
                <th>GIÁ CAO NHẤT</th>
                <th>GIÁ THẤP NHẤT</th>
                <th>GIÁ TRUNG BÌNH</th>
                <th></th>
            </tr>
            <?php
                foreach($listthongke as $thongke){
                    extract($thongke);

                    echo'<tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>'.$madm.'</td>
                    <td>'.$tendm.'</td>
                    <td>'.$countsp.'</td>
                    <td>'.$maxprice.'</td>
                    <td>'.$minprice.'</td>
                    <td>'.$avgprice.'</td>
                </tr>';
                }
            ?>
            <div class="row mb10">
            <a href="index.php?act=bieudo"><input type="button" value="Xem biểu đồ"></a>
            </div>
            
           </table>
           </div>
         </div>
        </div>
    </div>