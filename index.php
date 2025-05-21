<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    echo '<h2>Exos 1</h2>';
    for ($i = 0; $i <= 25; $i++) {
        echo  $i . '<br>';
    } ?>

    <?php
    echo '<h2>Exos 2 <h2>';

    $i = 25;
    while ($i >= 1) {
        echo $i . '<br>';
        $i--;
    }
    ?>

    <?php
    echo '<h2>Exos 3 <h2>';
    for ($i = 0; $i <= 25; $i++) {
        echo $i . '<br>';
        for ($y = 0; $y <= $i; $y++) {
            echo $y;
        }
    }

    ?>

    <?php
    echo '<h2>Exos 4<h2>';
    $y = 0;
    for ($i = 1; $i <= 30; $i++) {
        $y = $y + $i;
    }
    echo $y
    ?>

    <?php
    echo '<h2>Exos 5<h2>';
    function pair($i)
    {
        if ($i % 2 == 0) {
            return 'est pair';
        } else {
            return 'pas pair';
        }
    }
    function estPair($i)
    {
        if ($i % 2 == 0) {
            return $i;
        }
    }

    echo pair(5);
    ?>

    <?php
    echo '<h2>Exos 6<h2>';

    for ($i = 1; $i <= 20; $i++) {
        echo estPair($i) . '<br>';
    }

    ?>

    <?php

    echo '<h2>Exos 7 <h2>';
    $a = 10;
    $b = 5;
    $c = sqrt($a * $a + $b * $b);
    echo $c;
    ?>
</body>

</html>