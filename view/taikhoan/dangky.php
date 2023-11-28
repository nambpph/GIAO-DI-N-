<!--header end -->
<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb_content">
                <ul>
                    <li><a href="index.php">home</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>Đăng kí</li>
                </ul>

            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!-- customer login start -->
<div class="customer_login">
    <div class="row">
        <!--login area start-->
        <div class="col-lg-6 col-md-6">
            <div class="account_form">
                <h2>Đăng kí</h2>
                <form action="index.php?act=dangky" method="post">
                    <p>
                        <label>Email <span>*</span></label>
                        <input type="email" name="email">
                    </p>
                    <p>
                        <label>Username or email <span>*</span></label>
                        <input type="text" name="user">
                    </p>
                    <p>
                        <label>Passwords <span>*</span></label>
                        <input type="password" name="pass">
                    </p>
                    <div class="login_submit">
                        <button type="submit" name="dangky">Đăng ký</button>
                        <button type="reset" value="">Nhập lại</button>
                        <label for="remember">
                            <input id="remember" type="checkbox">
                            Remember me
                        </label>
                        <a href="index.php?act=quenmk">Quên mật khẩu?</a>
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
<!--login area start-->

<!--register area start-->
<!--register area end-->

<!-- customer login end -->

</div>
<!--pos page inner end-->
</div>
</div>
<!--pos page end-->

<!--footer area start-->