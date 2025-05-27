<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algo PHP</title>
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

    <?php
    echo '<h2>Exos 8 <h2>';

    $heure = date('H');

    if (($heure > 6) && ($heure < 11)) {
        echo "c'est le matin";
    } else if (($heure > 12) && ($heure < 14)) {
        echo "c'est le midi";
    } else {
        echo "c'est le soir";
    }
    // echo $heure
    ?>

    <?php
    echo '<h2>Exos 9<h2>';

    $i = 5;

    echo ($i % 2 == 0 ? 'pair' : 'impair');
    ?>

    <?php
    echo '<h2>Exos 10 <h2>';

    for ($i = 0; $i <= 100; $i++) {
        if (($i % 3) && ($i % 5)) {
            echo 'foobar' . '<br>';
        } else if ($i % 3) {
            echo 'foo' . '<br>';
        } else if ($i % 5) {
            echo 'bar' . '<br>';
        } else {
            echo  $i;
        }
    }

    ?>

    <?php
    echo '<h2>Exos 11<h2>';

    $identitePersonne = [
        'nom' => 'Croft',
        'prenom' => 'Lara',
        'metier' => 'Archéologue'
    ];
    echo "C'est un plaisir de vous voir " . $identitePersonne['prenom'] . ' ' . $identitePersonne['nom'] . '. (' . $identitePersonne['metier'] . ')';
    ?>

    <?php
    echo '<h2>Exos 12<h2>';

    $fighters = ['Zelda', 'Samus', 'Bowser', 'Peach', 'Lucina'];

    foreach ($fighters as $perso)
        if (strlen($perso) == 6) {
            echo $perso . '<br>';
        }
    ?>

    <?php
    echo '<h2>Exos 13 <h2>';

    $number = [10, 23, 5, 35, 8, 15, 80, 6, 29, 61];
    echo min($number);
    ?>
    <?php
    echo '<h2>Exos 14 <h2>';

    $number = [10, 23, 5, 35, 8, 15, 80, 6, 29, 61];
    sort($number);
    foreach ($number as $num) {
        echo ($num) . '<br>';
    }

    ?>

    <h2>Exos 15</h2>

    <table>
        <?php
        for ($i = 1; $i <= 9; $i++) {
            echo '<tr>';
            for ($x = 1; $x <= 9; $x++) {
                if ($i > 1) {
                    echo '<td>';
                    echo $i * $x;
                    echo '<td>';
                } else {
                    echo '<td>';
                    echo $x;
                    echo '<td>';
                }
            }
            echo '</tr>';
        }
        ?>
    </table>


</body>

</html>