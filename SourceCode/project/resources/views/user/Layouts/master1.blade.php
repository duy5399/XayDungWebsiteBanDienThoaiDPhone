<!DOCTYPE html>
<html>
    <head>
        <title>ISMART STORE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <base href="{{asset('public/user/')}}/"> -->
        <link href="{!!url('public/user/css/bootstrap.min.css')!!}" rel="stylesheet">
        <link href="public/user/css/bootstrap/bootstrap-theme.min.css" rel="stylesheet" />
        <link href="public/user/css/bootstrap/bootstrap.min.css" rel="stylesheet" />
        <link href="public/user/reset.css" rel="stylesheet" />
        <link href="public/user/css/carousel/owl.carousel.css" rel="stylesheet" />
        <link href="public/user/css/carousel/owl.theme.css" rel="stylesheet" />
        <link href="public/user/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <!-- <link href="style.css" rel="stylesheet" /> -->
        <link href="public/user/css/import/fonts.css" rel="stylesheet" />
        <link href="public/user/css/import/global.css" rel="stylesheet" />
        <link href="public/user/css/import/header.css" rel="stylesheet" />
        <link href="public/user/css/import/footer.css" rel="stylesheet" />
        <link href="public/user/css/import/home.css" rel="stylesheet" />
        <link href="public/user/css/import/category_product.css" rel="stylesheet" />
        <link href="public/user/css/import/detail_product.css" rel="stylesheet" />
        <link href="public/user/css/import/detail_blog.css" rel="stylesheet" />
        <link href="public/user/css/import/cart.css" rel="stylesheet" />
        <link href="public/user/css/import/checkout.css" rel="stylesheet" />
        <link href="public/user/css/import/login.css" rel="stylesheet" />
        <link href="public/user/css/import/info_account.css" rel="stylesheet" />
        <link href="public/user/css/import/change_password.css" rel="stylesheet" />
        <link href="public/user/css/import/register.css" rel="stylesheet" />
        <link href="public/user/css/import/forgot_password.css" rel="stylesheet" />

        <link href="public/user/responsive.css" rel="stylesheet" />
        <script src="public/user/js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script src="public/user/js/elevatezoom-master/jquery.elevatezoom.js" type="text/javascript"></script>
        <script src="public/user/js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
        <script src="public/user/js/carousel/owl.carousel.js" type="text/javascript"></script>
        <script src="public/user/js/main.js" type="text/javascript"></script>
        <script src="public/user/js/myscript.js" type="text/javascript"></script>
        <script src="modules/cart/js/app.js" type="text/javascript"></script>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.3"></script>
        <SCRIPT LANGUAGE="JavaScript">
            function confirmAction_delete_cart() {
                return confirm("B???n mu???n lo???i b??? s???n ph???m n??y kh???i gi??? h??ng?")
            }
            function confirmAction_delete_all_cart() {
                return confirm("B???n mu???n lo???i b??? t???t c??? s???n ph???m kh???i gi??? h??ng?")
            }
            function confirmAction_users() {
                return confirm("B???n mu???n ????ng xu???t?")
            }
            function confirmAction_detail() {
                return confirm("S???n ph???m n??y ???? h???t h??ng, b???n vui l??ng ch???n s???n ph???m kh??c? ")
            }
            function confirmAction_email() {
                return confirm("B???n vui l??ng v??o email ????? x??c nh???n? ")
            }
        </SCRIPT>
        <script>
            function cart(id) {
                $.get("?mod=cart&act=add", {"id": id}, function (data) {

                });

            }
        </script>
    </head>
    <body>
        <div id="site">
            <div id="container">
                <div id="header-wp">
                    <div id="head-top" class="clearfix">
                        <div class="wp-inner">
                            <div id="main-menu-wp" class="fl-left">
                                <ul id="main-menu" class="clearfix">
                                    <li class="active">
                                        <a href="?page=home" title="">Trang ch???</a>
                                    </li>
                                    <li>
                                        <a href="?mod=post&act=blog" title="">Blog</a>
                                    </li>
                                    <?php
                                    //require 'db/connect.php';
                                    // $sql = "select * from page where status = 1";
                                    // $result = mysqli_query($conn, $sql);
                                    // $page = array();
                                    // $num_rows = mysqli_num_rows($result);
                                    // if ($num_rows > 0) {
                                    //     while ($row = mysqli_fetch_assoc($result)) {
                                    //         $page[] = $row;
                                    //     }
                                    // }
                                    ?>
                                    <?php
                                    // foreach ($page as $item) {
                                    //     ?>
                                    //     <li>
                                    //         <a href="?mod=page&act=main" title=""><?php //echo $item['page_title'] ?></a>
                                    //     </li>
                                    //     <?php
                                    // }
                                    ?>
                                    <li>
                                        <a href="?mod=page&act=contact" title="">Li??n h???</a>
                                    </li>
                                </ul>
                            </div>

                            <?php
                            if (isset($_SESSION['is_login'])) {
                                ?>
                                <div id="user-login" class="dropdown dropdown-extended fl-right">
                                    <button class="dropdown-toggle clearfix" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <h3 id="account" class="fl-right">Hello <strong><?php //if (is_login()) //echo info_user('fullname'); ?></strong></h3>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="?mod=users&act=info_account" title="Th??ng tin c?? nh??n">Th??ng tin c?? nh??n</a></li>
                                        <!--                                        <li><a href="?mod=users&act=change_password" title="?????i m???t kh???u">?????i m???t kh???u</a></li>-->
                                        <li><a class="logout" onclick="return confirmAction_users()" href="?mod=users&act=logout">????ng xu???t</a></li>
                                    </ul>
                                </div>
                                <?php
                            }else {
                                ?>
                                <div id="action-user" class="fl-right">
                                    <div id="not-signed">
                                        <a href="?mod=users&act=login" title="" id="login">????ng nh???p</a>
                                        <span id="icon">/</span>
                                        <a href="?mod=users&act=register" title="" id="reg">????ng k??</a>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div id="head-body" class="clearfix">
                        <div class="wp-inner">
                            <a href="?page=home" title="" id="logo" class="fl-left"><img src="public/images/logo.png"/></a>
                            <div id="search-wp" class="fl-left">
                                <form method="POST" action="?mod=search&act=search_product">
                                    <input type="text" name="keyword" id="search" placeholder="Nh???p t??? kh??a t??m ki???m t???i ????y!">
                                    <button type="submit" name="btn_search" id="btn_search">T??m ki???m</button>
                                </form>
                            </div>
                            <div id="action-wp" class="fl-right">
                                <div id="advisory-wp" class="fl-left">
                                    <span class="title">T?? v???n</span>
                                    <span class="phone">0987.654.321</span>
                                </div>
                                <div id="btn-respon" class="fl-right"><i class="fa fa-bars" aria-hidden="true"></i></div>
                                <a href="?mod=cart&act=show" title="gi??? h??ng" id="cart-respon-wp" class="fl-right">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>

                                    <?php
                                    if (isset($_SESSION['cart']['buy'])) {
                                        $num_order = count($_SESSION['cart']['buy']);
                                    } else {
                                        $num_order = 0;
                                    }
                                    ?>
                                    <span id="num"><?php //echo $num_order; ?></span>
                                </a>
                                <div id="cart-wp" class="fl-right">
                                    <div id="btn-cart">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>

                                        <?php
                                        if (isset($_SESSION['cart']['buy'])) {
                                            $num_order = count($_SESSION['cart']['buy']);
                                        } else {
                                            $num_order = 0;
                                        }
                                        ?>
                                        <span id="num"><?php //echo $num_order; ?></span>
                                    </div>
                                    <div id="dropdown">
                                        <p class="desc">C?? <span><?php //echo $num_order ?> s???n ph???m</span> trong gi??? h??ng</p>
                                        <?php
                                        if (isset($_SESSION['cart']['buy'])) {
                                            //$list_buy = get_list_by_cart();
                                            ?>
                                            <ul class="list-cart">
                                                <?php
                                                foreach ($list_buy as $buy) {
                                                    ?>
                                                    <li class="clearfix">
                                                        <a href="" title="" class="thumb fl-left">
                                                            <img src="admin/uploads/<?php //echo $buy['product_thumb'] ?>" alt="">
                                                        </a>
                                                        <div class="info fl-right">
                                                            <a href="" title="" class="product-name"><?php //echo $buy['product_name'] ?></a>
                                                            <p class="price"><?php ////echo currency_format($buy['price_new']) ?></p>
                                                            <p class="qty">S??? l?????ng: <span><?php //echo $buy['qty'] ?></span></p>
                                                        </div>
                                                    </li>
                                                    <?php
                                                }
                                                ?>
                                            </ul>
                                            <?php
                                        }
                                        ?>
                                        <div class="total-price clearfix">
                                            <?php
                                            if (isset($_SESSION['cart']['info']['total'])) {
                                                $total = $_SESSION['cart']['info']['total'];
                                            } else {
                                                $total = 0;
                                            }
                                            ?>
                                            <p class="title fl-left">T???ng:</p>
                                            <p class="price fl-right"><?php //echo currency_format($total); ?></p>

                                        </div>
                                        <dic class="action-cart clearfix">
                                            <a href="?mod=cart&act=show" title="Gi??? h??ng" class="view-cart fl-left">Gi??? h??ng</a>
                                            <?php
                                            if (isset($_SESSION['is_login'])) {
                                                ?>
                                                <a href="?mod=check_out&act=checkout" title="Thanh to??n" class="checkout fl-right">Thanh to??n</a>
                                                <?php
                                            } else {
                                                ?>
                                                <a href="?mod=users&act=login" title="????ng nh???p" class="checkout fl-right">Thanh to??n</a>
                                                <?php
                                            }
                                            ?>
                                        </dic>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="main-content-wp" class="home-page clearfix">
                        <div class="wp-inner">
                                
<div class="sidebar fl-left">
    <div class="section" id="category-product-wp">
        <div class="section-head">
            <h3 class="section-title">Danh m???c s???n ph???m</h3>
        </div>
        <div class="secion-detail">
            <?php
            if (isset($list_category)) {
                ?>
                <ul class="list-item">
                    <?php
                    foreach ($list_category as $category) {
                        ?>
                        <li>
                            <a href="?mod=product&act=category_product&id=<?php //echo $category['cat_id'] ?>" title=""><?php //echo $category['cat_name'] ?></a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
                <?php
            }
            ?>
        </div>
    </div>
    <div class="section" id="selling-wp">
        <div class="section-head">
            <h3 class="section-title">S???n ph???m b??n ch???y</h3>
        </div>
        <div class="section-detail">
            <?php
            if (!empty($selling_products)) {
                ?>
                <ul class="list-item">
                    <?php
                    foreach ($selling_products as $item) {
                        $item['url'] = "?mod=product&act=detail&cat_id={$item['cat_id']}&id={$item['id']}";
                        ?>
                        <li class="clearfix">
                            <a href="<?php //echo $item['url']; ?>" title="" class="thumb fl-left">
                                <img src="admin/uploads/<?php //echo $item['product_thumb']; ?>" alt="">
                            </a>
                            <div class="info fl-right">
                                <a href="<?php //echo $item['url']; ?>" title="" class="product-name"><?php //echo $item['product_name']; ?></a>
                                <div class="price">
                                    <span class="new"><?php //echo currency_format($item['price_new']); ?></span>

                                </div>
                                <?php
                                if ($item['qty_product'] > 0) {
                                    ?>
                                    <a href="?mod=cart&act=add&id=<?php //echo $item['id']; ?>" title="" class="buy-now">Mua ngay</a>
                                    <?php
                                } else {
                                    ?>
                                    <a href="" onclick="return confirmAction_detail()" title="" class="buy-now">Mua ngay</a>
                                    <?php
                                }
                                ?>


                            </div>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
                <?php
            }
            ?>
        </div>
    </div>
<!--    <div class="section" id="banner-wp">
        <div class="section-detail">
            <a href="?page=detail_blog_product" title="" class="thumb">
                <img src="public/images/banner.png" alt="">
            </a>
        </div>
    </div>-->
</div>

@yield('content')

<div id="footer-wp">
    <div id="foot-body">
        <div class="wp-inner clearfix">
            <div class="block" id="info-company">
                <h3 class="title">ISMART</h3>
                <p class="desc">ISMART lu??n cung c???p lu??n l?? s???n ph???m ch??nh h??ng c?? th??ng tin r?? r??ng, ch??nh s??ch ??u ????i c???c l???n cho kh??ch h??ng c?? th??? th??nh vi??n.</p>
                <div id="payment">
                    <div class="thumb">
                        <img src="public/images/img-foot.png" alt="">
                    </div>
                </div>
            </div>
            <div class="block menu-ft" id="info-shop">
                <h3 class="title">Th??ng tin c???a h??ng</h3>
                <ul class="list-item">
                    <li>
                        <p>Tr?????ng ?????i h???c Th??? D???u M???t</p>
                    </li>
                    <li>
                        <p>033 848 6121</p>
                    </li>
                    <li>
                        <p>duy5399@gmail.com</p>
                    </li>
                </ul>
            </div>
            <div class="block menu-ft policy" id="info-shop">
                <h3 class="title">Ch??nh s??ch mua h??ng</h3>
                <ul class="list-item">
                    <li>
                        <a href="" title="">Quy ?????nh - ch??nh s??ch</a>
                    </li>
                    <li>
                        <a href="" title="">Ch??nh s??ch b???o h??nh - ?????i tr???</a>
                    </li>
                    <li>
                        <a href="" title="">Ch??nh s??ch h???i vi???n</a>
                    </li>
                    <li>
                        <a href="" title="">Giao h??ng - l???p ?????t</a>
                    </li>
                </ul>
            </div>
            <div class="block" id="newfeed">
                <h3 class="title">B???ng tin</h3>
                <p class="desc">????ng k?? v???i chung t??i ????? nh???n ???????c th??ng tin ??u ????i s???m nh???t</p>
                <div id="form-reg">
                </div>
            </div>
        </div>
    </div>
    <div id="foot-bot">
        <div class="wp-inner">
            <p id="copyright">??Coryright by L?? S??? Duy</p>
        </div>
    </div>
</div>
</div>
<div id="menu-respon">
    <a href="?page=home" title="" class="logo">ISMART</a>
    <div id="menu-respon-wp">
        <div id="main-menu-wp">
            <ul class="" id="main-menu-respon">
                <li>
                    <a href="?" title="">Trang ch???</a>
                </li>
                <li>
                    <a href="#" title="">Laptop</a>
                    <ul class="sub-menu">
                        <li>
                            <a href="?mod=product&act=category_product&id=1" title="">DELL</a>
                        </li>
                        <li>
                            <a href="?mod=product&act=category_product&id=2" title="">ASUS</a>
                        </li>
                        <li>
                            <a href="?mod=product&act=category_product&id=3" title="">HP</a>
                        </li>
                        <li>
                            <a href="?mod=product&act=category_product&id=4" title="">MACBOOK</a>
                        </li>
                        <li>
                            <a href="?mod=product&act=category_product&id=5" title="">LENOVO</a>
                        </li>
                        <li>
                            <a href="?mod=product&act=category_product&id=6" title="">MSI</a>
                        </li>
                        <li>
                            <a href="?mod=product&act=category_product&id=7" title="">ACER</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="?mod=post&act=blog" title="">Blog</a>
                    <ul class="sub-menu">
                        <li>
                            <a href="?mod=post&act=main&id=1" title="">????nh gi??</a>
                        </li>
                        <li>
                            <a href="?mod=post&act=main&id=2" title="">C???m nang</a>
                        </li>
                        <li>
                            <a href="?mod=post&act=main&id=3" title="">Tin t???c</a>
                        </li>
                        <li>
                            <a href="?mod=post&act=main&id=4" title="">So s??nh</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="?mod=page&act=main" title="">Gi???i thi???u</a>
                </li>
                <li>
                    <a href="?mod=page&act=contact" title="">Li??n h???</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="btn-top"><img src="public/images/icon-to-top.png" alt=""/></div>
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
//        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=849340975164592";
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="198558491069654"
  theme_color="#13cf13"
  logged_in_greeting="Xin ch??o, t??i c?? th??? h??? tr??? g?? cho b???n kh??ng?"
  logged_out_greeting="Xin ch??o, t??i c?? th??? h??? tr??? g?? cho b???n kh??ng?">
</div>
</body>
</html>