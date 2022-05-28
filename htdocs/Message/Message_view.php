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
                    <h3 class="title">
                    <?php
                    $mode = $_GET["mode"]; 					
                    $num = $_GET["num"]; 
                    
                    $con = mysqli_connect("localhost", "root", "", "sample"); 
                    $sql = "select * from message where num=$num"; 			
                    $result = mysqli_query($con, $sql);
                    $row = mysqli_fetch_array($result); 
                    $send_id = $row["send_id"];  
                    $rv_id = $row["rv_id"]; 
                    $regist_day = $row["regist_day"]; 
                    $subject = $row["subject"]; 
                    $content = $row["content"]; 
                
                    $content = str_replace(" ", "&nbsp;", $content);			
                    $content = str_replace("\n", "<br>", $content); 
                    if ($mode=="send") 						
                        $result2 = mysqli_query($con, "select name from members where     
                            id='$rv_id'");  
                    else  
                    $result2 = mysqli_query($con, "select name from members where    
                        id='$send_id'");
                    $record = mysqli_fetch_array($result2); 
                    $msg_name = $record["name"];
                
                    if ($mode=="send") 						
                        echo "송신 쪽지함 > 내용 보기";  
                    else  
                        echo "수신 쪽지함 > 내용 보기";
                    ?>
                    </h3> 
                    <ul id="view_content"> 
                        <li>  
                            <span class="col1"><b>제목 :</b> <?=$subject?></span>	
                            <span class="col2"><?=$msg_name?> | <?=$regist_day?></span> 	
                        </li> 
                        <li> <?=$content?> </li>  
                    </ul> 
                    <ul class="buttons"> 
                        <li><button onclick="location.href='message_box.php?mode=rv'"> 
                            수신 쪽지함  </button></li> 
                        <li><button onclick="location.href='message_box.php?mode=send'">   
                            송신 쪽지함   </button></li> 
                        <li><button onclick="location.href='message_response_form.php?num=<?=$num?>'">답변 쪽지</button></li> 
                        <li><button onclick="location.href='message_delete.php?num=<?=$num?>&mode=<?=$mode?>'">삭제</button></li>  
                    </ul> 

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