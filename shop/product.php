<?php
include_once "../layout/navbar.php";
?>

<main class="new-product">
    <div class="container-fluid">
        <div class="row">
            <h1 class="text-white product-text mx-auto" style="margin: 200px 0 60px  ">最新商品</h1>
            <div class="product-text-line mx-auto"></div>
        </div>
    </div>
    <div class="container-fluid slider-position overflow-hidden">
        <div class="w-100 mx-auto h-100">
            <div class="row flex-nowrap left ms-2 me-2">
                <div class="col-sm-4 mt-5">
                    <div class="card mb-3 bg-product" style="border:3px solid #fff; cursor:pointer">
                        <img src="../public/images/2023CCM_FT6P_Skate_Families_400x400.png" class="card-img-top img-position" alt="...">
                        <div class="card-body mx-auto mt-3">
                            <h3 class="text-white text-center mb-3">S1 skate</h3>
                            <button class="btn btn-orange text-white">SAVE NOW</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mt-5">
                    <div class="card mb-3 bg-product" style="border:3px solid #fff; cursor:pointer">
                        <img src="../public/images/2021CCM_DTC-SKATE_Menu-400x400-100K.png" class="card-img-top img-position" alt="...">
                        <div class="card-body mx-auto mt-3">
                            <h3 class="text-white text-center mb-3">S2 skate</h3>
                            <button class="btn btn-orange text-white">SAVE NOW</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mt-5">
                    <div class="card mb-3 bg-product" style="border:3px solid #fff; cursor:pointer">
                        <img src="../public/images/2022CCM_DTC-SKATE_Menu-400x400-AS5P.png" class="card-img-top img-position" alt="...">
                        <div class="card-body mx-auto mt-3">
                            <h3 class="text-white text-center mb-3">S3 skate</h3>
                            <button class="btn btn-orange text-white">SAVE NOW</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mt-5">
                    <div class="card mb-3 bg-product" style="border:3px solid #fff; cursor:pointer">
                        <img src="../public/images/hyperlite2__1_large.png" class="card-img-top img-position" alt="...">
                        <div class="card-body mx-auto mt-3">
                            <h3 class="text-white text-center mb-3">S4 skate</h3>
                            <button class="btn btn-orange text-white">SAVE NOW</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mt-5">
                    <div class="card mb-3 bg-product" style="border:3px solid #fff; cursor:pointer">
                        <img src="../public/images/m3_01_large.png" class="card-img-top img-position" alt="...">
                        <div class="card-body mx-auto mt-3">
                            <h3 class="text-white text-center mb-3">S5 skate</h3>
                            <button class="btn btn-orange text-white">SAVE NOW</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mt-5">
                    <div class="card mb-3 bg-product" style="border:3px solid #fff; cursor:pointer">
                        <img src="../public/images/VAPOR3XPROSKATESenior_large.png" class="card-img-top img-position" alt="...">
                        <div class="card-body mx-auto mt-3">
                            <h3 class="text-white text-center mb-3">S6 skate</h3>
                            <button class="btn btn-orange text-white">SAVE NOW</button>
                        </div>
                    </div>
                </div>
            </div>
            <i class="bi bi-chevron-compact-left" id="btnPrev"></i>
            <i class="bi bi-chevron-compact-right" id="btnNext"></i>
        </div>
    </div>
    <div class="container-fluid">
        <h1 class="text-white product-text mx-auto" id="cannon">全產品</h1>
        <div class="all-product-text-line mx-auto"></div>
    </div>
    <div class="container-fluid slider2-position overflow-hidden">
        <div class="w-100 mx-auto h-100">
            <div class="row flex-nowrap sec_left ms-2 me-2">
                <div class="col-sm-4 mt-5">
                    <div class="card-boxshadow">
                        <a href="shop_cannon.php">
                            <div class="card bg-product">
                                <img src="../public/images/2023CCM_DTC_StickLineUp_600x750_2.png" class="card-img-top img-position" alt="...">
                                <div class="card-body mt-3 p-0">
                                    <div class="btn btn-opacity text-white" >球桿一代</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 mt-5 ">
                    <div class="card-boxshadow">
                        <a href="shop_dagger.php">
                            <div class="card  bg-product">
                                <img src="../public/images/homepage-secondary-mostpopular-mysteryministicks.jpg" class="card-img-top img-position" alt="...">
                                <div class="card-body mt-3 p-0">
                                    <div class="btn btn-opacity text-white">球桿二代</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 mt-5">
                    <div class="card-boxshadow">
                        <a href="shop_glove.php">
                            <div class="card  bg-product">
                                <img src="../public/images/NEW.png" class="card-img-top img-position" alt="...">
                                <div class="card-body mt-3 p-0">
                                    <div class="btn btn-opacity text-white">手套</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 mt-5">
                    <div class="card-boxshadow">
                        <a href="shop_jersey.php">
                            <div class="card mb-3 bg-product">
                                <img src="../public/images/nav-promo-banner-protective-supreme-mach_500x.jpg" class="card-img-top img-position" alt="...">
                                <div class="card-body mt-3 p-0">
                                    <div class="btn btn-opacity text-white">球衣</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <i class="bi bi-chevron-compact-left" id="secbtnPrev"></i>
            <i class="bi bi-chevron-compact-right" id="secbtnNext"></i>
        </div>
    </div>
    <div class="container-fluid ">
        <h1 class="text-white product-text mx-auto mb-2">客製化服務</h1>
        <div class="body-product-text-line mx-auto"></div>
        <div class="row">
            <div class="col-6">
                <div class="card bg-dark text-white ">
                    <img src="../public/images/CUSTOMIZED.png" class="card-img" alt="...">
                    <div class="card-img-overlay stick">

                        <div class="row d-flex justify-content-center align-items-end">
                            <div class="col-4">
                                <h5 class="card-title card-title-body">客製化球桿</h5>
                                <p class="card-text card-title-text">客製化球桿部分<br>1.姓名&nbsp;2.號碼<br />3.球隊&nbsp;4.LOGO
                                </p>
                            </div>
                            <div class="col-2"></div>
                            <div class="col-4">
                                <a href="" class="btn btn-orange text-white card-title-btn ms-3">線上詢價</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card bg-dark text-white">
                    <img src="../public/images/CUSTOMIZED-1.png" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <div class="card-img-overlay stick">

                            <div class="row d-flex justify-content-center align-items-end">
                                <div class="col-4">
                                    <h5 class="card-title card-title-body">客製化裝備
                                    </h5>
                                    <p class="card-text card-title-text">客製化裝備部分<br>1.手套&nbsp;2.號碼&nbsp;<br />3.球隊配色&nbsp;4.姓名
                                    </p>
                                </div>
                                <div class="col-2"></div>
                                <div class="col-4">
                                    <a href="" class="btn btn-orange text-white card-title-btn ms-3">線上詢價</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="../js/slider.js"></script>
<?php
require_once '../layout/footer.php';
?>