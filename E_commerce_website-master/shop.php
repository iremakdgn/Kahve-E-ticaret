<?php
include("connect.php");
session_start();
ob_start();
?>
<!doctype html>
<html class="no-js" lang="zxx">

 <head>
    <?php include("head.php"); ?>
</head>
<body>
<!-- Add your site or application content here -->


<!--header area start-->
<?php include 'header.php'; ?>
<!--header area end-->

<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h3>Alışveriş</h3>
                        <ul>
                            <li><a href="index.php">Anasayfa</a></li>
                            <li><i class="fa fa-angle-right"></i></li>
                            <li>Alışveriş</li>
                        </ul>
                    </div>
                </div>
            </div>
        
    </div>
</div>
<!--breadcrumbs area end-->

<!--shop wrapper start-->
<div class="shop_wrapper shop_reverse">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="sidebar_widget">
                    <!--widget color start-->
                    <?php include("filtrele.php"); ?>
                    <!--widget banner end-->
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                <!--shop toolbar start-->
                <div class="shop_toolbar">

                    <div class="list_button">
                        <ul class="nav" role="tablist">


                        </ul>
                    </div>
                    <div class="select_option number">
                        <form action="#">
                            <label>Göster:</label>
                            <select name="orderby" id="short">
                                <option selected value="1">9</option>
                                <option value="1">19</option>
                                <option value="1">30</option>
                            </select>
                        </form>
                    </div>
                    <div class="select_option">
                    <?php siralama(); ?>
                </div>
                </div>
                <!--shop toolbar enddddd-->
                <!--shop tab product-->
                <div class="shop_tab_product">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="large" role="tabpanel">
                            <div class="row">
                                <!--shop tab product-->
                                <?php urun_goster(); ?>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="list" role="tabpanel">
                            <div class="single_product list_item">
                                <div class="row align-items-center">


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--shop tab product end-->

                <!--pagination style start-->
                <div class="pagination_style">
                    <ul>
                        <li class="current_number">1</li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>
                <!--pagination style end-->
            </div>
        </div>
    </div>
</div>
<!--shop wrapper end-->


<!--shipping area start-->
<?php include("bottom_menu.php"); ?>
</body>

<!-- Mirrored from demo.devitems.com/cigar-v3/cigar/shop.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Nov 2018 17:58:12 GMT -->
</html>
<?php ob_end_flush(); ?>
