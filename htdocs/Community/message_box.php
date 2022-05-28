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
    <link rel="stylesheet" href="../css/board_faq.css">
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
                <h4>
                <?php 
                if (isset($_GET["page"])) 				
                    $page = $_GET["page"]; 
                else  
                    $page = 1;
                $mode = $_GET["mode"]; 				
                if ($mode=="send")  
                    echo "송신 쪽지함 > 목록 보기"; 
                    else  
                    echo "수신 쪽지함 > 목록 보기";
                ?>
                </h4> 
            
                
                <div class="boardBody">
            <div id="faqListBody">
                
            
                       <?php 
                        $con = mysqli_connect("localhost", "root", "", "sample"); 
                        if ($mode=="send") 						
                            $sql = "select * from message where send_id='$userid' order     
                                by num desc"; else       
                        $sql = "select * from message where rv_id='$userid' order
                                by num desc";

                        $result = mysqli_query($con, $sql); 
                        $total_record = mysqli_num_rows($result);  // 전체 쪽지 수

                        $scale = 10; 	
                    // 전체 페이지 수($total_page) 계산
                        if ($total_record % $scale == 0) 					
                        $total_page = floor($total_record/$scale);  
                        else  
                        $total_page = floor($total_record/$scale) + 1;
                        // 표시할 페이지($page)에 따라 $start 계산 
                        $start = ($page - 1) * $scale; 					
                        $number = $total_record - $start; 				
                        for ($i = $start; $i < $start + $scale && $i < $total_record; $i++) 	
                        {
                            mysqli_data_seek($result, $i); 					
                            $row = mysqli_fetch_array($result);				
                            $num = $row["num"];  
                            $subject = $row["subject"];
                            $content = $row["content"];  
                            $regist_day = $row["regist_day"];
                            if ($mode=="send") 					
                                $msg_id = $row["rv_id"];  
                            else   
                                $msg_id = $row["send_id"];
                    
                            $result2 = mysqli_query($con, "select name from members where     
                                id='$msg_id'");  
                            $record = mysqli_fetch_array($result2);  
                            $msg_name = $record["name"];
                            ?>
                            <dl class="faqList">
                                <dt><img src="http://www.greekmythology.co.kr/default/Bd/skin/basic_faq/img/icon_question.gif" alt="question"> <?=$subject?></dt>
                                <dd>
                                    <dl class="faq_a">
                                        <dt><img src="http://www.greekmythology.co.kr/default/Bd/skin/basic_faq/img/icon_answer.gif" alt="answer"></dt>
                                        <dd class="jn_answer"><?=$content?><br></dd>
                                    </dl>						 
                                </dd>
                            </dl>


                            
                        <?php  
                            $number--;
                        }
                        mysqli_close($con);

                        ?>

                    </div>
                    </div>
 
                    
                    <div class="boardPagination">
<?php
	if ($total_page>=2 && $page >= 2)	
	{
		$new_page = $page-1;
		echo "<button style='width:90px; height:35px; font-size:16px; background-color:#4e8cc2; color: white' class='prev' action='board_list.php?page=$new_page'>◀ 이전</button> ";
	}		
	else 
		echo "<li>&nbsp;</li>";

   	// 게시판 목록 하단에 페이지 링크 번호 출력
   	for ($i=1; $i<=$total_page; $i++)
   	{
		if ($page == $i)     // 현재 페이지 번호 링크 안함
		{
			echo "<span style='padding:0 5px 0 3px;'><strong> $i </strong></span>";
		}
		else
		{
			echo " <a href='board_list.php?page=$i'> <span style='padding:0 5px 0 3px;'><strong> $i </strong></span></a>";
		}
   	}
   	if ($total_page>=2 && $page != $total_page)		
   	{
		$new_page = $page+1;	
		echo " <button style='width:90px; height:35px; font-size:16px; background-color:#4e8cc2; color: white' class='prev' onclick='location.href='board_list.php?page=$new_page''>다음 ▶</button> ";
	}
	else 
		echo "<li>&nbsp;</li>";
                    ?>
                   </ul> <!-- page -->  
                   <ul class="buttons"> 
                        <button style="width:90px; height:35px; font-size:16px; background-color:#4e8cc2; color: white" onclick="location.href='Message_list.php?mode=rv'">	
                                수신 쪽지함</button>
                        <button style="width:90px; height:35px; font-size:16px; background-color:#4e8cc2; color: white" onclick="location.href='message_box.php?mode=send'"> 
                                송신 쪽지함</button> 
                        <button style="width:90px; height:35px; font-size:16px; background-color:#4e8cc2; color: white" onclick="location.href='message_form.php'">쪽지 보내기   
                                </button>
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