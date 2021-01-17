<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <?php 
      include "conn.php";
      ?>
      <?php
        if(isset($_GET['id'])){
            $id=$_GET['id'];
        }
      ?>
      <?php 
        if(isset($_POST["save"])){
            $name=$_POST["name"];
            $date=$_POST["date"];
            $description=$_POST["description"];
            $catelogy=$_POST["catelogy"];
            
            $sql = "UPDATE blog SET name='$name', date='$date',description='$description', catelogy='$catelogy'  WHERE id ='$id'";
            $result = mysqli_query($conn,$sql);
            header("location:blog.php");
        }
      ?>
      <?php 
        $sql_select = "SELECT * FROM blog WHERE id ='$id'";
        $result1 = mysqli_query($conn, $sql_select);
        $rows=mysqli_fetch_array($result1);
    ?>

    <form action="" method="POST">
        <label for="">id</label> <input class ="form-control" type="text" name="id" value="<?php echo $rows["id"]; ?> " >
        <label for=""> name</label> <input class ="form-control" type="text" name="name" value="<?php echo $rows["name"]; ?>">
        <label for="">date</label> <input class ="form-control" type="date" name="date" value="<?php echo $rows["date"]; ?>">
        <label for=""> description</label> <input class ="form-control" type="text" value="description" value="<?php echo $rows["description"]; ?>">
        <label for="">catelogy</label> <input class ="form-control" type="text" name="catelogy" value="<?php echo $rows["catelogy"]; ?>">
        <input class="btn btn-success" type="submit" name ="save" value ="Lưu">
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>