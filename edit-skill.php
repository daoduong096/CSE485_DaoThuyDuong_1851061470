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
            $skill=$_POST["skill-name"];
            $score=$_POST["skill-level"];

            $sql = "UPDATE skills SET skill-name='$skill-name', skill-level='$skill-level' WHERE id ='$id'";
            $result = mysqli_query($conn,$sql);
            header("location:skill.php");
        }
      ?>
      <?php 
        $sql_select = "SELECT * FROM skills WHERE id =$id";
        $result1 = mysqli_query($conn, $sql_select);
        $rows=mysqli_fetch_array($result1);
    ?>

    <form action="" method="POST">
    <label for="">id</label> <input class ="form-control" type="text" name="id" value="<?php echo $rows["id"]; ?> " >
    <label for="">Skill name</label> <input class ="form-control" type="text" name="skill-name" value="<?php echo $rows["skill-name"]; ?>">
    <label for="">Skill level</label> <input class ="form-control" type="text" name="skill-level" value="<?php echo $rows["skill-level"]; ?>">
    <input class="btn btn-success" type="submit" name ="save" value ="Lưu">
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>