<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원정보 수정</title>
    <link rel="stylesheet" href="/css/common.css?ver='1'">    
    <link rel="stylesheet" href="/css/login.css?ver='1'"> 
    <script>
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
            <img style="width: 100%;" src="../img/community/sub_visual_bg.jpg" alt="">

        </header>
        <?php 
            $con = mysqli_connect("localhost", "rooy", "", "sample"); 	
            $sql = "select * from members where id='$userid'";   
            $result = mysqli_query($con, $sql); 
            $row = mysqli_fetch_array($result); 
           // $id= $row["id"];
            $pass = $row["pass"]; 					
            $name = $row["name"]; 
            $email = $row["email"]; 				
        
            mysqli_close($con);
        ?>
        <div class="login_wrap">
            <form action="member_modify.php?id=<?=$userid?>" method="post">
            <ul>
                <li><input type="text" name="id" id="uid" value="<?=$userid ?>" disabled > </li> 
                <li><input type="password" name="pass" id="pw1" value="<?=$pass?>" required autofocus> </li>
                <li><input type="password" name="pass_confirm" id="pw2" value="<?=$pass?>" required></li>
                <li><input type="text" name="name" value="<?=$name?>"  required></li>
                <li><input type="email" name="email" id="" value="<?=$email?>"></li>
            </ul>
            <input type="submit" value="저장하기" onclick="check_pw()"> <input type="reset" value="취소하기">
            
            </form>
        </div>
        <footer>
                <?php include("../footer.html"); ?>
        </footer>
    </div>
</body>
</html>