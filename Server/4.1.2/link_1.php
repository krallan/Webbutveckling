<?php
$nickname = $_POST["nickname"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>4.1.2 Information inbakad i formulär</title>
</head>
<body>
<form action="link_2.php" method="post">
    <p>
        <input type="hidden" name="nickname" value="<?=$nickname?>">
        <input type="text" placeholder="Epost" name="email">
    </p>
    <p>
        <input type="submit" value="Send">
    </p>
</form>

</body>
</html>
