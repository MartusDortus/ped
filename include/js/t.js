/*	JS file pro tickety	*/

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
    var newTHeaderHeader = "<div class=\"pure-u-2-3\"><h4 class=\"ticketHeader\">" + data.name + "</h4></div>";
    var newTHeaderDates = "<div class=\"pure-u-1-3 ticketDates\">Created:<span>" + data.created + "</span><br>Deadline:<span>" + data.deadline + "</span></div>";
    var newTHeader = "<div class=\"pure-g ticketHeader\">" + newTHeaderHeader + newTHeaderDates + "</div>";
    var newTBody = "<div class=\"ticketBody\">" + data.description + "</div>";

    var newT = "<div class=\"ticket\" onclick=\"$.fn.ticketDetail('" + data.id_t + "')\">" + newTHeader + newTBody + "</div>";
    $("#ticketsContainer").after(newT);
}

$.fn.ticketDetail = function(x) {
    //window.location.href = "/t/detail.php?idt=" + x + "&format=json";
    $.ajax({
        url: "/t/detail.php?idt=" + x + "&format=json",
        type: "GET",
        success: function(data, status, xhr) {
            $.fn.printTDetail(data);
        }

    });
}

$.fn.printTDetail = function(data) {
    var datum = data.deadline.split(" ");
    var tName = "<div class=\"ticketName\"<h3>" + data.name + "</h3></div>"
    var tDescription = "<div class=\"ticketDescription\"><textarea>" + data.description + "</textarea></div>"
    var tDeadline = "<div class=\"ticketDeadline\"><input type=\"date\" value=\"" + datum[0] + "\"></div>"
    var tHeader = "<div>" + tName + tDescription + tDeadline + "</div>";
    $("#mainBody").html(tHeader);
}