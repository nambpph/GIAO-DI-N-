<div class="breadcrumbs_area">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb_content">
                <ul>
                    <li><a href="index.html">home</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>Sản phẩm</li>
                </ul>

            </div>
        </div>
    </div>
</div>
<div class="box_banner">
    <div class="box_title"><strong><?=$tendm ?></strong></div>
    <div class="row box_content">
        <?php
                        $i=0;
                        foreach($dssp as $sp){
                            extract($sp);
                            $linksp = "index.php?act=sanphamct&idsp=".$id;
                            $hinh=$img_path.$img;
                            if(($i == 2) || ($i == 5) || ($i == 8) || ($i == 11)){
                                $mr ="";
                            }else{
                                $mr ="mr";
                            }
                            echo '<div class="box_sp '.$mr.'">
                            <div class="img">
                                <a href="'.$linksp.'">
                                    <img src="'.$hinh.'" alt="">
                                </a>
                            </div>
                            <div class="price">'.$price.' VND</div>
                            <div class="product-name"><a href="'.$linksp.'">'.$name.'</a></div>
                            <div class="addtocart">
                                <form action="index.php?act=addtocart" method="post">
                                    <input type="hidden" name="id" value="'.$id.'">
                                    <input type="hidden" name="name" value="'.$name.'">
                                    <input type="hidden" name="img" value="'.$img.'">
                                    <input type="hidden" name="price" value="'.$price.'">
                                    <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                                </form>
                            </div>
                        </div>';
                    $i++;
                }
                    ?>
    </div>
</div>