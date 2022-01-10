<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 141</title>
</head>
<body>

<?php

    // part 1
    $a = 0;
    do {
        echo $a . "<br>";
        $a++;
    }
    while ($a < 10);

    // part 2
    $b = 0;
    $c = 5;

    do {
        echo $b * $c . "<br>";
        $b++;
    }
    while ($b < 20);

    // part 3
    $d = 100;
    $e = 5;

    while ($d >= 10) {
        echo $d * $e;
        $d--;
    }

    // part 4
    for($f = 1; $f < 10; $f += $f / 2) {
        echo $f . "<br>";
    }

    // part 5
    for ($g = 1; $g < 15; $g++) {
        echo "<p>On y arrive presque</p>";
    }

    // part 6
    for ($h = 20; $h > 0; $h--) {
        echo "<p>C'est presque bon</p>";
    }

    // part 7
    for ($i = 1; $i < 100; $i += 15) {
        echo "<p>On tient le bon bout</p>";
    }

    // part 8
    for ($j = 200; $j > 0; $j -= 12) {
        echo "<p>Enfin !!!!</p>";
    }

?>

</body>
</html>