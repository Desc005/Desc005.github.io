<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>3AI Random Number Genarator</title>
    <link rel="shortcut icon" href="photo_2022-02-28_17-58-13.jpg">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>
<div class="upper_bar">
    <div class="credits">Dennis Scacciavillani</div>
    <a href="https://github.com/Desc005/Desc005.github.io" target="_blank"><img
                src="github-outline-fill-svgrepo-com.svg" class="github"></a><a
            href="https://www.instagram.com/den_sca.05/"
            target="_blank"><img
                src="instagram-svgrepo-com.svg" class="instagram"></a>
</div>
<div class="title">Generatore di numeri casuali</div>
<br>
<form method="get" action="generate_numbers.php">
    <label for="nNum"></label>
    <div class="text">Numeri da generare: <input name="nNum" type="number" min="1" max="5" class="box"></div>
    <br>
    <label for="min"></label>
    <div class="text">Minimo: <input name="min" type="number" min="0" max="99" class="box"></div>
    <label for="max"></label>
    <div class="text">Massimo: <input name="max" type="number" min="0" max="99" class="box"></div>
    <input type="submit" class="submit" value="Invia"></div>
</form>
</body>
</html>

<?php
if (isset($_GET['nNum'], $_GET['min'], $_GET['max'])) {
    $nNum = $_GET['nNum'];
    $min = $_GET['min'];
    $max = $_GET['max'];
    if ($max > $min) {
        echo "<br>";
        for ($i = 0; $i < $nNum; $i++) {
            $num = rand($min, $max);
            echo "<div class='result'>" . $i + 1;
            echo ".&ensp;" . $num . "</div><br> ";
        }
    } else {
        echo "<div class='error'>Errore: Il numero minimo non può essere più grande del numero massimo";
    }
}
?>