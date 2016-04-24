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
   <div id="lightbox_area" class="lightbox_area" >
      <div class="lightbox">
         <div class="lightbox_topic">
            <div class="lightbox_name">無法選擇<span class="classtype"></span>類別</div>
            <div class="lightbox_txt">您尚未購買<span class="classtype"></span>類的課程</div>
         </div>
         <div class="lightbox_btn">
            <a class="ok" href="javascript:;" id="lightbox_confirm">確定</a>
         </div>
      </div>

      <div class="lightbox">
         <div class="lightbox_topic studio">
            <div class="lightbox_name">請選擇上課地點</div>
         </div>
         <div class="lightbox_btn">
            <a class="ok" href="javascript:;" id="lightbox_confirm">確定</a>
         </div>
      </div>
   </div>   
   <header>
      <div class="header">
         <h1 class="header_name">選課系統</h1>
         <div class="header_btn">
         </div>
      </div>
   </header>
   <main class="main">
      <div class="main_content">
         <nav class="sub_nav">
            <ul class="sub_nav_block">
               <li><a class="active" href="">料理</a></li>
               <li><a class="disable" href="javascript:;">麵包</a></li>
               <li><a class="disable" href="javascript:;">甜點</a></li>
            </ul>
         </nav>
         <div class="course_selection">
            <div class="course_topic">
               <div class="course_month">4</div>
               <div class="course_name">日本媽媽家常菜</div>
            </div>
            <div class="course_photo" id="coverflow">
            	<?php
            	foreach ($classdata as $key => $value) {
            		echo '<div><img id="coverimg_'.$key.'" src="assets/img/'.$value['pic'].'" data-classno="'.$value['no'].'" data-name="'.$value['name'].'" data-info="'.$classinfo[$value['name']].'" data-month="'.$value['classmonth'].'"></div>';
            	}
            	?>
            </div>
            <div class="course_detail">
               <ul>
                  <li>大根煮脆雞</li>
                  <li>雜穀飯</li>
                  <li>和辛子野菜</li>
                  <li>野菜味噌湯</li>
                  <li>簡易草莓大福</li>
               </ul>
            </div>
         </div>
         <div class="studio_selection">
            <select class="bd4" name="" id="classroom_selection">
               <option value="0">選擇上課地點</option>
               <option value="1">南港教室</option>
               <option value="2">大葉高島屋教室</option>
               <option value="3">環球板橋教室</option>
            </select>
         </div>
         <form action="selectday" method="get">
	         <div class="btn_block">
	            <a class="btn_orange next" href="javascript:;" onclick="$(this).closest('form').submit()">下一步</a>
   				<input id="selected_class" name="selected_class" type="hidden" value="3">
   				<input id="selected_classroom" name="selected_classroom" type="hidden" value="1">
	         </div>
	     </form>
      </div>
   </main>
   <footer class="footer">
      <nav class="main_nav">
         <ul>
            <li><a class="news" href="index.php">首頁</a></li>
            <li><a class="collect" href="">收藏</a></li>
            <li><a class="course active" href="">選課</a></li>
            <li><a class="booking" href="">日程表</a></li>
            <li><a class="more" href="">更多</a></li>
         </ul>
      </nav>
   </footer>

<script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="assets/js/coverflow.js"></script> 
<script type="text/javascript" src="assets/js/course.js"></script> 
</body>
</html>