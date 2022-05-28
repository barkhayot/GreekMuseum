<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>그리스신화박물관</title>
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/main.css">
    <script src="//code.jquery.com/jquery-3.4.1.min.js"></script>
    
</head>
<body>
    <div id="wrap">
        <header>
        <?php include("db_connnection.php"); ?>
            <?php include("header.php"); ?>
        </header>
        <section id="image_slider">
            <div id="slider">
                <figure>
                <img src="./img/main/top_main01.jpg" alt>
                <img src="./img/main/top_main02.jpg" alt>
                <img src="./img/main/top_main03.jpg" alt>
                <img src="./img/main/top_main04.jpg" alt>
                <img src="./img/main/top_main05.jpg" alt>
                </figure>
            </div>
           
           <article id="slider_text">
               <ul>
                   <li>Greek Mythology is alive</li>
                   <li>그리스 신화가 살아숨쉬는 곳</li>
               </ul>
               <div>GREEKMYTHOLOGYISMUSIAM</div>
           </article>
           <article id="info">
               <ul>
                   <li> <img src="./img/main/tail1.gif" alt=""></li>
                   <li> <a href="#main_contents"><img src="./img/main/btn.gif" alt=""></a></li> 
                   <li> <img src="./img/main/tail2.gif" alt=""></li>
               </ul>
           </article>
        </section>
        <section id="main_contents">
            <article id="top_art">
                <ul>
                    <li><img src="./img/main/blog_con_img.jpg" alt=""></li>
                    <li><img src="./img/main/content_title.gif" alt="">
                        <a href=""><img src="./img/main/Thumbnail.jpg" alt=""></a></li>
                    <li><img src="./img/main/gallery_con_img.jpg" alt=""></li>
                </ul>
            </article>
            <article id="middle_art">
                <h4>Notice</h4>
                <ul id="notice_contents"> 
                    <li><a href="">그리스신화박물관 포스트 시작합…</a>  </li>
                    <li><a href="">2018년 새해 복 많이 받으세요~</a> </li>
                    <li><a href="">2017년도 문화가 있는날은 계속됩…</a> </li>
                    <li><a href="">2017년 정유년 새해 복 많이 받읍…</a> </li>
                </ul>
                <ul id="notice_arrow">
                    <li><img src="./img/main/notice_up.gif" alt=""></li>
                    <li><img src="./img/main/notice_down.gif" alt=""></li>
                </ul>
            </article>
            <article id="bottom_art">
                <ul>
                    <li>
                        <h4>Porgram | <span>운영프로그램</span></h4>
                        <a href=""><img src="./img/main/main_program_img.jpg" alt=""></a>
                        <h3><a href="">박물관 체험 프로그램</a> </h3>
                        <p> 만들기체험 + 아테네시민권발급 + 그리스의상체험 + 전시해설 도슨트 투어등 다채로운 체험프로그램이 준비되어 있습니다.
                        <p> 체험시간 : AM 10 ,11시 / PM 1 , 2 , 3 , 4시</p>
                    </li>
                    <li>
                        <h4>Guide | <span>박물관 둘러보기</span></h4>
                        <a href=""><img src="./img/main/main_guide_img.jpg" alt=""></a>
                        <h3><a href="">총7가지의 다양한 테마관</a> </h3>
                        <p>창조관,올림포스관,신탁관,영웅관,휴먼광,사랑관,그리스마을 등 총7가지의 다양한 테마로 상상 속 즐거움을 느껴보세요. </p>
                        <p>운영시간 : AM09 : 00 ~ PM18 : 00 (입장마감 17:00)</p>            
                    </li>
                    <li>
                        <h4>Event</h4>
                        <a href=""><img src="./img/main/Thumbnail_1.jpg" alt=""></a>
                        <h3><a href="">50일의 썸머</a> </h3>
                        <p>그리스신화박물관+트릭아이미술관AR+더핍스시즌 </p>
                        <p>기간 : 2021-07-13~2021-08-31</p>                
                    </li>
               </ul>
            </article>
        </section>    
        <footer>
            <?php include("footer.html"); ?>
        </footer>
    </div>

    <?php
    
include 'db_connection.php';
$conn = OpenCon();
echo "Connected Successfully";
CloseCon($conn);
?>
</body>
</html>