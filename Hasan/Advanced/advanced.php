<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1</title>
    <link rel="stylesheet" type="text/css" href="style1.css">

    

</head>
<body>
<?php

    $characters = array(
            "Ninjaturtles" => array
                (
                "Leonardo" => "blue",
                "Donatello" => "purple",
                "Raphael" => "red",
                "Michelangelo" => "orange"

                ),
            "Pokemon" => array
                (
                "Pikachu" => "yellow",
                "Raichu" => "lightyellow",
                "Snakey" => "violett",
                "albasaur" => "blue"
                )
            );

        // echo "<h1> The Charactername of Ninjaturtles has the color </h1>"; 
        // echo "<h1> {$characters['Ninjaturtles'][0]} </h1> <br>"; 
        echo "<h1> The Game Ninjaturtles with the charactername Leonardo has the color</h1>";
        echo $characters['Ninjaturtles']['Leonardo'] . "<br>";
        echo "<h1> The Game Pokemon with the charactername Raichu has the color </h1>"; 
        echo $characters["Pokemon"]["Raichu"] . "<br>";

       ?>

</body>
</html>