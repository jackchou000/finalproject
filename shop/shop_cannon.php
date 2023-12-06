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

    $locale = $_GET['locale'];
    $hand = $_GET['hand'];
    $flex = $_GET['Flex'];

    $query = "SELECT * FROM `product` WHERE`pd_locale` = '$locale' AND `pd_hand` = '$hand' AND `flex_id` = '$flex' AND`pd_kit_point` = '高'";
    $result = mysqli_query($conn, $query);
    while ($row_result = mysqli_fetch_assoc($result)) {
        $product_id = $row_result['product_id'];
        $price = $row_result['pd_price'];
        $pname = $row_result['pd_name'];
        $locale = $row_result['pd_locale'];
        $hand = $row_result['pd_hand'];
    }
    $cart->add($product_id, 1, [
        'price' => $price,
        'pname' => $pname,
        'locale' => $locale,
        'hand' => $hand,
    ]);
    header("Location: cart.php");


    //    $cart->add($_POST['id'], $_POST['qty'], [
    //        'price' => $_POST['price'],
    //        'pname' => $_POST['name'],
    //    ]);

}
//購物車結束


include_once "../layout/navbar.php";
include_once "../layout/second_navbar.php";

?>

<main>
    <div class="mt-5">
        <p class="service text-center text-white">CANNON</p>
        <div class="hori-line-shop mb-5 mx-auto"></div>
    </div>
    <div class="contain-fluid" style="height: 600px;">
        <div class="row d-flex align-items-center">
            <div class="col-6">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../public/images/quit1.png" class="img-fluid d-block w-75 quit mx-auto" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../public/images/quit2.png" class="img-fluid d-block w-75 quit mx-auto" alt="...">
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-6">

                <div class="card mb-3 h-100 card-shop">
                    <h3 class="text-white">球桿系列</h3>
                    <h1 class="text-h1">CANNON</h1>
                    <div class="card-body p-0">
                        <h5 class="card-title pt-1 text-white">
                            CANNON PRO 方形圓角桿身，搭配中彎曲點，在射門時發揮最大的爆發力 。</h5>
                        <form action="shop_cannon.php" method="get">
                            <p class="card-text text-white mt-4">材質</p>
                            <div class="d-flex  flex-nowrap">
                                <input type="radio" class="btn-check" name="quality" id="quality1" value="SENIOR" checked>
                                <label class="btn btn-light money-box me-3 p-0" for="quality1">SENIOR<br>
                                    $5,800</label>
                                <input type="radio" class="btn-check" name="quality" id="quality2" value="INTERMEDIATE">
                                <label class="btn btn-light money-box me-3 p-0" for="quality2">INTERMEDIATE <br>
                                    $5,200</label>
                                <input type="radio" class="btn-check" name="quality" id="quality3" value="JUNIOR">
                                <label class="btn btn-light money-box me-3 p-0" for="quality3">JUNIOR <br>
                                    $4,800</label>
                                <input type="radio" class="btn-check" name="quality" id="quality4" value="YOUTH">
                                <label class="btn btn-light money-box me-3 p-0" for="quality4">YOUTH <br>
                                    $4,600</label>
                            </div>
                            <div>
                                <div>
                                    <p class="card-text text-white mt-3">慣用手</p>
                                    <div class="d-flex  flex-nowrap">
                                        <input type="radio" class="btn-check" name="hand" id="hand1" value="左手" checked>
                                        <label class="btn btn-light size-box me-3 p-0" for="hand1">左手</label>
                                        <input type="radio" class="btn-check" name="hand" id="hand2" value="右手">
                                        <label class="btn btn-light size-box me-3 p-0" for="hand2">右手</label>
                                    </div>
                                </div>
                                <div>
                                    <p class="card-text text-white mt-3">場地</p>
                                    <div class="d-flex  flex-nowrap">
                                        <input type="radio" class="btn-check" name="locale" id="ice1" value="冰上" checked>
                                        <label class="btn btn-light size-box me-3 p-0" for="ice1">冰上</label>
                                        <input type="radio" class="btn-check" name="locale" value="陸地" id="ice2">
                                        <label class="btn btn-light size-box me-3 p-0" for="ice2">陸地</label>
                                    </div>
                                </div>
                            </div>

                            <p class="card-text text-white mt-3">Flex</p>
                            <div class="d-flex  flex-nowrap">
                                <input type="radio" class="btn-check" name="Flex" id="Flex8" value="1" disabled>
                                <label class="btn btn-light size-box me-3 p-0" for="Flex8">45</label>
                                <input type="radio" class="btn-check" name="Flex" id="Flex7" value="2" disabled>
                                <label class="btn btn-light size-box me-3 p-0" for="Flex7">50</label>
                                <input type="radio" class="btn-check" name="Flex" id="Flex1" value="3">
                                <label class="btn btn-light size-box me-3 p-0" for="Flex1">65</label>
                                <input type="radio" class="btn-check" name="Flex" id="Flex2" value="4">
                                <label class="btn btn-light size-box me-3 p-0" for="Flex2">70</label>
                                <input type="radio" class="btn-check" name="Flex" id="Flex3" value="5">
                                <label class="btn btn-light size-box me-3 p-0" for="Flex3">75</label>
                                <input type="radio" class="btn-check" name="Flex" id="Flex4" value="6">
                                <label class="btn btn-light size-box me-3 p-0" for="Flex4">80</label>
                                <input type="radio" class="btn-check" name="Flex" id="Flex5" value="7">
                                <label class="btn btn-light size-box me-3 p-0" for="Flex5">85</label>
                                <input type="radio" class="btn-check" name="Flex" id="Flex6" value="8">
                                <label class="btn btn-light size-box me-3 p-0" for="Flex6">90</label>
                            </div>
                            <input type="hidden" name="cartaction" value="add" id="cartaction">
                            <button type="submit" class="btn btn-orange add-to-cart text-white mt-5" name="submit" id="submit">加入購物車
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
            <div class="col text-center text-white" style="font-size: 24px;">圓角型桿身設計，搭配中彎曲點，以及全新的力量釋放技術，<br />
                讓您在大拍射門時的爆發力達到更加的效果
            </div>
        </div>
        <div class="container-fluid mt-5">
            <div class="ract mx-auto"><img src="../public/movie/gif1.gif" alt="" class="img-fluid"></div>
        </div>
    </div>
</main>

<script>
    $(function() {


        // 監聽radio按鈕的變動
        $("input[name='quality']").change(function() {
            // 當選擇a時，啟用所有按鈕
            if ($(this).val() === "SENIOR") {
                $("input[name='Flex']").prop("disabled", false);
                $("input[value='1']").prop("disabled", true);
                $("input[value='2']").prop("disabled", true);

            }
            // 當選擇b時，禁用6.7.8
            else if ($(this).val() === "INTERMEDIATE") {
                $("input[value='1']").prop("disabled", true);
                $("input[value='2']").prop("disabled", true);
                $("input[value='6']").prop("disabled", true);
                $("input[value='7']").prop("disabled", true);
                $("input[value='8']").prop("disabled", true);
            } else if ($(this).val() === "JUNIOR") {
                $("input[name='Flex']").prop("disabled", true);
                $("input[value='2']").prop("disabled", false);

            } else if ($(this).val() === "YOUTH") {
                $("input[name='Flex']").prop("disabled", true);
                $("input[value='1']").prop("disabled", false);

            }
        });


    })
</script>
<?php
require_once '../layout/footer.php';
?>