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
  
<script>
  function check_input() {
      if (!document.board_form.subject.value)
      {
          alert("제목을 입력하세요!");
          document.board_form.subject.focus();
          return;
      }
      if (!document.board_form.content.value)
      {
          alert("내용을 입력하세요!");    
          document.board_form.content.focus();
          return;
      }
      document.board_form.submit();
   }
</script>
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
                <h3>공지사항 <span>게시판 ><span style="color:#387394">  글 쓰기<span></span></h3>
	
  
<section>
	
   	<div id="board_box">

	   <div class="boardBody">
  <div class="boardWriteForm">
  <table width="100%" border="0" cellspacing="0" cellpadding="0" summary="게시글 등록 양식 테이블입니다.">
	  <caption>게시글 작성하기</caption>
      <tbody>

<form name="board_form" method="post" action="board_insert.php" enctype="multipart/form-data">
<input type="hidden" name="btable" value="qna">
<input type="hidden" name="bno" value="">
<input type="hidden" name="del_no">
<input type="hidden" name="p" value="">
<input type="hidden" name="lcate" value="">	
	
				<tr>
	    <th scope="row">이름 :</th>
	    <td><label for="name">이름 :</label>
        <?=$username?> <?=$userid?>    </tr>
	 <tr>
	    <th scope="row">제목 :</th>
	    <td><label for="rv_id">제목 :</label>
        <input name="subject" type="text"></td>
    </tr>
	

	  <tr>
	    <th scope="row">내용</th>
	    <td>
        	<ul class="boardWriteStyle">
			            </ul>
            <label for="comment">내용</label>
          <textarea name="content" id="comment" cols="45" rows="20" title="내용을 입력하세요!"></textarea></td>
	</tr>
	
	<tr>
	    <th scope="row">첨부 파일</th>
	    <td>
        	<ul class="boardWriteStyle">
			            </ul>
            <label for="comment">첨부 파일</label>
			<input type="file" name="upfile"></td>
    </tr>
	  


    </tbody>
  </table>
  <div class="boardWriteBtn">
  <ul class="buttons">
				<li><button style="width:90px; height:35px; font-size:16px; background-color:#4e8cc2; color: white" type="button" onclick="check_input()">완료</button></li>
                <li><button style="width:90px; height:35px; font-size:16px; background-color:#4e8cc2; color: white" type="button" onclick="location.href='board_list.php'">목록</button></li>
			</ul>
	</div>
  </div>
</div>
</form>
	
	    
	</div> <!-- board_box -->
</section> 
<footer>
    <?php include "footer.php";?>
</footer>
</body>
</html>
