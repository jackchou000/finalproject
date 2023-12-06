<?php

require_once '../layout/navbar.php';
?>
<main class="pb-5">
  <div class="container-fluid text-center">
    <div class="row ">
      <div class="col-12 py-5" style="background-image: url('../public/images/child02.png');  background-repeat:no-repeat">
        <h2 style="color:white;">歡迎大朋友小朋友們一起來!!!<br />
          <span style="color:#ff5c00 ">
            <b>我們是Puck Moose Hockey帕克鹿曲棍球俱樂部</b>
          </span><br />
          想要擁有不一樣的溜冰體驗嗎？<br />
          快來試試冰刀滑冰吧！
        </h2>
      </div>
    </div>
  </div>
  <div class="container mt-3 text-center">
    <div class="row ">
      <div class="col-6 ">
        <div class="coach" style="background-image: url('../public/images/bg-stone.png');">
          <h2 style="color:white; padding-top:50px;">Puck Moose Hockey<br />
            <span style="color:#ff5c00 ">帕克鹿曲棍球俱樂部</b></span><br />
            溜冰課程
          </h2>
          <p style="color:white; text-align:start; padding: 0 80px; line-height: 30px;">時間: 每週四晚上 (即日起-113/01/18) <br />
            課程介紹: <br />
            1. 基礎溜冰 2. 手腳並用之溜冰進階 -- 曲棍球 (須具備基本自主滑冰能力, 跌倒可自行站立) <br />
            年齡: 3歲半以上-成人 <br />
            地點: 台北小巨蛋冰上樂園 (台北市南京東路4段2號2樓)</p>
          <button type="button" class="btn btn-orange btn-lg my-4 edit-btn">sign up now</button>

        </div>
      </div>
      <div class="col-6">
        <img src="../public/images/IMG_9160.JPG" alt="" class="img-fluid">
      </div>
    </div>
    <div class="row">
      <div class="col-12 my-5">
        <div style="border-bottom: 2px solid #52ff00; width: 121px; " class="mx-auto">
          <h3 class="pt-3 text-white mb-0">教練介紹</h3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-6" data-aos="fade-right">
        <img src="../public/images/coach1.png" alt="" class=" img-fluid">
      </div>
      <div class="col-6">
        <div class="coach" style="background-image: url('../public/images/bg-stone.png');">
          <h2 style="color:#ff5c00; padding:50px 0; "><b> 林睿宇 - 專業教練</b>
          </h2>
          <p style="color:white; text-align:start; padding: 0 80px 50px; line-height: 30px;"> 教學資歷:<br />
            帕克鹿教練 維京人助教<br />
            教練資歷:<br />
            2019年IIHF世界男子u18冰球錦標賽3B冠軍<br />
            110學年度全國中正盃冰球錦標賽 公開組第二名<br />
            中華奧會100周年紀念暨111學年度全國中正盃冰球錦標賽第二名 2022年IIHF世界
            男子u18冰球錦標賽3A冠軍<br />
            2022IIHF世界男子u20冰球錦標賽3A冠軍<br />
            2023IIHF世界男子u20冰球錦標賽單場mvp<br />
            2023IIHF世界男子u20冰球錦標賽2B第四名<br />
            2023IIHF世界成年冰球錦標賽3A冠軍<br />
          </p>
        </div>
      </div>
      <div class="col-6">
        <div class="coach" style="background-image: url('../public/images/bg-stone.png');">
          <h2 style="color:#ff5c00; padding:50px 0; "><b>
              趙子翔 - 專業教練
            </b></h2>
          <p style="color:white; text-align:start; padding: 0 80px 55px ; line-height: 30px;"> 教學資歷:<br />
            中華民國冰球協會Ａ、Ｂ、Ｃ級教練<br />
            台北市溜冰協會Ｃ級教練<br />
            雷神冰上曲棍球隊-總教練<br />
            台北市立大學直排輪教練<br />
            台北小巨蛋冰上樂園教練<br />
            大同運動中心直排輪教練&emsp;&emsp;&emsp;興華國小直排輪社團教練<br />
            帕克鹿直排輪教練&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;救國團YMCA-萬華 <br />
            帕克鹿直排輪曲棍球隊總教練&emsp;救國團YMCA-永吉<br />
            帕克鹿冰上曲棍球隊總教練&emsp;&emsp;何嘉仁直排輪教練-萬華分校<br />
          </p>
        </div>
      </div>
      <div class="col-6" data-aos="fade-left">
        <img src="../public/images/coach2.png" alt="" style="  object-position:top; overflow:hidden" class="img-fluid">
      </div>
    </div>
  </div>
  <?php
  require 'form.php'
  ?>
  <?php
  require_once '../layout/sw_slider_active.php';
  ?>

</main>
<script>
  $(function() {
    $('.close-edit').click(function() {
      $('.edit').fadeOut();
    });

    $('.edit-btn').click(function() {
      $('.edit').fadeIn();
    });
  });
</script>




<?php
require_once '../layout/footer.php';
?>