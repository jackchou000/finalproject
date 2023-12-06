<?php
include_once "../layout/navbar.php";
include_once "../layout/second_navbar.php";
?>

    <main>

        <div class="mt-5">
            <p class="service text-center text-white">DAGGER</p>
            <div class="hori-line-shop mb-5 mx-auto"></div>
        </div>
        <div class="contain-fluid" style="height: 600px;">
            <div class="row f-flex align-items-center">
                <div class="col-6">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active"
                                    aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../public/images/quit1.png" class="img-fluid d-block w-75 quit mx-auto"
                                     alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="../public/images/quit2.png" class="img-fluid d-block w-75 quit mx-auto"
                                     alt="...">
                            </div>
                            <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleIndicators"
                                    data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleIndicators"
                                    data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <form action="">
                        <div class="card mb-3 h-100 card-shop">
                            <h3 class="text-white">球桿系列</h3>
                            <h1 class="text-dagger">DAGGER PRO</h1>
                            <div class="card-body p-0">
                                <h5 class="card-title pt-1 text-white">輕量化設計桿身，搭配Low kick
                                    point，達到快速釋放的功能。</h5>
                                <p class="card-text text-white mt-4">材質</p>
                                <div class="d-flex  flex-nowrap">
                                    <input type="radio" class="btn-check" name="qulity2" id="qulity2_1" checked>
                                    <label class="btn btn-light money-box me-3 p-0" for="qulity2_1">Senior <br>
                                        6,200</label>
                                    <input type="radio" class="btn-check" name="qulity2" id="qulity2_2">
                                    <label class="btn btn-light money-box me-3 p-0" for="qulity2_2">INTERMEDIATE <br>
                                        $5,700</label>
                                    <input type="radio" class="btn-check" name="qulity2" id="qulity2_3">
                                </div>
                                <div>
                                    <p class="card-text text-white mt-3">慣用手</p>
                                    <div class="d-flex  flex-nowrap">
                                        <input type="radio" class="btn-check" name="hand" id="hand1" checked>
                                        <label class="btn btn-light size-box me-3 p-0" for="hand1">左手</label>
                                        <input type="radio" class="btn-check" name="hand" id="hand2">
                                        <label class="btn btn-light size-box me-3 p-0" for="hand2">右手</label>
                                    </div>
                                </div>
                                <div>
                                    <p class="card-text text-white mt-3">場地</p>
                                    <div class="d-flex  flex-nowrap">
                                        <input type="radio" class="btn-check" name="ice" id="ice1" checked>
                                        <label class="btn btn-light size-box me-3 p-0" for="ice1">冰上</label>
                                        <input type="radio" class="btn-check" name="ice" id="ice2">
                                        <label class="btn btn-light size-box me-3 p-0" for="ice2">陸地</label>
                                    </div>
                                </div>
                            </div>
                            <p class="card-text text-white mt-3">Flex</p>
                            <div class="d-flex  flex-nowrap">
                                <input type="radio" class="btn-check" name="Flex" id="Flex1" checked>
                                <label class="btn btn-light size-box me-3 p-0" for="Flex1">65</label>
                                <input type="radio" class="btn-check" name="Flex" id="Flex2">
                                <label class="btn btn-light size-box me-3 p-0" for="Flex2">70</label>
                                <input type="radio" class="btn-check" name="Flex" id="Flex3">
                                <label class="btn btn-light size-box me-3 p-0" for="Flex3">75</label>
                                <input type="radio" class="btn-check" name="Flex" id="Flex4">
                                <label class="btn btn-light size-box me-3 p-0" for="Flex4">80</label>
                                <input type="radio" class="btn-check" name="Flex" id="Flex4">
                                <label class="btn btn-light size-box me-3 p-0" for="Flex4">85</label>
                                <input type="radio" class="btn-check" name="Flex" id="Flex4">
                                <label class="btn btn-light size-box me-3 p-0" for="Flex4">90</label>
                            </div>
                            <button type="submit" class="btn btn-orange add-to-cart text-white mt-5" name="submit" id="submit">加入購物車
                            </button>
                        </div>
                </div>
                </form>
            </div>
        </div>
        </div>
        <div class="container-fluid " style="margin-top: 100px">
            <div class="mt-3">
                <p class="product-intorduct text-center">產品詳細介紹</p>
                <div class="hori-line-intorduct mb-5 mx-auto"></div>
            </div>
            <div class="row flex-column">
                <div class="col text-center text-white">產品詳細介紹</div>
                <div class="col text-center text-white">產品詳細介紹產品詳細介紹</div>
                <div class="col text-center text-white">產品詳細介紹</div>
                <div class="col text-center text-white">產品詳細介紹產品詳細介紹產品詳細介紹</div>
                <div class="col text-center text-white">產品詳細介紹產品詳細介紹</div>
                <div class="col text-center text-white">產品詳細介紹產品詳細介紹</div>
            </div>
            <div class="container-fluid mt-5">
                <div class="ract mx-auto"></div>
            </div>
        </div>
    </main>

<?php
require_once '../layout/footer_black.php';
?>