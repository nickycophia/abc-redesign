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
   <div id="lightbox_area" class="lightbox_area" style="display: none;">
      <div class="lightbox selectclass">
         <div class="lightbox_topic">
            <div class="lightbox_name">預約成功</div>
            <div class="lightbox_txt">您可以重新選課或<br>前往日程表查看課程</div>
         </div>
         <div class="lightbox_btn action2">
            <a class="continue" href="course" >重新選課</a>
            <a class="ok" href="" >確定</a>
         </div>
      </div>
   </div>   
   <header>
      <div class="header">
         <h1 class="header_name">選課系統</h1>
         <div class="header_btn">
         <a class="back" href="selectday?selected_class=<?php echo $_GET['selected_class'];?>&selected_classroom=<?php echo $_GET['selected_classroom'];?>"></a>
         </div>
      </div>
   </header>
   <main class="main no_sub-nav">
      <div class="main_content">

         <?php if (count($result) > 0): ?>
            <div class="selectclass_result list_area">
               <?php foreach ($result as $key => $value): ?>
               
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
                     <div class="list_teacher"><?php echo $value['teacher'];?></div>
                     <div class="list_student"><?php echo $value['attender'];?></div>
                  </div>
                  <div class="btn_block">
                     <?php if ($value['bookstatus'] == 'booked') { ?>
                        <a class="btn_gray disable" href="javascript:;">已預約</a>
                     <?php } else { ?>
                        <a class="btn_orange booking" href="javascript:;" data-scheduleno="<?php echo $value['scheduleno'];?>">預約</a>
                     <?php } ?>
                  </div>
               </div>

               <?php endforeach; ?>
            </div>
         <?php endif;?>

         <?php if (count($result) == 0): ?>
            <div class="selectclass_null" style="display:block;">
               <div class="null_txt">
                  <p>很抱歉，滿足設定條件的課程不存在，<br>請更改設定條件後再搜尋。</p>
               </div>
               <div class="btn_block reset">
                  <a class="btn_green" href="course">更改教室</a>
                  <a class="btn_orange " href="selectday?selected_class=<?php echo $_GET['selected_class'];?>&selected_classroom=<?php echo $_GET['selected_classroom'];?>">更改日期</a>
               </div>
            </div>
         <?php endif;?>

      </div>
   </main>
   <footer class="footer">
   </footer>
<script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="assets/js/selectclass.js"></script>
</body>
</html>
