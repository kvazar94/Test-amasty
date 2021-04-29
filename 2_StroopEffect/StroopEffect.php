<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>StroopEffect</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .letter {
            font-size: 450%;
            font-family: serif;
            font-weight: bold;
            position: relative;
            top: 100px;

        }
    </style>
</head>
<body>

<?php

$colors = ["red", "blue", "green", "yellow", "lime", "magenta", "black", "gold", "gray", "tomato"];
for ($i = 1; $i <= 5; $i++) {
    shuffle($colors);
    for ($j = 1; $j <= 5; $j++) {
        $color = ($word = 0);
        while ($color == $word) {
            $color = rand(0, 9);
            $word = rand(0, 9);
        }
        echo "<span class='letter' style='color:" . $colors[$color] . "'>" . $colors[$word] . " " . "</span>";
    }
    echo "<br>";
}
?>
</body>
</html>

