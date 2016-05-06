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
   <div id="wrong_cardno" class="lightbox_area" style="display:none;">
      <div class="lightbox">
         <div class="lightbox_topic">
            <div class="lightbox_name">輸入錯誤</div>
            <div class="lightbox_txt">會員卡卡號或密碼錯誤<br>請再檢查一次</div>
         </div>
         <div class="lightbox_btn">
            <a class="ok" href="javascript:;" >確定</a>
         </div>
      </div>
   </div>
   <div id="wrong_email" class="lightbox_area" style="display:none;">
      <div class="lightbox">
         <div class="lightbox_topic">
            <div class="lightbox_name">輸入錯誤</div>
            <div class="lightbox_txt">Email格式錯誤<br>請再檢查一次</div>
         </div>
         <div class="lightbox_btn">
            <a class="ok" href="javascript:;" >確定</a>
         </div>
      </div>
   </div>
   <div id="email_alreadyuse" class="lightbox_area" style="display:none;">
      <div class="lightbox">
         <div class="lightbox_topic">
            <div class="lightbox_name">輸入錯誤</div>
            <div class="lightbox_txt">Email已被使用<br>請再檢查一次</div>
         </div>
         <div class="lightbox_btn">
            <a class="ok" href="javascript:;" >確定</a>
         </div>
      </div>
   </div>

   <div id="registersuccess" class="lightbox_area" style="display:none;">
      <div class="lightbox">
         <div class="lightbox_topic">
            <div class="lightbox_name">註冊成功</div>
            <div class="lightbox_txt">恭喜您已成為ABC Cooking Studio的會員，點選確定跳轉首頁。</div>
         </div>
         <div class="lightbox_btn">
            <a class="ok" href="index.php" >確定</a>
         </div>
      </div>
   </div>

   <header>
      <div class="header">
         <h1 class="header_name">會員註冊</h1>
         <div class="header_btn">
            <a class="back" href=""></a>
         </div>
      </div>
   </header>
   <main class="main no_sub-nav">
      <div class="main_content">
         <div class="form_area register_area">  
            <input type="text" id="cardno" name="cardno" placeholder="會員卡卡號">
            <input type="text" id="password" name="password" placeholder="會員密碼">
            <input type="text" id="nickname" name="nickname" placeholder="會員暱稱">
            <input type="text" id="email" name="email" placeholder="Email">
            <p>我已閱讀並同意ABC Cooking Studio的<a href="policy">會員規章</a></p>
            <div class="btn_block">
               <a class="btn_orange register" href="javascript:;" id="send" >會員註冊</a>
            </div>
         </div>
         
      </div>
   </main>
   <footer class="footer">
   </footer>
<script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
<script type="text/javascript">var BASE = '<?php echo base_url();?>';</script>
<script type="text/javascript" src="assets/js/register.js"></script> 
</body>
</html>
