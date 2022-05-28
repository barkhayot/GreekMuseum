<!DOCTYPE html>
<html lang="kor">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>그리스신화박물관</title>
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/subpage_common.css">
    <link rel="stylesheet" href="../css/community.css?ver='1'">
    <script src="//code.jquery.com/jquery-3.4.1.min.js"></script>
  
</head>
<body>
    <div id="wrap">
        <header>
            <?php include("../header.php"); ?>
        </header>

        <section id="slider">
           <img src="../img/community/sub_visual_bg.jpg" alt="">
        </section>
        <div id="sub_main">
            <aside id="left_menu">
               <?php include ("left_menu.html"); ?>
            </aside>
            <section id="sub_contents">
                <h3>메세지<span>HOME>커뮤니티>쪽지 보내기</span></h3>

                <article id="message">
                    <ul>
                        <li><a href="">수신 쪽지함</a></li>
                        <li><a href="">송신 쪽지함</a></li>
                    </ul>
                    <form action="message_insert.php?send_id=<?=$userid?>" method="post">
                        <ul>
                            <li>보내는 사람 <?=$userid?></li>
                            <li>수신아이디<input type="text" name="rv_id" required> </li>
                            <li>제목 <input type="text" name="subject" required> </li>
                            <li>내용 <textarea name="content" id="" cols="100" rows="20" required></textarea> </li>
                        </ul>
                        <input type="submit" value="보내기">
                    </form>

                </article>

                <article id="sub_contact">
                    <div>
                        <h5>관람문의<span>Tel : 064-773-5800</span>관람시간<span>09:00~18:00 (입장마감 17:00)</span></h5>
                    </div>
                </article>
                
            </section>
        </div>
        <footer>
            <?php include("../footer.html"); ?>
        </footer>
 </div>
    
</body>
</html>