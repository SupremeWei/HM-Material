$('#sendMail').on('click', function(e) {

    var name = $('#inputName').val();
    var mail = $('#inputEmail').val();
    var tel  = $('#inputTel').val();
    var comment = $('#inputComment').val();

    if (name == '') {
        alert("請輸入您的姓名");
        $('#inputName').focus();
        return false;
    }
    if (mail == '') {
        alert("請輸入您的郵件信箱");
        $('#inputEmail').focus();
        return false;
    }
    if (tel == '') {
        alert("請輸入您的電話");
        $('#inputTel').focus();
        return false;
    }
    if (comment == '') {
        alert("請輸入您的意見");
        $('#inputComment').focus();
        return false;
    }
	
    $('.dt-loading strong').text('寄送中，請稍後。。。');
    $(".dt-loading").fadeIn(100);
    var params = {
            "name" : name,
            "mail" : mail,
            "tel"  : tel,
            "comment" : comment,
            "_token"  : $('#_token').val(),
        }
    $.ajax({
        url : 'mail',
        data: params,
        type:"POST",
    })
    .done(function(data) {
        $('.dt-loading strong').text('寄送成功');
        $('#inputName').val('');
        $('#inputEmail').val('');
        $('#inputTel').val('');
        $('#inputComment').val('');
    })
    .fail(function(data) {
        $('.dt-loading strong').text('寄送失敗');
    })
    .always(function(data) {
        $(".dt-loading").fadeOut(1000);
    });
});