<!DOCTYPE html>
<html>

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta name="viewport" content="width=640px">
   <meta name="apple-mobile-web-app-capable" content="yes" />
   <!-- <meta name="viewport" content="minimal-ui"> -->

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
         <h1 class="header_name">最新消息</h1>
         <div class="header_btn">
            <?php if ($cardno == "") { ?>
               <a class="sub_btn" href="oneday1">預約體驗</a>
            <?php } else { ?>
               <a class="sub_btn" href="oneday">預約體驗</a>
            <?php } ?>
         </div>
      </div>
   </header>
   <main class="main">
      <div class="main_content">
         <nav class="sub_nav">
            <ul class="sub_nav_block">
               <li><a href="index.php">官方公告</a></li>
               <li><a class="active" href="theme">主題料理</a></li>
            </ul>
         </nav>
         <div class="official_news list_area">
            <?php foreach ($newsdata as $key => $value) { ?>
               <div class="list_row"><!-- row -->
                  <a class="link" href="<?php echo $value['content']?>"></a><!-- link -->
                  <div class="list_pic">
                     <img src="assets/img/<?php echo $value['content']?>.png" alt="">
                  </div>
                  <div class="list_topic">
                     <h4 class="list_title"><?php echo $value['title']?></h4>
                     <div class="list_date">
                        <span class="year"><?php echo substr($value['updatetime'], 0, 4);?></span>
                        <span class="month"><?php echo substr($value['updatetime'], 4, 2);?></span>
                        <span class="day"><?php echo substr($value['updatetime'], 6, 2);?></span>
                     </div>
                  </div>
                  <a href="javascript:;" id="collection_<?php echo $key?>" class="collection <?php echo $value['is_collect'];?>" data-newsno="<?php echo $key?>"></a><!-- collection -->
               </div>
            <?php } ?>
         </div>
      </div>
   </main>
   <footer class="footer">
      <nav class="main_nav">
         <ul>
            <li><a class="news active" href="index.php">首頁</a></li>
            <li><a class="collect" href="collect">收藏</a></li>
            <li><a class="course" href="course">選課</a></li>
            <li><a class="booking" href="mybooking">日程表</a></li>
            <li><a class="more" href="more">更多</a></li>
         </ul>
      </nav>
   </footer>
<script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="assets/js/theme.js"></script>
</body>
</html>