var select = 0
var sel_val = 0
var select2 = 0
var sel_val2 = 0
$(document).ready(function () {
	// 按下往左鈕執行fnPrev函式
	$('#btnPrev').on('click', fnPrev)
	// 按下往右鈕執行fnNext函式
	$('#btnNext').on('click', fnNext)

	$('#secbtnPrev').on('click', secbtnPrev)
	// 按下往右鈕執行fnNext函式
	$('#secbtnNext').on('click', secbtnNext)
})
function secbtnPrev() {
	//往右捲動動畫
	if (select2 != 0) {
		select2 -= 1
		sel_val2 += 640
		$('.sec_left').css('left', sel_val2 + 'px')
	}
}
// 往右鈕事件處理函式
function secbtnNext() {
	//往左捲動動畫
	if (select2 < 1) {
		select2 += 1
		sel_val2 -= 640
		$('.sec_left').css('left', sel_val2 + 'px')
	}
}
function fnPrev() {
	//往右捲動動畫
	if (select != 0) {
		select -= 1
		sel_val += 100
		$('.left').css('left', sel_val + '%')
	}
}
// 往右鈕事件處理函式
function fnNext() {
	//往左捲動動畫
	if (select < 1) {
		select += 1
		sel_val -= 100
		$('.left').css('left', sel_val + '%')
	}
}
