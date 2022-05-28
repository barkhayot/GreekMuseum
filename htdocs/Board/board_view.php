<<!DOCTYPE html>
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
	$num  = $_GET["num"];
	$page  = $_GET["page"];

	$con = mysqli_connect("localhost", "root", "", "sample");
	$sql = "select * from board where num=$num";
	$result = mysqli_query($con, $sql);

	$row = mysqli_fetch_array($result);
	$id      = $row["id"];
	$name      = $row["name"];
	$regist_day = $row["regist_day"];
	$subject    = $row["subject"];
	$content    = $row["content"];
	$file_name    = $row["file_name"];
	$file_type    = $row["file_type"];
	$file_copied  = $row["file_copied"];
	$hit          = $row["hit"];

	$content = str_replace(" ", "&nbsp;", $content);
	$content = str_replace("\n", "<br>", $content);

	$new_hit = $hit + 1;
	$sql = "update board set hit=$new_hit where num=$num";   
	mysqli_query($con, $sql);
?>		
</article>
<div class="boardViewHeader">
			<h4 class="jn_title">제휴문의</h4>
			<dl class="boardInfo">
				<dt>작성일</dt>
				<dd><?=$regist_day?></dd>
				<dt>작성자</dt>
				<dd><a href=""><?=$name?></a></dd>
									<dt>제목 :</dt>
					<dd><?=$subject?></dd>
			</dl>

			<div class="boardCon">
            <?=$content?><br>
			</div>
	    
	    <ul class="buttons">
				<button style="width:90px; height:35px; font-size:16px; background-color:#4e8cc2; color: white" onclick="location.href='board_list.php?page=<?=$page?>'">목록</button>
				<button style="width:90px; height:35px; font-size:16px; background-color:#4e8cc2; color: white" onclick="location.href='board_modify_form.php?num=<?=$num?>&page=<?=$page?>'">수정</button>
				<button style="width:90px; height:35px; font-size:16px; background-color:#4e8cc2; color: white" onclick="location.href='board_delete.php?num=<?=$num?>&page=<?=$page?>'">삭제</button>
				<button style="width:90px; height:35px; font-size:16px; background-color:#4e8cc2; color: white" onclick="location.href='board_form.php'">글쓰기</button>
		</ul>
	</div> <!-- board_box -->
</section> 
<footer>
    <?php include "footer.php";?>
</footer>
</body>
</html>
