$(document).ready(function(){
	$("#lightbox_confirm").click(function(event) {
		$("#lightbox_area").hide();
	});

    $('.booking').click(function(event) {
        var scheduleno = $(this).attr('data-scheduleno');
        var queryData = {scheduleno:scheduleno};
        $.ajax({
            type: "POST",
            url: 'abcajax/booking',
            data: queryData,
            success: function(data) {
                if( data == 'success' ){
                    $("#lightbox_area").show();
                }
                else {
                    alert("發生錯誤，請稍後再試")
                }
            }
        });
    });
});