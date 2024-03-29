<?php 

$id = $_GET['id'];
$movie = file_get_contents('http://www.omdbapi.com/?apikey=21a7da2b&i=' . $id);
$movie = json_decode($movie,true);


 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Rekweb Movie</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col">
        <h2>Rekweb Movie</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-3">
          <img src="<?= $movie['Poster']; ?>" class="img-fluid">
        </div>
        <div class="col-7">
          <ul class="list-group">
            <li class="list-group-item"><h3><?= $movie['Title']; ?> (<?= $movie['Year']; ?>)</h3></li>
            <li class="list-group-item"><strong>Director :<?= $movie['Director']; ?> </strong></li>
            <li class="list-group-item"><strong>Writer :<?= $movie['Writer']; ?></strong></li>
            <li class="list-group-item"><strong>Casts : <?= $movie['Actors']; ?></strong></li>
            <li class="list-group-item"><?= $movie['Plot']; ?></li>
          </ul>
        </div>               
      </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="script.js"></script>
  </body>
</html>