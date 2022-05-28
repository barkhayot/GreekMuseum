<!DOCTYPE html>
<html lang="kor">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>그리스신화박물관</title>
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/subpage_common.css">
    <link rel="stylesheet" href="../css/board_view.css">
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


                
                <div id="contents">

					<!--내용시작-->
	
<script language="JavaScript">
function private_checkit()
{
	var f=document.bform
	sbj = f.subject.value;
	cmnt = f.comment.value;

	return true;
}
</script>

<script language="JavaScript">
	function checkit() {
		var f=document.bform
		
		if (!f.name.value) {
			alert( '작성자를 입력해주세요' )
			f.name.focus()
			return false
		}
		if (!f.subject.value) {
			alert( '제목을 입력해주세요' )
			f.subject.focus()
			return false
		}
		if (!f.comment.value) {
			alert( '내용을 입력해주세요' )
			f.comment.focus()
			return false
		}
				if (!f.zsfCode.value) {
			alert( '스팸방지코드를 입력해주세요' )
			f.zsfCode.focus()
			return false
		}
			}
	function del(no) {
		if(confirm('첨부파일'+no+'을 삭제하시겠습니까?')) {
		document.bform.del_no.value=no-1;
		document.bform.mode.value='del';
		document.bform.submit(); 
		}
	}
</script>
<div class="boardBody">
  <div class="boardWriteForm">
  <table width="100%" border="0" cellspacing="0" cellpadding="0" summary="게시글 등록 양식 테이블입니다.">
	  <caption>게시글 작성하기</caption>
      <tbody>

<form name="bform" action="message_insert.php?send_id=<?=$userid?>" method="post">
<input type="hidden" name="btable" value="qna">
<input type="hidden" name="bno" value="">
<input type="hidden" name="del_no">
<input type="hidden" name="p" value="">
<input type="hidden" name="lcate" value="">	
	
				<tr>
	    <th scope="row">보내는 사람</th>
	    <td><label for="name">보내는 사람</label>
        <?=$userid?>    </tr>
	 <tr>
	    <th scope="row">수신아이디</th>
	    <td><label for="rv_id">수신아이디</label>
        <input type="text" name="rv_id" id="email" title="수신아이디 입력하세요!" class="writeEmail" value=""></td>
    </tr>
	
<tr>
	    <th scope="row">제목</th>
	    <td><label for="title">제목</label>
        <input type="text" name="subject" id="title" title="제목을 입력하세요!" class="writeTitle" value=""></td>
    </tr>
	  <tr>
	    <th scope="row">내용</th>
	    <td>
        	<ul class="boardWriteStyle">
			            </ul>
            <label for="comment">내용</label>
          <textarea name="content" id="comment" cols="45" rows="20" title="내용을 입력하세요!"></textarea></td>
    </tr>
	  


    </tbody>
  </table>
  <div class="boardWriteBtn">
      <ul>
      <input style="width:90px; height:35px; font-size:16px; background-color:#4e8cc2; color: white" type="submit" value="보내기">
           </ul>
	</div>
  </div>
</div>
				</div>

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