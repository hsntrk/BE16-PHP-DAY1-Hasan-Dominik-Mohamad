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

<?php
    $name = array (
        "car" => array(
        "image"=>"https://cdn.pixabay.com/photo/2012/11/02/13/02/car-63930__480.jpg",
        "model"=>"Audi",
        "dis"=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure, esse.",
        "btn"=>"see more",
        "price" => 200.000
        ),
        "animal" => array(
            "image"=>"https://cdn.pixabay.com/photo/2018/06/30/09/29/monkey-3507317_960_720.jpg",
            "type"=>"affe",
            "dis"=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure, esse.",
            "btn"=>"see more"
            )
        );
    ?>
<div class="card" style="width: 18rem;">
<img src=<?php echo $name['car']['image']?> class="card-img-top" alt="...">
<div class="card-body">
  <h5 class="card-title"><?= $name['car']['model']?></h5>
  <p class="card-text"><?php echo $name['car']['price'] . "€" ?></p>
  <p class="card-text"><?php echo $name['car']['dis']?></p>
  <a href="#" class="btn btn-primary"><?php echo $name['car']['btn']?></a>
</div>
</div>
<div class="card" style="width: 18rem;">
<img src=<?php echo $name['animal']['image']?> class="card-img-top" alt="...">
<div class="card-body">
  <h5 class="card-title"><?php echo $name['animal']['type']?></h5>
  <p class="card-text"><?php echo $name['animal']['dis']?></p>
  <a href="#" class="btn btn-primary"><?php echo $name['animal']['btn']?></a>
</div>
</div>
    
</body>
</html>