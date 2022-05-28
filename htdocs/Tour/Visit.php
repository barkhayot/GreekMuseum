<!DOCTYPE html>
<html lang="kor">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>그리스신화박물관</title>
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/subpage_common.css">
    <link rel="stylesheet" href="../css/about.css">
    <script src="//code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=발급받은 APP KEY를 넣으시면 됩니다."></script>

  
</head>
<body>
    <div id="wrap">
        <header>
            <?php include("../header.php"); ?>
        </header>
        <section id="slider">
           <img style="width: 100%;" src="../img/tour/sub_visual_bg.jpg" alt="">
        </section>
        <div id="sub_main">
            <aside id="left_menu">
               <?php include ("left_menu.html"); ?>
            </aside>
            <section id="sub_contents">
                <h3>오시는길 <span>HOME><span style="color:#387394">오시는길<span></span></h3>
                <article id="sub_text">
                    <div >
                        <h4 style="margin-left: 20px; font-size: 18px;" >오시는길</h4>
                        <br>
                        <ul>
                            <li> <span style="font-size: 14px; margin-left: 20px; color:#387394"> + <span style="font-weight: bold;">주소 : </span> 제주특별자치도 제주시 한림읍 광산로 942 </span></li>
                            <li> <span style="font-size: 14px; margin-left: 20px;"> + <span style="font-weight: bold;"> 제주시, 공항에서 오시는 길 :</span> 평화로 금악, 봉성 출구 금악 방면 </span></li>
                            <li> <span style="font-size: 14px; margin-left: 20px;"> + <span style="font-weight: bold;"> 서귀포, 중문에서 오시는 길 :</span> 평화로 금악, 휴게소 출구 금악 방면 </span></li>
                            <li> <span style="font-size: 14px; margin-left: 20px;"> + <span style="font-weight: bold;"> 네비번호 :</span> 7735800 / 7735600 </span></li>
                            <li> <span style="font-size: 14px; margin-left: 20px;"> + <span style="font-weight: bold;"> 상호검색 </span> : 그리스신화박물관, 트릭아이미술관 </span></li>
                        </ul>
                    </div>
                </article>
                <br>
                <!-- * 카카오맵 - 지도퍼가기 -->
                <!-- 1. 지도 노드 -->
                <div id="daumRoughmapContainer1650272957431" class="root_daum_roughmap root_daum_roughmap_landing"></div>

                <!--
                    2. 설치 스크립트
                    * 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
                -->
                <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

                <!-- 3. 실행 스크립트 -->
                <script charset="UTF-8">
                    new daum.roughmap.Lander({
                        "timestamp" : "1650272957431",
                        "key" : "29vjz",
                        "mapWidth" : "770",
                        "mapHeight" : "360"
                    }).render();
                </script>
            </section>
        </div>
        <br><br>

        
        <footer>
            <?php include("../footer.html"); ?>
        </footer>
</body>
</html>
