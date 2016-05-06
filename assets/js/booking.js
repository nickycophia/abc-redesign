$(document).ready(function(){
    $("#cancel_ok").click(function(event) {
        $("#cancel_step_otwo").hide();
    });

    $('.cancel_booking_btn').click(function(event) {
        $('#prepare_cancel_bookingno').val($(this).attr('data-bookingno'));
        $("#cancel_step_one").show();
    });

    $('.delete').click(function(event) {
        $("#cancel_step_one").hide();
        delbooking();
    });
});

function delbooking() {
    var bookingno = $('#prepare_cancel_bookingno').val();
    var queryData = {bookingno:bookingno};
    $.ajax({
        type: "POST",
        url: 'abcajax/cancelbooking',
        data: queryData,
        success: function(data) {
            if( data == 'success' ){
                $("#cancel_step_otwo").show();
            }
            else {
                alert("發生錯誤，請稍後再試");
            }
        }
    });
}