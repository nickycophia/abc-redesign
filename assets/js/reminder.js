$(document).ready(function(){
	$('.reminder_setting').click(function(event) {
        var reminder = $('#reminder_selection').val();
        var bookingno = $('#reminder_bookingno').val();
        var queryData = {reminder: reminder,
                        bookingno: bookingno};
        if (reminder == "del") {
            $.ajax({
                type: "POST",
                url: 'abcajax/deletereminder',
                data: queryData,
                success: function(data) {
                    if ( data == 'success' ){
                        $('.lightbox_area').show();
                    }
                    else {
                        alert("發生錯誤，請稍後再試")
                    }
                }
            });
        } else {
            $.ajax({
                type: "POST",
                url: 'abcajax/addreminder',
                data: queryData,
                success: function(data) {
                    if ( data == 'success' ){
                        $('.lightbox_area').show();
                    }
                    else {
                        alert("發生錯誤，請稍後再試")
                    }
                }
            });
        }
    });
});