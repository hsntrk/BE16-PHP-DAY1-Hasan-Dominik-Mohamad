<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$character  = array(
    "cartoon" => array
        (
        "disney" => "mickey mouse is a cartoon character."
        ),
    "videogame" =>  array
        (
        "nintendo" => "super mario is a video game character"
        ),
    "anime" =>  array
        (
        "weeb" => "is a weeb character"
        )
    );


echo $character ['cartoon']['disney'] . "<br/>" ;
echo $character ['videogame']['nintendo'] . "<br/>" ;
echo $character ['anime']['weeb'] .  "<br/>";

?>


</body>
</html>