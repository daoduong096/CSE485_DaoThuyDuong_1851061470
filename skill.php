<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
      <?php 
        include "conn.php";
        $sql="SELECT * FROM skills";
        $res=mysqli_query($conn,$sql);
        $post_list=mysqli_fetch_all($res);
      ?>

      <h2 >Quản lý kỹ năng</h2>
        <table class="table table-striped table-inverse table-responsive ">
            <thead class="thead-drank">
                <tr>
                    <th>id</th>
                    <th>skill-name</th>
                    <th>skill-level</th>
                    
                    <th>Action</th>
                </tr>
            </thead>
            <?php 
                foreach($post_list as $post){
                    echo '<tbody>';
                    echo ' <tr>';
                    echo '   <td>'.$post[0].'</td>';
                    echo '   <td>'.$post[1].'</td>';
                    echo '   <td>'.$post[2].'</td>';
                    echo '<td> <a href="edit-skill.php?id='.$post[0].'"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>';
                    echo'</tbody>';
                }
            ?>
            
        </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>