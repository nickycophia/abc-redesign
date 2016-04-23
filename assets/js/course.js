$(document).ready(function(){
	// $("#lightbox_area").show();

	$("#lightbox_confirm").click(function(event) {
		$("#lightbox_area").hide();
	});

	$('.sub_nav_block .disable').click(function(event) {
		$("#lightbox_area").show();
		$(".classtype").html($(this).html());
	});

	$('#coverflow').coverflow({
        active: 2,
        angle: 0,
        scale: 0.5,
        overlap: 0,
        select: function(event, ui){
            var month = $('#coverimg_' + ui.index).attr('data-month');
            var name = $('#coverimg_' + ui.index).attr('data-name');
            var info = $('#coverimg_' + ui.index).attr('data-info');
            var classno = $('#coverimg_' + ui.index).attr('data-classno');

            $('.course_month').html(month);
            $('.course_name').html(name);
            $('.course_detail').html(info);
            $('#selected_class').val(classno);
        }
    });

    // 教室
    $('#classroom_selection').change(function(event) {
    	$('#classroom_selection option:selected').each(function() {
    		$('#selected_classroom').val($(this).val());
		});
    });
});