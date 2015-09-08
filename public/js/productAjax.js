$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function(){
    $("[name='ledProduct']").click(function(e) {
        e.preventDefault();
        var ledType = this.id;
        $.ajax({
            url : "/product/showLedProduct/" + ledType,
            dataType: 'html',
            success : function(data){
                $("[name='productContent']").remove();
                $('.ledInformation').append(data);
            }
        },"json");
    });

    $("[name='productLink']").click(function(e) {
        e.preventDefault();
        var ledType = this.id;
        $.ajax({
            url : "/product/showLedDetail/" + ledType,
            dataType: 'html',
            success : function(data){
                $("[name='productContent']").remove();
                $('.ledInformation').append(data);
            }
        },"json");
    });

    $("[name='highpower']").click(function(e) {
        e.preventDefault();
        var ledType = this.id;
        $.ajax({
            url : "/product/showHighpower/" + ledType,
            dataType: 'html',
            success : function(data){
                $("[name='productContent']").remove();
                $('.ledInformation').append(data);
            }
        },"json");
    });
});