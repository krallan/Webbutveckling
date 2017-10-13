<?php
setcookie("name", "Cookiecream", time() + 60*60*3);
setcookie("time", date(DATE_ISO8601, time()),time() + 60*60*3 );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>4.2 Information hos klienten</title>
</head>
<body>
<p> Här är dina <a href="cookies.php">Cookies</a></p>

</body>
</html>
