$(document).ready(function(){
	$("#lightbox_confirm").click(function(event) {
		$("#lightbox_area").hide();
	});

	// 複選
    $(".selectday_date .enable").click(function(event) {
    	$(this).toggleClass('choose');
    });

    // 全選
    $("#select_all_available").click(function(event) {
    	$(".selectday_date .enable").addClass('choose');
    });

    // 清除選項
    $("#clear_select").click(function(event) {
    	$(".selectday_date .enable").removeClass('choose');
    });

    $("#nextstep").click(function(event) {
    	var selected_days = [];
    	$(".selectday_date .enable").each(function(index, el) {
    		if ($(this).hasClass('choose') == true) {
    			selected_days.push($(this).html());
    		}
    	});

    	if (selected_days.length == 0) {
    		$("#lightbox_area").show();
    		return;
    	} else {
    		$("#selected_day").val(selected_days.toString());
    		$(this).closest('form').submit();
    	}
    });
});
