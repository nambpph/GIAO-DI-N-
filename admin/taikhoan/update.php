<div class="row mb">
        <div class="box_trai mr demo">
        <div class="row mb">
            <div class="box_title">CẬP NHẬT TÀI KHOẢN</div>
            <div class="row box_content form_tk">
                <?php 
                    if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                        extract($_SESSION['user']);
                    }
                ?>
                <form action="index.php?act=edit_tk" method="post">
                    <div class="row mb10">
                        Email: 
                        <input type="email" name="email" value="<?= $email ?>">
                    </div>
                    <div class="row mb10">
                        User: 
                        <input type="text" name="user" value="<?= $user ?>">
                    </div>
                    <div class="row mb10">
                        Password
                        <input type="password" name="pass" value="<?= $pass ?>">
                    </div> 
                    <div class="row mb10">
                        Address
                        <input type="text" name="address" value="<?= $address ?>">
                    </div> 
                    <div class="row mb10">
                        Telephone
                        <input type="text" name="tel" value="<?= $tel ?>">
                    </div> 
                    <div class="row mb10">
                        Role
                        <input type="text" name="role" value="<?= $role ?>">
                    </div> 
                        <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit" value="CẬP NHẬT" name="capnhat">
                        <input type="reset" value="NHẬP LẠI">
                </form>
                <h2 class="thongbao">
                    <?php
                        if(isset($thongbao)&&($thongbao!="")){
                            echo $thongbao;
                        }
                    ?>
                </h2>
            </div>
        </div>
            </div>
        </div>