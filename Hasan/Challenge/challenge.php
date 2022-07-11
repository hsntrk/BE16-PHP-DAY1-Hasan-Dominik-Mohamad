<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

  </div>

  <?php
  $cars = array(
    "Audi_R8" => array(
      "model" => "Audi R8",
      "img" => "images/audi_r8.jpg",
      "production-year"  => 2010,
      "list-price" => 78000
    ),
    "Audi_RS4" => array(
      "model" => "Audi RS4",
      "img" => "images/audi_rs4.jpg",
      "production-year"  => 2008,
      "list-price" => 88000
    ),
    "BMW 330i" => array(
      "model" => "BMW 330i",
      "img" => "images/bmw_1.jpg",
      "production-year"  => 2011,
      "list-price" => 55000
    ),
    "Audi TT" => array(
      "model" => "Audi TT",
      "img" => "images/audi_tt.jpg",
      "production-year"  => 2005,
      "list-price" => 45000
    ),
    "BMW M3" => array(
      "model" => "BMW M3",
      "img" => "images/bmw_2.jpg",
      "production-year"  => 2011,
      "list-price" => 75000
    ),
    "Golf R32" => array(
      "model" => "Golf R32",
      "img" => "images/vw_r32.jpg",
      "production-year"  => 2004,
      "list-price" => 39000
    ),
  );
  ?>
  <div id="info" class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-2">
    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src=<?= $cars['Audi_R8']["img"] ?> class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-title">Model: <?= $cars['Audi_R8']["model"] ?> </h3>
          <h5 class="card-title">Production Year: <?php echo $cars['Audi_R8']["production-year"] ?></h5>
          <h4 class="card-title">List Price: € <?php echo $cars['Audi_R8']["list-price"] ?></h4>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src=<?= $cars['Audi_RS4']["img"] ?> class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-title">Model: <?= $cars['Audi_RS4']["model"] ?> </h3>
          <h5 class="card-title">Production Year: <?php echo $cars['Audi_RS4']["production-year"] ?></h5>
          <h4 class="card-title">List Price: € <?php echo $cars['Audi_RS4']["list-price"] ?></h4>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src=<?= $cars['BMW 330i']["img"] ?> class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-title">Model: <?= $cars['BMW 330i']["model"] ?> </h3>
          <h5 class="card-title">Production Year: <?php echo $cars['BMW 330i']["production-year"] ?></h5>
          <h4 class="card-title">List Price: € <?php echo $cars['BMW 330i']["list-price"] ?></h4>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src=<?= $cars['Audi TT']["img"] ?> class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-title">Model: <?= $cars['Audi TT']["model"] ?> </h3>
          <h5 class="card-title">Production Year: <?php echo $cars['Audi TT']["production-year"] ?></h5>
          <h4 class="card-title">List Price: € <?php echo $cars['Audi TT']["list-price"] ?></h4>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src=<?= $cars['BMW M3']["img"] ?> class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-title">Model: <?= $cars['BMW M3']["model"] ?> </h3>
          <h5 class="card-title">Production Year: <?php echo $cars['BMW M3']["production-year"] ?></h5>
          <h4 class="card-title">List Price: € <?php echo $cars['BMW M3']["list-price"] ?></h4>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src=<?= $cars['Golf R32']["img"] ?> class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-title">Model: <?= $cars['Golf R32']["model"] ?> </h3>
          <h5 class="card-title">Production Year: <?php echo $cars['Golf R32']["production-year"] ?></h5>
          <h4 class="card-title">List Price: € <?php echo $cars['Golf R32']["list-price"] ?></h4>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>