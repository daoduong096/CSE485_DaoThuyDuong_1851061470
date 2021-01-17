<!doctype html>
<html lang="en">
  <head>
    <title>Sửa thông tin cá nhân</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <?php 
    require 'conn.php';
  ?>
  <?php 
    if(isset($_POST['edit'])){
        $emai=$_POST["email"];
        $sdt=$_POST["sdt"];

        $sql="UPDATE about SET email='$email',sdt='$sdt' WHERE id='$id'";
        $res=mysqli_query($conn,$sql);
        header("location:index.php");
    }
  ?>
  <?php 
    $sql_select="SELECT * FROM about WHERE id='$id'";
    $result =mysqli_query($conn,$sql_select);
    $rows=mysqli_fetch_array($result);
  ?>


      <section class="about section">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h3>Sửa thông tin cá nhân</h3>
                </div>
            </div>
        </div>
      </section>

      <form action="" method="POST">
            <label for="">email</label> <input class ="form-control" type="email" name="email" value="<?php echo $rows["email"]; ?> ">
            <label for="">SDT</label> <input class ="form-control" type="number" name="sdt" value="<?php echo $rows["sdt"]; ?> " >
            <input class="btn btn-success" type="submit" name ="edit" value ="Sửa">
      </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>