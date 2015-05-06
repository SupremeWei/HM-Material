$("li").removeClass("current_page_item");

$("#product").addClass("current_page_item");

$(function() {
	$(".item-list").on("click", ".list-group-item", function(){
		$(".item-list .active").removeClass("active");
		$(this).addClass("active");
    });
});