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


require_once '../layout/navbar.php';
?>
<main style="width: 99vw; height: auto; padding-bottom:50px;" class="bg-white">
    <div class="container">
        <h2 class="text-black mb-4 fw-bold" style="padding-top: 70px;">結帳頁</h2>
        <div class="row align-items-start">
            <div class="col-7">
                <div class=" bg-black text-white" style="height: 58px; font-size: 20px; padding: 16px 0px 0px 22px;">
                    收貨資料
                </div>
                <form action="cartreport.php" method="post" name="cartform" id="cartform">
                    <div class="border " style="padding: 22px;">
                        <div>
                            <p>選擇付費方式</p>
                            <div class="d-flex">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="paytype" id="flexRadioDefault1" value="貨到付款">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        貨到付款　
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="paytype" id="flexRadioDefault2" value="線上刷卡">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        線上刷卡　
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="paytype" id="flexRadioDefault3" value="匯款轉帳" checked>
                                    <label class="form-check-label" for="flexRadioDefault3">
                                        匯款轉帳　
                                    </label>
                                </div>
                            </div>
                            <br>
                        </div>
                        <div>
                            <p>訂購人資料</p>
                            <div>
                                <div class="mb-2">
                                    <label for="customername" class="form-label">姓名</label>
                                    <input type="text" class="form-control" id="customername" name="customername">
                                </div>
                                <div class="mb-2">
                                    <label for="customerphone" class="form-label">電話</label>
                                    <input type="text" class="form-control" id="customerphone" name="customerphone">
                                </div>
                                <div class="mb-2">
                                    <label for="customeremail" class="form-label">信箱</label>
                                    <input type="email" class="form-control" id="customeremail" name="customeremail" placeholder="name@example.com">
                                </div>
                                <div class="mb-2">
                                    <label for="customeraddress" class="form-label">地址</label>
                                    <input type="text" class="form-control" id="customeraddress" name="customeraddress">
                                </div>
                                <div class="mb-2">
                                    <label for="customerremark" class="form-label">備註</label>
                                    <textarea class="form-control" id="customerremark" name="customerremark" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="check d-flex justify-content-center" style=" padding-top: 40px;">
                            <input name="cartaction" type="hidden" id="cartaction" value="update">
                            <input type="submit" class="btn btn-success text-white text-center" name="updatebtn" id="button3" value="送出訂單" style="width: 250px; height:50px; vertical-align: middle;">
                            <input type="button" class="btn btn-secondary text-white text-center ms-5" name="backbtn" id=button4 value="回上一頁" onclick="window.history.back()">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-5 bill-note">
                <div class=" text-black" style="background-color: rgb(217, 217, 217); height: 58px; font-size: 20px; padding: 16px 0px 0px 22px;">
                    訂單摘要
                </div>

                <div class="border" style="padding: 22px 22px 0 22px;">
                    <?php if ($cart->getTotalitem() > 0) { ?>
                        <div class="d-flex justify-content-between">
                            <p>總計</p>
                            <p>$<?php echo number_format($cart->getAttributeTotal('price')); ?> </p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>宅配</p>
                            <p>NT$250</p>
                        </div>
                        <div class="d-flex fw-bold justify-content-between">
                            <p>訂單總額</p>
                            <p>$<?php echo number_format($cart->getAttributeTotal('price') + 250); ?></p>
                        </div>
                </div>
                <div class="text-black" style="background-color: rgb(217, 217, 217); height: 58px; font-size: 20px; padding: 16px 0px 0px 22px;">
                    訂單產品
                </div>

                <div class="border" style="padding: 22px 22px 0px 22px;">
                    <div class="d-flex mx-0">
                        <div class="col-4"></div>
                        <div class="col-4">品名</div>
                        <div class="col-1">數量</div>
                        <div class="col-3  fw-bold" style="text-align: end">
                            小計
                        </div>
                    </div>
                    <?php $i = 0;
                        $allItems = $cart->getItems();
                        foreach ($allItems as $items) {
                            foreach ($items as $item) {
                                $i++;
                    ?>
                            <div class="row ">
                                <div class="col-2 col-xl-4 px-0"><img class="<?php echo $item['attributes']['hand'] ?>" src="../public/images/cart03.jpg" alt="" style=" max-width: 140px;"></div>
                                <div class="col-4 ">
                                    <p class="items text-black"><?php echo $item['attributes']['pname']; ?><br></p>
                                    <p class="content text-secondary">Hand:<span class="text-danger"><?php echo $item['attributes']['hand'] ?></span><br>
                                        Locale:<span class="text-success"><?php echo $item['attributes']['locale'] ?></span><br>
                                        Color:<span><?php echo $item['attributes']['color'] ?></span><br></p>
                                </div>
                                <div class="col-1">
                                    <?php echo $item['quantity']; ?>
                                </div>

                                <div class="price d-flex justify-content-end">
                                    <p class="fw-bold">
                                        NT$<?php echo number_format($item['quantity'] * $item['attributes']['price']); ?></p>
                                </div>
                            </div>
                    <?php }
                        } ?>
                </div>
            <?php } else { ?>
                <div class="info">
                    <p>目前購物車為空</p>
                </div>
            <?php } ?>
            </div>
        </div>


    </div>
</main>


<script>
    //如果.items的文字中有"手套",則切換圖片
    $(function() {
        $(".無此值").attr("src", "../public/images/cart02.png");


    });
</script>

<?php
require_once '../layout/footer_black.php';
?>