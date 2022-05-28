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
           <img style="width: 100%;" src="../img/aboutus/sub_visual_bg.jpg" alt="">
        </section>
        <div id="sub_main">
            <aside id="left_menu">
               <?php include ("left_menu.html"); ?>
            </aside>
            <section id="sub_contents">
                <h3>Login Page <span>HOME><span style="color:#387394">LOGIN<span></span></h3>
                <article id="sub_text">
                    <div style="text-align: center;">
                    <h2 style="text-align: center;">LOGIN</h2>
                    <br>
                    <br>
                        <form action="login.php" method="post">
                            <ul>
                                <li> <span style="font-size: 20px;">아이디</span> <input type="text" style="width:30%; height:20px; margin-left:20px" name="id"> </li>
                                <br>
                                <li><span style="font-size: 20px;">비밀번호 </span> <input type="password" style="width:30%; height:20px;"name="passwd" id=""></li>
                            </ul>
                            <br>
                    
                        <button id="btn" type="submit" style=" color:cornsilk; box-shadow: white; font-size:15px; width: 60px; height:30px; text-align:center; background-color:#387394; border:none" > 로그인 </button>
                    
                        </form>
                    </div>

                </article>
            </section>
        </div>
        <br><br>

        
        <footer>
            <?php include("../footer.html"); ?>
        </footer>
</body>
</html>
