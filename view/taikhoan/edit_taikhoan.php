  <div class="customer_login">
    <div class="row">
        <!--login area start-->
        <div class="col-lg-6 col-md-6">
            <div class="account_form">
                <h2>Cập nhật thông tin</h2>
                <?php 
                    if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                        extract($_SESSION['user']);
                    }

                ?>
                <form action="index.php?act=edit_taikhoan" method="post">
                    <p>
                        <label>Email <span>*</span></label>
                        <input type="email" name="email" value="<?= $email ?>">                    </p>
                    <p>
                        <label>User <span>*</span></label>
                        <input type="text" name="user" value="<?= $user ?>">
                    </p>
                    <p>
                        <label>Password <span>*</span></label>
                        <input type="password" name="pass" value="<?= $pass ?>">
                    </p>
                    <p>
                        <label>Address <span>*</span></label>
                        <input type="text" name="address" value="<?= $address ?>">
                    </p>
                    <p>
                        <label>telephone <span>*</span></label>
                        <input type="text" name="tel" value="<?= $tel ?>">
                    </p>
                    <div class="login_submit">
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <button type="submit" value="CẬP NHẬT" name="capnhat"> Cập nhật
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