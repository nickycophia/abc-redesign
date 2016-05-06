<!DOCTYPE html>
<html>

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta name="viewport" content="width=640px">

   <!-- <meta content=”yes” name=”apple-mobile-web-app-capable” />
   <meta name="viewport" content="minimal-ui"> -->

   <link rel="stylesheet"  type="text/css" href="assets/css/normalize.css" />
   <link rel="stylesheet"  type="text/css" href="assets/css/style.css" />
   <!-- webfont -->
   <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
   <link href='https://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
   <!-- webfont -->
   <style type="text/css">
      @import url(http://fonts.googleapis.com/earlyaccess/notosanstc.css);
   </style>
   <title>ABC Cooking Studio</title>
   <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
   <![endif]-->
</head>
<body>
   <div id="alertMsg" class="lightbox_area" style="display:none;">
      <div class="lightbox">
         <div class="lightbox_topic">
            <div class="lightbox_name">登入失敗</div>
            <div class="lightbox_txt">請再檢查一次帳號或密碼</div>
         </div>
         <div class="lightbox_btn">
            <a class="ok" href="javascript:;" id="msgcomfirm">確定</a>
         </div>
      </div>
   </div>   
   <header>
      <div class="header">
         <h1 class="header_name">登入</h1>
         <div class="header_btn">
            <a class="close" href=""></a>
         </div>
      </div>
   </header>
   <main class="main no_sub-nav">
      <div class="main_content">
         <div class="form_area login_area">  
            <input type="text" name="account" id="account" placeholder="會員卡卡號">
            <input type="text" name="password" id="password" placeholder="會員密碼">
            <div class="btn_block">
               <a class="btn_orange login" href="javascript:;" name="send" id="send" >登入</a>
            </div>
            <a href="forgetpsw" class="forget_psw">忘記密碼？</a>
            <hr>
            <div class="btn_block">
               <a class="btn_green register"href="register" >會員註冊</a>
            </div>
         </div>
         
      </div>
   </main>
   <footer class="footer">
   </footer>
<script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
<script type="text/javascript">var BASE = '<?php echo base_url();?>';</script>
<script type="text/javascript" src="assets/js/login.js"></script> 
</body>
</html>
