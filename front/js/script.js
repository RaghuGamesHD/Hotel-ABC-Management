function returnTodayDate() {
var today = new Date();
var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
return date;
}
function checkAvailability(checkinDateClass, checkoutDateClass) {
	var checkinDate = $("." + checkinDateClass).val();
	var checkoutDate = $("." + checkoutDateClass).val();
}