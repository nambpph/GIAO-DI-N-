<div class="breadcrumbs_area">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb_content">
                <ul>
                    <li><a href="index.php">home</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>Đơn hàng của tôi</li>
                </ul>

            </div>
        </div>
    </div>
</div>
<div class="row mb">
            <div class="box_title"></div>
            <div class="row tt">
                <table>
                    <tr>
                        <th>STT</th>
                        <th>MÃ ĐƠN HÀNG</th>
                        <th>NGÀY ĐẶT</th>
                        <th>SỐ LƯỢNG MẶT HÀNG</th>
                        <th>TỔNG GIÁ TRỊ ĐƠN HÀNG</th>
                        <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                    </tr>
                    <?php
                        if(is_array($listbill)){
                            foreach($listbill as $bill){
                                extract($bill);
                                $ttdh=get_ttdh($bill['bill_status']);
                                $countsp=loadall_cart_count($bill['id']);
                                echo '<tr>
                                <td>DAM-'.$bill['id'].'</td>
                                <td>'.$bill['ngaydathang'].'</td>
                                <td>'.$countsp.'</td>
                                <td>'.$bill['total'].'</td>
                                <td>'.$ttdh.'</td>
                                </tr>';
                        }
                    }
                    ?>
                </table>
                
            </div>
        </div>
        </div>
</div>