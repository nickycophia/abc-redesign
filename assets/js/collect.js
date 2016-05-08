$(document).ready(function(){
	$('.cancel_booking_btn').click(function(event) {
        $('#selected_cancel_newsno').val($(this).attr('data-newsno'));
        $('#cancel_collect_one').show();
    });

    $('#keepcollect').click(function(event) {
        $('#cancel_collect_one').hide();
    });

    $('#deletecollect').click(function(event) {
        deletecollect($('#selected_cancel_newsno').val());
    });
});

function deletecollect(newsno){
    var queryData = {newsno:newsno};
    $.ajax({
        type: "POST",
        url: 'abcajax/newscollect',
        data: queryData,
        success: function(data) {
            if ( data == 'delete' ){
                $('#cancel_collect_one').hide();
                $('#cancel_collect_two').show();
            } else if ( data == 'notlogin' ){
                window.location = 'login';
            }
            else {
                alert("發生錯誤，請稍後再試")
            }
        }
    });
}