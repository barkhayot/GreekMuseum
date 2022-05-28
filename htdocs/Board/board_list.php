<!DOCTYPE html>
<html lang="kor">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>그리스신화박물관</title>
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/subpage_common.css">
    <link rel="stylesheet" href="../css/community.css">
    <link rel="stylesheet" href="../css/board.css">
    <link rel="stylesheet" href="../css/board-basic.css">
	<script src="//code.jquery.com/jquery-3.4.1.min.js"></script>
	
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
                <h3>공지사항 <span>HOME > 커뮤니티 ><span style="color:#387394"> 공지사항<span></span></h3>

                
				
				<fieldset class="boardListForm">
                    <legend>게시물 목록</legend>
                    <table cellspacing="0" cellpadding="0" width="100%" summary="공지사항 목록 테이블입니다.">
                        <caption>공지사항 게시물 목록입니다.</caption>
                        <thead>
                        <tr>
						
                            <th scope="col" style="font-size: 14px;" class="first-child">            No.</th>
                            <th scope="col" style="font-size: 14px;">제목</th>
                            <th scope="col" style="font-size: 14px;">작성자</th>
                            <th scope="col" style="font-size: 14px;">파일</th>
							<th scope="col" style="font-size: 14px;">작성일</th>
							<th scope="col" style="font-size: 14px;">조회</th>
                            
                        </tr>
                        </thead>

	    
<?php
	if (isset($_GET["page"]))
		$page = $_GET["page"];
	else
		$page = 1;

	$con = mysqli_connect("localhost", "root", "", "sample");
	$sql = "select * from board order by num desc";
	$result = mysqli_query($con, $sql);
	$total_record = mysqli_num_rows($result); // 전체 글 수

	$scale = 10;

	// 전체 페이지 수($total_page) 계산 
	if ($total_record % $scale == 0)     
		$total_page = floor($total_record/$scale);      
	else
		$total_page = floor($total_record/$scale) + 1; 
 
	// 표시할 페이지($page)에 따라 $start 계산  
	$start = ($page - 1) * $scale;      

	$number = $total_record - $start;

   for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)
   {
      mysqli_data_seek($result, $i);
      // 가져올 레코드로 위치(포인터) 이동
      $row = mysqli_fetch_array($result);
      // 하나의 레코드 가져오기
	  $num         = $row["num"];
	  $id          = $row["id"];
	  $name        = $row["name"];
	  $subject     = $row["subject"];
      $regist_day  = $row["regist_day"];
      $hit         = $row["hit"];
      if ($row["file_name"])
      	$file_image = "<img src='./img/file.gif'>";
      else
      	$file_image = " ";
?>

<tr> 
                    <td class="jn_num"><?=$number?></td>
                    <td class="jn_title"><a href="board_view.php?num=<?=$num?>&page=<?=$page?>"><?=$subject?></a></td>
                    <td class="jn_author"><a style="color:#6e6e6e" href="mailto:greekjeju@naver.com"><?=$name?></a></td>
                    <td class="jn_ad"><img src="../img/main/file.gif" alt="첨부파일"></td>
					<td class="jn_date"><?=$regist_day?></td>
					<td class="jn_date"><?=$hit?></td>

					</tr>
					
<?php
   	   $number--;
   }
   mysqli_close($con);

?>
</tbody>
                    </table>
                    
	    	</ul>
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
			<br>
			<br>   	
			<br>
			<ul class="buttons">
				<button style="width:90px; height:35px; font-size:16px; background-color:#4e8cc2; color: white" onclick="location.href='board_list.php'">목록</button>
<?php 
    if($userid) {
?>
					<button style="width:90px; height:35px; font-size:16px; background-color:#4e8cc2; color: white" onclick="location.href='board_form.php'">글쓰기</button> 
<?php
	} else {
?>
					<a href="javascript:alert('로그인 후 이용해 주세요!')"><button>글쓰기</button></a>
<?php
	}
?>
				
			</ul>
	</div> <!-- board_box -->
</section> 
<footer>
    <?php include "footer.php";?>
</footer>
</body>
</html>
