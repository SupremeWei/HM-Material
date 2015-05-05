$("li").removeClass("current_page_item");

$("#home").addClass("current_page_item");

$(function() {
	$(".feature-box").on("click", ".feature-item", function(){
		
		$(".inputbox").remove();
		var title = $("h2", this).text();
		var content = 
		    '<div class="inputbox">' +
		    '<form action="#" method="post">' +
            '<label>' + title + '</label>' +
            '<input type="text" name="title" required="required" />'
            '<input type="submit" value="Submit">' +
            '</form>' +
            '</div>';
        $(content).insertAfter( ".feature-box" );
    });
});