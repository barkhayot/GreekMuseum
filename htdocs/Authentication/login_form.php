<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title> 
    <link rel="stylesheet" href="/css/login.css?ver='1'">
    <link rel="stylesheet" href="../css/login.css?ver='1'">  
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/subpage_common.css">
    <link rel="stylesheet" href="../css/community.css">
    <link rel="stylesheet" href="../css/board_view.css">

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
      
      <form name="bform" id="login_form" action="login.php" method="post">
      <input type="hidden" name="btable" value="qna">
      <input type="hidden" name="bno" value="">
      <input type="hidden" name="del_no">
      <input type="hidden" name="p" value="">
      <input type="hidden" name="lcate" value="">	
          
                      
           <tr>
              <th scope="row">아이디</th>
              <td><label for="아이디">아이디</label>
              <input style="height: 30px; font-size:16px" type="text" name="id" placeholder="아이디" required>
            </td>
          </tr>
          
      <tr>
              <th scope="row">비밀번호</th>
              <td><label for="title">비밀번호</label>
              <input style="height: 30px; font-size:16px" type="password" name="pass" id="" placeholder="비밀번호" required></td>
          </tr>
          
            
            
      
      
          </tbody>
        </table>
        <div class="boardWriteBtn">
            <ul>
            <input style="width:90px; height:35px; font-size:16px; background-color:#4e8cc2; color: white" type="submit" value="로그인">
                 </ul>
                 <br>
                 <ul id="member_link">
            <li style="font-size: 25px;" ><a style="width:90px; height:35px; font-size:16px; " href="member_form.php">회원가입</a> | </li>
            <li style="font-size: 25px;"><a style="width:90px; height:35px; font-size:16px; " href="">아이디 찾기</a> | </li>
            <li style="font-size: 25px;"><a style="width:90px; height:35px; font-size:16px; " href="">비밀번호 찾기</a></li>
        </ul>
          </div>
        </div>
      </div>
        </div>


    
</div>
</body>



</html>