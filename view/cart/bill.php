<div class="row mb">
    <div class="boxtrai mr">

    <form action="index.php?act=billcomfirm" method="post">
        <div class="row mb">
            <div class="boxtitle">Thông tin đặt hàng</div>
            <div class="row boxcontent billform">
            <div class="boxxx">

            <table>
                <?php
                if(isset($_SESSION['user'])){
                    $name = $_SESSION['user']['user'];
                    $address = $_SESSION['user']['address'];
                    $email = $_SESSION['user']['email'];
                    $tel = $_SESSION['user']['tel'];
                }else{
                    $name = "";
                    $address = "";
                    $email = "";
                    $tel = "";
                }
                ?>
                <tr>
                    <td>Người đặt hàng</td>
                    <td><input class="updatein" type="text" name="name" value="<?=$name?>"> </td>
                </tr>
                <tr>
                    <td>Địa chỉ</td>
                    <td><input class="updatein" type="text" name="address" value="<?=$address?>"> </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input class="updatein" type="text" name="email" value="<?=$email?>"> </td>
                </tr>
                <tr>
                    <td>Điện thoại</td>
                    <td><input class="updatein" type="text" name="tel" value="<?=$tel?>"> </td>
                </tr>

            </table>

            </div>
        </div>
        </div>
        <div class="row mb">
        <div class="boxtitle">Phương thức thanh toán</div>
            <div class="row boxcontent">
            <div class="boxx">
                <table>
                    <tr>
                        <td><input type="radio" name="pttt"checked>Trả tiền khi nhận hàng</td>
                        <td><input type="radio" name="pttt">Chuyển khoản ngân hàng</td>
                        <td><input type="radio" name="pttt">Thanh toán online</td>
                    </tr>
                </table>
        </div>
        </div>

        <div class="row nb"></div>
        <div class="boxtitle"><h2>Thông tin giỏ hàng </h2></div>
            <div class="row boxcontent cart">
                <table>
                    <?php viewcart(1); ?>
                </table>
                <div class="row mb bill">
                    <div class="bill">
            <input type="submit" value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang">
            </div>
        </div>
    </form>
    </div>
</div>
