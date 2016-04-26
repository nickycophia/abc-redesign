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
      <div class="lightbox">
         <div class="lightbox_topic">
            <div class="lightbox_name">尚未選擇日期</div>
            <div class="lightbox_txt">請至少選擇一天</div>
         </div>
         <div class="lightbox_btn">
            <a class="ok" href="" >確定</a>
         </div>
      </div>
   </div>   
   <header>
      <div class="header">
         <h1 class="header_name">選課系統</h1>
         <div class="header_btn">
         <a class="back" href="course"></a>
         </div>
      </div>
   </header>
   <main class="main no_sub-nav">
      <div class="main_content">
         <div class="selectday_selection">
            <div class="selectday_topic">
               <div class="selectday_name">選擇上課教室日期（可複選）</div>
            </div>
            <div class="selectday_time">
               <span class="year">2016</span>
               <span class="month"><?php echo $classmonth;?></span>
            </div>
            <div class="selectday_week">
               <ul>
                  <li>週日</li>
                  <li>週一</li>
                  <li>週二</li>
                  <li>週三</li>
                  <li>週四</li>
                  <li>週五</li>
                  <li>週六</li>
               </ul>
            </div>
            <?php if ($classmonth == 4) {?>
            <div class="selectday_date">
               <table>
                  <tr>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td><a class="disable" href="javascript:;">1</a></td>
                     <td><a class="disable" href="javascript:;">2</a></td>
                  </tr>
                  <tr>
                     <td><a class="disable" href="javascript:;">3</a></td>
                     <td><a class="disable" href="javascript:;">4</a></td>
                     <td><a class="disable" href="javascript:;">5</a></td>
                     <td><a class="disable" href="javascript:;">6</a></td>
                     <td><a class="disable" href="javascript:;">7</a></td>
                     <td><a class="disable" href="javascript:;">8</a></td>
                     <td><a class="disable" href="javascript:;">9</a></td>
                  </tr>
                  <tr>
                     <td><a class="disable" href="javascript:;">10</a></td>
                     <td><a class="disable" href="javascript:;">11</a></td>
                     <td><a class="disable" href="javascript:;">12</a></td>
                     <td><a class="disable" href="javascript:;">13</a></td>
                     <td><a class="disable" href="javascript:;">14</a></td>
                     <td><a class="enable today" href="javascript:;">15</a></td>
                     <td><a class="enable" href="javascript:;">16</a></td>
                  </tr>
                  <tr>
                     <td><a class="enable" href="javascript:;">17</a></td>
                     <td><a class="enable" href="javascript:;">18</a></td>
                     <td><a class="enable" href="javascript:;">19</a></td>
                     <td><a class="enable" href="javascript:;">20</a></td>
                     <td><a class="enable" href="javascript:;">21</a></td>
                     <td><a class="enable" href="javascript:;">22</a></td>
                     <td><a class="enable" href="javascript:;">23</a></td>
                  </tr>
                  <tr>
                     <td><a class="enable" href="javascript:;">24</a></td>
                     <td><a class="enable" href="javascript:;">25</a></td>
                     <td><a class="enable" href="javascript:;">26</a></td>
                     <td><a class="enable" href="javascript:;">27</a></td>
                     <td><a class="enable" href="javascript:;">28</a></td>
                     <td><a class="enable" href="javascript:;">29</a></td>
                     <td><a class="enable" href="javascript:;">30</a></td>
                  </tr>
               </table>
            </div>
            <?php } else { ?>
            <div class="selectday_date">
               <table>
                  <tr>
                     <td><a class="enable" href="javascript:;">1</a></td>
                     <td><a class="enable" href="javascript:;">2</a></td>
                     <td><a class="enable" href="javascript:;">3</a></td>
                     <td><a class="enable" href="javascript:;">4</a></td>
                     <td><a class="enable" href="javascript:;">5</a></td>
                     <td><a class="enable" href="javascript:;">6</a></td>
                     <td><a class="enable" href="javascript:;">7</a></td>
                  </tr>
                  <tr>
                     <td><a class="enable" href="javascript:;">8</a></td>
                     <td><a class="enable" href="javascript:;">9</a></td>
                     <td><a class="enable" href="javascript:;">10</a></td>
                     <td><a class="enable" href="javascript:;">11</a></td>
                     <td><a class="enable" href="javascript:;">12</a></td>
                     <td><a class="enable" href="javascript:;">13</a></td>
                     <td><a class="enable" href="javascript:;">14</a></td>
                  </tr>
                  <tr>
                     <td><a class="enable" href="javascript:;">15</a></td>
                     <td><a class="disable" href="javascript:;">16</a></td>
                     <td><a class="disable" href="javascript:;">17</a></td>
                     <td><a class="disable" href="javascript:;">18</a></td>
                     <td><a class="disable" href="javascript:;">19</a></td>
                     <td><a class="disable" href="javascript:;">20</a></td>
                     <td><a class="disable" href="javascript:;">21</a></td>
                  </tr>
                  <tr>
                     <td><a class="disable" href="javascript:;">22</a></td>
                     <td><a class="disable" href="javascript:;">23</a></td>
                     <td><a class="disable" href="javascript:;">24</a></td>
                     <td><a class="disable" href="javascript:;">25</a></td>
                     <td><a class="disable" href="javascript:;">26</a></td>
                     <td><a class="disable" href="javascript:;">27</a></td>
                     <td><a class="disable" href="javascript:;">28</a></td>
                  </tr>
                  <tr>
                     <td><a class="disable" href="javascript:;">29</a></td>
                     <td><a class="disable" href="javascript:;">30</a></td>
                     <td><a class="disable" href="javascript:;">31</a></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                  </tr>
               </table>
            </div>
            <?php } ?>
            <form action="selectclass" method="get">
               <div class="btn_block">
                  <a class="btn_green day_all" id="select_all_available" href="javascript:;" >日期全選</a>
                  <a class="btn_gray day_reset" id="clear_select" href="javascript:;" >清除日期</a>
                  <a id="nextstep" class="btn_sakura day_search" href="javascript:;">搜尋</a>
                  <input id="selected_day" name="selected_day" type="hidden" value="">
                  <input id="selected_month" name="selected_month" type="hidden" value="<?php echo $classmonth;?>">
                  <input id="selected_class" name="selected_class" type="hidden" value="<?php echo $_GET['selected_class'];?>">
                  <input id="selected_classroom" name="selected_classroom" type="hidden" value="<?php echo $_GET['selected_classroom'];?>">
                  
                  <input id="selected_teacher" name="selected_teacher" type="hidden" value="">
                  <input id="selected_time" name="selected_time" type="hidden" value="">
                  <input id="selected_seat" name="selected_seat" type="hidden" value="">
               </div>
            </form>
         </div>
      </div>
   </main>
   <footer class="footer">
      <div class="btn_block filter">
         <a id="select_filter" class="btn_filter" href="javascript:;" >更多篩選設定</a>
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
                     <span>不指定</span>
                  </a>
                  <a id="open_to_filtertime" href="javascript:;" class="time">
                     選擇上課時段
                     <span>不指定</span>
                  </a>
                  <a id="open_to_filterseat" href="javascript:;" class="seat">
                     選擇剩餘座位數
                     <span>不指定</span>
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
                  <a id="no_assign_teacher" href="javascript:;" class="no_assign active">不指定</a>
               </div>
               <div id="teacher_filter_area" class="filter_cell">
                  <?php foreach($classteacher as $key => $value): ?>
                  <a href="javascript:;" class="teacher" data-teacherno="<?php echo $key;?>"><?php echo $value;?></a>
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
                  <a id="no_assign_time" href="javascript:;" class="no_assign active">不指定</a>
               </div>
               <div id="time_filter_area" class="filter_cell">
                  <a href="javascript:;" class="time" data-time="1000">10:00</a>
                  <a href="javascript:;" class="time" data-time="1300">13:00</a>
                  <a href="javascript:;" class="time" data-time="1600">16:00</a>
                  <a href="javascript:;" class="time" data-time="1900">19:00</a>
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
                  <a id="no_assign_seat" href="javascript:;" class="no_assign active">不指定</a>
               </div>
               <div id="seat_filter_area" class="filter_cell">
                  <a href="javascript:;" class="seat" data-seat="0">4</a>
                  <a href="javascript:;" class="seat" data-seat="1">3</a>
                  <a href="javascript:;" class="seat" data-seat="2">2</a>
                  <a href="javascript:;" class="seat" data-seat="3">1</a>
               </div>
            </div>
         </div>
      </main>
      <footer class="footer">
      </footer>
   </div>
<script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="assets/js/selectday.js"></script> 
</body>
</html>
