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
   <div id="lightbox_area" class="lightbox_area" style="display:none;">
      <div class="lightbox selectclass">
         <div class="lightbox_topic">
            <div class="lightbox_name">預約成功</div>
            <div class="lightbox_txt">您可以重新選課或<br>前往日程表查看課程</div>
         </div>
         <div class="lightbox_btn action2">
            <a class="continue" href="course.html" >重新選課</a>
            <a class="ok" href="" >確定</a>
         </div>
      </div>
   </div>   
   <header>
      <div class="header">
         <h1 class="header_name">選課系統</h1>
         <div class="header_btn">
         <a class="back"href="selectday.html"></a>
         </div>
      </div>
   </header>
   <main class="main no_sub-nav">
      <div class="main_content">

         <div class="selectclass_null" style="display:block;"><!-- null -->
            <div class="null_txt">
               <p>很抱歉，滿足設定條件的課程不存在，<br>請更改設定條件後再搜尋。</p>
            </div>
            <div class="btn_block reset">
               <a class="btn_green" href="course.html">更改教室</a>
               <a class="btn_orange " href="selectday.html">更改日期</a>
            </div>
         </div> 
            
         <div class="selectclass_result list_area booked">
            <div class="list_row"><!-- row -->
               <div class="list_pic">
                  <img src="assets/img/f4_1.jpg" alt="">
               </div>
               <div class="list_topic">
                  <h4 class="list_title">日本媽媽家常菜</h4>
                  <div class="list_date">
                     <span class="year">2016/4/20</span>
                     <span class="time">18:00</span>
                  </div>
                  <div class="list_teacher">王小美</div>
                  <div class="list_student">2</div>
               </div>
               <div class="btn_block">
                  <a class="btn_orange booking active"href="" >預約</a>
               </div>
            </div>
            
            <div class="list_row"><!-- row -->
               <div class="list_pic">
                  <img src="assets/img/f4_1.jpg" alt="">
               </div>
               <div class="list_topic">
                  <h4 class="list_title">日本媽媽家常菜</h4>
                  <div class="list_date">
                     <span class="year">2016/4/20</span>
                     <span class="time">18:00</span>
                  </div>
                  <div class="list_teacher">王小美</div>
                  <div class="list_student">2</div>
               </div>
               <div class="btn_block">
                  <a class="btn_orange booking"href="" >預約</a>
               </div>
            </div>

            <div class="list_row"><!-- row -->
               <div class="list_pic">
                  <img src="assets/img/f4_1.jpg" alt="">
               </div>
               <div class="list_topic">
                  <h4 class="list_title">日本媽媽家常菜</h4>
                  <div class="list_date">
                     <span class="year">2016/4/20</span>
                     <span class="time">18:00</span>
                  </div>
                  <div class="list_teacher">王小美</div>
                  <div class="list_student">2</div>
               </div>
               <div class="btn_block">
                  <a class="btn_orange booking"href="" >預約</a>
               </div>
            </div>

            <div class="list_row"><!-- row -->
               <div class="list_pic">
                  <img src="assets/img/f4_1.jpg" alt="">
               </div>
               <div class="list_topic">
                  <h4 class="list_title">日本媽媽家常菜</h4>
                  <div class="list_date">
                     <span class="year">2016/4/20</span>
                     <span class="time">18:00</span>
                  </div>
                  <div class="list_teacher">王小美</div>
                  <div class="list_student">2</div>
               </div>
               <div class="btn_block">
                  <a class="btn_orange booking"href="" >預約</a>
               </div>
            </div>

            <div class="list_row"><!-- row -->
               <div class="list_pic">
                  <img src="assets/img/f4_1.jpg" alt="">
               </div>
               <div class="list_topic">
                  <h4 class="list_title">日本媽媽家常菜</h4>
                  <div class="list_date">
                     <span class="year">2016/4/20</span>
                     <span class="time">18:00</span>
                  </div>
                  <div class="list_teacher">王小美</div>
                  <div class="list_student">2</div>
               </div>
               <div class="btn_block">
                  <a class="btn_orange booking"href="" >預約</a>
               </div>
            </div>
         </div>
      </div>
   </main>
   <footer class="footer">
      <nav class="main_nav">
         <ul>
            <li><a class="news" href="news.html">首頁</a></li>
            <li><a class="collect" href="collect.html">收藏</a></li>
            <li><a class="course active" href="course.html">選課</a></li>
            <li><a class="booking" href="booking.html">日程表</a></li>
            <li><a class="more" href="more.html">更多</a></li>
         </ul>
      </nav>
   </footer>
</body>
</html>
