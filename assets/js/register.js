$(document).ready(function(){
   $('#send').click(function() {
      accountLogin();
   });

   $('.lightbox_area .ok').click(function(event) {
      $('.lightbox_area').hide();
   });
});

// 登入
function accountLogin(){
   if( $('#cardno').val() == '' ) {
         $('#wrong_cardno').show();
         return false;
      }
   if( $('#cardno').val().length < 8 ) {
      $('#wrong_cardno').show();
      return false;
   }
   if( checkVal($('#cardno').val()) == false ) {
      $('#wrong_cardno').show();
      return false;
   }

   if( $('#password').val() == '' ) {
      $('#wrong_cardno').show();
      return false;
   }
   if( $('#password').val().length < 4 ) {
      $('#wrong_cardno').show();
      return false;
   }
   if( checkVal($('#password').val()) == false ) {
      $('#wrong_cardno').show();
      return false;
   }

   if( $('#email').val() == '' ) {
      $('#wrong_email').show();
      return false;
   }
   if( validEmail($('#email').val()) == false ) {
      $('#wrong_email').show();
      return false;
   }

   var cardno = $('#cardno').val();
   var password = $('#password').val();
   var nickname = $('#nickname').val();
   var email = $('#email').val();

   $.ajax({
      type: 'POST',
      url: 'abcajax/register',
      dataType: 'JSON',
      data:    {cardno: cardno,
               password: password,
               nickname: nickname,
               email: email},
      success:function(data) {
         if( data['status'] == 'success' ) {
            $('#registersuccess').show();
         }
         else {
            $('#email_alreadyuse').show();
            return false;
         }
      },
      error:function() {
         alert('發生錯誤！');
      }
   });
}

// email格式
function validEmail(emailtoCheck) {
   var regExp = /^[^@^\s]+@[^\.@^\s]+(\.[^\.@^\s]+)+$/;
   if ( emailtoCheck.match(regExp) )
      return true;
   else
      return false;
}

// 驗證英數字
function checkVal( str ) {
    var regExp = /^[\d|a-zA-Z]+$/;
    if ( regExp.test(str) ) {
        return true;
   }
    else{
        return false;
   }
}