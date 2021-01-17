<?php  
    session_start(); 

    include 'conn.php';

    if(isset($_POST["dangnhap"]) && $_POST["username"] != '' && $_POST["password"] != ''){
        $username=$_POST["username"];
        
        $password =$_POST["password"];
        $sql2="SELECT * FROM admin WHERE username= '$username' AND password='$password'";
        
        $result=mysqli_query($conn,$sql2);
        
        if(mysqli_num_rows($result) >0){
             $_SESSION ["username"] = $username;
             header("location:admin.php");
        }
        
        
        else{
            $_SESSION["thongbao"]="Tên đăng nhập hoặc mật khẩu sai ?";
            header("location:dangnhap.php");
            session_unset("thongbao");
        }
    }
    else{
        $_SESSION["thongbao"]="Vui lòng nhập đầy đủ thông tin";
        header("location:dangnhap.php");
        session_unset("thongbao");
    }
?>