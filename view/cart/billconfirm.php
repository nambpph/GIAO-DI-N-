
<div class="row mb">
    <div class="box_trai mr">
        <div class="row mb">
            <div class="box_title">CẢM ƠN</div>
            <div class="row box_content" style="text-align: center;">
                <h2>Đơn hàng của bạn sẽ được giao sớm nhất có thể</h2>
            </div>
        </div>
        <?php
            if(isset($bill) && is_array($bill)){
                extract($bill);
            }
        ?>
        <div class="row mb">
            <div class="box_title">THÔNG TIN ĐƠN HÀNG</div>
            <div class="row box_content" style="text-align: center;">
                <li>Mã đơn hàng: DAM-<?=$bill['id']?></li>
                <li>Ngày đặt hàng: <?=$bill['ngaydathang']?></li>
                <li>tổng đơn hàng: <?=$bill['total']?></li>
                <li>Phương thức thanh toán: <?=$bill['bill_pttt']?></li> 
            </div> 
        </div>
        <div class="row mb">
            <div class="box_title">THÔNG TIN ĐẶT HÀNG</div>
            <div class="row tt">
                <table>
                    <tr>
                        <td>NGƯỜI ĐẶT HÀNG</td>
                        <td><?= $bill['bill_name']?></td>
                    </tr>
                    <tr>
                        <td>ĐỊA CHỈ</td>
                        <td><?= $bill['bill_address']?></td>
                    </tr>
                    <tr>
                        <td>EMAIL</td>
                        <td><?= $bill['bill_email']?></td>
                    </tr>

                </table>
                
            </div>
        </div>

        <div class="row mb">
            <div class="box_title">PHƯƠNG THỨC THANH TOÁN</div>
            <div class="row tt">
                <table>
                    <tr>
                        <td><input type="radio" name="pttt" checked>TRẢ TIỀN KHI NHẬN HÀNG</td>
                        <td><input type="radio" name="pttt">CHUYỂN KHOẢN NGÂN HÀNG</td>
                        <td><input type="radio" name="pttt">THANH TOÁN ONLINE</td>
                    </tr>
                </table>
                
            </div>
        </div>
        <div class="row mb">
            <div class="box_title">THÔNG TIN GIỎ HÀNG</div>
            <div class="row box_content cart">
                <table>
                        <?php bill_chi_tiet($billct);?>
                </table>
            </div>
        </div>
    </div>
</div>
