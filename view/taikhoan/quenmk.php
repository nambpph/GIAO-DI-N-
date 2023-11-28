       <div class="customer_login">
    <div class="row">
        <!--login area start-->
        <div class="col-lg-6 col-md-6">
            <div class="account_form">
                <h2>Quên mật khẩu</h2>
                <form action="index.php?act=quenmk" method="post">
                    <p>
                        <label>Email <span>*</span></label>
                        <input type="email" name="email">
                    </p>
                    <div class="login_submit">
                    <button type="submit" value="GỬI" name="guiemail"> Gửi
                        <button type="reset" value="">Nhập lại</button>
                    </div>

                </form>
                <?php
                        if(isset($thongbao)&&($thongbao!="")){
                            echo $thongbao;
                        }
                    ?>
            </div>
        </div>
    </div>
</div>