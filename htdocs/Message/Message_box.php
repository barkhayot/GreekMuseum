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
            
                <article id="message">
                   <table>
                       <thead>
                           <tr>
                               <th>번호</th>
                               <th>제목</th>
                               <th>받은이</th>
                               <th>등록일</th>
                           </tr>
                       </thead>
                       <tbody>
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
                            <tr>
                                <td><?=$number?></td>
                                <td><a href="message_view.php?mode=send&num=<?=$num?>">  
                                        <?=$subject?></a>
                                </td>
                                <td><?=$msg_name?></td>
                                <td><?=$regist_day?></td>
                            </tr>
                        <?php  
                            $number--;
                        }
                        mysqli_close($con);

                        ?>
 
                       </tbody>
                   </table>
                   <ul id="page_num">  
                   <?php  
                        if ($total_page>=2 && $page >= 2) 			
                        {
                            $new_page = $page-1;   
                            echo "<li>   
                            <a href='message_box.php?mode=$mode&page=$new_page'>
                                        ◀ 이전</a> </li>";
                        }
                        else   
                            echo "<li>&nbsp;</li>";
                
                        // 게시판 목록 하단에 페이지 링크 번호 출력  
                        for ($i = 1; $i <= $total_page; $i++)
                        {
                            if ($page == $i)  // 현재 페이지 번호는 링크하지 않음
                            {
                                echo "<li><b> $i </b></li>";
                            }    
                            else                               
                            {
                                echo "<li> <a href='message_box.php?mode=$mode&page=$i'>     
                                        $i </a> <li>";
                                }
                            }
                            if ($total_page>=2 && $page != $total_page)
                            {
                                $new_page = $page+1;   
                                echo "<li> <a href='message_box.php?mode=$mode&page=$new_page'>
                                            다음 ▶</a> </li>"; 
                            }
                            else    
                                echo "<li>&nbsp;</li>"; 
                    ?>
                   </ul> <!-- page -->  
                   <ul class="buttons"> 
                        <li><button onclick="location.href='message_box.php?mode=rv'">	
                                수신 쪽지함</button></li> 
                        <li><button onclick="location.href='message_box.php?mode=send'"> 
                                송신 쪽지함</button></li> 
                        <li><button onclick="location.href='message_form.php'">쪽지 보내기   
                                </button></li>  
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