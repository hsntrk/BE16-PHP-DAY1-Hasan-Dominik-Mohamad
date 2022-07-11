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

<?php
    $name4 = array ("disney"=>"https://cdn.pixabay.com/photo/2012/11/02/13/02/car-63930__480.jpg", "nintendo"=>"Super Mario", "dragonball"=>"Goku", "pokemon"=>"Pokemon");
    // echo  $name4['disney'].', ', $name4['nintendo'].', ',$name4['dragonball'].', ',$name4['pokemon'];
    ?>
<!-- <div id="result"></div> -->
<div class="card" style="width: 18rem;">
<img src=<?php echo $name4['disney']?> class="card-img-top" alt="...">
<div class="card-body">
  <h5 class="card-title">Cars</h5>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  <a href="#" class="btn btn-primary">Go somewhere</a>
</div>
</div>

<?php
    $name4 = array ("disney"=>"https://cdn.pixabay.com/photo/2012/11/02/13/02/car-63930__480.jpg", "nintendo"=>"Super Mario", "dragonball"=>"Goku", "pokemon"=>"Pokemon");
    // echo  $name4['disney'].', ', $name4['nintendo'].', ',$name4['dragonball'].', ',$name4['pokemon'];
    ?>
<!-- <div id="result"></div> -->
<div class="card" style="width: 18rem;">
<img src=<?php echo $name4['disney']?> class="card-img-top" alt="...">
<div class="card-body">
  <h5 class="card-title">Cars</h5>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  <a href="#" class="btn btn-primary">Go somewhere</a>
</div>
</div>
    


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>

