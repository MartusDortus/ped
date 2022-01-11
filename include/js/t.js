/*	JS file pro tickety	*/

console.log($("#ticketsContainer").text());

$.ajax({
	url: "/t/get.php?format=json",
	type: "GET",
	data: {},
	success: function(data, status, xhr) {
		$.each(data, function(key, val) {
			$.fn.printT(val);
		});
	}
});


$.fn.printT = function(data) {
	//console.log(data.parent);
	var newTHeaderHeader = "<div class=\"pure-u-2-3\"><h4 class=\"ticketHeader\">"+data.name+"</h4></div>";
	var newTHeaderDates = "<div class=\"pure-u-1-3 ticketDates\">Created:<span>"+data.created+"</span><br>Deadline:<span>"+data.deadline+"</span></div>";
	var newTHeader = "<div class=\"pure-g ticketHeader\">"+newTHeaderHeader+newTHeaderDates+"</div>";
	var newTBody = "<div class=\"ticketBody\">"+data.description+"</div>";

	var newT = "<div class=\"ticket\" onclick=\"$.fn.ticketDetail('"+data.id_t+"')\">"+newTHeader+newTBody+"</div>";
	$("#ticketsContainer").after(newT);
}

$.fn.ticketDetail = function(x) {
	window.location.href = "/t/detail.php?idt=" + x;
}
