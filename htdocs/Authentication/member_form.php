<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>member form</title>
    <link rel="stylesheet" href="../css/login.css?ver='1'">  
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/subpage_common.css">
    <link rel="stylesheet" href="../css/community.css">
    <link rel="stylesheet" href="../css/board_view.css">

    <script src="//code.jquery.com/jquery-3.4.1.min.js"></script>
  
    <script>
        function check_id(){
            var userid = document.getElementById("uid").value;
            if(userid) {
		        url = "member_check_id.php?userid="+userid;
		        window.open(url,"IDchk","width=400,height=200");
	        } else 
		        alert("아이디를 입력하세요.");
	        
        }
        function check_pw(){
            var pw1 = document.getElementById("pw1").value;
            var pw2 = document.getElementById("pw2").value;
            if(pw1!=pw2)
            {
               alert("패스워드가 일치하지 않습니다");
               return false;
            }
           
            return true;
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
        <div class="boardBody">
            <div class="boardWriteForm">
            <table width="100%" border="0" cellspacing="0" cellpadding="0" summary="게시글 등록 양식 테이블입니다.">
                <caption>게시글 작성하기</caption>
                <tbody>
          
          <form name="bform" action="member_insert.php" method="post">
          <input type="hidden" name="btable" value="qna">
          <input type="hidden" name="bno" value="">
          <input type="hidden" name="del_no">
          <input type="hidden" name="p" value="">
          <input type="hidden" name="lcate" value="">	
              
                          
               <tr>
                  <th scope="row">아이디</th>
                  <td><label for="아이디">아이디</label>
                  <input style="height: 30px; font-size:16px" type="text" name="id" id="uid" placeholder="아이디" required autofocus> <input type="button" style="height: 30px; font-size:16px; width:70px; background-color:#4e8cc2; color: white" value="중복확인" onclick=
                "check_id()"> </li> </td>
              </tr>
              
          <tr>
                  <th scope="row">비밀번호</th>
                  <td><label for="title">비밀번호</label>
                  <input style="height: 30px; font-size:16px" type="password" name="pass" id="pw1" placeholder="비밀번호" required></td>
              </tr>
              <tr>
                  <th scope="row">비밀번호 확인</th>
                  <td><label for="title">비밀번호 확인</label>
                  <input style="height: 30px; font-size:16px" type="password" name="pass_confirm" id="pw2" placeholder="비밀번호 확인" required></td>
              </tr>
              <tr>
                  <th scope="row">이름</th>
                  <td><label for="title">이름</label>
                  <input style="height: 30px; font-size:16px" type="text" name="name" placeholder="이름"  required></td>
              </tr>
              <tr>
                  <th scope="row">email</th>
                  <td><label for="title">email</label>
                  <input style="height: 30px; font-size:16px" type="email" name="email" id="" placeholder="example@naver.com"></td>
              </tr>
                
                
          
          
              </tbody>
            </table>
            <div class="boardWriteBtn">
                <ul>
                <input style="width:90px; height:35px; font-size:16px; background-color:#4e8cc2; color: white" type="submit" value="저장하기" onclick="check_pw()"> <input type="reset" style="width:90px; height:35px; font-size:16px; background-color:#4e8cc2; color: white" value="취소하기">
                     </ul>
              </div>
            </div>
          </div>
            </div>


        
    </div>
</body>
</html>