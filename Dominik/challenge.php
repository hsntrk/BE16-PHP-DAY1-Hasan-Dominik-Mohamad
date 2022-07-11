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
        "image"=>"https://cdn.pixabay.com/photo/2012/11/02/13/02/car-63930__480.jpg",
        "model"=>"Audio",
        "dragonball"=>"Goku",
        "pokemon"=>"Pokemon"
        );
    ?>

<div class="card" style="width: 18rem;">
<img src="<?php echo $name['image']?>" class="card-img-top" alt="...">
<div class="card-body">
  <h5 class="card-title"><?php echo $name['model'] ?></h5>
  <p class="card-text">test.</p>
  <a href="#" class="btn btn-primary">Go somewhere</a>
</div>
</div>
    
</body>
</html>