<?php 
    $id = $_POST["id"]; 						
    $pass = $_POST["pass"]; 
    $name = $_POST["name"]; 
    $email = $_POST["email"]; 
				 
    $regist_day = date("Y-m-d (H:i)"); // 현재의 '연-월-일-시-분' 저장  ③

    $con = mysqli_connect("localhost", "root", "", "sample"); 	 
    $sql = "insert into members(id, pass, name, email, regist_day, 
        level, point) "; 		
    $sql .= "values('$id', '$pass', '$name', '$email', '$regist_day', 9, 0)"; 

    mysqli_query($con, $sql); 	// $sql에 저장된 명령 실행 	⑥
    mysqli_close($con); 						
    
    echo "  
        <script>   
            location.href = '/index.php'; 			
        </script> 
    ";
?>
    
