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
   <header>
      <div class="header">
         <h1 class="header_name">我的日程表</h1>
         <!-- <div class="header_btn">
         <a class="back"href="course"></a>
         </div> -->
      </div>
   </header>
   <main class="main">
      <div class="main_content">
         <nav class="sub_nav">
            <ul class="sub_nav_block">
               <li><a href="mybooking">確認日程</a></li>
               <li><a class="active" href="javascript:;">上課進度</a></li>
            </ul>
         </nav>

         <div class="selectclass_null" style="display:block;"><!-- null -->
            <div class="null_txt">
               <p>您目前還沒有上課紀錄喔！</p>
            </div>
         </div>
         
      </div>
   </main>
   <footer class="footer">
      <nav class="main_nav">
         <ul>
            <li><a class="news" href="index.php">首頁</a></li>
            <li><a class="collect" href="collect">收藏</a></li>
            <li><a class="course" href="course">選課</a></li>
            <li><a class="booking active" href="">日程表</a></li>
            <li><a class="more" href="more">更多</a></li>
         </ul>
      </nav>
   </footer>
<script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="assets/js/selectday.js"></script> 
</body>
</html>