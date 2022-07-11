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
$associative  = array(
    "cartoon" => array
        (
        "mickey_mouse" => "it is cartoon"
        ),
    "game" =>  array
        (
        "super_mario" => "it is game"
        ),
    "anime" =>  array
        (
        "goku" => "it is anime"
        )
    );


echo $associative ['cartoon']['mickey_mouse'] . "<br/>" ;
echo $associative ['game']['super_mario'] . "<br/>" ;
echo $associative ['anime']['goku'] .  "<br/>";

?>


</body>
</html>