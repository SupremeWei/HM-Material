$(document).ready(function() {
    var owl = $("#owl-product");

    owl.owlCarousel({
        autoPlay: true,
        slideSpeed : 300,
        paginationSpeed : 400,
        stopOnHover: true,
        navigation : true,
        navigationText: ["前一個", "後一個"],
        pagination: true,
        mouseDrag: true,
        touchDrag: true
    });
});