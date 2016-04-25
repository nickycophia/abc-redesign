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
   <header>
      <div class="header">
         <h1 class="header_name">更多篩選設定</h1>
         <div class="header_btn">
            <a class="back"href="selectday?selected_class=<?php echo $_GET['selected_class'];?>&selected_classroom=<?php echo $_GET['selected_classroom'];?>"></a>
         </div>
      </div>
   </header>
   <main class="main no_sub-nav">
      <div class="main_content">
         <div class="filter_setting">
            <div class="filter_topic">篩選工具幫您更快找到適合項目</div>
            <div class="filter_cell go_filter">
               <a href="filterteacher" class="teacher">
                  選擇老師
                  <span>不指定</span>
               </a>
               <a href="filtertime" class="time">
                  選擇上課時段
                  <span>10:00,13:00</span>
               </a>
               <a href="filterseat" class="seat">
                  選擇座位數
                  <span>不指定</span>
               </a>
            </div>
         </div>
      </div>
   </main>
   <footer class="footer">
      <div class="btn_block filter">
         <a class="btn_filter remove" href="" >清除篩選設定</a>
      </div>
   </footer>
<script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="assets/js/selectday.js"></script> 
</body>
</html>
