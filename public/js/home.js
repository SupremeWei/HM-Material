$("li").removeClass("current_page_item");

$("#home").addClass("current_page_item");

$(function() {
	$(".feature-box").on("click", ".feature-item", function(){
		
		$(".inputbox").remove();
		var title = $("h2", this).text();
        var content =
            '<div class="row inputbox">'+
            '<div class="col-md-6 col-md-offset-3">'+
            '<div class="input-group">'+
            '<input type="text" class="form-control" placeholder="'+ title +'">'+
            '<span class="input-group-btn">'+
            '<button class="btn btn-primary" type="button">Search</button>'+
            '</span>'+
            '</div>'+
            '</div>'+
            '</div>';

        $(content).appendTo( ".feature-box" );
    });

    $(".feature-box").on("click", ".feature-item-r", function(){
		$(".inputbox").remove();
    });

    $("#owl-banner").owlCarousel({

        navigation : true, // Show next and prev buttons
        autoPlay : 3000,
        slideSpeed : 200,
        paginationSpeed : 400,
        singleItem:true

        // "singleItem:true" is a shortcut for:
        // items : 1,
        // itemsDesktop : false,
        // itemsDesktopSmall : false,
        // itemsTablet: false,
        // itemsMobile : false

    });
});
