<?php
include_once("../templates/shop/header.php");
include_once("../dal/dal.php");
$categories=GetCategories();
$products=GetProducts();
$discounts= array_slice(GetDiscounts(), 0, 2);
?>

    <!-- Carousel Start -->
    <div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#header-carousel" data-slide-to="1"></li>
                        <li data-target="#header-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item position-relative active" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="/assets/shop/img/banner 1.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Smartphone</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Latest Launch Best Smartphone We have a diverse collection of iOS and Android mobiles ranging from basic mobiles, low-range and mid-range phones to very high-end smartphones.</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="/shop/shop.php?category_id=6">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="/assets/shop/img/banner3.png" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Latest Tablets</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Best Tablet We have a diverse collection of iOS and Android Tablet ranging from basic Tablets, low-range and mid-range Tablet to very high-end Tablet.</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="/shop/shop.php?category_id=7">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="/assets/shop/img/banner 1.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Best Gadgets</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Best Electronics like Airpods , pendrive , Headphone, and many more </p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="/shop/shop.php?category_id=7">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="/assets/admin/img/images/big-savings-days.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save <?= $discounts[0]['discount_percent'] ?>%</h6>
                        <h3 class="text-white mb-3"> <?= $discounts[0]['name'] ?></h3>
                        <a href="/shop/shop.php?discount_id=<?= $discounts[0]['id']; ?>" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="/assets/admin/img/images/flipkart-big-billion-days.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save <?= $discounts[1]['discount_percent'] ?>%</h6>
                        <h3 class="text-white mb-3"> <?= $discounts[1]['name'] ?></h3>
                        <a href="/shop/shop.php?discount_id=<?= $discounts[1]['id']; ?>" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">14-Day Return</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->


    <!-- Categories Start -->
    <div class="container-fluid pt-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Categories</span></h2>
        <div class="row px-xl-5 pb-3">
            <?php foreach($categories as $category) { ?>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="/shop/shop.php?category_id=<?= $category['id']?>">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="/uploads/category_img/<?= $category['image'] ?>" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6><?= $category['name'] ?></h6>
                            <small class="text-body">100 Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
    <!-- Categories End -->


    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Featured Products</span></h2>
        <div class="row px-xl-5">
            <?php foreach($products as $product) { if($product['featured'] == 1) {  ?>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="" height="318px" width="318px !important" src="/uploads/products/<?= GetProductThumbnail($product['id']) ?>" alt="">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="/shop/detail.php?product_id=<?= $product['id'] ?>"><?= $product['name'] ?></a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5 style="color:#079707;"><?= round($product['price']*(1-GetDiscountPercent($product['discount_id'])/100)) ?></h5>
                            <h6 class="text-muted ml-2"><del><?= $product['price'] ?></del></h6>&nbsp;
                            <h5><?= GetDiscountPercent($product['discount_id']) ?>% </h5>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <?php }} ?>
        </div>
    </div>
    <!-- Products End -->


    <!-- Offer Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="row px-xl-5">
            <div class="col-md-6">
                <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="/assets/admin/img/images/flipkart-big-billion-days.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save <?= $discounts[1]['discount_percent'] ?>%</h6>
                        <h3 class="text-white mb-3"><?= $discounts[1]['name'] ?></h3>
                        <a href="/shop/shop.php?discount_id=<?= $discounts[1]['id']; ?>" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="/assets/admin/img/images/big-savings-days.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save <?= $discounts[0]['discount_percent'] ?>%</h6>
                        <h3 class="text-white mb-3"> <?= $discounts[0]['name'] ?></h3>
                        <a href="/shop/shop.php?discount_id=<?= $discounts[0]['id']; ?>" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->

    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">BEST OF GADGETS</span></h2>
        <div class="row px-xl-5">
            <?php foreach($products as $product) { if($product['featured'] == 1) {  ?>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="" height="318px" width="318px !important" src="/uploads/products/<?= GetProductThumbnail($product['id']) ?>" alt="">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="/shop/detail.php?product_id=<?= $product['id'] ?>"><?= $product['name'] ?></a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5 style="color:#079707;"><?= round($product['price']*(1-GetDiscountPercent($product['discount_id'])/100)) ?></h5>
                            <h6 class="text-muted ml-2"><del><?= $product['price'] ?></del></h6>&nbsp;
                            <h5><?= GetDiscountPercent($product['discount_id']) ?>% </h5>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <?php }} ?>
        </div>
    </div>
    <!-- Products End -->

    <!-- Vendor Start -->
    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col">
                <div class=" vendor-carousel owl-loaded owl-drag">
                    <div class="bg-light p-4">
                        <img src="/assets/shop/img/vendor-1.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="/assets/shop/img/vendor-2.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="/assets/shop/img/vendor-3.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="/assets/shop/img/vendor-4.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="/assets/shop/img/vendor-5.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="/assets/shop/img/vendor-6.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="/assets/shop/img/vendor-7.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="/assets/shop/img/vendor-8.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->
    <hr>
    <hr>
    <?php
    include_once("../templates/shop/footer.php");
    ?>
