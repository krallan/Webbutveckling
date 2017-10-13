<?php

$character = $_GET['character'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>4.1.1 Information inbakad i länkar</title>
</head>
<body>
    <p>
Karaktär: <a href="link_2.php?character=<?= $character; ?>&surname=Klumpfot">link_2.php?Karaktär=<?= $character; ?>&surname=Klumpfot</a>
    </p>
<p>
Karaktär: <a href="link_2.php?character=<?= $character; ?>&surname=Muss">link_2.php?Karaktär=<?= $character; ?>&surname=Muss</a>
</p>
</body>
</html>