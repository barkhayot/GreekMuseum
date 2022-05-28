<!DOCTYPE html>
<html lang="kor">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>그리스신화박물관</title>
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/board_view.css">
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
        <img style="width: 100%;" src="../img/community/sub_visual_bg.jpg" alt="">
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
                    </article>

            <div class="boardViewHeader">
			<h4 class="jn_title">제휴문의</h4>
			<dl class="boardInfo">
				<dt>작성일</dt>
				<dd><?=$regist_day?></dd>
				<dt>작성자</dt>
				<dd><a href=""><?=$msg_name?></a></dd>
									<dt>제목 :</dt>
					<dd><?=$subject?></dd>
			</dl>
			<div class="attach">
												
								<ul>
									<li><strong>첨부파일. </strong>등록된 첨부파일이 없습니다.</li>
								</ul>			</div>
            <div class="boardCon">
            <?=$content?><br>
			</div>
        </div>
        <ul class="buttons"> 
                        <li><button style="width:90px; height:35px; font-size:16px; background-color:#4e8cc2; color: white" onclick="location.href='notice.php?mode=rv'"> 
                            수신 쪽지함  </button></li> 
                            <br>
                        <li><button style="width:90px; height:35px; font-size:16px; background-color:#4e8cc2; color: white" onclick="location.href='notice.php?mode=send'">   
                            송신 쪽지함   </button></li> 
                            <br>
                               </ul> 


                
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