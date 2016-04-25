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
   <div id="cancel_step_one" class="lightbox_area" style="display: none;">
      <div class="lightbox">
         <div class="lightbox_topic">
            <div class="lightbox_name">取消預約</div>
            <div class="lightbox_txt">您確定要取消 該課程嗎？</div>
         </div>
         <div class="lightbox_btn action2">
            <a class="keep" href="" >保留預約</a>
            <a class="delete" href="javascript:;" >確定取消</a>
         </div>
      </div>
   </div>
   <div id="cancel_step_otwo" class="lightbox_area" style="display: none;">
      <div class="lightbox">
         <div class="lightbox_topic">
            <div class="lightbox_name">取消預約成功</div>
         </div>
         <div class="lightbox_btn">
            <a class="ok" id="cancel_ok" href="" >確定</a>
         </div>
      </div>
   </div> 

   <header>
      <div class="header">
         <h1 class="header_name">我的日程表</h1>
      </div>
   </header>
   <main class="main">
      <div class="main_content">
         <nav class="sub_nav">
            <ul class="sub_nav_block">
               <li><a class="active" href="">確認日程</a></li>
               <li><a href="history">上課紀錄</a></li>
            </ul>
         </nav>
         
         <?php if (count($booking_list) == 0): ?>
            <div class="selectclass_null" style="display:block;">
               <div class="null_txt">
                  <p>您目前還沒有預約課程喔！</p>
               </div>
            </div>
         <?php endif;?>

         <?php if (count($booking_list) > 0): ?>
            <div class="mybooking_result list_area">
               
               <?php foreach ($booking_list as $key => $value): ?>
               
                  <div class="list_row"><!-- row -->
                     <div class="list_pic">
                        <img src="assets/img/<?php echo $value['pic'];?>" alt="">
                     </div>
                     <div class="list_topic">
                        <h4 class="list_title"><?php echo $value['classname'];?></h4>
                        <div class="list_date">
                           <span class="year"><?php echo $value['date'];?></span>
                           <span class="time"><?php echo $value['classtime'];?></span>
                        </div>
                     </div>
                     <div class="btn_block">
                        <a class="btn_gray cancel cancel_booking_btn" href="javasciprt:;" data-bookingno="<?php echo $key;?>">取消預約</a>
                        <a class="btn_orange go_bookingdetail" href="bookingdetail?bookingno=<?php echo $key;?>">查看詳情</a>
                     </div>
                  </div>

               <?php endforeach; ?>

            </div>
         <?php endif;?>

      </div>
   </main>
   <footer class="footer">
      <nav class="main_nav">
         <ul>
            <li><a class="news" href="index.php">首頁</a></li>
            <li><a class="collect" href="">收藏</a></li>
            <li><a class="course" href="course">選課</a></li>
            <li><a class="booking active" href="">日程表</a></li>
            <li><a class="more" href="">更多</a></li>
         </ul>
      </nav>
   </footer>
<input type="hidden" id="prepare_cancel_bookingno" name="prepare_cancel_bookingno">
<script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="assets/js/booking.js"></script> 
</body>
</html>