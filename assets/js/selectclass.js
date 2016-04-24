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
                    $(".lightbox_name").html("發生錯誤");
                    $(".lightbox_txt").html("請稍後再試");
                    $("#lightbox_area").show();
                }
            }
        });
    });
});