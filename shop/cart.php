<?php
error_reporting(0);

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
//更新購物車內容
if (isset($_GET["cartaction"]) && ($_GET["cartaction"] == "update")) {
    if (isset($_GET["updateid"])) {
        $i = count($_GET["updateid"]);
        for ($j = 0; $j < $i; $j++) {
            $product = $cart->getItem($_GET['updateid'][$j]);
            $cart->update($product['id'], $_GET['qty'][$j], [
                'price' => $product['attributes']['price'],
                'pname' => $product['attributes']['pname'],
                'locale' => $product['attributes']['locale'],
                'hand' => $product['attributes']['hand'],
                'color' => $product['attributes']['color'],
            ]);
        }
    }
    header("Location: cart.php");
}
//移除購物車內容
if (isset($_GET["cartaction"]) && ($_GET["cartaction"] == "remove")) {
    $rid = intval($_GET['delid']);
    $cart->remove($rid);
    header("Location: cart.php");
}
//清空購物車內容
// if (isset($_GET["cartaction"]) && ($_GET["cartaction"] == "empty")) {
// 	$cart->clear();
// 	header("Location: cart.php");
// }
//購物車結束


require_once '../layout/navbar.php';
?>
<main style="width: 100vw; min-height: auto; padding-bottom:50px;" class="bg-white">

    <div class="container">
        <h2 class="text-black mb-4 fw-bold" style="padding-top: 70px">購物車</h2>
        <?php if ($cart->getTotalitem() > 0) { ?>
            <table class="table">
                <thead>
                    <tr class="text-dark fs-5">
                        <th scope="col-3">商品</th>
                        <th scope="col-3"></th>
                        <th scope="col-1">數量</th>

                        <th scope="col-2" style="padding-left: 25px">金額</th>
                        <th scope="col-2">小計</th>

                        <th scope="col-1 pe-0" style="padding-left: 41px">刪除</th>
                    </tr>
                </thead>
                <form action="" method="get">
                    <tbody>
                        <?php
                        $allItems = $cart->getItems();
                        foreach ($allItems as $items) {
                            foreach ($items as $item) {
                        ?>
                                <tr class="table" style="vertical-align: middle">
                                    <td class="col-3">
                                        <img class="<?php echo $item['attributes']['hand'] ?>" src="../public/images/cart03.jpg" alt="" style="width:300px;" />
                                    </td>
                                    <td class="col-3">
                                        <p class="items text-black" style="font-size: 24px">
                                            <?php echo $item['attributes']['pname'] ?><br />
                                        </p>
                                        <p class="content text-secondary">
                                            Hand:<span class="text-danger"><?php echo $item['attributes']['hand'] ?></span><br />
                                            Locale:<span class="text-success"><?php echo $item['attributes']['locale'] ?></span><br />
                                            Color:<span>
                                            <?php if($item['attributes']['color'] != null) 
                                            {echo $item['attributes']['color']; }
                                            else 
                                            {echo "無此值";}?>
                                            </span><br />
                                        </p>
                                    </td>
                                    <td class="col-1 text-center" style="padding-right: 60px">
                                        <input type="hidden" name="updateid[]" id="updateid[]" value="<?php echo $item['id']; ?>"><input name=qty[] type="text" id="qty[]" value="<?php echo $item['quantity']; ?>" size="1">
                                        <!-- <div class="quantity d-flex">
                                            <input class="reduce border" type="submit" value="-" onclick="fnCount('-');" style="width: 48px" />
                                            <input class="number border text-center" type="text" id="i_sum" name="n_sum" value="0" style="width: 70px" />
                                            <input class="plus border" type="submit" value="+" onclick="fnCount('+')" style="width: 48px" />
                                        </div> -->
                                    </td>
                                    <td class="col-2 fs-5 fw-bold" style="padding-left: 30px">
                                        $<?php echo number_format($item['attributes']['price']); ?>
                                    </td>
                                    <td class="col-2 fs-5 fw-bold">
                                        $<?php echo number_format($item['quantity'] * $item['attributes']['price']); ?>
                                    </td>

                                    <td class="col-1 pe-0 offset-2" style="padding-left: 50px">
                                        <a style="color:darkgray" href="?cartaction=remove&delid=<?php echo $item['id']; ?>"><i class="bi bi-trash3 fs-5 "></i></a>
                                    </td>
                                </tr>
                        <?php
                            }
                        } ?>
                    </tbody>
            </table>
            <div class="total">
                <div class="d-flex justify-content-end" style="margin-right: 0px">
                    <p class="p-2">總共　　</p>
                    <h2><?php echo number_format($cart->getTotalQuantity()); ?></h2>
                    <p class="p-2">　　項</p>
                </div>
                <div class="d-flex justify-content-end" style="margin-right: 0px">
                    <p class="p-2">總金額</p>
                    <h2 class="fw-bold">$<?php echo number_format($cart->getAttributeTotal('price')); ?></h2>
                </div>
                <div class="d-flex justify-content-end">
                    <input type="hidden" name="cartaction" id="cartaction" value="update">
                    <input type="submit" name="updatebtn" id="button2" class="btn btn-dark text-white text-center" style="width: 200px; height: 50px; margin-right: 20px" value="更新購物車">
                    <input type="button" name="button" class="btn btn-dark text-white text-center" style="width: 200px; height: 50px" value="結帳" onclick="window.location.href='checkout.php'">

                </div>
            </div>
            </form>
        <?php } else { ?>
            <div class=info>
                <p class="text-center fs-3">購物車內沒有商品</p>
                <div class="d-flex justify-content-center">
                    <a href="product.php" class="btn btn-dark text-white text-center " style="width: 250px; height: 50px; line-height: 40px">
                        前往購物
                    </a>
                </div>
            </div>
        <?php } ?>
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