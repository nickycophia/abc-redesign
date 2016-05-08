$(document).ready(function(){
	$('.collection').click(function(event) {
        var newsno = $(this).attr('data-newsno');
        collect_add_del(newsno);
    });

    $('.footer .btn_block .collect').click(function(event) {
        var newsno = $(this).attr('data-newsno');
        collect_add_del(newsno);
    });
});

function collect_add_del(newsno) {
    var queryData = {newsno:newsno};
    $.ajax({
        type: "POST",
        url: 'abcajax/newscollect',
        data: queryData,
        success: function(data) {
            if( data == 'add' ){
                $("#collection_"+newsno).addClass('active');
            } else if ( data == 'delete' ){
                $("#collection_"+newsno).removeClass('active');
            } else if ( data == 'notlogin' ){
                window.location = 'login';
            }
            else {
                alert("發生錯誤，請稍後再試")
            }
        }
    });
}