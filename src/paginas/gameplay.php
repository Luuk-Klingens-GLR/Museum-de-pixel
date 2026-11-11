<?php
include_once(__DIR__ . "/../other/config.php");
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Gameplay | Museum de Pixel</title>
    <link rel="stylesheet" href="<?= BASEURL ?>src/style.css">
    <script defer src="<?= BASEURL ?>src/script.js"></script>
</head>
<body class="pagina-gameplay">
    <main class="pagina">
        <h1 class="pagina-titel">Gameplay</h1>
        <div class="logo-vlak"><img src="https://104494.stu.sd-lab.nl/images/museum-de-pixel/Just_Cause_3_Logo.png" alt="Just Cause 3"></div>
        <section class="vlak"><h2>Mechanic 1</h2></section>
        <section class="vlak"><h2>Mechanic 2</h2></section>
        <section class="vlak"><h2>Mechanic 3</h2></section>
    </main>
    <nav class="menu">
        <a href="<?= BASEURL ?>home">Home</a>
        <a href="<?= BASEURL ?>verhaal">Verhaal</a>
        <a href="<?= BASEURL ?>gameplay">Gameplay</a>
        <a href="<?= BASEURL ?>specificaties">Specificaties</a>
    </nav>
</body>
</html>
