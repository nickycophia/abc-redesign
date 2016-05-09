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
   <div class="lightbox_area" style="display: none;">
      <div class="lightbox">
         <div class="lightbox_topic studio">
            <div class="lightbox_name">設定完成</div>
         </div>
         <div class="lightbox_btn">
            <a class="ok" href="">確定</a>
         </div>
      </div>
   </div>

   <header>
      <div class="header">
         <h1 class="header_name">提醒我</h1>
         <div class="header_btn">
            <a class="close" href="javascript:;" onclick="history.go(-1);"></a>
         </div>
      </div>
   </header>
   <main class="main no_sub-nav">
      <div class="main_content">
         <div class="studio_selection reminder_selection">
            <select class="bd4" name="reminder_selection" id="reminder_selection">
               <option value="">設定提醒時間</option>
               <option value="del">不提醒</option>
               <?php foreach ($reminder_dic as $key => $value) {
                  if ($reminder == $value) { ?>
                     <option value="<?php echo $key;?>" selected="selected"><?php echo $value;?></option>
                  <?php } else { ?>
                     <option value="<?php echo $key;?>"><?php echo $value;?></option>
                  <?php } ?>
               <?php } ?>
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
<input type="hidden" name="reminder_bookingno" id="reminder_bookingno" value="<?php echo $_GET['bookingno'];?>">
<script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="assets/js/reminder.js"></script> 
</body>
</html>