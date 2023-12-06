<?php
require_once "../utils/dbconnect.php";
//購物車開始
require_once "../utils/class.Cart.php";
//購物車初始化
$cart = new Cart([
    // 可增加到購物車的商品最大值, 0 = 無限
    'cartMaxItem' => 0,
    // 可增加到購物車的每個商品數量最大值, 0 = 無限
    'itemMaxQuantity' => 0,
    // 不要使用cookie，關閉瀏覽器後購物車物品將消失
    'useCookie' => false,
]);


// 新增購物車內容
if (isset($_GET["cartaction"]) && ($_GET["cartaction"] == "add")) {

    $rule = $_GET['rule'];
    $size = $_GET['size'];
    $color = $_GET['color'];

    $query = "SELECT * FROM `product` WHERE `pd_name` LIKE '%{$rule}' AND `pd_color` ='$color' AND `pd_size` ='$size' ";

    $result = mysqli_query($conn, $query);
    while ($row_result = mysqli_fetch_assoc($result)) {
        $product_id = $row_result['product_id'];
        $price = $row_result['pd_price'];
        $pname = $row_result['pd_name'];
        $locale = $row_result['pd_locale'];
        $hand = $row_result['pd_hand'];
        $color = $row_result['pd_color'];
    }
    $cart->add($product_id, 1, [
        'price' => $price,
        'pname' => $pname,
        'locale' => $locale,
        'hand' => $hand,
        'color' => $color,

    ]);
    header("Location: cart.php");
}
//購物車結束


include_once "../layout/navbar.php";
include_once "../layout/second_navbar.php";

?>


<main>

    <div class="mt-5">
        <p class="service text-center text-white">GLOVE</p>
        <div class="hori-line-glove mb-5 mx-auto"></div>
    </div>
    <div class="contain-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-5">
                <div class="bg-light">
                    <img src="../public/images/gloves-1.png" class="img-fluid" id="show" alt="">
                </div>
            </div>
            <div class="col-5">
                <div class="card mb-3 h-100 card-shop">
                    <h3 class="text-white fw-bolder">手套系列</h3>
                    <h1 class="text-white fw-bold">SNIPER</h1>
                    <div class="card-body p-0">
                        <h5 class="card-title pt-1 text-white">SNIPER
                            給你最舒適的手感，掌心面採用止滑材質，讓您能發揮最佳表現 </h5>
                        <p class="card-text text-white mt-4">規格</p>
                        <form action="shop_glove.php" method="get">
                            <div class="d-flex  flex-nowrap">
                                <input type="radio" class="btn-check" name="rule" id="rule1" value="SR" checked>
                                <label class="btn btn-light money-box me-3 p-0" for="rule1">SENIOR <br>
                                    $8,000</label>
                                <input type="radio" class="btn-check" name="rule" id="rule2" value="INT">
                                <label class="btn btn-light money-box me-3 p-0" for="rule2">INTERMEDIATE <br> $8,000</label>
                                <input type="radio" class="btn-check" name="rule" id="rule3" value="JR">
                                <label class="btn btn-light money-box me-3 p-0" for="rule3">JUNIOR <br>
                                    $8,000</label>
                                <input type="radio" class="btn-check" name="rule" id="rule4" value="YT">
                                <label class="btn btn-light money-box me-3 p-0" for="rule4">YOUTH <br>
                                    $8,000</label>
                            </div>
                            <p class="card-text text-white mt-3">Size</p>
                            <div class="d-flex  flex-nowrap">
                                <input type="radio" class="btn-check" name="size" id="size1" value="14" checked>
                                <label class="btn btn-light size-box me-3 p-0" for="size1">14</label>
                                <input type="radio" class="btn-check" name="size" value="15" id="size2">
                                <label class="btn btn-light size-box me-3 p-0" for="size2">15</label>
                            </div>
                            <p class="card-text text-white mt-3">Color</p>
                            <div class="d-flex  flex-nowrap">
                                <input type="radio" class="btn-check" name="color" id="color1" value="白" checked>
                                <label class="btn btn-light me-3 color-button p-0" for="color1" id="button1"><img src="../public/images/gloves-1.png" class="img-fluid"></label>
                                <input type="radio" class="btn-check" name="color" id="color2" value="藍">
                                <label class="btn btn-light me-3 color-button p-0" for="color2" id="button2"><img src="../public/images/gloves-2.png" class="img-fluid"></label>
                                <input type="radio" class="btn-check" name="color" id="color3" value="綠">
                                <label class="btn btn-light me-3 color-button p-0" for="color3" id="button3"><img src="../public/images/gloves-3.png" class="img-fluid"></label>
                                <input type="radio" class="btn-check" name="color" id="color4" value="黑">
                                <label class="btn btn-light me-3 color-button p-0" for="color4" id="button4"><img src="../public/images/gloves-4.png" class="img-fluid"></label>
                                <input type="radio" class="btn-check" name="color" id="color5" value="橘">
                                <label class="btn btn-light me-3 color-button p-0" for="color5" id="button5"><img src="../public/images/gloves-5.png" class="img-fluid"></label>
                            </div>
                            <input type="hidden" name="cartaction" value="add" id="cartaction">
                            <button type="submit" class="btn btn-orange add-to-cart text-white mt-5" name="submit" id="submit" value="submit">加入購物車
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container-fluid " style="margin-top: 200px">
        <div class="mt-3">
            <p class="product-intorduct text-center">產品詳細介紹</p>
            <div class="hori-line-intorduct mb-5 mx-auto"></div>
        </div>
        <div class="row flex-column">
            <div class="col text-center text-white">輕量化設計，加上服貼的手感，SNIPER手套給您最快速的反應</div>
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
    $(function() {
        //點擊小圖換大圖
        $("#button1").click(function() {
            $("#show").attr("src", "../public/images/gloves-1.png");
        });
        $("#button2").click(function() {
            $("#show").attr("src", "../public/images/gloves-2.png");
        });
        $("#button3").click(function() {
            $("#show").attr("src", "../public/images/gloves-3.png");
        });
        $("#button4").click(function() {
            $("#show").attr("src", "../public/images/gloves-4.png");
        });
        $("#button5").click(function() {
            $("#show").attr("src", "../public/images/gloves-5.png");
        });
    });
</script>


<?php
require_once '../layout/footer_black.php';
?>