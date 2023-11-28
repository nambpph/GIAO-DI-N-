<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb_content">
                <ul>
                    <li><a href="index.html">home</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>single product</li>
                </ul>

            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->


<!--product wrapper start-->
<div class="product_details video_details">
    <div class="row">
        <div class="col-lg-4 col-md-6">
            <div class="product_tab product_video fix">

                <div class="tab-content produc_tab_c">
                    <div class="tab-pane fade show active" id="p_tab1" role="tabpanel">
                        <div class="modal_img">
                            <a href="#"><?php $img=$img_path.$img; echo '<img src="'.$img.'" alt="">'; ?> </a>
                            <div class="img_icone">
                                <img src="assets\img\cart\span-new.png" alt="">
                            </div>
                            <div class="view_img">
                                <a class="video_popup" href="https://www.youtube.com/embed/DR2c266yWEA">View video <i
                                        class="fa fa-search-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="p_tab2" role="tabpanel">
                        <div class="modal_img">
                            <a href="#"><img src="assets\img\product\productbig1.jpg" alt=""></a>
                            <div class="img_icone">
                                <img src="assets\img\cart\span-new.png" alt="">
                            </div>
                            <div class="view_img">
                                <a class="video_popup" href="https://www.youtube.com/embed/DR2c266yWEA">View video <i
                                        class="fa fa-search-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="p_tab3" role="tabpanel">
                        <div class="modal_img">
                            <a href="#"><img src="assets\img\product\productbig2.jpg" alt=""></a>
                            <div class="img_icone">
                                <img src="assets\img\cart\span-new.png" alt="">
                            </div>
                            <div class="view_img">
                                <a class="video_popup" href="https://www.youtube.com/embed/DR2c266yWEA">View video <i
                                        class="fa fa-search-plus"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-6">
            <div class="product_d_right">
                <?php extract($onesp) ?>
                <?php
                                        echo'  <h1>'.$name.'</h1>';
                                        echo '<div class="product_desc">
                                                <p>'.$mota.'</p>
                                            </div>';
                                            echo '<div class="content_price mb-15">';
                                            echo '<span>'.$price.' VND</span>';
                                            echo '   <span class="old-price"></span>
                                            </div>
                                            <div class="box_quantity mb-20">
                                                <form action="#">
                                                    <label>quantity</label>
                                                    <input min="0" max="100" value="1" type="number">
                                                </form> ';
                                                ?>
                <button type="submit" name="addtocart"><i class="fa fa-shopping-cart"></i> add to cart</button>
                <a href="#" title="add to wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
            </div>
            <div class="product_d_size mb-20">
                <label for="group_1">size</label>
                <select name="size" id="group_1">
                    <option value="1">S</option>
                    <option value="2">M</option>
                    <option value="3">L</option>
                </select>
            </div>

            <div class="sidebar_widget color">
                <h2>Choose Color</h2>

                <div class="product_stock mb-20">
                    <p>299 items</p>
                    <span> In stock </span>
                </div>
                <div class="wishlist-share">
                    <h4>Share on:</h4>
                    <ul>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                        <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="comment-container">
        <iframe class="comment-iframe" src="view/binhluan/binhluanform.php?idpro=<?=$id?>" frameborder="0"></iframe>
    </div>
</div>
<!--product details end-->


<!--product info start-->
<div class="product_d_info">
    <div class="row">
        <div class="col-12">
            <div class="product_d_inner">
                <div class="product_info_button">
                    <ul class="nav" role="tablist">
                        <li>
                            <a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info"
                                aria-selected="false">More info</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#sheet" role="tab" aria-controls="sheet"
                                aria-selected="false">Data sheet</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews"
                                aria-selected="false">Reviews</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="info" role="tabpanel">
                        <div class="product_info_content">
                            <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine
                                designs delivering stylish separates and statement dresses which have since evolved into
                                a full ready-to-wear collection in which every item is a vital part of a woman's
                                wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable
                                signature style. All the beautiful pieces are made in Italy and manufactured with the
                                greatest attention. Now Fashion extends to a range of accessories including shoes, hats,
                                belts and more!</p>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="sheet" role="tabpanel">
                        <div class="product_d_table">
                            <form action="#">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="first_child">Compositions</td>
                                            <td>Polyester</td>
                                        </tr>
                                        <tr>
                                            <td class="first_child">Styles</td>
                                            <td>Girly</td>
                                        </tr>
                                        <tr>
                                            <td class="first_child">Properties</td>
                                            <td>Short Dress</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                        <div class="product_info_content">
                            <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine
                                designs delivering stylish separates and statement dresses which have since evolved into
                                a full ready-to-wear collection in which every item is a vital part of a woman's
                                wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable
                                signature style. All the beautiful pieces are made in Italy and manufactured with the
                                greatest attention. Now Fashion extends to a range of accessories including shoes, hats,
                                belts and more!</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="reviews" role="tabpanel">
                        <div class="product_info_content">
                            <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine
                                designs delivering stylish separates and statement dresses which have since evolved into
                                a full ready-to-wear collection in which every item is a vital part of a woman's
                                wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable
                                signature style. All the beautiful pieces are made in Italy and manufactured with the
                                greatest attention. Now Fashion extends to a range of accessories including shoes, hats,
                                belts and more!</p>
                        </div>
                        <div class="product_info_inner">
                            <div class="product_ratting mb-10">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                                <strong>Posthemes</strong>
                                <p>09/07/2018</p>
                            </div>
                            <div class="product_demo">
                                <strong>demo</strong>
                                <p>That's OK!</p>
                            </div>
                        </div>
                        <div class="product_review_form">
                            <form action="#">
                                <h2>Add a review </h2>
                                <p>Your email address will not be published. Required fields are marked </p>
                                <div class="row">
                                    <div class="col-12">
                                        <label for="review_comment">Your review </label>
                                        <textarea name="comment" id="review_comment"></textarea>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <label for="author">Name</label>
                                        <input id="author" type="text">

                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <label for="email">Email </label>
                                        <input id="email" type="text">
                                    </div>
                                </div>
                                <button type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--product info end-->


<!--new product area start-->
<div class="new_product_area product_page">
    <div class="row">
        <div class="col-12">
            <div class="block_title">
                <h3>11 other products category:</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="single_p_active owl-carousel">
            <?php
                foreach ($sp_cung_loai as $sp_cung_loai){
                    extract($sp_cung_loai);
                    $linksp = "index.php?act=sanphamct&idsp=".$id;
                    $img = $img_path.$img;
                    echo '<a href="'.$linksp.'"><img width="200px" src="'.$img.'" alt=""></a>';
                }
            ?>
        </div>
    </div>
</div>

<!--new product area start-->

<!--pos page end-->