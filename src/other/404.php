<?php
include_once(__DIR__ . "/config.php");
http_response_code(404);
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>404 | Museum de Pixel</title>
</head>
<body>
    <h1>404 - Pagina niet gevonden</h1>
    <a href="<?= BASEURL ?>home">Terug naar home</a>
</body>
</html>
