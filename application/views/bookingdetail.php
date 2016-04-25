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
         <h1 class="header_name">日本媽媽家常菜</h1>
         <div class="header_btn">
         <a class="back"href="mybooking"></a>
         </div>
      </div>
   </header>
   <main class="main no_sub-nav">
      <div class="main_content">
         <div class="bookingdetail_area">
            <div class="list_pic">
               <img src="assets/img/<?php echo $detail['pic'];?>" alt="">
            </div>
            <div class="detail_all">
               <div class="list_topic">
                  <h4 class="list_title"><?php echo $detail['classname'];?></h4>
                  <div class="list_date">
                     <span class="year"><?php echo $detail['date'];?></span>
                     <span class="time"><?php echo $detail['classtime'];?></span>
                  </div>
                  <div class="list_type">料理</div>
                  <div class="list_studio"><?php echo $detail['classroom'];?></div>
                  <div class="list_teacher"><?php echo $detail['teacher'];?></div>
                  <div class="list_student"><?php echo $detail['attender'];?></div>
               </div>
               <div class="course_detail">
                  <?php echo $detail['info'];?>
               </div>
            </div>
         </div>
      </div>
   </main>
   <footer class="footer">
   </footer>
<script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="assets/js/selectday.js"></script> 
</body>
</html>