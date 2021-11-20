<?php
include_once('../_includes/keeper_admin.php')
?>
<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>sn58.tk users</title>
  </head>
  <body>
    <section class="container">
      <header class="d-flex justify-content-between align-items-center my-4">
          <h1>Список пользователей</h1>
          <div>
            *
          </div>
      </header>
    <div class="list-group">
      <?php
        include_once('../_includes/db.php');

        if(isset($_GET['id'])) {
          $q = $mysqli->query("SELECT * FROM users WHERE id=".$_GET['id']);
          $userres = $q -> fetch_assoc();


echo '<div class="card">
<h5 class="card-header">Пользователь</h5>
<div class="card-body">
<img src="'.$userres['photo'].'">
  <h5 class="card-title">'.$userres['name'].' '.$userres['surname'].'</h5>
</div>
</div>';

          $q = $mysqli->query("SELECT points.*, points_reports.*  
          FROM points_reports LEFT JOIN points ON points_reports.id_point = points.id
          WHERE points_reports.id_user=".$_GET['id']);
         if(!$q) {
           die($mysqli->error);
         }
         echo "<h3 class=\"mt-4\">Отметки</h3>";
         while($r = $q -> fetch_assoc()){
            echo '<a href="#checkPoint'.$r['id'].'" id="checkPoint'.$r['id'].'" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">'.$r['name'].'</h5>
              <small>'.($r['created_at']).'</small>
            </div>
            <p class="mb-1"><code class="mr-3">   '.($r['coordinates']).'</code><em>'.$r['comment'].'</em></p>
          </a>';
          }
        } else {
          $q = $mysqli->query("SELECT users.*, MAX(points_reports.created_at), points.name as point_name  FROM users LEFT JOIN points_reports ON points_reports.id_user=users.id LEFT JOIN points ON points_reports.id_point = points.id GROUP BY users.id, points.name");
          if(!$q) {
            die($mysqli->error);
          }
          
          while($r = $q -> fetch_assoc()){
            echo '<a href="users.php?id='.$r['id'].'" id="user'.$r['id'].'" class="list-group-item list-group-item-action d-flex">
            <img src="'.$r['photo'].'" height="50" alt="😊" class="m-r-2">
            <div style="flex-grow: 2" class="p-2">
            <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-0">'.$r['name'].' '.$r['surname'].'</h5>
            <small>'.($r['superman']?'🦸':'').' '.($r['register_date']).'</small>
          </div>
          <p class="mb-1">last point: <b>'.$r['point_name'].'</b> '.$r['created_at'].'</p>
            </div>
          </a>';
        }


        }
      ?>
      </div>
</section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>