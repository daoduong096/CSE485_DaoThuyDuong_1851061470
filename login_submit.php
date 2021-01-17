<?php  
    session_start(); 

    include 'conn.php';

    if(isset($_POST["submit"]) && $_POST["username"] != '' && $_POST["password"] != ''){
        $username=$_POST["username"];
        
        $password =$_POST["password"];
        $password=md5($password);
        $sql1="SELECT * FROM cv WHERE username= '$username' AND password='$password'";
        
        $res=mysqli_query($conn,$sql1);
        
        if(mysqli_num_rows($res) >0){
             $_SESSION ["user"] = $username;
             
             header("location:index.php");
            //  session_unset();
        }
        
        
        else{
            $_SESSION["thongbao"]="Tên đăng nhập hoặc mật khẩu sai ?";
            header("location:login.php");
            session_unset("thongbao");
        }
        

    }
    else{
        $_SESSION["thongbao"]="Vui lòng nhập đầy đủ thông tin";
        header("location:login.php");
        session_unset("thongbao");
    }
  
?>