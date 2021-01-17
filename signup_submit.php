<?php
    session_start();

    include 'conn.php';
    if(isset($_POST['submit']) && $_POST['username'] != '' && $_POST['email'] != '' && $_POST['password'] != '' && $_POST['password'] != ''){
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $repassword=$_POST['repassword'];
        if($password != $repassword){
            $_SESSION["thongbao"]="Mật khẩu không trùng khớp";

            header("location:signup.php");
            die();
        }
        $sql="SELECT * FROM cv WHERE username='$username'";
        $res=mysqli_query($conn,$sql);
        $password=md5($password); // mã hóa mật khẩu
        if(mysqli_num_rows($res) >0){
            $_SESSION["thongbao"]="Tên đăng ký đã tồn tại";
            

            header("location:signup.php");
            die();
        }
        
        $sql="INSERT INTO cv(username, email, password) VALUES ('$username' ,'$email','$password')";
        mysqli_query($conn, $sql);
        $_SESSION["thongbao"]="Đăng ký thành công";
        header("location:login.php");
        session_unset("thongbao");
    }
    else{
        $_SESSION["thongbao"]="Vui lòng nhập đầy đủ thông tin";
        header("location:signup.php");
        session_unset("thongbao");
    }
?>
