
<div id="head">
        <div id="logo"><a href="/"><img src="/img/logo.gif" alt=""></a></div>
        <nav id="top_menu">
            <ul>
                <?php session_start();
                  if(!isset($_SESSION['userid'])) { ?>
                <li><a href="/Authentication/login_form.php">Login</a></li>
                <?php } else {  
                    $userid = $_SESSION["userid"]; ?> 
                    <li><a href="/Authentication/logout.php" >Logout</a></li>
                    <li><a href="/Authentication/member_modify_form.php" target="_BLANK">정보수정</a></li>
                <?php } ?>
                <li><a href="">English</a></li>
                <li><a href="">Japanese</a></li>
                <li><a href="">Chinese</a></li>
            </ul>
        </nav>
   </div>  
   <div class="header_shadow"></div>
   <nav id="main_menu">
       <ul>
           <li><a href="/AboutUs/Introduction.php">그리스신화박물관</a>
               <ul class="sub_menu">
                   <li><a href="/AboutUs/Introduction.php">박물관소개</a></li>
                   <li><a href="/AboutUs/GreekMyth.php">그리스신화란</a></li>
                   <li><a href="/AboutUs/Provideo.php">홍보동영상</a></li>
                   <li><a href="/AboutUs/Blogger.php">블로거와 함께하는 그리스신화박물관</a></li>
                   <li><a href="/AboutUs/Pictures.php">사진으로보는 그리스신화박물관</a></li>
               </ul>
           </li>
           <li><a href="/Exhibition/creation_hall.php">전시안내</a>
               <ul class="sub_menu">
                   <li><a href ="">전체</a></li>
                   <li><a href ="/Exhibition/creation_hall.php">창조관</a></li>
                   <li><a href ="/Exhibition/olympus.php">올리포스관</a></li>
                   <li><a href ="/Exhibition/trust_hall.php">신탁관</a></li>
                   <li><a href ="/Exhibition/hero_hall.php">영웅관</a></li>
                   <li><a href ="/Exhibition/human_hall.php">휴먼관</a></li>
                   <li><a href ="/Exhibition/love_hall.php">사랑관</a></li>
                   <li><a href ="/Exhibition/greek_hall.php">그리스마을</a></li>
               </ul>
           </li>
           <li><a href="/Experience/stamp.php">체험하기</a>
                <ul class="sub_menu">
                    <li><a href = "/Experience/stamp.php">전체</a></li>
                    <li><a href = "/Experience/costume.php">그리스의상 체험</a></li>
                    <li><a href = "/Experience/stamp.php">스탬프북</a></li>
                    <li><a href = "/Experience/citizenship.php">아테네시민권 발급체험</a></li>
                    <li><a href = "/Experience/mask.php">가면만들기 체험</a></li>
                    <li><a href = "/Experience/toy.php">아트토이 체험</a></li>
                </ul>
           </li>
           <li><a href="/Tour/Tour.php">관람안내</a>
                <ul class="sub_menu"> 
                    <li><a href="/Tour/Tour.php">관람안내</a></li>
                    <li><a href="/Tour/Visit.php">오시는길</a></li>
                </ul>                
           </li>
           <li><a href="/Board/board_list.php">커뮤니티</a>
                <ul class="sub_menu">
                    <li><a href="/Board/board_list.php">공지사항</a></li>
                    <li><a href="/Community/message_box.php">자주하는 질문</a></li>
                    <li><a href="/Community/Message_list.php">묻고 답하기</a></li>
                </ul>               
           </li>
           <li><a href="/Event/event.php">이벤트</a>
                <ul class="sub_menu">
                    <li><a href="/Event/event.php">이벤트 안내</a></li>
                </ul>               
            </li>
       </ul>
   </nav>
   <nav id="quick_menu">
        <ul>
            <li><a href="http://trickeye.com/" target="_blank"><img src="/img/main/quick01.gif" alt=""></a></li>
            <li><a href="http://trickeye.com/seoul/" target="_blank"><img src="/img/main/quick02.gif" alt=""></a></li>
            <li><a href="http://trickeye.com/busan/" target="_blank"><img src="/img/main/quick03.gif" alt=""></a></li>
            <li><a href="http://trickeye.com/jeju/" target="_blank"><img src="/img/main/quick04.gif" alt=""></a></li>
            <li><a href="/Community/QnA.php"><img src="/img/main/quick05.gif" alt=""></a></li> 
            <li><a href=""><img src="/img/main/quick06.gif" alt=""></a></li>                    
            <li><a href="https://blog.naver.com/greek_trick" target="_blank"><img src="/img/main/quick07.gif" alt=""></a></li>
            <li><a href="https://www.facebook.com/trickeyegreek" target="_blank"><img src="/img/main/quick08.gif" alt=""></a></li>
            <li><a href="/Tour/Visit.php"><img src="/img/main/quick09.gif" alt=""></a></li> 
            <li><a href="https://www.instagram.com/greek_trick/" target="_blank"><img src="/img/main/quick10.gif" alt=""></a></li>               
            </ul>
    </nav>


