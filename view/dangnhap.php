<div class="breadcrumbs_area">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb_content">
                <ul>
                    <li><a href="index.php">home</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>Đăng nhập</li>
                </ul>

            </div>
        </div>
    </div>
</div>
<?php
                        if(isset($_SESSION['user'])){
                            extract($_SESSION['user'])
                    ?>
<div class="row mb10">
    <h3>Xin chào <br>
    <?= $user?> </h3>
</div>
<div class="row mb10">
    <li>
        <a href="index.php?act=mybill">Đơn hàng của tôi</a>
    </li>
    <li>
        <a href="index.php?act=quenmk">Quên mật khẩu</a>
    </li>
    <li>
        <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
    </li>
    <?php if($role == 1){ ?>
    <li>
        <a href="admin/index.php">Đăng nhập Admin</a>
    </li>
    <?php } ?>
    <li>
        <a href="index.php?act=thoat">Thoát</a>
    </li>
</div>
<?php }else{
                    ?>
<div class="customer_login">
    <div class="row">
        <!--login area start-->
        <div class="col-lg-6 col-md-6">
            <div class="account_form">
                <h2>Đăng nhập </h2>
        <form action="index.php?act=dangnhap" method="POST">
                    <p>
                        <label>Username or email <span>*</span></label>
                        <input type="text" name="user">
                    </p>
                    <p>
                        <label>Passwords <span>*</span></label>
                        <input type="password" name="pass">
                    </p>
                    <div class="login_submit">
                        <button type="submit" value="Đăng nhập" name="dangnhap">Đăng nhập</button>
                        <button type="reset" value="">Nhập lại</button>
                        <label for="remember">
                            <input id="remember" type="checkbox">
                            Remember me
                        </label>
                        <a href="index.php?act=quenmk">Quên mật khẩu?</a>
                    </div>
                    <?php }?>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- customer login end -->

</div>
<!--pos page inner end-->
</div>
</div>
<!--pos page end-->

<!--footer area start-->