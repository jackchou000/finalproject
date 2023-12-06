<?php

require_once "../utils/dbconnect.php";
//購物車開始
require_once "../utils/class.Cart.php";
//購物車初始化

if (isset($_POST["customername"]) && ($_POST["customername"] != "")) {
    echo "處理中";
    //購物車開始
    //購物車初始化
    $cart = new Cart([
        // 可增加到購物車的商品最大值, 0 = 無限
        'cartMaxItem' => 0,
        // 可增加到購物車的每個商品數量最大值, 0 = 無限
        'itemMaxQuantity' => 0,
        // 不要使用cookie，關閉瀏覽器後購物車物品將消失
        'useCookie' => false,
    ]);
    //購物車結束
    $dateStr = date("Y-m-d H:i:s");
    //新增訂單資料
    $sql_query = "INSERT INTO `order`(`od_total`,`od_time`, `customer_name`, `customer_mail`,`customer_phone`, `customer_address`,  `od_payment`,`customer_remark`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql_query);
    $stmt->bind_param("isssssss", $cart->getAttributeTotal('price'), $dateStr, $_POST["customername"], $_POST["customeremail"],  $_POST["customerphone"], $_POST["customeraddress"], $_POST["paytype"], $_POST["customerremark"]);
    $stmt->execute();
    //取得新增的訂單編號
    $o_pid = $stmt->insert_id;
    $stmt->close();
    //新增訂單內貨品資料
    if ($cart->getTotalitem() > 0) {
        $allItems = $cart->getItems();
        foreach ($allItems as $items) {
            foreach ($items as $item) {
                $sql_query = "INSERT INTO `order_pd_detail` (`order_id` ,`product_id`  ,`pd_price` ,`or_pd_num`) VALUES (?, ?, ?, ?)";
                $stmt = $conn->prepare($sql_query);
                $stmt->bind_param("iiii", $o_pid, $item['id'], $item['attributes']['price'], $item['quantity']);
                $stmt->execute();
                $stmt->close();
            }
        }
    }
} else {
    echo "無法獲得處理";
}

$cart -> clear();
?>

<script>
    alert("感謝您的購買,我們將盡速處理您的訂單");
    window.location.href = "../home/index.php";
</script>