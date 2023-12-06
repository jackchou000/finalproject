<div class="edit" style="
				width: 980px;
				height: 640px;
				background-color: white;
				position: fixed;
				top: 50%;
				left: 50%;
				transform: translate(-50%, -50%);
				border-radius: 10px;
				z-index: 1200;
				display: none;
			">
    <div class="quit">
        <button class="close-edit bg-white" style="position: absolute;  right:20px; top:15px; color:lightgray; border:none "><i class="bi bi-x-square fs-2 my-0"></i></button>
    </div>
    <div class="head" style="margin-top:20px; width: 90%; position: absolute; top: 47%; left: 50%;
transform: translate(-50%, -50%); ">
        <p style="font-size: 30px; font-weight: bolder; text-align: center;">Puck Moose Hockey帕克鹿曲棍球俱樂部<span style="color:#ff5c00;">溜冰課程報名表單</span></p>
        <p style="font-size: 24px; margin-bottom: 30px">

            時間: 每週四晚上 (即日起-113/01/18)<br />
            課程介紹:<br />
            1. 基礎溜冰 2. 手腳並用之溜冰進階 -- 曲棍球 (須具備基本自主滑冰能力,
            跌倒可自行站立)<br />
            年齡: 3歲半以上-成人<br />
            地點: 台北小巨蛋冰上樂園(台北市南京東路4段2號2樓)
        </p>
        <hr color="#F1F1F1" />


        <div class="container">
            <form action="mail.php" method="post" id="addForm">
                <div class="row row-cols-2">
                    <div class="col">
                        <div class="row mb-3">
                            <label for="name" class="col-sm-2 col-form-label">姓 名 :</label>
                            <div class="col-sm-7 g-0">
                                <input type="text" class="form-control" id="name" placeholder="請輸入姓名" name="name" />
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row  mb-3">
                            <label for="age" class="col-sm-2 col-form-label">年齡 :</label>
                            <div class="col-sm-2 g-0 ">
                                <input type="number" class="form-control" id="age" placeholder="3" max="99" min="3" name="age" />
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row mb-3 ">
                            <label for="phone" class="col-sm-2 col-form-label">電 話 :</label>
                            <div class="col-sm-8 g-0 ">
                                <input type="tel" class="form-control" id="phone" placeholder="請輸入連絡電話" name="phone" />
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row mb-3 ">
                            <label for="colFormLabel" class="col-sm-2 col-form-label ">Mail :</label>
                            <div class="col-sm-10 g-0 ">
                                <input type="email" class="form-control" id="email" placeholder="請輸入連絡信箱" name="email" />
                            </div>
                        </div>
                    </div>
                    <div class="col">

                        <label for="exp" class="col-form-label">溜冰經驗</label>
                        <select class="form-select" id="exp" name="exp">
                            <option selected>請選擇</option>
                            <option value="無經驗">無經驗</option>
                            <option value="有溜過直排輪">有溜過直排輪</option>
                            <option value="有溜過冰刀">有溜過冰刀</option>
                            <option value="熟悉冰刀">熟悉冰刀</option>
                        </select>

                    </div>
                    <div class="col">
                        <label for="level" class="col-form-label">報名課程</label>
                        <select class="form-select" id="level" name="level">
                            <option selected>請選擇</option>
                            <option value="基礎溜冰">1.基礎溜冰</option>
                            <option value="溜冰進階">2.溜冰進階-曲棍球</option>
                        </select>
                    </div>
                </div>

                <div class="d-grid mt-lg-4 mt-2">
                    <button type="submit" name="submit" value="submit" class="btn btn-orange btn-lg" id="submit">
                        立即報名
                    </button>
                </div>
            </form>

        </div>
        <div id="error" style="margin-top: 10px;"></div>
    </div>
</div>

<script type="text/javascript">
    $('#addForm').submit(function(event) {



        event.preventDefault()

        var name = $('#name').val()
        var age = $('#age').val()
        var email = $('#email').val()
        var phone = $('#phone').val()
        var exp = $('#exp').val()
        var level = $('#level').val()
        var submit = $('#submit').val()

        // 加載數據
        $('#error').load('mail.php', {
            name: name,
            age: age,
            email: email,
            phone: phone,
            exp: exp,
            level: level,
            submit: submit
        })
    })
</script>