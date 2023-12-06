<?php
include_once "../layout/navbar.php";
include_once "../layout/second_navbar.php";
?>
<main>
    <div class="mt-5">
        <p class="service text-center text-white">JERSEY</p>
        <div class="hori-line-jersey mb-5 mx-auto"></div>
    </div>
    <div class="contain-fluid" style="height: 500px;">
        <div class="row d-flex justify-content-center">
            <div class="col-5">
                <div class="bg-light">
                    <img src="../public/images/jersey_black.png" class="img-fluid w-100" alt="">
                </div>
            </div>
            <div class="col-5">
                <form action="">
                    <div class="card mb-3 h-100 card-shop">
                        <h3 class="text-white">練習球衣</h3>
                        <h1 class="text-h1 text-white">JERSEY</h1>
                        <div class="card-body p-0">
                            <h5 class="card-title pt-1 text-white">
                                APEX練習球衣，採用舒適與輕量化布料，讓您穿著時更舒適更輕盈</h5>
                            <p class="card-text text-white margin-jersey">Color</p>
                            <div class="d-flex  flex-nowrap " role="group">
                                <input type="radio" class="btn-check" name="color" id="color1" checked>
                                <label class="btn box-black p-0" for="color1"></label>
                                <input type="radio" class="btn-check" name="color" id="color2">
                                <label class="btn  box-white p-0" for="color2"></label>
                                <input type="radio" class="btn-check" name="color" id="color3">
                                <label class="btn  box-gray p-0" for="color3"></label>
                                <input type="radio" class="btn-check" name="color" id="color4">
                                <label class="btn  box-navy p-0" for="color4"></label>
                                <input type="radio" class="btn-check" name="color" id="color5">
                                <label class="btn  box-red p-0" for="color5"></label>
                            </div>
                            <div>
                                <p class="card-text text-white margin-jersey ">Size</p>
                                <div class="d-flex  flex-nowrap" role="group">
                                    <input type="radio" class="btn-check" name="size2" id="size2_1" checked>
                                    <label class="btn btn-light size-box me-3 p-0" for="size2_1">S</label>
                                    <input type="radio" class="btn-check" name="size2" id="size2_2">
                                    <label class="btn btn-light size-box me-3 p-0" for="size2_2">M</label>
                                    <input type="radio" class="btn-check" name="size2" id="size2_3">
                                    <label class="btn btn-light size-box me-3 p-0" for="size2_3">L</label>
                                    <input type="radio" class="btn-check" name="size2" id="size2_4">
                                    <label class="btn btn-light size-box me-3 p-0" for="size2_4">XL</label>
                                </div>
                                <button type="submit" class="btn btn-orange add-to-cart text-white mt-5" name="submit" id="submit">加入購物車
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="margin-top: 300px">
        <div class="mt-3">
            <p class="product-intorduct text-center">產品詳細介紹</p>
            <div class="hori-line-intorduct mb-5 mx-auto"></div>
        </div>
        <div class="row flex-column">
            <div class="col text-center text-white">APEX練習球衣，採用舒適與輕量化布料，讓您穿著時更舒適更輕盈</div>

        </div>
        <div class="container-fluid mt-5">
            <div class="ract mx-auto"></div>
        </div>
    </div>
    <?php
    include '../layout/sw_slider.php'
    ?>
</main>

<script>

</script>


<?php
require_once '../layout/footer_black.php';
?>