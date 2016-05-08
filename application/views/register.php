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
   <div id="wrong_cardno" class="lightbox_area" style="display:none;">
      <div class="lightbox">
         <div class="lightbox_topic">
            <div class="lightbox_name">輸入錯誤</div>
            <div class="lightbox_txt">會員卡卡號或密碼錯誤<br>請再檢查一次</div>
         </div>
         <div class="lightbox_btn">
            <a class="ok" href="javascript:;" >確定</a>
         </div>
      </div>
   </div>
   <div id="wrong_email" class="lightbox_area" style="display:none;">
      <div class="lightbox">
         <div class="lightbox_topic">
            <div class="lightbox_name">輸入錯誤</div>
            <div class="lightbox_txt">Email格式錯誤<br>請再檢查一次</div>
         </div>
         <div class="lightbox_btn">
            <a class="ok" href="javascript:;" >確定</a>
         </div>
      </div>
   </div>
   <div id="email_alreadyuse" class="lightbox_area" style="display:none;">
      <div class="lightbox">
         <div class="lightbox_topic">
            <div class="lightbox_name">輸入錯誤</div>
            <div class="lightbox_txt">Email已被使用<br>請再檢查一次</div>
         </div>
         <div class="lightbox_btn">
            <a class="ok" href="javascript:;" >確定</a>
         </div>
      </div>
   </div>

   <div id="registersuccess" class="lightbox_area" style="display:none;">
      <div class="lightbox">
         <div class="lightbox_topic">
            <div class="lightbox_name">註冊成功</div>
            <div class="lightbox_txt">恭喜您已成為ABC Cooking Studio的會員，點選確定跳轉首頁。</div>
         </div>
         <div class="lightbox_btn">
            <a class="ok" href="index.php" >確定</a>
         </div>
      </div>
   </div>

   <header>
      <div class="header registerhead">
         <h1 class="header_name">會員註冊</h1>
         <div class="header_btn">
            <a class="close" href="javascript:;" onclick="history.go(-1);"></a>
         </div>
      </div>

      <div class="header policyhead" style="display:none;">
         <h1 class="header_name">會員規章</h1>
         <div class="header_btn">
            <a class="close" href="javascript:;" id="close_policy"></a>
         </div>
      </div>
   </header>
   <main class="main no_sub-nav">
      <div class="main_content">
         <div class="form_area register_area">  
            <input type="text" id="cardno" name="cardno" placeholder="會員卡卡號">
            <input type="text" id="password" name="password" placeholder="會員密碼">
            <input type="text" id="nickname" name="nickname" placeholder="會員暱稱">
            <input type="text" id="email" name="email" placeholder="Email">
            <p>我已閱讀並同意ABC Cooking Studio的<a href="javascript:;" id="policy">會員規章</a></p>
            <div class="btn_block">
               <a class="btn_orange register" href="javascript:;" id="send" >會員註冊</a>
            </div>
         </div>
         
         <div class="policy_area" style="display:none;">
            <div class="policy_topic">本規定是對您在利用ABC Cooking Studio 時必須瞭解和同意的章程。在您簽約時請仔細閱讀。</div>
            
            <h4 class="policy_title">第一條（定義）</h4>
            <p>本規章內，以下用語將根據以下定義闡釋。</p>
            <ul class="policy_list">
               <li>「本公司」指ABC Cooking Studio Taiwan Co. Ltd. 愛必食股份有限公司。</li>
               <li>「ABC Cooking Studio」指本公司經營的料理教室總稱。</li>
               <li>「會員」指在同意本規章下申請並經本公司核准加入ABC Cooking Studio的個人客戶。</li>
               <li>「本課程」以及「課程」指ABC Cooking Studio推出包括但不限於之料理課程、麵包課程、甜點課程等，約定一定上課次數的付費課程。</li>
               <li>「STUDIO」指ABC Cooking Studio的每一個教室。</li>
               <li>「本公司網站」指本公司營運的下列網頁（包括在網頁內進行登入的會員網站）http://www.abc-cooking.com.tw（PC、智慧型手機均可開啟）。</li>
            </ul>

            <h4 class="policy_title">第二條（入會及訂立合約）</h4>
            <ul class="policy_list">
               <li>入會是指在同意本規章下，依照本公司訂立的申請手續辦理，申請加入ABC Cooking Studio。另外，訂立合約是指申請入會並經本公司核准後，與本公司簽訂書面課程合約、付費參加ABC Cooking Studio的課程。</li>
               <li>「ABC Cooking Studio」的各主要課程，限10歲以上方可參加。</li>
               <li>期間限定的課程、教室限定的課程等特別課程，因應本公司所制定之情況，入會年齡和性別等可能會有所不同，本公司保留變更參加條件之權利。</li>
               <li>入會時需繳納NT$2,500的入會費。此為一次性收費, 成為會員後，再選購其他課程時，只需負擔課程費用，並不需要再付入會費。</li>
               <li>付款方式可選擇使用現金或信用卡。使用現金付款須在訂立合約時於該教室全額一次付款。使用信用卡付款的話會按照信用卡公司的合約內容辦理。有關信用卡還款方式的更改等請直接與有關信用卡公司聯繫。</li>
               <li>有關推廣優惠、團體優惠等各種優惠，請在訂立合約時提出申請。訂立合約後的申請恕不受理。有關推廣及團體等各種優惠的內容，請到各教室查詢確認。</li>
               <li>會員本人簽署的內容（包括電子簽署、電子形式的簽署和書面簽署），均是在本人自由意志下簽署。</li>
            </ul>

            <h4 class="policy_title">第三條（ABC Cooking Studio Member’s Card）</h4>
            <ul class="policy_list">
               <li>本公司會對每一位會員發行一會員卡。會員在收到卡後請盡快在卡後面以自己的全名簽署。</li>
               <li>卡片後面記載的10位數會員號碼，會作為學生編號，在預約課堂、上課、更新申請資料和查詢時使用。</li>
               <li>在任何情況下會員卡及會員資格一律不得轉讓、冒用、偽造或塗改，如有違反除沒收會員卡外，並得強制退會及依法究辦。</li>
               <li>如有遺失，請至各教室申請補發。本公司會另外收取新台幣100元的補辦手續費。</li>
            </ul>

            <h4 class="policy_title">第四條（課程規則）</h4>
            <ul class="policy_list">
               <li>本公司開班的所有課程之內容、價錢、有效期限等服務的詳細內容，請參閱各教室公告及本公司網站和當期文宣，或洽各教室服務人員。</li>
               <li>各個課程的上課時間表會因應各教室而異。另外，時間表有可能因情況而有所更改，本公司保留更改時間表之權利，因此請密切留意和自行查詢。</li>
               <li>休息日會因應教室而有所不同。事前請跟各上課地點的教室確認。</li>
               <li>各個教室的服務內容會有部分不同，關於服務內容請向各教室查詢。</li>
               <li>各課程因食材季節性考量，均設有「課程期限」，會員應自行管理有關課程之期限。課程期限以 
                  <ul class="policy_list2">
                     <li>實際簽訂之書面課程合約約定或。</li>
                     <li>課程事前已訂下之有效限期中較早的一日為準。超過課程期限，該課程之相關權利即作無效。<br>
                     已超過課程期限的課程，在任何情況下均不受理課程展延、享用附帶服務、解約、退款等申請。</li>
                  </ul>
               </li>
               <li>會員遲到（即超過上課時間 10分鐘以上始到場上課），逾時取消上課或缺席，以及本公司視為缺席之早退，均會酌收缺課費用。</li>
               <li>缺課費用指的是在缺課的情況下, 不會扣除所購買的堂數, 但需負擔課程部份食材及場地費用。</li>
               <li>在下列情況下，本公司會針對會員實行停止課程服務（停課）： 
                  <ul class="policy_list2">
                     <li>未完成有關付款所定的登記，在繳付課堂費、解約費及缺課費用等事宜上有遲滯時(包括信用卡付款)。</li>
                     <li>違反本規章或合約規定，以及擾亂公眾風俗秩序、明顯地騷擾講師和其他會員的行為時。</li>
                     <li>其他本公司判斷認為難以提供相關服務的情況。<br>
                        停課期間禁止會員上課及停止有關的附帶服務。在停課實行期間，均不能參加有效合約的課堂，但可預約課堂。即便是因為停課而逾時取消課堂或缺課，也須根據前項所定，負擔缺課費用。<br>
                        停課狀況本公司有權視情況是否改善決定是否解除停課狀況或依第13條強制退會。</li>  
                  </ul>
               </li>
            </ul>

            <h4 class="policy_title">第五條 (預約規則)</h4>
            <ul class="policy_list">
               <li>本公司課堂全部屬預約制。有關預約系統及預約方法(規則)之詳情，可以查看在入會時另外收到的有關預約系統的刊物，或是本公司網站。</li>
               <li>預約課堂時，可以致電教室，或是透過本公司網站(24小時受理)，或是利用教室設有的電腦設備等方法，進行預約，並於課堂前一日(電話預約則是前一個工作日結束前)下午5時前辦理。另外，於本公司網站預約時，部分手機或電腦瀏覽器可能因未支援而無法瀏覽本公司網頁，請客戶理解並事先確認。</li>
               <li>電話預約時請在上班時間內直接致電各教室。（有關上班時間請向教室查詢）另外，以電話預約之後亦可透過本公司網站確認和查詢預約內容等，請會員自己管理預約事宜。關於課堂的預約，本公司不會負任何責任。</li>
               <li>要取消預約課堂時，可以致電教室，或是透過本公司網站(24小時受理)，或者利用教室設有的電腦設備等方法，於課堂前一日中午12時前辦理。若無法於上列時間之前作取消的話，本公司會根據第4條第7項之規定，徵收缺課費用。</li>
               <li>恕不接受會員本人以外人士提出的預約。</li>
            </ul>

            <h4 class="policy_title">第六條（上課規則）</h4>
            <ul class="policy_list">
               <li>圍裙,擦手巾可以在教室租借使用。各學員亦可自備。基於衛生理由，本公司建議客人自備手巾。</li>
               <li>基於衛生理由，請把長髮束起。戒子、手錶、手鐲等手部裝飾物也請在上課前摘下。另外，在上課時，如塗有指甲油和指甲長的學員，請配戴手套。</li>
               <li>上課用的筆記日誌等請自行準備和抄寫。</li>
               <li>遲到有可能會騷擾影響到其他會員上課，因此請準時到達。遲到10分鐘以上的話，不論任何原因，亦會當作缺課處理，不可上課。
                  <br>在遲到/缺席時會按照第4條第7項規定要求負擔缺課費用。
                  <br>※因天災、意外、生病、受傷、慶弔(紅事白事)、交通情況等遲到之處理方法也跟前項一樣。（如遇上大範圍的天災等時，本公司會發出免除取消缺課費用之公告，此情況屬例外）。</li>
               <li>上課學員因各種情況（包括身體不適等）於上課途中早退的話，因應其退出時的上課狀況，教室會判斷該學員為缺席或已上完該課。
                  <br>另外，如被判定為缺席的話，會按照第4條第7項之規定辦理。</li>
               <li>上完課的食譜可以帶回。但學員無法取得未實際參與課堂（包括但不限於缺課）的食譜。此外，禁止散佈、重製，公開口述、展示、傳送(包括但不限於網路) 
                  本公司的原創食譜說明（以下簡稱原創食譜）。</li>
               <li>在教室內和上課時之禁止事項如下：
                  <ul class="policy_list2">
                     <li>體驗課攜伴（上課人士以外的人）進入或一同進行體驗（包括未成年人）</li>
                     <li>在教室內逗留、參觀和等待（包括未成年人）</li>
                     <li>跟會員和本公司職員私下交流</li>
                     <li>教室內吸煙</li>
                     <li>上課前或課程結束後飲酒駕車</li>
                     <li>其他所有本規章記載了的禁止事項和行為</li>  
                  </ul>
               </li>
            </ul>
            
            <h4 class="policy_title">第七條（懷孕及產婦規則）</h4>
            <ul class="policy_list">
               <li>懷孕期間，又或是產後未滿1年的女性，可以提出課程期限延長最長不超過2年之申請。惟申請延長時必須仍在課程期限之內。</li>
               <li>查詢及申請請到上課地點的教室辦理。</li>
            </ul>

            <h4 class="policy_title">第八條（課程解約）</h4>
            <ul class="policy_list">
               <li>在不得已的情況下需要途中解約的話，請到上課地點的教室索取必要文件，填妥必要事項後交到該教室提出申請。
                  <br>當本公司接受和開始辦理解約申請後，便會按照合約內容和已完成了的課堂內容作出核對，安排退款。</li>
               <li>解約手續須在課程期限內提出申請。一旦過了課程期限，解約申請和退款均不受理。</li>
               <li>不論解約時是在課程開始之前或之後，每一種類課程各酌收解約手續費, 解約申請表可以在教室索取。原合約之配合的優惠活動也會一併失效 (解約申請表可以在教室索取)。
                  <br><br>解約內容 (指簽約時購買的堂數) 解約手續費
                       <br>-------------------------------------------------------
                       <br>甜點基礎   6堂/12堂/18堂                 NT$1,500
                       <br>麵包基礎   6堂/12堂/18堂/24堂    
                       <br>料理           6堂/12堂/24堂    

                       <br>甜點進階   6堂/12堂                          NT$2,000
                       <br>麵包進階   6堂/12堂    
                       <br>料理           36堂    
                       <br>-------------------------------------------------------
               </li>
            </ul>

            <h4 class="policy_title">第九條（限制原創食譜、商標以及標誌的使用）</h4>
            <ul class="policy_list">
               <li>不管什麼情況，以下行為一律嚴禁。
                  <ul class="policy_list2">
                     <li>利用本公司原創食譜的插圖及設計、商標和標誌
                        <br>※於取得證照資格後用於個人的謀利活動也一樣在此限。</li>
                     <li>把原創食譜以及所有在ABC Cooking Studio得到的刊物（正本及副本）轉售/轉讓予第三人（包括但不限於網上拍賣等）。</li>
                     <li>把原創食譜以任何形式公開或散佈。</li>
                     <li>把ABC Cooking Studio的標誌和其他ABC Cooking Studio的原創設計（刊物、網頁素材等）作私人用途。</li>
                  </ul>
               </li>
            </ul>

            <h4 class="policy_title">第十條（處理會員個人資料）</h4>
            <ul class="policy_list">
               <li>不管什麼情況，以下行為一律嚴禁。 </li>
            </ul>

            <h4 class="policy_title">第十一條（其他）</h4>
            <p>【教室內的限制、注意事項】</p>
            <ul class="policy_list">
               <li>財物、貴重物品等所有東西，會員必須自己小心保管，如有遺失、偷竊、意外、糾紛等，本公司恕不負責。</li>
               <li>失物保管認領只限拾獲後通知或最後招領日起3個月以內之物品。超過3個月之遺失物將由本公司自行處理或清理。</li>
               <li>在任何情況下與本公司無關的活動(包含但不限於銷售、遊說、傳教等)一律禁止。</li>
               <li>本公司所有機器設備裝潢等均禁止拍照或攝影。會員只可以拍攝自己本人的完成品，其他一律禁止。
                  <br>如希望與其他會員的作品合照，必須在得到本人同意下，並在本公司容許的範圍內進行拍攝。
                  <br>但即使合乎上述規定，所有侵犯肖像權、著作權、版權等的有關行為一律禁止。此外，未經本公司許可，在教室外透過玻璃對教室內進行拍攝等之行為也同樣禁止。</li>
               <p>【上述記載以外的限制、注意事項】</p>
               <li>會員在前往本公司和教室時，途中遇上意外、糾紛等，本公司概不負責。未成年的會員，責任歸於法定代理人。</li>
               <li>前往教室時，如法定代理人認為在途經的街道可能有危險，請自行安排接送。</li>
               <li>如有食物敏感，請事先查看食譜及食材，自行作出判斷。萬一引起敏感症狀等，本公司概不負責。</li>
               <li>如在醫院確診患有傳染性疾病，或等同的症狀，不論感染的症狀是什麼，程度如何，皆禁止上課。會員請事先辦理取消預約的手續。
                  <br>在不得已的情況下在教室發現傳染性的症狀時，請迅速通知教室職員。如遇此情況，則不可繼續上課。 
                  <br>※傳染性疾病包括但不限於：麻疹、水痘、腮腺炎、感冒、咽結合膜熱、腸胃炎、腸病毒等</li>
               <li>為避免影響其他會員權益，本公司不會因個別會員私人因素或提出需求而調整上課時間或修改上課或其他規則。</li>
               <li>本公司所提供之服務及所出售的所有課程，會因應各班級的內容、價格、上課時間和規則等各種原因而有所更改，
                  <br>本公司並保有隨時變更之權利。如有更改，本公司會事先以下列形式之其中一樣通知會員，令會員知悉：本公司網站・教室公開海報。</li>
               <li>如有必要，可能會修改本規章的全部或一部分。如遇該情況，新的規章會在上載了修改後的本規章到本公司網站後的1星期以後正式生效。 </li>
               <li>關於本公司提供的其他服務（在ABC Cooking Studio實行的體驗課程及各種活動），會按照本公司另行制定的規章和規則處理，參加該等活動之人士請參照相關規定。</li>
            </ul>

            <h4 class="policy_title">第十二條（颱風及暴雨）</h4>
            <p>【教室內的限制、注意事項】</p>
            <ul class="policy_list">
               <li>如遇颱風或暴雨警告，因應各縣市政府宣布，按以下規定實施停課。
                  <ul class="policy_list2">
                     <li>早上8時宣布停課:   早上10時許開始的課堂至下午10時許完結的課堂將取消。</li>
                     <li>下午12時宣布停課:  下午2時許開始的課堂至下午10時許完結的課堂將取消。</li>
                     <li>下午4時宣布停課:   下午6時許開始的課堂至下午10 時許完結的課堂將取消。</li>
                     <li>上課期間宣布:      已開始的課堂會繼續進行。</li>
                  </ul>
               </li>
               <li>因颱風以及暴雨造成之停課等通知，本公司並不會發送給各會員。請會員自行到 中央氣象局網站（http://www.cwb.gov.tw/V7/index.htm）或人事行政局確認情況和作出判斷。
               此外，如以非依據中央氣象局或人事行政局發出的天氣預報或停課通知，而為本公司因天氣惡劣作出取消課堂的判斷的話，本公司不會根據第4條第7項之規定收取缺課費用。
               </li>
            </ul>
            
            <h4 class="policy_title">第十三條（強制性退會）</h4>
            <ul class="policy_list">
               <li>如發現會員做出違反本規章的行為/做出於本規章內限制或禁止的行為/做出或可能做出其他以下行為，本公司有權強制相關會員辦理退會手續，且不退回任何費用。
                  <ul class="policy_list2">
                     <li>侵害本公司、他人著作權、商標權等知識產權的行為。或與侵害有相關的行為。</li>
                     <li>欺騙以及以謀利為目的的其他不正當行為。</li>
                     <li>歧視、中傷或誹謗其他會員/本公司職員和有關人員，可能有損他人名譽和信用的行為。</li>
                     <li>上騷擾到其他會員或本公司職員、有關人士的行為，以及有該傾向的行為，以及其他犯罪行為。</li>
                     <li>宣傳、推銷風俗行業的活動。</li>
                     <li>以特定宗教、政黨和思想主義為基礎的言行、推廣、行動 (發傳單等)。</li>
                     <li>違反/可能違反法令的行為。</li>
                     <li>與ABC Cooking Studio各種服務宗旨明顯有相違背的行為。</li>
                     <li>令其他會員感到不快的行為，以及可能構成騷擾的行為。</li>
                     <li>飲酒過量。</li>
                     <li>遲延付款3個月或以上。</li>
                     <li>其他本公司判斷為在一般社會觀念中不恰當的行為。</li>
                  </ul>
               </li>
            </ul>

            <h4 class="policy_title">第十四條（查詢）</h4>
            <ul class="policy_list">
               <li>如對本規章之內容或對ABC Cooking Studio有其他不清楚之處/問題等，請向上課地點的教室查詢。</li>
            </ul>
            <p>本人確認並同意以上會員規章之內容，並領取了此規章。</p>
         </div>
      </div>
   </main>
   <footer class="footer">
   </footer>


<script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
<script type="text/javascript">var BASE = '<?php echo base_url();?>';</script>
<script type="text/javascript" src="assets/js/register.js"></script> 
</body>
</html>
