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
               <span class="month">4</span>
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
            <div class="selectday_date">
               <table>
                  <tr>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td><a class="disable" href="">1</a></td>
                     <td><a class="disable" href="">2</a></td>
                  </tr>
                  <tr>
                     <td><a class="disable" href="">3</a></td>
                     <td><a class="choose" href="">4</a></td>
                     <td><a class="choose" href="">5</a></td>
                     <td><a href="">6</a></td>
                     <td><a href="">7</a></td>
                     <td><a href="">8</a></td>
                     <td><a href="">9</a></td>
                  </tr>
                  <tr>
                     <td><a href="">10</a></td>
                     <td><a class="choose" href="">11</a></td>
                     <td><a href="">12</a></td>
                     <td><a href="">13</a></td>
                     <td><a href="">14</a></td>
                     <td><a href="">15</a></td>
                     <td><a href="">16</a></td>
                  </tr>
                  <tr>
                     <td><a href="">17</a></td>
                     <td><a class="choose" href="">18</a></td>
                     <td><a href="">19</a></td>
                     <td><a href="">20</a></td>
                     <td><a class="choose" href="">21</a></td>
                     <td><a class="today choose" href="">22</a></td>
                     <td><a href="">23</a></td>
                  </tr>
                  <tr>
                     <td><a href="">24</a></td>
                     <td><a href="">25</a></td>
                     <td><a href="">26</a></td>
                     <td><a href="">27</a></td>
                     <td><a href="">28</a></td>
                     <td><a href="">29</a></td>
                     <td><a href="">30</a></td>
                  </tr>
               </table>
            </div>
            <div class="btn_block">
               <a class="btn_green day_all"href="" >日期全選</a>
               <a class="btn_gray day_reset"href="" >清除選項</a>
               <a class="btn_sakura day_search"href="selectclass" >搜尋</a>
            </div>
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