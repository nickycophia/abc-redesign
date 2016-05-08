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
   <div id="email_error" class="lightbox_area" style="display:none;">
      <div class="lightbox">
         <div class="lightbox_topic">
            <div class="lightbox_name">輸入錯誤</div>
            <div class="lightbox_txt">找不到此Email的註冊紀錄</div>
         </div>
         <div class="lightbox_btn">
            <a class="ok" href="" >確定</a>
         </div>
      </div>
   </div>
   <div id="sended" class="lightbox_area" style="display:none;">
      <div class="lightbox">
         <div class="lightbox_topic">
            <div class="lightbox_name">傳送成功</div>
            <div class="lightbox_txt">已將重設密碼信寄至信箱 <br>請前往收信並完成密碼重設流程</div>
         </div>
         <div class="lightbox_btn">
            <a class="ok" href="" >確定</a>
         </div>
      </div>
   </div>   
   <header>
      <div class="header">
         <h1 class="header_name">重設密碼</h1>
         <div class="header_btn">
            <a class="back" href="login"></a>
         </div>
      </div>
   </header>
   <main class="main no_sub-nav">
      <div class="main_content">
         <div class="form_area forgetpsw_area">  
            <input type="text" id="mail" name="mail" placeholder="註冊時的Email">
            <div class="btn_block">
               <a class="btn_orange login" href="javascript:;" id="resetmail" >送出</a>
            </div>
         </div>
         
      </div>
   </main>
   <footer class="footer">
   </footer>
<script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="assets/js/forgetpsw.js"></script> 
</body>
</html>
