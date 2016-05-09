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

    // 更多篩選
    $('#select_filter').click(function(event) {
        $('.to_filter').show();
        $('.selectclass_result').hide();
    });

    $('#open_to_filterteacher').click(function(event) {
        $('.to_filterteacher').show();
    });

    $('#open_to_filtertime').click(function(event) {
        $('.to_filtertime').show();
    });

    $('#open_to_filterseat').click(function(event) {
        $('.to_filterseat').show();
    });

    $('#close_to_filter').click(function(event) {
        console.log('close');

        $('.to_filter').hide();
        $('.selectclass_result').show();

        if ($('#open_to_filterteacher span').html() == '不指定' 
            && $('#open_to_filtertime span').html() == '不指定' 
            && $('#open_to_filterseat span').html() == '不指定') {
            $('#select_filter').removeClass('filtered');
        } else {
            $('#select_filter').addClass('filtered');
        }

        // 老師
        var teacher_arr = [];
        $('#teacher_filter_area .teacher').each(function(index, el) {
            if ($(this).hasClass('active') == true) {
                teacher_arr.push($(this).attr('data-teacherno'));
            }
        });

        // 時間
        var time_arr = [];
        $('#time_filter_area .time').each(function(index, el) {
            if ($(this).hasClass('active') == true) {
                time_arr.push($(this).attr('data-time'));
            }
        });

        // 座位
        var seat_left = '';
        $('#seat_filter_area .seat').each(function(index, el) {
            if ($(this).hasClass('active') == true) {
                seat_left = $(this).attr('data-seat');
            }
        });

        if (teacher_arr.length > 0) {
            $("#selected_teacher").val(teacher_arr.toString());
        }
        if (time_arr.length > 0) {
            $("#selected_time").val(time_arr.toString());
        }
        if (seat_left != '') {
            $("#selected_seat").val(seat_left);
        }

        var selected_day = $('#selected_day').val();
        var selected_month = $('#selected_month').val();
        var selected_class = $('#selected_class').val();
        var selected_classroom = $('#selected_classroom').val();
        var selected_teacher = $('#selected_teacher').val();
        var selected_time = $('#selected_time').val();
        var selected_seat = $('#selected_seat').val();

        window.location = BASE + "selectclass?selected_day="+selected_day+"&"
                                            +"selected_month="+selected_month+"&"
                                            +"selected_class="+selected_class+"&"
                                            +"selected_classroom="+selected_classroom+"&"
                                            +"selected_teacher="+selected_teacher+"&"
                                            +"selected_time="+selected_time+"&"
                                            +"selected_seat="+selected_seat;
    });

    $('#close_to_filterteacher').click(function(event) {
        $('.to_filterteacher').hide();
    });

    $('#close_to_filtertime').click(function(event) {
        $('.to_filtertime').hide();
    });

    $('#close_to_filterseat').click(function(event) {
        $('.to_filterseat').hide();
    });

    // 清除篩選
    $('.remove').click(function(event) {
        clear_filter()
    });

    // 老師
    $('#teacher_filter_area .teacher').click(function(event) {
        $('#no_assign_teacher').removeClass('active');
        $(this).toggleClass('active');

        teacher_filter_subtext();
    });
    $('#no_assign_teacher').click(function(event) {
        $('#teacher_filter_area .teacher').removeClass('active');
        $(this).addClass('active');
        $('#open_to_filterteacher span').html($(this).html());
    });

    // 上課時段
    $('#time_filter_area .time').click(function(event) {
        $('#no_assign_time').removeClass('active');
        $(this).toggleClass('active');

        time_filter_subtext();
    });
    $('#no_assign_time').click(function(event) {
        $('#time_filter_area .time').removeClass('active');
        $(this).addClass('active');
        $('#open_to_filtertime span').html($(this).html());
    });

    // 剩餘座位
    $('#seat_filter_area .seat').click(function(event) {
        $('#no_assign_seat').removeClass('active');
        $('#seat_filter_area .seat').removeClass('active');
        $(this).toggleClass('active');

        $('#open_to_filterseat span').html($(this).html());
    });
    $('#no_assign_seat').click(function(event) {
        $('#seat_filter_area .seat').removeClass('active');
        $(this).addClass('active');
        $('#open_to_filterseat span').html($(this).html());
    });
});

function clear_filter() {
    $('#select_filter').removeClass('filtered');
    $('#teacher_filter_area .teacher').removeClass('active');
    $('#time_filter_area .time').removeClass('active');
    $('#seat_filter_area .seat').removeClass('active');

    $('#no_assign_teacher').addClass('active');
    $('#no_assign_time').addClass('active');
    $('#no_assign_seat').addClass('active');

    $('#open_to_filterteacher span').html('不指定');
    $('#open_to_filtertime span').html('不指定');
    $('#open_to_filterseat span').html('不指定');
}

function teacher_filter_subtext() {
    var subtext_arr = [];
    $('#teacher_filter_area .teacher').each(function(index, el) {
        if ($(this).hasClass('active') == true) {
            subtext_arr.push($(this).html());
        }
    });
    if (subtext_arr.length > 0) {
        $('#open_to_filterteacher span').html(subtext_arr.toString());
    } else {
        $('#open_to_filterteacher span').html('不指定');
        $('#no_assign_teacher').addClass('active');
    }
}

function time_filter_subtext() {
    var subtext_arr = [];
    $('#time_filter_area .time').each(function(index, el) {
        if ($(this).hasClass('active') == true) {
            subtext_arr.push($(this).html());
        }
    });
    if (subtext_arr.length > 0) {
        $('#open_to_filtertime span').html(subtext_arr.toString());
    } else {
        $('#open_to_filtertime span').html('不指定');
        $('#no_assign_time').addClass('active');
    }
}