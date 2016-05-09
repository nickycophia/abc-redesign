$(document).ready(function(){
   $('#send').click(function() {
      accountLogin();
   });

   $('#msgcomfirm').click(function(event) {
      $('#alertMsg').hide();
   });
});

// 登入
function accountLogin(){
   if( $('#account').val() == '' ) {
         $('#alertMsg').show();
         return false;
      }
      if( $('#password').val() == '' ) {
         $('#alertMsg').show();
         return false;
      }

      var account = $('#account').val();
      var password = $('#password').val();

      $.ajax({
         type: 'POST',
         url: 'abcajax/login',
         dataType: 'JSON',
         data:    {account:account,
               password:password},
         success:function(data) {
            if( data['status'] == 'success' ) {
               var last_param = $('#redirect').val(); 
               window.location = BASE + last_param;
            }
            else {
               $('#alertMsg').show();
               return false;
            }
         },
         error:function() {
            alert('發生錯誤！');
         }
      });
}