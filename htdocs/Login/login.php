<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
       $id = $_POST["id"];
       $passwd = $_POST["passwd"];
       /* db 연결 */
       $db_id="abcd";
       $db_passwd="1234";
       if( $id != $db_id)
       {
           echo "id가 없습니다.";
           
       }
       else if($passwd !=$db_passwd) 
           echo "psssword 일치하지 않습니다";

        $db_username = "hkdong";   
        session_start();
        $_SESSION['userid'] = $id;
        $_SESSION['passwd'] = $passwd;
        $_SESSION['username'] = $db_username;  


    ?>
    <script>
        location.href="../index.php";
    </script>
        
</body>
</html>