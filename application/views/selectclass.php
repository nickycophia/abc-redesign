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
            <a class="ok" href="mybooking" >查看日程表</a>
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
            <div class="selectclass_result list_area <?php echo $class_booked;?>">
               <div class="selectclass_topic"><?php echo $result_classname;?></div>
               <div id="classresult">
                  
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
                           <a class="btn_orange booking active" href="javascript:;">預約</a>
                        <?php } else { ?>
                           <a class="btn_orange booking" href="javascript:;" data-scheduleno="<?php echo $value['scheduleno'];?>">預約</a>
                        <?php } ?>
                     </div>
                  </div>

                  <?php endforeach; ?>
                  
               </div>
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
   <input id="selected_day" name="selected_day" type="hidden" value="<?php echo $_GET['selected_day'];?>">
   <input id="selected_month" name="selected_month" type="hidden" value="<?php echo $_GET['selected_month'];?>">
   <input id="selected_class" name="selected_class" type="hidden" value="<?php echo $_GET['selected_class'];?>">
   <input id="selected_classroom" name="selected_classroom" type="hidden" value="<?php echo $_GET['selected_classroom'];?>">

   <input id="selected_teacher" name="selected_teacher" type="hidden" value="">
   <input id="selected_time" name="selected_time" type="hidden" value="">
   <input id="selected_seat" name="selected_seat" type="hidden" value="">

   <footer class="footer">
      <div class="btn_block filter">
         <a id="select_filter" class="btn_filter <?php echo $is_active;?>" href="javascript:;" >更多篩選設定</a>
      </div>
   </footer>
   
   <div class="filter_area to_filter" style="display: none;">
      <header>
         <div class="header">
            <h1 class="header_name">更多篩選設定</h1>
            <div class="header_btn">
               <a id="close_to_filter" class="back" href="javascript:;"></a>
            </div>
         </div>
      </header>
      <main class="main no_sub-nav">
         <div class="main_content">
            <div class="filter_setting">
               <div class="filter_topic">篩選工具幫您更快找到適合項目</div>
               <div class="filter_cell go_filter">
                  <a id="open_to_filterteacher" href="javascript:;" class="teacher">
                     選擇老師
                     <span><?php echo $teacher_active_display;?></span>
                  </a>
                  <a id="open_to_filtertime" href="javascript:;" class="time">
                     選擇上課時段
                     <span><?php echo $time_active_display;?></span>
                  </a>
                  <a id="open_to_filterseat" href="javascript:;" class="seat">
                     選擇剩餘座位數
                     <span><?php echo $seat_active_display;?></span>
                  </a>
               </div>
            </div>
         </div>
      </main>
      <footer class="footer">
         <div class="btn_block filter">
            <a class="btn_filter remove" href="javascript:;" >清除篩選設定</a>
         </div>
      </footer>
   </div>
   
   <div class="filter_area to_filterteacher" style="display: none;">
      <header>
         <div class="header">
            <h1 class="header_name">選擇老師</h1>
            <div class="header_btn">
               <a id="close_to_filterteacher" class="back" href="javascript:;"></a>
            </div>
         </div>
      </header>
      <main class="main no_sub-nav">
         <div class="main_content">
            <div class="filter_setting">
               <div class="filter_cell">
                  <a id="no_assign_teacher" href="javascript:;" class="no_assign <?php echo $teacher_active['noselect'];?>">不指定</a>
               </div>
               <div id="teacher_filter_area" class="filter_cell">
                  <?php foreach($classteacher as $key => $value): ?>
                  <a href="javascript:;" class="teacher <?php echo $teacher_active[$key];?>" data-teacherno="<?php echo $key;?>"><?php echo $value;?></a>
                  <?php endforeach; ?>
               </div>
            </div>
         </div>
      </main>
      <footer class="footer">
      </footer>
   </div>
   
   <div class="filter_area to_filtertime" style="display: none;">
      <header>
         <div class="header">
            <h1 class="header_name">選擇時間</h1>
            <div class="header_btn">
               <a id="close_to_filtertime" class="back"href="javascript:;"></a>
            </div>
         </div>
      </header>
      <main class="main no_sub-nav">
         <div class="main_content">
            <div class="filter_setting">
               <div class="filter_cell">
                  <a id="no_assign_time" href="javascript:;" class="no_assign <?php echo $time_active['noselect'];?>">不指定</a>
               </div>
               <div id="time_filter_area" class="filter_cell">
                  <a href="javascript:;" class="time <?php echo $time_active['1000'];?>" data-time="1000">10:00</a>
                  <a href="javascript:;" class="time <?php echo $time_active['1300'];?>" data-time="1300">13:00</a>
                  <a href="javascript:;" class="time <?php echo $time_active['1600'];?>" data-time="1600">16:00</a>
                  <a href="javascript:;" class="time <?php echo $time_active['1900'];?>" data-time="1900">19:00</a>
               </div>
            </div>
         </div>
      </main>
      <footer class="footer">
      </footer>
   </div>
   
   <div class="filter_area to_filterseat" style="display: none;">
      <header>
         <div class="header">
            <h1 class="header_name">選擇剩餘座位數</h1>
            <div class="header_btn">
               <a id="close_to_filterseat" class="back" href="javascript:;"></a>
            </div>
         </div>
      </header>
      <main class="main no_sub-nav">
         <div class="main_content">
            <div class="filter_setting">
               <div class="filter_cell">
                  <a id="no_assign_seat" href="javascript:;" class="no_assign <?php echo $seat_active['noselect'];?>">不指定</a>
               </div>
               <div id="seat_filter_area" class="filter_cell">
                  <a href="javascript:;" class="seat <?php echo $seat_active['0'];?>" data-seat="0">4</a>
                  <a href="javascript:;" class="seat <?php echo $seat_active['1'];?>" data-seat="1">3</a>
                  <a href="javascript:;" class="seat <?php echo $seat_active['2'];?>" data-seat="2">2</a>
                  <a href="javascript:;" class="seat <?php echo $seat_active['3'];?>" data-seat="3">1</a>
               </div>
            </div>
         </div>
      </main>
      <footer class="footer">
      </footer>
   </div>
<script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
<script type="text/javascript">var BASE = '<?php echo base_url();?>';</script>
<script type="text/javascript" src="assets/js/selectclass.js"></script>
</body>
</html>
