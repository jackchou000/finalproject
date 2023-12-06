var select = 0;
var sel_val = 0;
$(document).ready(function () {
        // 按下往左鈕執行fnPrev函式
        $("#btnPrev").on("click",fnPrev);
        // 按下往右鈕執行fnNext函式
        $("#btnNext").on("click",fnNext);
})

function fnPrev() {
  //往右捲動動畫
  if (select != 0) {
    select -= 1;
    sel_val += 100;
    $(".left").css("left", sel_val + "%");
  }
}
// 往右鈕事件處理函式
function fnNext() {
  //往左捲動動畫
  if(select < 3){
    select += 1;
    sel_val -= 100;
  $(".left").css("left", sel_val + "%");
  }
}