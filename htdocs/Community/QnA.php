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
            <h3>묻고답하기 <span>HOME > 커뮤니티 ><span style="color:#387394"> 묻고답하기<span></span></h3>

            <div class="boardBody">

                    <form name="sform" method="get" action="/default/Bd/list.php">
                    <input type="hidden" name="btable" value="notice">
                    <input type="hidden" name="mode" value="search">
                    <input type="hidden" name="ischkdel" value="">
                    <input type="hidden" name="chkdelvar" value="">    
                    <div id="searchField">
                    
                        <!-- 게시판 검색 -->
                        <fieldset class="boardSearch">
                            <legend>게시물 검색</legend>
                            <ul>
                            <li>
                                <label for="l_search">검색</label>
                                <select name="l_search" id="l_search" title="검색항목을 선택하세요!">
                                    <option value="sc">제목+내용</option>
                                    <option value="subject">제목</option>
                                    <option value="name">이름</option>
                                    <option value="comment">내용</option>                  
                                </select>
                            </li>
                            <li>
                                <label for="keyword">검색어를 입력하세요</label>
                                <input type="text" name="keyword" id="keyword" title="검색어를 입력하세요!" value="">
                            </li>
                            <li><button  onclick="submit();" align="absmiddle" style="cursor:pointer;"> 검색 </button></li>
                            </ul>
                        </fieldset>
                        <!-- //게시판 검색 -->
                        
                        <!-- 카테고리 -->
                        <fieldset class="boardCategory">
                            <legend>카테고리 검색</legend>    
                                
                        </fieldset>
                        <!-- //카테고리 -->
                    </div>
   
    
                    <!-- 리스트 -->
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
        
                        <tbody>
                                                    <?php for($i=8; $i>0; $i--){?>
                                                    <tr> 
                                                        <td class="jn_num"><?php echo $i?></td>
                                                        <td class="jn_title"><a style="color:#6e6e6e" href="view.php?btable=notice&amp;bno=17&amp;p=1&amp;lcate=" title="그리스신화박물관 포스트 시작합니다">휴관문의 드립니다?</a> <img src="../img/main/hot.gif" class="new"></td>
                                                        <td class="jn_author"><a style="color:#6e6e6e" href="mailto:greekjeju@naver.com">트립본</a></td>
                                                        <td class="jn_ad"></td>
                                                        <td class="jn_date">2018-08-05</td>
                                                        <td class="jn_vCount">791</td>
                                                    </tr>
                                                    <?php }?>
                                                                    
                        </tbody>
                    </table>
                    
                    <div class="boardPagination">
                        <button class="prev"  align="absmiddle"> 이전</button> 
                            <span style="padding:0 5px 0 3px;"><strong>1</strong> </span>
                            <span style="padding:0 5px 0 3px;"><strong>2</strong> </span>
                            <span style="padding:0 5px 0 3px;"><strong>3</strong> </span>
                        <button class="next"  align="absmiddle"> 다음</button>     </div>
                    <div class="boardBtn">
                        <ul>
                        <!--           <img src="../Bd/skin/basic/img/btn_write.gif" alt="글쓰기" />
                        -->         </ul>
                    </div>
                    </fieldset>
	 </form>
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