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
   <div id="cancel_collect_one" class="lightbox_area" style="display: none;">
      <div class="lightbox">
         <div class="lightbox_topic">
            <div class="lightbox_name">取消預約</div>
            <div class="lightbox_txt">您確定要取消 收藏嗎？</div>
         </div>
         <div class="lightbox_btn action2">
            <a id="keepcollect" class="keep" href="javascript:;" >保留收藏</a>
            <a id="deletecollect" class="delete" href="javascript:;" >確定取消</a>
         </div>
      </div>
   </div>
   <div id="cancel_collect_two" class="lightbox_area" style="display: none;">
      <div class="lightbox">
         <div class="lightbox_topic">
            <div class="lightbox_name">取消收藏成功</div>
         </div>
         <div class="lightbox_btn">
            <a class="ok" id="cancel_ok" href="" >確定</a>
         </div>
      </div>
   </div>   
   <header>
      <div class="header">
         <h1 class="header_name">我的收藏</h1>
         <div class="header_btn">
         </div>
      </div>
   </header>
   <main class="main no_sub-nav">
      <div class="main_content">
         <?php if (count($newsdata) > 0){ ?>
         <div class="mybooking_result list_area">
            <?php foreach ($newsdata as $key => $value) { ?>
                  <div class="list_row"><!-- row -->
                     <div class="list_pic">
                        <img src="assets/img/<?php echo $value['content'];?>.png" alt="">
                     </div>
                     <div class="list_topic">
                        <h4 class="list_title"><?php echo $value['title'];?></h4>
                        <div class="official_news collect">
                           <div class="list_date">
                              <span class="year"><?php echo substr($value['updatetime'], 0, 4);?></span>
                        <span class="month"><?php echo substr($value['updatetime'], 4, 2);?></span>
                        <span class="day"><?php echo substr($value['updatetime'], 6, 2);?></span>
                           </div>
                        </div>
                        
                     </div>
                     <div class="btn_block">
                        <a class="btn_gray cancel cancel_booking_btn" href="javasciprt:;" data-newsno="<?php echo $key;?>">取消收藏</a>
                        <a class="btn_orange go_bookingdetail" href="<?php echo $value['content'];?>">查看詳情</a>
                     </div>
                  </div>
            <?php } ?>
         </div>
         <?php } else { ?>
         <div class="selectclass_null" style="display:block;">
            <div class="null_txt">
               <p>您目前還沒有收藏喔！</p>
            </div>
         </div>
         <?php } ?>
      </div>
   </main>
   <footer class="footer">
      <nav class="main_nav">
         <ul>
            <li><a class="news" href="index.php">首頁</a></li>
            <li><a class="collect active" href="">收藏</a></li>
            <li><a class="course" href="course">選課</a></li>
            <li><a class="booking" href="mybooking">日程表</a></li>
            <li><a class="more" href="more">更多</a></li>
         </ul>
      </nav>
   </footer>
<input type="hidden" id="selected_cancel_newsno" name="selected_cancel_newsno">
<script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="assets/js/collect.js"></script>
</body>
</html>