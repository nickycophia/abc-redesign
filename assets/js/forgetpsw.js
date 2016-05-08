$(document).ready(function(){
	$('#resetmail').click(function(event) {
        var mail = $('#mail').val();
        if (mail == "") {
            alert('請輸入電子郵件');
            return;
        };

        var queryData = {mail: mail};
        $.ajax({
            type: "POST",
            url: 'abcajax/resetmail',
            data: queryData,
            success: function(data) {
                if ( data == 'success' ){
                    $('#sended').show();
                } else if (data == 'nomail'){
                    $('#email_error').show();
                }
                else {
                    alert("發生錯誤，請稍後再試")
                }
            }
        });
    });
});