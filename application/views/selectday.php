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
         <a class="back"href="course"></a>
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
               </div>
            </form>
         </div>
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
<script type="text/javascript" src="assets/js/selectday.js"></script> 
</body>
</html>
