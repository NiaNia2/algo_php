<?php ob_start()  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>

<body>
    <?php
    if (isset($_GET['ville']) & isset($_GET['transport'])) {
        echo '<h2>Exos 1<h2>';
        echo 'la ville choisie est : ' . $_GET['ville'] . ' le voyage se fera en ' . $_GET['transport'];
    }
    ?>
    <h2>Exos 2 </h2>


    <form action="form.php" method="get">
        <label for="animals">Quel est votre animal favori</label>
        <input type="text" name="animals">
        <button>valider</button>
    </form>
    <?php
    if (isset($_GET['animals'])) {
        echo $_GET['animals'];
    }
    ?>
    <h2>Exos 3</h2>
    <form action="form.php" method="post">
        <label for="color"> Choisir une couleur</label>
        <input type="color" name="color">
        <label for="pseudo">Choisir un pseudo</label>
        <input type="text" name="pseudo">
        <button>ok</button>

    </form>
    <?php
    if (isset($_POST['pseudo'])) {
        echo $_POST['pseudo'];
    }
    ?>
    <style>
        <?php
        echo 'body { background-color: ' . $_POST['color'] . ';}';
        ?>
    </style>
    <h2>Exos 4</h2>
    <form action="form.php" method="post">
        <input type="number" name="number">
        <button>Valider</button>
    </form>

    <?php
    $number = $_POST['number'];
    if (isset($_POST['number'])) {

        if ($number % 6 == 0) {
            echo rand(1, $number);
        } else {
            echo $_GET['error'];
        }
    }
    ?>

    <h2>Exos 5</h2>
    <form action="form.php" method="post">
        <label for="user">User Name</label>
        <input type="text" id="user" name="user">
        <label for="password">Password</label>
        <input type="text" id="password" name="password">
        <input type="submit" value="Send">
    </form>

    <?php
    $bdduser = 'admin';
    $bddpassword = 1234;
    if (isset($_POST['user']) && isset($_POST['password'])) {
        $username = $_POST['user'];
        $password = $_POST['password'];
        if ($username == $bdduser && $password == $bddpassword) {
            header('location: index.php');
        } else {
            echo '<p>not valid</p>';
        }
    }
    ?>

    <h2>Exo 6</h2>
    <form action="form.php" method="post">
        <input type="text" name="number_1" placeholder="nombre 1">
        <select name="sign" id="sign">
            <option value="add">+</option>
            <option value="sous">-</option>
            <option value="mult">*</option>
            <option value="div">/</option>
        </select>
        <input type="text" name="number_2" placeholder="nombre 2">
        <input type="submit" value="Calculer">
    </form>

    <?php


    if (isset($_POST['number_1']) && isset($_POST['number_2']) && isset($_POST['sign'])) {
        $number1 = $_POST['number_1'];
        $number2 = $_POST['number_2'];
        switch ($_POST['sign']) {
            case 'add':
                echo $number1 + $number2;
                break;
            case 'sous':
                echo $number1 - $number2;
                break;
            case 'mult':
                echo $number1 * $number2;
                break;
            case 'div':
                echo $number1 / $number2;
                break;
        }
    }

    ?>
</body>

</html>