<!DOCTYPE html>
<html>

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta name="viewport" content="width=640px">

   <!-- <meta content=”yes” name=”apple-mobile-web-app-capable” />
   <meta name="viewport" content="minimal-ui"> -->

   <link rel="stylesheet"  type="text/css" href="assets/css/normalize.css" />
   <link rel="stylesheet"  type="text/css" href="assets/css/coverflow.css" />
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
         <h1 class="header_name">提醒我</h1>
         <div class="header_btn">
            <a class="back" href="bookingdetail"></a>
         </div>
      </div>
   </header>
   <main class="main no_sub-nav">
      <div class="main_content">
         <div class="studio_selection reminder_selection">
            <select class="bd4" name="" id="reminder_selection">
               <option value="0">設定提醒時間</option>
               <option value="1">1小時前</option>
               <option value="2">3小時前</option>
               <option value="3">6小時前</option>
               <option value="3">9小時前</option>
               <option value="1">1天前</option>
               <option value="2">3天前</option>
               <option value="3">5天前</option>
               <option value="3">7天前</option>
            </select>
         </div>
         <form action="selectday" method="get">
	         <div class="btn_block">
	            <a id="reminder_setting" class="btn_orange reminder_setting" href="javascript:;">確定</a>
   				</div>
	     </form>
      </div>
   </main>
   <footer class="footer">
      <nav class="main_nav">
         <ul>
            <li><a class="news" href="index.php">首頁</a></li>
            <li><a class="collect" href="collect">收藏</a></li>
            <li><a class="course active" href="">選課</a></li>
            <li><a class="booking" href="mybooking">日程表</a></li>
            <li><a class="more" href="more">更多</a></li>
         </ul>
      </nav>
   </footer>

<script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="assets/js/coverflow.js"></script> 
<script type="text/javascript" src="assets/js/course.js"></script> 
</body>
</html>