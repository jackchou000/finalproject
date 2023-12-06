<?php
include_once "../layout/navbar.php";
?>
<main>
  <div class="container-fluid customize_banner">
    <div class="row">
      <img src="../public/images/customize_banner.png" alt="" class="img-fluid">
      <p class="" style="z-index:1000;">TEAM<span>CUSTOMIZE</span></p>
    </div>
  </div>
  <div class="container-fluid">
    <p class="text-customize-header ">球隊專屬客製化球桿服務</p>
  </div>
  <div class="container-fluid my-5">
    <div class="row">
      <div class="col-6 d-flex justify-content-end">
        <img src="../public/images/about03.png" alt="" class="img-fluid d-block ">
      </div>
      <div class="col-6" style="height: 600px;">
        <p class="text-customize-title">開始製作您的球隊專屬客製化球桿</p>
        <p class="text-customize-title">簡單四步驟完成客製化球桿</p>
        <div class="row mt-5">
          <div class="col-1">
            <div class="d-flex flex-column">
              <div class="circle"></div>
              <div class="rectangle"></div>
            </div>
          </div>
          <div class="col-6">
            <h3 class="text-white">第一步<br>與我們聯繫</h3>
          </div>
          <div class="col-3">
            <a href="../contact/contact.php" class="text-decoration-none "><button class=" btn customize-button btn-orange w-100">立即聯繫</button>
          </div></a>
        </div>
        <div class="row">
          <div class="col-1">
            <div class="d-flex flex-column">
              <div class="circle"></div>
              <div class="rectangle rectangle2"></div>
            </div>
          </div>
          <div class="col-11 show-text">
            <h3 class="text-white">第二步<br>與設計師討論，產出示意圖</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-1">
            <div class="d-flex flex-column">
              <div class="circle circle2"></div>
              <div class="rectangle rectangle3"></div>
            </div>
          </div>
          <div class="col-11 circle2 ">
            <h3 class="text-white">第三步<br>定稿</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-1">
            <div class="d-flex flex-column">
              <div class="circle circle3"></div>
            </div>
          </div>
          <div class="col-11 circle3">
            <h3 class="text-white">第四步<br>完成，出貨</h3>
          </div>

        </div>
      </div>
    </div>
  </div>
</main>
<script>
  //圓點與進度條循環出現
  $(document).ready(() => {
    $(".circle2").hide();
    $(".circle3").hide();
    $(".rectangle2").hide();
    $(".rectangle3").hide();
    $(".show-text").hide();
    setInterval(() => {
      $(".show-text").fadeIn();
      setTimeout(() => {
        $(".circle2").fadeIn();
        $(".rectangle2").fadeIn();
      }, 1000);
      setTimeout(() => {
        $(".circle3").fadeIn();
        $(".rectangle3").fadeIn();
      }, 2000);
      setTimeout(() => {
        $(".show-text").fadeOut();
        $(".circle2").fadeOut();
        $(".rectangle2").fadeOut();
        $(".circle3").fadeOut();
        $(".rectangle3").fadeOut();
        $(".circle3").fadeOut();
        $(".rectangle3").fadeOut();
        $(".circle4").fadeOut();
        $(".rectangle4").fadeOut();
      }, 3000);
    }, 4000)
  });
</script>


<?php
require_once '../layout/footer.php';
?>